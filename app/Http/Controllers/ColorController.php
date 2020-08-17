<?php

namespace App\Http\Controllers;

use App\Color;
use App\Http\Requests\ColorRequest;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Admin.Color.Color');
    }
    public function datalist()
    {
        $datalist['datalistdata']=Color::orderBy('color_id','DESC')->get();
        return view('Backend.Admin.Color.list' , $datalist);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ColorRequest $request)
    {
        $color = new Color();
        $color->color_name=$request->color_name;
        $color->save();
        $status = 201;
        $response=[
            'staus'   =>$status,
            'message' =>'Color inserted Succesfully!',
        ];
        return response()->json($response , $status);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $colordata = Color::findOrFail($id);
        return response()->json($colordata , 202);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(ColorRequest $request)
    {
        $updatecolordata = Color::findOrFail($request->color_id);
        $updatecolordata->color_name=$request->color_name;
        $updatecolordata->save();
        $status=201;
        $response=[
            'status' => $status,
            'message'=> 'color updated successfully!!',
        ];
        return response()->json($response , $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $colordelete=Color::findOrFail($id)->delete();
        return response()->json($colordelete, 202);
    }
}
