<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-3 p-md-5 p-3">
            <img src="<?php echo e($user->profile->profileImage()); ?>" alt="user-profile-pic" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-9 p-md-5 p-3">
            <div class="d-flex align-items-center">
                <h1><?php echo e($user->username); ?></h1>
                <follow-button user-id="<?php echo e($user->id); ?>" follows="<?php echo e($follows); ?>"></follow-button>
                <div class="w-100 text-end">
                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                    <a href="/post/create"><button class="btn btn-dark btn-sm text-white fw-bold pt-1 pb-1 ms-3 mb-2 shadow-lg">+ Add new post</button></a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="d-flex">
                <div class="pe-4"><strong><?php echo e($postCount); ?></strong> post(s)</div>
                <div class="pe-4"><strong><?php echo e($followersCount); ?></strong> follower(s)</div>
                <div><strong><?php echo e($followingCount); ?></strong> following</div>
            </div>
            <div class="pt-3"><strong><?php echo e($user->profile->title); ?></strong></div>
            <div><?php echo e($user->profile->description); ?></div>
            <div><a href="<?php echo e($user->profile->url); ?>" class="text-decoration-none text-white" target="_blank"><strong><?php echo e($user->profile->url ?? 'Your URL goes here!'); ?></strong></a></div>
            <div class="mt-3">
                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('update', $user->profile)): ?>
                <a href="/profile/<?php echo e($user->username); ?>/edit" class="text-small text-decoration-none text-dark">(edit profile)</a>
                <?php endif; ?>
            </div>
        </div>
        <div class="row pt-3">
            <?php $__currentLoopData = $user->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-4 pb-3">
                                <a href="/post/<?php echo e($post->id); ?>"><img src="/storage/<?php echo e($post->image); ?>" alt="<?php echo e($post->count()); ?>" class="img-fluid"></a>
                            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/newtest/picstagram/resources/views/profiles/index.blade.php ENDPATH**/ ?>