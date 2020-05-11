<?php $__env->startSection('content'); ?>

    <div class="card card-primary">
        <div class="card-header"><h4><?php echo e(__('Sign In')); ?></h4></div>
        <div class="card-body">
            <form method="POST" action="<?php echo e(route('client.login')); ?>">
            <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="emailaddress"><?php echo e(__('Email Address')); ?></label>
                    <input class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="email" name="email" id="emailaddress" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus placeholder="<?php echo e(__('Enter Your Email')); ?>">
                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                <div class="form-group">
                    <a href="<?php echo e(route('password.request')); ?>" class="text-muted float-right"><small><?php echo e(__('Forgot your password?')); ?></small></a>
                    <label for="password"><?php echo e(__('Password')); ?></label>
                    <input class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="password" name="password" required autocomplete="current-password" id="password" placeholder="<?php echo e(__('Enter Your Password')); ?>">
                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
                <div class="form-group mb-3">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkbox-signin" name="remember" <?php echo e(old('remember') ? 'checked' : ''); ?>>
                        <label class="custom-control-label" for="checkbox-signin"><?php echo e(__('Remember Me')); ?></label>
                    </div>
                </div>
                <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-login"></i> <?php echo e(__('Log in')); ?> </button>
                </div>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/Taskly2/site/resources/views/auth/client_login.blade.php ENDPATH**/ ?>