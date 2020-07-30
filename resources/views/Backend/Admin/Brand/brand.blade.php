@extends('Backend.layouts.main')
@section('title', '|| Brand')
@section('head', 'Brand')
@section('head_name', 'Brand')
@section('content')
    <button style="float: right" class="btn btn-info" data-toggle="modal" data-target="#add_brand">Add new</button>
    <form id="brand_form">
        <div id="add_brand" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Add Brand</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">brand Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="brand_name" placeholder="brand Name">
                                    <span class="text-danger" id="brand_name"></span>
                                </div>
                            </div>
                            <br><br>
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
    <br><br><br>

    <form id="sub_category_update_form">
        <div id="editModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">Edit Sub Category</h5>
                    </div>
                    <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-9">
                                    <input type="hidden" class="form-control" id="sub_category_id" name="sub_category_id">
                                </div>
                            </div>
                            <br><br>
                            
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Sub Category Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="e_sub_category_name" name="sub_category_name" placeholder="Sub Category Name">
                                    <span class="text-danger" id="u_sub_category_name"></span>
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
@endsection
@section('script')
    <script type="text/javascript" src="{{asset('backend_assets/js/brand.js')}}"></script>
@endsection