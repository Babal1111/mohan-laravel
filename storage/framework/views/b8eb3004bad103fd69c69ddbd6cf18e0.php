<?php $__env->startSection('title', 'Staff Login'); ?>

<?php $__env->startSection('content'); ?>

    <div class="login">

        <?php $__errorArgs = ['error-message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <div class="error-message"><?php echo e($message); ?></div>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>

        <div class="container">

            <div class="title">
                Staff Login
            </div>

            <form action="<?php echo e(route('login')); ?>" method="POST">

                <?php echo csrf_field(); ?>

                <div class="login-field">
                    <span class="details">Staff ID</span>
                    <input type="text" name="staff_id" placeholder="Enter your staff id" value="<?php echo e(old('staff_id')); ?>" required>
                </div>

                <div class="login-field">
                    <span class="details">Password</span>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="remember">
                    <label>
                        <input type="checkbox">Remember me
                    </label>
                </div>

                <div class="login-button">
                    <input type="submit" value="Sign in">
                </div>

                <div class="flex">
                    <div class="register">
                        <a href="<?php echo e(route('register')); ?>">Register Account</a>
                    </div>

                    <div class="divider">|</div>

                    <div class="forgot-link">
                        <a href="<?php echo e(route('forgot-password')); ?>">Forgot Password</a>
                    </div>

                </div>

                <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                
            </form>

        </div>

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\babal\Dropbox\PC\Desktop\Food-Ordering-System-main\resources\views/company/auth/login.blade.php ENDPATH**/ ?>