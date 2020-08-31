<?php $__env->startSection('contents'); ?>
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="billing-details">
                    <div class="section-title"><?php echo e(__('Verify Your Email Address'), false); ?></div>

                    <div class="card-body">
                        <?php if(session('resent')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(__('A fresh verification link has been sent to your email address.'), false); ?>

                        </div>
                        <?php endif; ?>

                        <?php echo e(__('Before proceeding, please check your email for a verification link.'), false); ?>

                        <?php echo e(__('If you did not receive the email'), false); ?>, <a href="<?php echo e(route('verification.resend'), false); ?>"><?php echo e(__('click here to request another'), false); ?></a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/auth/verify.blade.php ENDPATH**/ ?>