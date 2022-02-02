<?php $__env->startSection('content'); ?>
<div class="container">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="row">
            <div class="col-8 offset-2 col-md-6 offset-md-3">
                <a href="/post/<?php echo e($post->id); ?>">
                    <img src="/storage/<?php echo e($post->image); ?>" alt="post_image" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2 col-md-6 offset-md-3 py-4">
                <p><span class="fw-bold pe-1"><a href="/profile/<?php echo e($post->user->username); ?>" class="text-decoration-none text-white"><?php echo e($post->user->name); ?></a></span><?php echo e($post->caption); ?></p>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            <?php echo e($posts->links()); ?>

        </div>
    </div>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/newtest/picstagram/resources/views/posts/index.blade.php ENDPATH**/ ?>