<?php $__env->startSection('title', '|| Color'); ?>
<?php $__env->startSection('head', 'Color'); ?>
<?php $__env->startSection('head_name', 'Color'); ?>
<?php $__env->startSection('content'); ?>
    <button style="float: right" class="btn btn-info" data-toggle="modal" data-target="#add_color"><?php echo e(__('color.add_new')); ?></button>
    <br><br><br>

    <form id="Color_form" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div id="add_color" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title"><?php echo e(__('color.add_color')); ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="panel-body">
                            <div class="form-group">
                                <label class="col-lg-3 control-label"><?php echo e(__('color.color_name')); ?></label>
                                <div class="col-lg-9">
                                    <input type="text" class="form-control" name="color_name" placeholder="<?php echo e(__('color.Enter_color_name')); ?>">
                                </div>
                            </div>
                            <br><br>
                        </div>
                    </div>
                    <div>
                        <br>
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger" id="close" data-dismiss="modal"><?php echo e(__('color.close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('color.save')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>



    <div class="tabbable page-tabs">
        <div class="tab-content">
            <div class="tab-pane active fade in" id="inside">
                <div class="panel panel-default">
                    <div class="panel-heading"><h6 class="panel-title"><i class="icon-table"></i><?php echo e(__('color.view_all_data')); ?></h6></div>
                    <div class="datatable">
                        <div id="DataTables_Table_0_filter" class="dataTables_filter">
                            <label><span><?php echo e(__('color.Filter')); ?></span>
                                <input type="search" class="search" aria-controls="DataTables_Table_0" placeholder="Type to filter...">
                            </label>
                        </div>
                        <div class="dataTables_length" id="DataTables_Table_0_length">
                            <label><span><?php echo e(__('color.Show')); ?></span>
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



    <form id="color_update_form">
        <div id="editModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h5 class="modal-title"><?php echo e(__('color.edit_color')); ?></h5>
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
                        <button type="reset" class="btn btn-danger" id="close2" data-dismiss="modal"><?php echo e(__('color.close')); ?></button>
                        <button type="submit" class="btn btn-primary"><?php echo e(__('color.update')); ?></button>
                    </div>
                </div>
            </div>
        </div>
    </form>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('backend_assets/js/color.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Laravel\EBajar\resources\views/Backend/Admin/Color/Color.blade.php ENDPATH**/ ?>