<?php if($loop -> even): ?>
<div><?php echo e($key); ?> . <?php echo e($post['title']); ?></div>
<?php else: ?>
<div style="background-color:aqua"><?php echo e($key); ?> . <?php echo e($post['title']); ?></div>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\laravel\klevis-app\resources\views/posts/partials/post.blade.php ENDPATH**/ ?>