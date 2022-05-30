
<?php $__env->startSection('content'); ?>
    
    <form action="<?php echo e(route('category.store')); ?>" method="post">
    
        <?php echo $__env->make('dashboard.category._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\IUDLaravel\resources\views/dashboard/category/create.blade.php ENDPATH**/ ?>