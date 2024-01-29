<h1>
    The list of tasks
</h1>

<div>
    
    <?php $__empty_1 = true; $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div>
        <a href="<?php echo e(route('tasks.show', ['id' => $task->id])); ?>"><?php echo e($task->title); ?></a>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div>There are no tasks!</div>
    <?php endif; ?>
    
</div>

<?php if(isset($name)): ?>
<div>The name is: <?php echo e($name); ?></div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\klevis-app\resources\views/index.blade.php ENDPATH**/ ?>