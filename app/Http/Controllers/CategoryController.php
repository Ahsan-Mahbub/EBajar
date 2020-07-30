<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Div;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Admin.Category_Settings.Category.category');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $category = Category::where(function ($category) use ($request) {
            if ($request->search) {
                $category->where('category_name', 'LIKE', '%' . $request->search . '%');
            }
        })->paginate(10);
        return view('Backend.Admin.Category_Settings.Category.list', ['category' => $category]);    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category_model = new Category();
        $validation = Validator::make($request->all(), $category_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        } else {
            $category_model->fill($request->all())->save();
            $status = 201;
            $response = [
                "status" => $status,
                "data" => $category_model,
            ];
        }
        return response()->json($response, $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category_status = Category::findOrFail($id);
        if ($category_status->status == 1) {
            $category_status->update(["status" => 0]);
            $status = 201;
        } else {
            $category_status->update(["status" => 1]);
            $status = 200;
        }
        return response()->json($category_status, $status);    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category_data = Category::findOrFail($id);
        return response()->json($category_data, 201);    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $category_model = Category::findOrFail($request->category_id);
        $validation = Validator::make($request->all(), $category_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        } else {
            $category_model->fill($request->all())->save();
            $status = 201;
            $response = [
                "status" => $status,
                "data" => $category_model,
            ];
        }
        return response()->json($response, $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::findOrFail($id)->delete();
        return response()->json($category, 202);
    }
}
