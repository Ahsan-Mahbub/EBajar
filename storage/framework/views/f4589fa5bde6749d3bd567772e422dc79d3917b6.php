<?php $__env->startSection('title', '|| Profile Change'); ?>
<?php $__env->startSection('head_name', 'Profile Change'); ?>
<?php $__env->startSection('content'); ?> 
<div class="modal-dialog">
    <form id="user_form" action="<?php echo e(route('profile.store')); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
    <div class="modal-body">
        <div class="panel-body">
            <div><h4 style="text-align: center; font-family: cursive;">Profile Updated</h4></div>
            <div class="form-group">
                <label class="col-lg-3 control-label">User Name:</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="name" placeholder="User Name" value="<?php echo e(Auth::user()->name); ?>">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Email Address:</label>
                <div class="col-lg-9">
                    <input type="email" class="form-control" name="email" placeholder="User Email" value="<?php echo e(Auth::user()->email); ?>" readonly="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Gender:</label>
                <div class="col-lg-9">
                    <input class="custom-control-input gender" type="radio" id="male" name="gender" value="1" <?php echo e(Auth::user()->gender=='1' ? 'checked' : ''); ?> required>
                    <label for="male" class="custom-control-label">Male</label>
                    <input class="custom-control-input gender" type="radio" id="female" name="gender" value="2" <?php echo e(Auth::user()->gender=='2' ? 'checked' : ''); ?> required>
                    <label for="female" class="custom-control-label">Female</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Number:</label>
                <div class="col-lg-9">
                    <input type="text" class="form-control" name="contact" placeholder="User Contact Number" value="<?php echo e(Auth::user()->contact); ?>" required="">
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Image:</label>
                <div class="col-lg-9">
                    <img style="height: 200px; width: 200px;" name="image" id='previmage' src="<?php echo e(Auth::user()->image==''? asset('backend_assets/images/BackendImg/Profile/profile.jpg'): '/'.Auth::user()->image); ?>" alt="image" class='img-responsive'>
                    <br><br>
                    <input type='file' id="image" name="image" onchange="readURL(this);" />
                    <span class="text-danger" id="image"></span>
                </div>
                <input type="hidden" name="old_img" id="old_img" value="<?php echo e(Auth::user()->image); ?>">
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <button id="submit" type="submit" class="btn btn-primary">Save</button>
    </div>
</form>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript">
        $("#email").click(function() {
        $("#email").prop("readonly", true);
        });
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#previmage')
                        .attr('src', e.target.result)
                        .width(200)
                        .height(200);
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
        function myFunction() {
            window.print();
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/jubair/Desktop/E-Bajar/EBajar/resources/views/Backend/Admin/Profile/profile.blade.php ENDPATH**/ ?>