
<?php $__env->startSection('title', 'update'); ?>

<?php $__env->startSection('content'); ?>
<form action="{{ route('posts.update'), ['post' => $post->id]}" method="POST">
    <?php echo csrf_field(); ?>
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('posts.partials.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div><input type="submit" value="Update"></div>
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\laravel\klevis-app\resources\views/posts/edit.blade.php ENDPATH**/ ?>