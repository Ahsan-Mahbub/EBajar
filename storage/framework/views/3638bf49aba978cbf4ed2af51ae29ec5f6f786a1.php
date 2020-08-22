<table class="table dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
    <thead>
    <tr>
        <th>#</th>
        <th><?php echo e(__('color.brand_name')); ?></th>
        <th><?php echo e(__('color.Status')); ?></th>
        <th><?php echo e(__('color.Action')); ?></th>
    </tr>
    </thead>
    <tbody>
    <?php $sl=1; ?>
    <?php $__currentLoopData = $datalistdata; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($sl++); ?></td>
            <td><?php echo e($value->color_name); ?></td>
            <td>
                <?php if($value->status == 1): ?>
                    <span class="text-success">Active</span>
                <?php else: ?>
                    <span class="text-danger">Inactive</span>
                <?php endif; ?>
            </td>
            <td>
                <button class="btn btn-danger delete" data="<?php echo e($value->color_id); ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                <?php if($value->status == 1): ?>
                    <button class="btn btn-success" id="status" data="<?php echo e($value->color_id); ?>"><i class="fa fa-refresh" aria-hidden="true"></i></button>
                <?php else: ?>
                    <button class="btn btn-primary" id="status" data="<?php echo e($value->color_id); ?>"> <i class="fa fa-refresh" aria-hidden="true"></i></button>
                <?php endif; ?>
                <button class="btn btn-info edit" data="<?php echo e($value->color_id); ?>" data-toggle="modal" data-target="#editModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>
<?php /**PATH E:\Laravel\EBajar\resources\views/Backend/Admin/Color/list.blade.php ENDPATH**/ ?>