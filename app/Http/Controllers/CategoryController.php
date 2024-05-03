<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
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
        'Name' => 'required',
        'ImageUrl' => 'required|mimes:jpg,png,jpeg,svg|max:5048',
        'IconUrl' => 'required|mimes:jpg,png,jpeg,svg|max:5048'
    ]);

    // Tạo tên hình ảnh cho ImageUrl và IconUrl
    $imageName = 'ImageUrl_' . time() . '.' . $request->file('ImageUrl')->extension();
    $iconName = 'IconUrl_' . time() . '.' . $request->file('IconUrl')->extension();

    // Di chuyển và lưu hình ảnh
    $request->file('ImageUrl')->move(public_path('back-end/assets/images/store-images'), $imageName);
    $request->file('IconUrl')->move(public_path('back-end/assets/images/store-icons'), $iconName);

    // Lưu dữ liệu vào database
    $category = Category::create([
        'Name' => $request->input('Name'),
        'ImageUrl' => $imageName,
        'IconUrl' => $iconName
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
            'Name' => 'required',
            'ImageUrl' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'IconUrl' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048'
        ]);

        $category = Category::find($id);

        $category->Name = $request->input('Name');

        // Xử lý ảnh
        if ($request->hasFile('ImageUrl')) {
            $imageName = 'ImageUrl_' . time() . '.' . $request->file('ImageUrl')->extension();
            $request->file('ImageUrl')->move(public_path('back-end/assets/images/store-images'), $imageName);
            $category->ImageUrl = $imageName;
        }

        if ($request->hasFile('IconUrl')) {
            $iconName = 'IconUrl_' . time() . '.' . $request->file('IconUrl')->extension();
            $request->file('IconUrl')->move(public_path('back-end/assets/images/store-icons'), $iconName);
            $category->IconUrl = $iconName;
        }

        $category->save();

        return redirect()->route('category')->with('success', 'Category updated successfully.');
    }

}
