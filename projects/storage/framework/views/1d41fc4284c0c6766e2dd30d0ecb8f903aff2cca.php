<?php $__env->startSection('content'); ?>
    <div class="card card-primary">
    <!-- title-->
        <div class="card-header"><h4><?php echo e(__('Reset Password')); ?></h4></div>
        <div class="card-body">
            <p class="text-muted mb-4"><?php echo e(__('Enter your email address and we\'ll send you an email with instructions to reset your password.')); ?></p>
            <!-- form -->
            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group mb-3">
                    <label for="emailaddress"><?php echo e(__('Email Address')); ?></label>
                    <input class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" type="email" id="emailaddress" name="email" value="<?php echo e($email ?? old('email')); ?>" required autocomplete="email" autofocus placeholder="<?php echo e(__('Enter Your Email')); ?>">
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
                <div class="form-group mb-0 text-center">
                    <button class="btn btn-primary btn-block" type="submit"><i class="mdi mdi-lock-reset"></i> <?php echo e(__('Reset Password')); ?> </button>
                </div>

            </form>
            <!-- end form-->
        </div>
    </div>
    <!-- Footer-->
    <div class="mt-5 text-muted text-center">
        <p class="text-muted">Back to <a href="<?php echo e(route('login')); ?>" class="text-muted ml-1"><b><?php echo e(__('Log In')); ?></b></a></p>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/bwhitwbh/public_html/projects/resources/views/auth/passwords/email.blade.php ENDPATH**/ ?>