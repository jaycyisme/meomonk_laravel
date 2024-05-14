<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        // Lấy ra những category có is_active bằng 1
    $categories = Category::where('is_active', 1)->get();

    return view('admin.back-end.category', compact('categories'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.back-end.add-new-category', compact('categories'));
    }

    public function store(Request $request)
    {
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

    // Lưu dữ liệu vào database
    $category = Category::create([
        'name' => $request->input('name'),
        'image_url' => $imageName,
        'icon_url' => $iconName
    ]);
    $category->save();

    return redirect()->route('storeCategory');
    }

    public function edit($id) {
        $categories = Category::find($id);
        return view('admin.back-end.edit-category', compact('categories'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'name' => 'required',
            'image_url' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'icon_url' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048'
        ]);

        $category = Category::find($id);

        $category->name = $request->input('name');

        // Xử lý ảnh
        if ($request->hasFile('image_url')) {
            $imageName = 'image_url' . time() . '.' . $request->file('image_url')->extension();
            $request->file('image_url')->move(public_path('back-end/assets/images/store-images'), $imageName);
            $category->image_url = $imageName;
        }

        if ($request->hasFile('icon_url')) {
            $iconName = 'icon_url' . time() . '.' . $request->file('icon_url')->extension();
            $request->file('icon_url')->move(public_path('back-end/assets/images/store-icons'), $iconName);
            $category->icon_url = $iconName;
        }

        $category->save();

        return redirect()->route('category')->with('success', 'Category updated successfully.');
    }

    public function softDelete($id)
    {
        $category = Category::find($id);
        // Xác định đường dẫn của hình ảnh và biểu tượng
        $image_url = public_path('back-end/assets/images/store-images/' . $category->image_url);
        $icon_url = public_path('back-end/assets/images/store-icons/' . $category->icon_url);

        // Xóa hình ảnh và biểu tượng khỏi ổ đĩa
        File::delete($image_url);
        File::delete($icon_url);
        // Cập nhật trạng thái isActive của category
        $category->is_active = 0;
        $category->save();

        return redirect()->route('category')->with('success', 'Category deleted successfully.');
    }

    public function displayCategory() {
        $categories = Category::where('is_active', 1)->get();

        return view('petshop.fastkart.front-end.index', compact('categories'));
    }

}
