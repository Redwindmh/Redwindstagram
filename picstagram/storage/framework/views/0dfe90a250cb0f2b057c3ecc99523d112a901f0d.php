<?php $__env->startComponent('mail::message'); ?>
# Welcome to <span style="color:red;">Redwindstagram</span>!
Thanks for joining. Click the button below. Or don't. Your call, really.


<?php $__env->startComponent('mail::button', ['url' => 'https://www.youtube.com/watch?v=kZwhNFOn4ik', 'color' => 'error']); ?>
Click me!!
<?php echo $__env->renderComponent(); ?>
Sincerely,<br>
The <span style="color:red;"><?php echo e(config('app.name')); ?></span> Team (lol it's just me)
<?php echo $__env->renderComponent(); ?>
<?php /**PATH /var/www/html/newtest/picstagram/resources/views/emails/welcome-email.blade.php ENDPATH**/ ?>