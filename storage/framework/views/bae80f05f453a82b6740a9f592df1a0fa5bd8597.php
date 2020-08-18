<table class="table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr>
        <th>#</th>
        <th>Distract Name</th>
        <th>Sub District Name</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
    </thead>
    <tbody>
    <?php $__currentLoopData = $sub_district; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($key+1); ?></td>
            <td>
                <?php $district_data = collect($district)->where('district_id', $value->district_name)->first() ?>
                <?php echo e($district_data->district_name); ?>

            </td>
            <td><?php echo e($value->sub_district_name); ?></td>
            <td>
                <?php if($value->status == 1): ?>
                    <span class="text-success">Active</span>
                <?php else: ?>
                    <span class="text-danger">Inactive</span>
                <?php endif; ?>
            </td>
            <td>
                <button class="btn btn-danger delete" data="<?php echo e($value->sub_district_id); ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                <?php if($value->status == 1): ?>
                    <button class="btn btn-success" id="status" data="<?php echo e($value->sub_district_id); ?>"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                <?php else: ?>
                    <button class="btn btn-primary" id="status" data="<?php echo e($value->sub_district_id); ?>"> <i class="fa fa-refresh" aria-hidden="true"></i></button>
                <?php endif; ?>
                <button class="btn btn-info edit" data="<?php echo e($value->sub_district_id); ?>" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<div class="datatable-footer">
    <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 2 of 2 entries</div>
    <div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_0_paginate">
        <?php echo e($sub_district->links()); ?>

    </div>
</div><?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/Backend/Admin/Address/SubDistrict/list.blade.php ENDPATH**/ ?>