<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use App\Models\Attribute;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductAttribute;
use App\Models\ProductStatus;
use App\Models\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', 1)->get();
        return view('admin.back-end.products', compact('products'));
        // return view('admin.back-end.products');

    }

    public function addNewProducts(){
        $products = Product::all();
        $attributes = Attribute::select('name')->distinct()->get();
        $Animals = Animal::all();
        $Categorys = Category::all();
        $attributeValues = Attribute::all();
        $Brands = Brand::all();
        $Statues = ProductStatus::all();
        $Suppliers = Supplier::all();

        return view('admin.back-end.add-new-product', compact('products', 'attributes','Animals', 'Categorys','Brands','attributeValues','Statues','Suppliers'));
    }


    public function store(Request $request)
    {
        if (!$request->filled('name') || !$request->filled('price') || !$request->filled('description') || !$request->filled('quantity') ) {
            return redirect()->back()->with('error', 'Please enter complete data.');
        }
        $existingProduct = Product::where('name', $request->input('name'))->first();

            if ($existingProduct) {
                return redirect()->back()->with('error', 'Product already exists.');
            }
        // dd(request()->all());
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'animal_id' => 'required',
            'price' => 'required',
            'description' => 'required',
            'quantity' => 'required',
            'product_status_id' => 'required',
            'brand_id' => 'required',
            'supplier_id' => 'required',
            'image_url' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'Thumbnail1' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'Thumbnail2' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'Thumbnail3' => 'nullable|mimes:jpg,png,jpeg,svg|max:5048',
            'attribute_id.*' => 'distinct',
            'percent.*' => 'numeric|min:0'
        ]);


        try {


            $directory = public_path('front-end/assets/images/product/' );

            if (!file_exists($directory)) {
                mkdir($directory, 0755, true);
            }

            if ($request->hasFile('image_url')) {
                $imageName = 'image_url' . time() . '.' . $request->file('image_url')->extension();
                $request->file('image_url')->move($directory, $imageName);
            }

            if ($request->hasFile('Thumbnail1')) {
                $thumbnailName1 = 'Thumbnail1.' . time() . '.' . $request->file('Thumbnail1')->extension();
                $request->file('Thumbnail1')->move($directory, $thumbnailName1);
            }

            if ($request->hasFile('Thumbnail2')) {
                $thumbnailName2 = 'Thumbnail2.' . time() . '.' . $request->file('Thumbnail2')->extension();
                $request->file('Thumbnail2')->move($directory, $thumbnailName2);
            }

            if ($request->hasFile('Thumbnail3')) {
                $thumbnailName3 = 'Thumbnail3.' . time() . '.' . $request->file('Thumbnail3')->extension();
                $request->file('Thumbnail3')->move($directory, $thumbnailName3);
            }


            // Lưu dữ liệu vào database
            $product = Product::create([
                'name' => $request->input('name'),
                'category_id' => $request->input('category_id'),
                'animal_id' => $request->input('animal_id'),
                'price' => $request->input('price'),
                'description' => $request->input('description'),
                'image' => $imageName ,
                'quantity' => $request->input('quantity'),
                'product_status_id' => $request->input('product_status_id'),
                'brand_id' => $request->input('brand_id'),
                'supplier_id' => $request->input('supplier_id'),
                'thumbnail1' => $imageName,
                'thumbnail2' => $thumbnailName1,
                'thumbnail3' => $thumbnailName2,
                'thumbnail4' => $thumbnailName3
            ]);

            $product->save();

            $newProductId = $product->id;

            $attributeIds = $request->input('attribute_id.*');
            $percents = $request->input('percent.*');

            $count = count($attributeIds);

            for ($i = 0; $i < $count; $i++) {
                $attributeId = $attributeIds[$i];
                $percent = $percents[$i];

                // Tạo một đối tượng ProductAttribute mới và lưu vào cơ sở dữ liệu
                $productAttribute = new ProductAttribute();
                $productAttribute->attribute_id = $attributeId;
                $productAttribute->product_id = $newProductId;
                $productAttribute->percent = $percent;

                $productAttribute->save();
            }

            return redirect()->back()->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }


    public function edit($id) {

    }

    public function update(Request $request, $id) {

    }

    public function softDelete($id){
    }


    public function productDetail($id) {
        $products = Product::where('id', $id)
        ->with(['category', 'animal', 'brand', 'productStatus', 'supplier'])
        ->get();
        switch ($id) {
            case 3:
            case 4:
                $viewName = '.petshop.fastkart.front-end.product-food';
                break;
            case 5:
                $viewName = '.petshop.fastkart.front-end.product-toy';
                break;
            case 6:
                $viewName = '.petshop.fastkart.front-end.product-pharmacy';
                break;
            case 7:
                $viewName = '.petshop.fastkart.front-end.product-service';
                break;
            default:
                $viewName = '.petshop.fastkart.front-end.product-pharmacy';
        }

        return view($viewName, compact('products'));
    }
}

