@extends('Backend.layouts.main')
@section('title', '|| Product')
@section('head', 'Product') 
@section('head_name', 'Product')
@section('content')
    <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title">ADD Product</h6></div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Category Name:</label>
                            <select class="select-full" name="category_name" id="category_name">
                            	<option value="" selected>Select One</option>
                            	@foreach($category as $value)
                                    <option value="{{$value->category_id}}">{{$value->category_name}}</option>
                                @endforeach
                            </select>
                            @if($errors->first('brand_name'))
                                <label for="brand_name" class="error">{{$errors->first('brand_name')}}</label>
                            @endif
                                
                            
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Sub Category Name:</label>
                            <select class="select-full" name="sub_category_name" id="sub_category_name">
                            	<option value="" selected>Select One</option>
                            	
                            </select>
                                @if($errors->first('sub_category_name'))
                                <label for="sub_category_name" class="error">{{$errors->first('sub_category')}}</label>
                            	@endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Brand Name:</label>
                            <select class="select-full" name="brand_name" id="brand_name">
                                <option value="" selected>Select One</option>
                                @foreach($brand as $value)
                                    <option value="{{$value->brand_id}}">{{$value->brand_name}}</option>
                                @endforeach
                            </select>
                            	@if($errors->first('brand_name'))
                                <label for="brand_name" class="error">{{$errors->first('brand_name')}}</label>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Name:</label>
                            <input type="text" class="form-control" name="product_name" id="product_name" placeholder="product name">
                            @if($errors->first('product_name'))
                                <label for="product_name" class="error">{{$errors->first('product_name')}}</label>
                            	@endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Quantity:</label>
                            <input type="number" class="form-control" name="product_quantity" id="product_quantity" placeholder="product quantity">
                            @if($errors->first('product_quantity'))
                                <label for="product_quantity" class="error">{{$errors->first('product_quantity')}}</label>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Weight:</label>
                            <input type="text" class="form-control" id="product_weight" name="product_weight" placeholder="Product Weight (KG)">
                            @if($errors->first('product_weight'))
                                <label for="product_weight" class="error">{{$errors->first('product_weight')}}</label>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Size:</label>
                            <input type="text" class="form-control" id="product_size" name="product_size" placeholder="Product Size ()">
                            @if($errors->first('product_size'))
                                <label for="product_size" class="error">{{$errors->first('product_size')}}</label>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Prize:</label>
                            <input type="text" class="form-control" id="product_prize" name="product_prize" placeholder="Product prize ()">
                            @if($errors->first('product_prize'))
                                <label for="product_prize" class="error">{{$errors->first('product_prize')}}</label>
                                @endif
                        </div>
                    </div>
                </div>

                <div class="form-group">
                	<div class="row">
	                    <div class="col-md-12">
	                    	<label>Description:</label>
	                        <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                            @if($errors->first('description'))
                                <label for="description" class="error">{{$errors->first('description')}}</label>
                                @endif
	                    </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now">Product Image</label>
                                    <input type="file" id="input-file-now" name="images[]"  class="dropify" />
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" id="plus"><i class="fa fa-plus-circle"></i></button>
                    </div>
                </div>
                <div class="input_field"></div>

                <div class="form-actions text-right">
                    <input type="reset" value="Cancel" class="btn btn-danger">
                    <input type="submit" value="Submit report" class="btn btn-primary">
                </div>

            </div>
        </div>
    </form>
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('backend_assets/js/product.js')}}"></script>
@endsection
