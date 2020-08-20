<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\User;
use File;
use Toastr;
use App\Traits\FileVerifyUpload;
use DB;



class ProfileController extends Controller
{
    use FileVerifyUpload;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend.Admin.Profile.profile');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function password(Request $request)
    {
        $match=hash::check($request->current_password,Auth::user()->password);
        if ($match) 
        {
            echo "Matched";
        }
        else
        {
            echo "error";
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProfileRequest $request)
    {
        $profile=new User();
        $profile->image=$this->ImageVerifyUpload($request,'image','backend_assets/images/BackendImg/Porfile/','Profile');
        $profile->name=$request->name;
        $profile->contact=$request->contact;
        $profile->gender=$request->gender;
        $profile->save();
        $status=201;
        $response=[
                'status'=>$status,
                'message'=>'Successfully Updated',
            ];
        return response()->json($response,$status);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
