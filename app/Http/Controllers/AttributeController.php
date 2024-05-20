<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App\Models\Attribute;

use Illuminate\Http\Request;

class AttributeController extends Controller
{

    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return redirect()->route('attributes');
        }else {
            return redirect()->route('adminLogin')->send();
        }
    }

    public function index(){
        $this->AuthLogin();
        $attributes = Attribute::all();
        return view('admin.back-end.attributes', compact('attributes'));
        // return view('admin.back-end.add-new-product', compact('attributes'));
    }


    public function addNewAttributes(){
        $this->AuthLogin();
        $attributes = Attribute::all();
        return view('admin.back-end.add-new-attributes', compact('attributes'));
    }

    public function store(Request $request){
        $this->AuthLogin();
        if (!$request->filled('name') || !$request->filled('value')) {

            return redirect()->back()->with('error', 'Please enter complete data.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);


        try {
            $existingAttribute = Attribute::where('name', $request->input('name'))
            ->where('value', $request->input('value'))
            ->first();

            if ($existingAttribute) {
            return redirect()->back()->with('error', 'Attribute already exists.');
            }
            // Create a new instance of the Attribute model
            $attribute = new Attribute();
            $attribute->name = $request->input('name');
            $attribute->value = $request->input('value');
            $saved = $attribute->save();
            // Return a success response or redirect depending on your application's logic
            return redirect()->back()->with('success', 'Attribute created successfully!');
        } catch (\Exception $e) {
            // Return an error response or redirect depending on your application's logic
            return redirect()->back()->with('error', 'Failed to create attribute. Please try again.');
        }
    }


    public function edit($id) {
        $this->AuthLogin();
        $attribute = Attribute::find($id);
        if (!$attribute) {
            return redirect()->back()->with('error', 'Attribute not found!');
        }
        return view('admin.back-end.edit_attribute', compact('attribute'));
    }

    public function update(Request $request, $id) {
        $this->AuthLogin();
        $request->validate([
            'name' => 'required|string|max:255',
            'value' => 'required|string|max:255',
        ]);
        if (!$request->filled('name') || !$request->filled('value')) {

            return redirect()->back()->with('error', 'Please enter complete data.');
        }

        $attribute = Attribute::find($id);

        // Check if the attribute exists
        if (!$attribute) {
            return redirect()->back()->with('error', 'Attribute not found!');
        }
        try {
        // Update the attribute's information
        $attribute->name = $request->input('name');
        $attribute->value = $request->input('value');

        $saved = $attribute->save();

        return redirect()->back()->with('success', 'Attribute updated successfully!');
    } catch (\Exception $e) {
        // Return an error response or redirect depending on your application's logic
        return redirect()->back()->with('error', 'Failed to create attribute. Please try again.');
    }
    }

    public function delete($id){
        $this->AuthLogin();
        $attribute = Attribute::findOrFail($id);
        $attribute->delete();

        return redirect()->back()->with('success', 'Attribute deleted successfully!');
    }
    }


