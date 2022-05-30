

<?php $__env->startSection('content'); ?>
    <h4>Publicacion completa</h4>

    <div class="form-group">
        <input readonly class="form-control" type="text" name="publication" id="publication" placeholder="Nombre Publicacion" value="<?php echo e($post -> publication); ?>">
    </div>
    <br>
    <div class="form-group">
        <textarea readonly class="form-control" name="publication_description" id="publication_description" cols="30" rows="10"><?php echo e($post -> publication_description); ?></textarea>
    </div>

    <br>
    <div>
        <button type="submit" class="btn btn-success">Publicar</button>
        <a href="" class="btn btn-danger">Cancelar</a>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\IUDLaravel\resources\views/dashboard/post/show.blade.php ENDPATH**/ ?>