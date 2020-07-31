<?php
 
namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;
use App\Http\Requests\SubCategoryRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Div;

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
        return view('Backend.Admin.Category_Settings.SubCategory.sub_category' ,[
            'sub_category' => $sub_category,
            'category' => $category
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
        $sub_category = SubCategory::search($request->search)->paginate(10);
        return view('Backend.Admin.Category_Settings.SubCategory.list', [
            'sub_category' => $sub_category,
            'category' => $category
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SubCategoryRequest $request)
    {
        $sub_category_model = new SubCategory();
        $sub_category_model->fill($request->all())->save();
        return response()->json($sub_category_model, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function show(SubCategory $subCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(SubCategory $subCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SubCategory $subCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubCategory  $subCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(SubCategory $subCategory)
    {
        //
    }
}
