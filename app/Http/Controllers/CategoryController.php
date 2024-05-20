<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function AuthLogin() {
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return redirect()->route('showDashboard');
        }else {
            return redirect()->route('adminLogin')->send();
        }
    }
    public function index()
    {
        $this->AuthLogin();
        // Lấy ra những category có is_active bằng 1
        $categories = Category::where('is_active', 1)->get();

    return view('admin.back-end.category', compact('categories'));
    }

    public function create()
    {
        $this->AuthLogin();
        $categories = Category::all();
        return view('admin.back-end.add-new-category', compact('categories'));
    }

    public function store(Request $request)
    {
        $this->AuthLogin();
    $request->validate([
        'name' => 'required',
        'icon_url' => 'required|mimes:jpg,png,jpeg,svg|max:5048',
        'image_url' => 'required|mimes:jpg,png,jpeg,svg|max:5048'
    ]);

    // Tạo tên hình ảnh cho ImageUrl và IconUrl
    $imageName = 'image_url' . time() . '.' . $request->file('image_url')->extension();
    $iconName = 'icon_url' . time() . '.' . $request->file('icon_url')->extension();

    // Di chuyển và lưu hình ảnh
    $request->file('image_url')->move(public_path('back-end/assets/images/store-images'), $imageName);
    $request->file('icon_url')->move(public_path('back-end/assets/images/store-icons'), $iconName);
    copy(public_path('back-end/assets/images/store-icons') . '/' . $iconName, public_path('front-end/assets/images/category') . '/' . $iconName);

    // Lưu dữ liệu vào database
    $category = Category::create([
        'name' => $request->input('name'),
        'image_url' => $imageName,
        'icon_url' => $iconName
    ]);
    $category->save();

    return redirect()->route('storeCategory')->with('success', 'Category updated successfully.');
    }

    public function edit($id) {
        $this->AuthLogin();
        $categories = Category::find($id);
        return view('admin.back-end.edit-category', compact('categories'));
    }

    public function update(Request $request, $id) {
        $this->AuthLogin();
        $request->validate([
            'name' => 'required',
            'image_url' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'icon_url' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048'
        ]);

        $category = Category::find($id);
        $category->name = $request->input('name');

        // Xử lý ảnh
        if ($request->hasFile('image_url')) {
            $oldImagePath = public_path('front-end/assets/images/category/' . $category->image_url);
        if (file_exists($oldImagePath)) {
            File::delete($oldImagePath);
        }

        $imageName = 'image_url' . time() . '.' . $request->file('image_url')->extension();
        $request->file('image_url')->move(public_path('front-end/assets/images/category/'), $imageName);
        $category->image_url = $imageName;
        }

        if ($request->hasFile('icon_url')) {
            $oldIconPath = public_path('front-end/assets/images/category/' . $category->icon_url);
        if (file_exists($oldIconPath)) {
            File::delete($oldIconPath);
        }



        $iconName = 'icon_url' . time() . '.' . $request->file('icon_url')->extension();
        $request->file('icon_url')->move(public_path('front-end/assets/images/category/'), $iconName);
        // $request->file('icon_url')->move(public_path('front-end/assets/images/category'), $iconName);
        $category->icon_url = $iconName;
        }



        $category->save();

        return redirect()->route('category')->with('success', 'Category updated successfully.');
    }

    public function softDelete($id)
    {
        $this->AuthLogin();
        $category = Category::find($id);
        // Xác định đường dẫn của hình ảnh và biểu tượng
        $image_url = public_path('back-end/assets/images/store-images/' . $category->image_url);
        $icon_url = public_path('back-end/assets/images/store-icons/' . $category->icon_url);
        $icon_url = public_path('front-end/assets/images/category/' . $category->icon_url);

        // Xóa hình ảnh và biểu tượng khỏi ổ đĩa
        File::delete($image_url);
        File::delete($icon_url);
        // Cập nhật trạng thái isActive của category
        $category->is_active = 0;
        $category->save();

        return redirect()->back()->with('success', 'Category deleted successfully.');
    }

    public function displayCategory() {
        $categories = Category::where('is_active', 1)->get();
        return view('petshop.fastkart.front-end.index', compact('categories'));
    }



}
