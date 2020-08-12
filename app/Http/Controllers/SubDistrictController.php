<?php

namespace App\Http\Controllers;

use App\SubDistrict;
use App\District;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Div;

class SubDistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sub_district = SubDistrict::all();
        $district = District::active()->get();
        return view('Backend.Admin.Address.SubDistrict.sub_district', [
            'sub_district' => $sub_district,
            'district' => $district
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $district = District::active()->get();
        $sub_district = SubDistrict::where(function ($sub_district) use ($request) {
            if ($request->search) {
                $sub_district->where('sub_district_name', 'LIKE', '%' . $request->search . '%');
            }
        })->paginate(10);
        return view('Backend.Admin.Address.SubDistrict.list', [
            'district' => $district,
            'sub_district' => $sub_district
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
        $sub_district_model = new SubDistrict();
        $validation = Validator::make($request->all(), $sub_district_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        }
        else {
            $sub_district_model->fill($request->all())->save();
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
     * @param  \App\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sub_district_status = SubDistrict::findOrFail($id);
        if ($sub_district_status->status == 1) :
            $sub_district_status->update(["status" => 0]);
            $status = 201;
        else :
            $sub_district_status->update(["status" => 1]);
            $status = 200;
        endif;
        return response()->json($sub_district_status, $status);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_district_data = SubDistrict::findOrFail($id);
        return response()->json($sub_district_data, 201);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $sub_district_model = SubDistrict::findOrFail($request->sub_district_id);
        $validation = Validator::make($request->all(), $sub_district_model->validation());
        if ($validation->fails()) {
            $status = 400;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        } else {
            $sub_district_model->fill($request->all())->save();
            $status = 201;
            $response = [
                "status" => $status,
                "errors" => $validation->errors(),
            ];
        }
        return response()->json($response, $status);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SubDistrict  $subDistrict
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sub_district = SubDistrict::findOrFail($id)->delete();
        return response()->json($sub_district, 202);
    }
}
