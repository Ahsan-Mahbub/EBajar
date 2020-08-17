<?php 

namespace App\Http\Controllers;

use App\Product; 
use App\ProductImages;
use App\Category;
use App\SubCategory;
use App\Brand;
use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use Image;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\ProductCollection;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Admin.Product.product_list');  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $sub_category = SubCategory::all();
        $brand = Brand::all();
        return view('Backend.Admin.Product.product', [
            'category' => $category,
            'sub_category' => $sub_category,
            'brand' => $brand
        ]);
    }
    public function category($category_id)
    {
        $sub_category = Category::where('category_name', $category_id)->get();
        return ProductCollection::collection($sub_category);
    }

    public function list(Request $request)
    {
        $product = Product::search($request->search)->paginate(10);
        return view('Backend.Admin.Product.list', [
            'product' => $product,
        ]);
    echo "i am noob";
    }


    public function store(Request $request)
    {
        DB::beginTransaction();
        $product_model = new Product();
        $product_model->category_name = $request->category_name;
        $product_model->sub_category_name = $request->sub_category_name;
        $product_model->brand_name = $request->brand_name;
        $product_model->product_name = $request->product_name;
        $product_model->product_prize = $request->product_prize;
        $product_model->description = $request->description;
        $product_model->has_image = $request->images != '' ? 1 : 0;
        $product_model->save();

        if ($request->images) {
            foreach ($request->images as $key => $image_value) {
                $image_type = $image_value->getClientOriginalExtension();
                $path = "backend_assets/images/BackendImg/Product/";
                $name = 'product_image_' . (time() + $key) . "." . $image_type;
                $full_path = $path . $name;
                $image_upload = Image::make($image_value)->resize(300, 300);
                $image_upload->save($full_path);
                $product_image = new ProductImages();
                $product_image->product_id = $product_model->product_id;
                $product_image->images = $full_path;
                $product_image->save();
            }
        }
        DB::commit();
        return redirect('/admin/product/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
