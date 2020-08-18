<?php
 
namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_category = SubCategory::all();
        $category = Category::active()->get();
        return view('Backend.Admin.Category_Settings.SubCategory.sub_catagory' ,[
            'sub_category' => $sub_category,
            'category' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = Category::active()->get();
        $sub_category = SubCategory::where(function ($sub_category) use ($request) {
            if ($request->search) {
                $sub_category->where('sub_category_name', 'LIKE', '%' . $request->search . '%');
            }
        })->paginate(10);
        return view('Backend.Admin.Category_Settings.SubCategory.list', [
            'sub_category' => $sub_category,
            'category' => $category,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sub_category_model = new SubCategory();
        $validation = Validator::make($request->all(), $sub_category_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        }
        else {
            $sub_category_model->fill($request->all())->save();
            $status = 201;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        }
        return response()->json($response, $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_category_status = SubCategory::findOrFail($id);
        if ($sub_category_status->status == 1) :
            $sub_category_status->update(["status" => 0]);
            $status = 201;
        else :
            $sub_category_status->update(["status" => 1]);
            $status = 200;
        endif;
        return response()->json($sub_category_status, $status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_category_data = SubCategory::findOrFail($id);
        return response()->json($sub_category_data, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        // $sub_category_model = SubCategory::findOrFail($request->sub_category_id);
        // $validation = Validator::make($request->all(), $sub_category_model->validation());
        // if ($validation->fails()) {
        //     $status = 400;
        //     $response = [
        //         "status" => $status,
        //         "errors" => $validation->errors(),
        //     ];
        // } else {
        //     $sub_category_model->fill($request->all())->save();
        //     $status = 201;
        //     $response = [
        //         "status" => $status,
        //         "errors" => $validation->errors(),
        //     ];
        // }
        // return response()->json($response, $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_category = SubCategory::findOrFail($id)->delete();
        return response()->json($sub_category, 202);
    }
}
