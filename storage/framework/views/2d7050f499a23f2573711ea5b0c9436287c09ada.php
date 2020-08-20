<?php $__env->startSection('title', '|| Profile Change'); ?>
<?php $__env->startSection('head_name', 'Profile Change'); ?>
<?php $__env->startSection('content'); ?> 
<div class="modal-dialog">
    <form action="<?php echo e(route('profile.store')); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
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
                    <input class="custom-control-input gender" type="radio" id="male" name="gender" value="male" <?php echo e(Auth::user()->gender=='male' ? 'checked' : ''); ?> required>
                    <label for="male" class="custom-control-label">Male</label>
                    <input class="custom-control-input gender" type="radio" id="female" name="gender" value="female" <?php echo e(Auth::user()->gender=='female' ? 'checked' : ''); ?> required>
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
            <h5> Change Password</h5>
            <div class="form-group">
                <label class="col-lg-3 control-label">Password</label>
                <div class="col-lg-8">
                <input id="current_password" type="password" class="form-control" name="password" required autocomplete="new-password" placeholder="Current Password">                
            </div>
            <span id="icon" class="col-lg-1"></span>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">New Password</label>
                <div class="col-lg-8">
                    <input id="new_password" type="password" class="form-control" name="new_password" required autocomplete="new-password" placeholder="New Password" disabled>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3">Confirm Password</label>
                <div class="col-lg-8">
                    <input id="retype_password" type="password" class="form-control" name="retype_password" required autocomplete="new-password" placeholder="Confirm Password" disabled>
                </div>
                <span id="re_icon" class="col-lg-1"></span>
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
    <script type="text/javascript">
        $(document).ready(function(){
            $("#current_password").keyup(function(){
                var current_password = $(this).val();
                $.ajax({
                    url:"<?php echo e(route('password')); ?>",
                    type:'get',
                    data:{current_password:current_password},
                    success:function(data){
                        if (data=="Matched") 
                        {
                            $("#icon").html("<i style='color: green' class='icon-checkmark'></i>");
                            $("#submit").attr("disabled",'disabled');
                            $("#new_password").removeAttr("disabled",'disabled');
                            $("#retype_password").removeAttr("disabled",'disabled');
                        }
                        else
                        {
                            $("#icon").html("<i style='color: red' class='icon-close'></i>");
                            $("#submit").attr("disabled",'disabled');
                        }
                    }
                });
            });
        })
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/Backend/Admin/Profile/profile.blade.php ENDPATH**/ ?>