

<?php $__env->startSection('title', $task->title); ?>

<?php $__env->startSection('content'); ?>
<p><?php echo e($task->description); ?></p>

<?php if($task->long_description): ?>
<p><?php echo e($task->long_description); ?></p>
<?php endif; ?>

<p><?php echo e($task->created_at); ?></p>
<p><?php echo e($task->updated_at); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\klevis-app\resources\views/show.blade.php ENDPATH**/ ?>