<?php $__env->startSection('title', '|| Password Change'); ?>
<?php $__env->startSection('head_name', 'Password Change'); ?>
<?php $__env->startSection('content'); ?>

<div class="modal-dialog">
	<br><br><br><br><div><h4 style="text-align: center; font-family: cursive;">Password Updated</h4></div>
        <div class="modal-body">
        	
            <div class="panel-body">
                <div class="form-group has-feedback">
                    <label for="password">Password</label>
                    <input id="c_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Current Password">
                    <span class="icon"></span>
                </div>
                <br>

                <div class="form-group has-feedback">
                    <label for="password-confirm">New Password</label>
                    <input id="n_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="New Password" disabled>
                    <span class="r-icon"></span>
                </div>
                <br>

                <div class="form-group has-feedback">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="r_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Confirm Password" disabled>
                    <span class="r-icon"></span>
                </div>
                <br>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('backend_assets/js/password.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/Backend/Admin/Profile/password.blade.php ENDPATH**/ ?>