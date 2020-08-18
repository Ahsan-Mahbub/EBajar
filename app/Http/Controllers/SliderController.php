<?php
 
namespace App\Http\Controllers;

use App\Slider;
use App\Traits\FileVerifyUpload;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\SliderRequest;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    use FileVerifyUpload;
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
        return view('Backend.Admin.Slider.list', ['slider' => $slider]);
    }

    /** 
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderRequest $request)
    {
     $slider=new Slider();
     $slider->image=$this->ImageVerifyUpload($request,'image','backend_assets/images/BackendImg/Slider/','Slider');
     $slider->slider_name=$request->slider_name;
     $slider->description=$request->description;
     $slider->save();
        $status=201;
        $response=[
                'status'=>$status,
                'message'=>'Successfully Inserted',
            ];
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
        return response()->json($slider);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderRequest $request)
    {
        $slider=Slider::findOrFail($request->id);
            if ($request->hasFile('image'))
            {
                if($slider->image)
                {
                    $path='/backend_assets/images/BackendImg/Slider/'.$slider->image;
                    if (File::exists($path)) {
                        File::delete($path);
                    }
                }
                $slider->image=$this->ImageVerifyUpload($request,'image','backend_assets/images/BackendImg/Slider/','Slider');
            }

            $slider->slider_name=$request->slider_name;
            $slider->description=$request->description;
            $slider->save();
            $status=201;
            $response=[
                'status'=>$status,
                'message'=>'Successfully Updated',
            ];
        return response()->json($response,$status);

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
