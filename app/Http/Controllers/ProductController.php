<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Animal;
use App\Models\Product;
use App\Models\Category;
use App\Models\Supplier;
use App\Models\Attribute;
use Illuminate\Http\Request;
use App\Models\ProductStatus;
use App\Models\ProductAttribute;
use App\Models\Review;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\View;
use NunoMaduro\Collision\Adapters\Phpunit\State;
use Illuminate\Support\Facades\File;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('is_active', 1)->get();
        return view('admin.back-end.products', compact('products'));
        // return view('admin.back-end.products');

    }

    public function addNewProducts(){
        $products = Product::where('is_active', 1)->get();
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

            $product =new Product();
            $product->name = $request->input('name');
            $product->category_id = $request->input('category_id');
            $product->animal_id = $request->input('animal_id');
            $product->price = $request->input('price');
            $product->description = $request->input('description');
            $product->quantity = $request->input('quantity');
            $product->product_status_id = $request->input('product_status_id');
            $product->brand_id = $request->input('brand_id');
            $product->supplier_id = $request->input('supplier_id');
            $product->supplier_id = $request->input('supplier_id');
            $product->image=$imageName;

            if (($request->hasFile('Thumbnail1') ) ) {
                $thumbnailName1 = 'Thumbnail1.' . time() . '.' . $request->file('Thumbnail1')->extension();
                $request->file('Thumbnail1')->move($directory, $thumbnailName1);

                $product->thumbnail1= $thumbnailName1;
            }

            if (($request->hasFile('Thumbnail2') )) {
                $thumbnailName2 = 'Thumbnail2.' . time() . '.' . $request->file('Thumbnail2')->extension();
                $request->file('Thumbnail2')->move($directory, $thumbnailName2);
                $product->thumbnail2= $thumbnailName2;
            }

            if ($request->hasFile('Thumbnail3')) {
                $thumbnailName3 = 'Thumbnail3.' . time() . '.' . $request->file('Thumbnail3')->extension();
                $request->file('Thumbnail3')->move($directory, $thumbnailName3);

                $product->thumbnail3= $thumbnailName3;
            }

            if ($request->hasFile('Thumbnail4')) {
                $thumbnailName4 = 'Thumbnail4.' . time() . '.' . $request->file('Thumbnail4')->extension();
                $request->file('Thumbnail4')->move($directory, $thumbnailName4);

                $product->thumbnail4= $thumbnailName4;
            }


            $checksave = $product->save();

            if( $checksave ){

            }else{
                return redirect()->back()->with('error', 'erro!');
            }


            $newProductId = $product->id;

            $attributeIds = $request->input('attribute_id.*');
            $percents = $request->input('percent.*');
            if (is_array($attributeIds) > 0 && count($attributeIds) === count($percents)) {
                if (isset($attributeIds) && !empty($attributeIds)) {
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
                }
            }else{
                return redirect()->back()->with('error', 'Fill in the attribute');
            }


            return redirect()->back()->with('success', 'Product created successfully!');
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            return redirect()->back()->with('error', $e->getMessage());
        }

    }


    public function edit($id) {

        $attributes = Attribute::select('name')->distinct()->get();
        $Animals = Animal::all();
        $Categorys = Category::all();
        $attributeValues = Attribute::all();
        $Brands = Brand::all();
        $Statues = ProductStatus::all();
        $Suppliers = Supplier::all();
        $products = Product::find($id);
        $productAttributes = ProductAttribute::where('product_id', $products->id)->get();
        // dd($productAttributes);
        return view('admin.back-end.edit-product', compact('products', 'attributes','Animals', 'Categorys','Brands','attributeValues','Statues','Suppliers','productAttributes'));
    }

    public function update(Request $request, $id) {
        // dd($request->all());
        if (!$request->filled('name') || !$request->filled('price') || !$request->filled('description') || !$request->filled('quantity') ) {
            return redirect()->back()->with('error', 'Please enter complete data.');
        }

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


        $existingProduct = Product::where('name', $request->input('name'))->first();
        $product = Product::findOrFail($id);
        ProductAttribute::where('product_id', $product->id)->delete();


        $directory = public_path('front-end/assets/images/product/' );

        if (!file_exists($directory)) {
            mkdir($directory, 0755, true);
        }

        if ($request->hasFile('image_url') ) {
            $imageName = 'image_url' . time() . '.' . $request->file('image_url')->extension();
            $request->file('image_url')->move($directory, $imageName);
            $oldImagePath = $directory . $product->image_url;

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }

            $product->image=$imageName;
        }

        if (($request->hasFile('Thumbnail1') ) ) {
            $thumbnailName1 = 'Thumbnail1.' . time() . '.' . $request->file('Thumbnail1')->extension();
            $request->file('Thumbnail1')->move($directory, $thumbnailName1);
            $oldImagePath = $directory . $product->thumbnail1;

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
            $product->thumbnail1= $thumbnailName1;
        }

        if (($request->hasFile('Thumbnail2') )) {
            $thumbnailName2 = 'Thumbnail2.' . time() . '.' . $request->file('Thumbnail2')->extension();
            $request->file('Thumbnail2')->move($directory, $thumbnailName2);
            $oldImagePath = $directory . $product->thumbnail2;

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
            $product->thumbnail2= $thumbnailName2 ;
        }

        if ($request->hasFile('Thumbnail3')) {
            $thumbnailName3 = 'Thumbnail3.' . time() . '.' . $request->file('Thumbnail3')->extension();
            $request->file('Thumbnail3')->move($directory, $thumbnailName3);
            $oldImagePath = $directory . $product->thumbnail3;

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
            $product->thumbnail3 = $thumbnailName3;
        }
        if ($request->hasFile('Thumbnail4')) {
            $thumbnailName4 = 'Thumbnail4.' . time() . '.' . $request->file('Thumbnail3')->extension();
            $request->file('Thumbnail4')->move($directory, $thumbnailName3);
            $oldImagePath = $directory . $product->thumbnail4;

            if (File::exists($oldImagePath)) {
                File::delete($oldImagePath);
            }
            $product->thumbnail4= $thumbnailName4;
        }
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->animal_id = $request->input('animal_id');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->quantity = $request->input('quantity');
        $product->product_status_id = $request->input('product_status_id');
        $product->brand_id = $request->input('brand_id');
        $product->supplier_id = $request->input('supplier_id');


        $product->save();


        $newProductId = $product->id;

        $attributeIds = $request->input('attribute_id.*');
        $percents = $request->input('percent.*');

      // Kiểm tra xem biến $attributeIds có tồn tại và không rỗng
        if (isset($attributeIds) && !empty($attributeIds)) {
            $count = count($attributeIds);

            for ($i = 0; $i < $count; $i++) {
                $attributeId = $attributeIds[$i];
                $percent = $percents[$i];

                $productAttribute = new ProductAttribute();
                $productAttribute->attribute_id = $attributeId;
                $productAttribute->product_id = $newProductId;
                $productAttribute->percent = $percent;

                $productAttribute->save();
            }
        }

        return redirect()->back()->with('success', 'Product update successfully!');
    }

    public function softDelete($id){

        $product = Product::find($id);

        if ($product) {
            $product->is_active = 0;
            $product->save();
            return redirect()->route('products')->with('success', 'Product deleted successfully.');
        }

        return redirect()->route('products')->with('error', 'Product not found.');

    }


    public function listProduct(Request $request) {
        $categoryFilter = $request->input('category');
        $priceRange = $request->input('price_range');

        $productsQuery = Product::where('is_active', true)
                                ->where('quantity', '>', 0);

        if ($categoryFilter) {
            $productsQuery->where('category_id', $categoryFilter);
        }

        if ($priceRange) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            $productsQuery->whereBetween('price', [(int)$minPrice, (int)$maxPrice]);
        }

        $products = $productsQuery->paginate(12);

        $categories = Category::where('is_active', true)
                              ->withCount('products')
                              ->get();
        $brands = Brand::all();

        $pageNumber = $request->input('page', 1);

        return view('petshop.fastkart.front-end.shop-category', compact('products', 'categories', 'categoryFilter', 'brands', 'pageNumber', 'priceRange'));
    }




    public function listProductCategory($id, Request $request) {
        $categoryFilter = $request->input('category');
        $priceRange = $request->input('price_range');

        $productsQuery = Product::where('is_active', true)
                        ->where('quantity', '>', 0);

        if ($categoryFilter) {
            $productsQuery->where('category_id', $categoryFilter);
        } else {
            $productsQuery->where('category_id', $id);
        }

        if ($priceRange) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            $productsQuery->whereBetween('price', [(int)$minPrice, (int)$maxPrice]);
        }

        $products = $productsQuery->with('category')->paginate(10);

        $categories = Category::where('is_active', true)
            ->withCount('products')
            ->get();

        $brands = Brand::all();
        $pageNumber = $request->input('page', 1);
        return view('petshop.fastkart.front-end.shop-category', compact('products', 'categories', 'brands', 'categoryFilter', 'pageNumber', 'priceRange'));
    }

    public function listProductBrand($id, Request $request) {
        $categoryFilter = $request->input('category');
        $priceRange = $request->input('price_range');

        $productsQuery = Product::where('is_active', true)
                                ->where('quantity', '>', 0);

        if ($categoryFilter) {
            $productsQuery->where('category_id', $categoryFilter);
        }

        if ($priceRange) {
            [$minPrice, $maxPrice] = explode('-', $priceRange);
            $productsQuery->whereBetween('price', [(int)$minPrice, (int)$maxPrice]);
        }

        $products = $productsQuery->where('brand_id', $id)
                                  ->with('brand')
                                  ->paginate(12);

        $categories = Category::where('is_active', true)
                              ->withCount('products')
                              ->get();

        $brands = Brand::all();

        $pageNumber = $request->input('page', 1);
        return view('petshop.fastkart.front-end.shop-category', compact('products', 'categories', 'brands', 'categoryFilter', 'pageNumber', 'priceRange'));
    }

    public function listService() {
        $products = Product::where('category_id', 7)->get();
        $categories = Product::where('is_active', true)->get();
        $brands = Brand::all();
        return view('petshop.fastkart.front-end.shop-service', compact('products', 'categories', 'brands'));
    }


    public function productDetail($id) {
        $product = Product::where('id', $id)
        ->with(['category', 'animal', 'brand', 'productStatus', 'supplier'])
        ->first();

        $productAttribute = ProductAttribute::where('product_id', $id)->get();

        $foods_related = Product::where('category_id', $product->category_id)
        ->where('product.quantity', '>', 0)->get();

        $toys_related = Product::where('category_id', $product->category_id)
        ->where('product.quantity', '>', 0)->get();

        $pharmacies_related = Product::where('category_id', $product->category_id)
        ->where('product.quantity', '>', 0)->get();

        $services_related = Product::where('category_id', $product->category_id)->get();


        $reviews = Review::where('product_id', $id)->get();
        $averageRatings = $reviews->avg('rate');
        $averageRating = number_format($averageRatings, 3);
        $category_id = $product->category->id;

        $product = Product::find($id);
        if ($product) {
            $saleQuantity = $product->saleQuantity();
        }

        switch ($category_id) {
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

        return view($viewName, compact('product', 'productAttribute', 'foods_related', 'toys_related', 'pharmacies_related', 'services_related','reviews','averageRating', 'saleQuantity'));
    }
}
