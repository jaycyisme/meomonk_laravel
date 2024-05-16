<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\VerifyEmail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class AuthenticationController extends Controller
{
    public function generateRandomCode($length = 6)
    {
        return Str::random($length);
    }

    public function sendEmail($email, $code)
    {
        $subject = 'Verify Code';
        Mail::to($email)->send(new VerifyEmail($code, $subject));
    }

    // public function signUpIndex()
    // {
    //     $user = User::all();
    //     return view('admin.back-end.register', compact('user'));
    // }

    public function signUp(Request $request) {
        // Validate the request data
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'email' => 'required|string|email|max:255|unique:users',
        //     'username' => 'required|string|max:255|unique:users',
        //     'password' => 'required|string|min:8|confirmed',
        //     'phone_number' => 'required|string|max:15|unique:users',
        // ]);

        // Prepare data for insertion
        $otpCode = $this->generateRandomCode();
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'phone_number' => $request->input('phone_number'),
            'is_active' => false,
            'verify_code' => $otpCode,
        ];

        $insert_user_id = DB::table('users')->insertGetId($data);

        $this->sendEmail($data['email'], $otpCode);

        Session::put('id', $insert_user_id);
        Session::put('name', $data['name']);

        return redirect()->route('otp');
    }

    public function verifyOtp(Request $request)
    {
        $userId = Session::get('id');
        $user = User::find($userId);

        $inputOtp = $request->input('otp');
        if ($user && $user->verify_code === $inputOtp) {
            $user->is_active = true;
            $user->verify_code = null;
            $user->save();

            return redirect()->route('login')->with('success', 'Account verified successfully.');
        } else {
            return redirect()->route('otp')->with('error', 'Invalid OTP code. Please try again.');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');

        $user = User::where('username', $credentials['username'])->first();

        if ($user && Hash::check($credentials['password'], $user->password)) {
            if ($user->is_active) {
                Auth::login($user);

                if ($user->role_id == 2) {
                    return redirect()->route('index');
                } elseif ($user->role_id == 1) {
                    return back()->with('error', 'Error.');
                }
            } else {
                return back()->with('error', 'Your account is not active. Please verify your email.');
            }
        } else {
            return back()->with('error', 'Invalid username or password. Please try again.');
        }
    }

}
