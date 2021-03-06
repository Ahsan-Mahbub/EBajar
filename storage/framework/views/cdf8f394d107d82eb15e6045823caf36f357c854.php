<?php $__env->startSection('title', '|| Dashboard'); ?>
<?php $__env->startSection('head', 'Dashboard'); ?>
<?php $__env->startSection('head_name', 'Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    <button style="float: right" class="btn btn-info" data-toggle="modal" data-target="#add_division">Add new</button>
    <form id="division_form">
        <div id="add_division" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">ADD DIVISION</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Division Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="division_name" placeholder="Division Name">
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

    <form id="division_update_form">
        <div id="editModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title">EDIT DIVISION</h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-lg-9">
                                    <input type="hidden" class="form-control" id="division_id" name="division_id">
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Division Name:</label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" id="division_name" name="division_name" placeholder="Division Name">
                                </div>
                            </div>
                            <br><br>
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
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('backend_assets/js/division.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kiri2ka/Laravel/xxx-xxx/EBajara/resources/views/Backend/Admin/AddressSettings/Division/division.blade.php ENDPATH**/ ?>