@extends('Backend.layouts.main')
@section('title', '|| Slider')
@section('head', 'Slider')
@section('head_name', 'Slider')
@section('content')
    <button style="float: right" class="btn btn-info" data-toggle="modal" data-target="#add_slider">Add new</button>

    <br><br><br>

    <div class="tabbable page-tabs">
        <div class="tab-content">
            <div class="tab-pane active fade in" id="inside">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> View All Image</h6></div>
                    <div class="datatable">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <label><span>Filter:</span>
                                <input type="search" class="search" aria-controls="DataTables_Table_0" placeholder="Type to filter...">
                            </label>
                        </div>
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                            <label><span>Show:</span>
                                <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="select2-offscreen" tabindex="-1" title="">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                            </label>
                        </div>
                        <div id="data_lists"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{--ADD MODAL--}}
    <form id="slider_form" enctype="multipart/form-data">@csrf
        <div id="add_slider" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Add Slider</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Slider Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="slider_name" placeholder="Slider Name">
                                    <span class="text-danger" id="slider_name"></span>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Description:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                    <span class="text-danger" id="description"></span>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Image:</label>
                                <div class="col-lg-9">
                                    <img id='previmage' src="{{asset('backend_assets/images/BackendImg/Slider/sliderlogo.png')}}" alt="image" class='img-responsive'>
                                    <br><br>
                                    <input type='file' id="image" name="image" onchange="readURL(this);" />
                                    <span class="text-danger" id="image"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" id="close" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
{{--    ADD MODAL--}}
{{--    EDIT MODAL--}}
    <form id="slider_update_form">
        <div id="editModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">EDIT Slider</h5>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" id="edit_id" name="id">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Slider Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="e_slider_name" name="slider_name" placeholder="Slider Name">
                                    <span class="text-danger" id="slider_name"></span>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Description:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="e_description" name="description" placeholder="Description">
                                    <span class="text-danger" id="description"></span>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Image:</label>
                                <div class="col-lg-9">
                                    <img id='previmage' alt="image" class='img-responsive edit_image'>
                                    <br><br>
                                    <input type='file' id="e_image" name="image" onchange="readURL(this);" />
                                    <span class="text-danger" id="image"></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" id="close2" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
{{--    EDIT MODAL--}}
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('backend_assets/js/slider.js')}}"></script>
@endsection
