<?php $__env->startSection('title', '|| Profile Change'); ?>
<?php $__env->startSection('head_name', 'Profile Change'); ?>
<?php $__env->startSection('content'); ?>


    <div class="modal-dialog">

        <div class="modal-body">
            <div class="panel-body">
                <div><h4 style="text-align: center; font-family: cursive;">Profile Updated</h4></div><br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">User Name:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="name" placeholder="User Name" value="<?php echo e(Auth::user()->name); ?>">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email Address:</label>
                    <div class="col-lg-9">
                        <input type="email" class="form-control" name="email" placeholder="User Email" value="<?php echo e(Auth::user()->email); ?>" readonly="">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Gender:</label>
                    <div class="col-lg-9">
                        <input class="custom-control-input gender" type="radio" id="male" name="gender" value="male" <?php echo e(Auth::user()->gender=='male' ? 'checked' : ''); ?> required>
                        <label for="male" class="custom-control-label">Male</label>
                        <input class="custom-control-input gender" type="radio" id="female" name="gender" value="female" <?php echo e(Auth::user()->gender=='female' ? 'checked' : ''); ?> required>
                        <label for="female" class="custom-control-label">Female</label>
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Number:</label>
                    <div class="col-lg-9">
                        <input type="text" class="form-control" name="contact" placeholder="User Contact Number" value="<?php echo e(Auth::user()->contact); ?>" required="">
                    </div>
                </div>
                <br><br>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Image:</label>
                    <div class="col-lg-9">
                        <img id='previmage' src="<?php echo e(Auth::user()->image==''? asset('backend_assets/images/BackendImg/Slider/sliderlogo.png'): '/'.Auth::user()->image); ?>" alt="image" class='img-responsive'>
                        <br><br>
                        <input type='file' id="image" name="image" onchange="readURL(this);" />
                        <span class="text-danger" id="image"></span>
                    </div>
                    <input type="hidden" name="old_img" id="old_img" value="<?php echo e(Auth::user()->image); ?>">
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
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
                        .width(140)
                        .height(140);
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