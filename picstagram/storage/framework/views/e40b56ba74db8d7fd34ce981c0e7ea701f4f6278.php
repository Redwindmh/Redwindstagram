<?php $__env->startSection('content'); ?>
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        <?php echo csrf_field(); ?>
        <div class="row">
            <div class="col-8 offset-2">
             <h1 class="text-center mb-3">Add New Post</h1>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-end">Post Caption</label>
                    <div class="col-md-6">
                        <input id="caption" type="text" name="caption" class="text-dark form-control <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" value="<?php echo e(old('caption')); ?>"  autocomplete="caption" autofocus>
                        <?php $__errorArgs = ['caption'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <strong><?php echo e($errors->has('error')); ?></strong>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Post Image</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control-file" id="image" name="image">
                        <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <strong><?php echo e($errors->has('error')); ?></strong>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                    <div class="text-center pt-3">
                        <button class="btn btn-dark shadow">+ Create New Post</button>
                    </div>
                </div>
            </div>   
        </div>   
    </form>                  
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/newtest/picstagram/resources/views/posts/create.blade.php ENDPATH**/ ?>