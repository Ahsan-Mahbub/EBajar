@extends('Backend.layouts.main')
@section('title', '|| Color')
@section('head', 'Color')
@section('head_name', 'Color')
@section('content')
    <button style="float: right" class="btn btn-info" data-toggle="modal" data-target="#add_color">Add new</button>
    <br><br><br>
{{--    add color modal--}}
    <form id="Color_form" enctype="multipart/form-data">
        @csrf
        <div id="add_color" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Add Color</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Color Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="color_name" placeholder="Enter Color Name">
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" id="close" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
{{--    end add modal--}}

{{--    datalist--}}
    <div class="tabbable page-tabs">
        <div class="tab-content">
            <div class="tab-pane active fade in" id="inside">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i> View All Data</h6></div>
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
{{--end data list--}}

{{--    edit modal--}}
    <form id="color_update_form">
        <div id="editModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">EDIT Color</h5>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-lg-9">
                                <input type="hidden" class="form-control" id="color_id" name="color_id">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-3 control-label">Color Name:</label>
                            <div class="col-lg-9">
                                <input type="text" class="form-control" id="color_name" name="color_name">
                            </div>
                        </div>
                        <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" id="close2" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
{{--    end edit modal--}}

@endsection
@section('script')
    <script type="text/javascript" src="{{asset('backend_assets/js/color.js')}}"></script>
@endsection
