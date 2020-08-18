<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
    <title>Login</title>
    <?php echo $__env->make('Backend.layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('Backend.layouts.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="full-width page-condensed" style="background-image: url(&quot;/ecommerce.jpg&quot;);background-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%; ">


<div class="login-wrapper">
        <div class="popup-header" style="margin-top: -60px;">
            <a href="<?php echo e(route('register')); ?>" class="pull-left"><i class="icon-user-plus"></i></a>
            <span class="text-semibold">User Login</span>
            <div class="btn-group pull-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-cogs"></i></a>
                <ul class="dropdown-menu icons-right dropdown-menu-right">
                    <li><a href="<?php echo e(route('register')); ?>"><i class="icon-people"></i> Change user</a></li>
                    <li><a href="#"><i class="icon-info"></i> Forgot password?</a></li>
                    <li><a href="#"><i class="icon-support"></i> Contact admin</a></li>
                    <li><a href="#"><i class="icon-wrench"></i> Settings</a></li>
                </ul>
            </div>
        </div>
        <div class="well" style="background-image: url(&quot;/ecommerce.jpg&quot;); ackground-repeat: no-repeat;background-attachment: fixed; background-size: 100% 100%;">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group has-feedback">
                    <label for="name">E-Mail</label>
                    <input id="email" type="email" class="form-control <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-group has-feedback">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required autocomplete="current-password">
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                

                

                <div class="row form-actions">
                    <div class="col-xs-6">
                       <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="form-check-label" for="remember">Remember Me</label> 
                    </div>

                    <div class="col-xs-6">
                        <button type="submit" class="btn btn-warning ">Login</button>
                    </div>
                    <div>
                        <?php if(Route::has('password.request')): ?>
                        <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                            <?php echo e(__('Forgot Your Password?')); ?>

                        </a>
                    <?php endif; ?>
                    <a class="btn btn-link" href="<?php echo e(url('/register')); ?>">Create an account</a> 
                    </div>
                    
                </div>
            </form>
        </div>
</div>

</body>
</html>
<?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/auth/login.blade.php ENDPATH**/ ?>