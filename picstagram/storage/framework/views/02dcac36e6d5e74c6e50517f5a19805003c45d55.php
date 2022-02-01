<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <img src="/storage/<?php echo e($post->image); ?>" alt="post_image" class="img-fluid">
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
            <div class="d-flex align-items-center pb-3">
                <img src="<?php echo e($post->user->profile->profileImage()); ?>" alt="profile_image" class="w-100 rounded-circle me-3" style="max-width: 50px">
                <div class="fw-bold"><a href="/profile/<?php echo e($post->user->username); ?>" class="text-decoration-none text-white"><?php echo e($post->user->name); ?></a></div>
                
            </div>
            <hr>
            <p><span class="fw-bold pe-1"><a href="/profile/<?php echo e($post->user->username); ?>" class="text-decoration-none text-white"><?php echo e($post->user->name); ?></a></span><?php echo e($post->caption); ?></p>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/newtest/picstagram/resources/views/posts/show.blade.php ENDPATH**/ ?>