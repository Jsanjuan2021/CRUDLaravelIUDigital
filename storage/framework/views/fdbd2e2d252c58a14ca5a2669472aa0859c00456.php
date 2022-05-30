

<?php $__env->startSection('content'); ?>
    <h4>Crear Publicacion</h4>

    <form action="<?php echo e(route('post.store')); ?>" method="post">
        <?php echo $__env->make('dashboard.post._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\IUDLaravel\resources\views/dashboard/post/create.blade.php ENDPATH**/ ?>