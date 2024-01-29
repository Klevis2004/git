
<?php $__env->startSection('title', 'title'); ?>

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($posts['title']); ?></h1>
    <p><?php echo e($posts['content']); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\klevis-app\resources\views/posts/show.blade.php ENDPATH**/ ?>