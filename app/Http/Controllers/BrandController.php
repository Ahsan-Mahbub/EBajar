<?php 

namespace App\Http\Controllers;
use App\Brand;
use App\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Div;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_category = SubCategory::active()->get();

        return view('Backend.Admin.Brand.brand',[
            'sub_category' => $sub_category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $brand = Brand::search($request->search)->paginate(10);
        return view('Backend.Admin.Brand.list', ['brand' => $brand]);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand_model = new Brand();
        $validation = Validator::make($request->all(), $brand_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        } else {
            $brand_model->fill($request->all())->save();
            $status = 201;
            $response = [
                "status" => $status,
                "data" => $brand_model,
            ];
        }
        return response()->json($response, $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand_status = Brand::findOrFail($id);
        if ($brand_status->status == 1) {
            $brand_status->update(["status" => 0]);
            $status = 201;
        } else {
            $brand_status->update(["status" => 1]);
            $status = 200;
        }
        return response()->json($brand_status, $status); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand_data = Brand::findOrFail($id);
        return response()->json($brand_data, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $brand_model = Brand::findOrFail($request->brand_id);
        $validation = Validator::make($request->all(), $brand_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        } else {
            $brand_model->fill($request->all())->save();
            $status = 201;
            $response = [
                "status" => $status,
                "data" => $brand_model,
            ];
        }
        return response()->json($response, $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::findOrFail($id)->delete();
        return response()->json($brand, 202);
    }
}
