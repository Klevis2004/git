
<?php $__env->startSection('title', 'Index'); ?>

<?php $__env->startSection('content'); ?>
<?php echo e($posts); ?>



<div>
<?php for($i = 0; $i <= 10; $i++): ?>
    <div>The current value is <?php echo e($i); ?></div>
<?php endfor; ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\klevis-app\resources\views/posts/index.blade.php ENDPATH**/ ?>