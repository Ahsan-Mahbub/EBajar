<?php

namespace App\Http\Controllers;

use App\Slider;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Div;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Admin.Slider.slider');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slider = Slider::search($request->search)->paginate(10);
        return view('Backend.Admin.Slider.list', [
            'slider' => $slider
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
        $slider = new Slider;

        $validation = Validator::make($request->all(),$slider->validation());
        if ($validation->fails())
        {
            $status=500;
            $response=[
            'status'=>$status,
            'errors'=>$validation->errors(),
            ];
        }
        else
        {
            if ($request->hasFile('image')) 
            {
                $filetype=$request->file('image')->getClientOriginalExtension();
                $path=public_path('backend_assets/images/BackendImg/Slider/');
                $image='Slider'.time().'.'.$filetype;
                $request->file('image')->move($path,$image);
            }

            $input=[
            'image'=>$image,
            'slider_name'=>$request->slider_name,
            'description'=>$request->description,
            ];

            Slider::create($input);
            $status=201;
            $response=[
                'status'=>$status,
                'data'=>$slider,
            ];
        } 
        return response()->json($response,$status);
    } 

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $slider_status = Slider::findOrFail($id);
        if ($slider_status->status == 1) {
            $slider_status->update(["status" => 0]);
            $status = 201;
        } else {
            $slider_status->update(["status" => 1]);
            $status = 200;
        }
        return response()->json($slider_status, $status); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slider = Slider::findOrFail($id)->delete();
        return response()->json($slider, 202);
    }
}
