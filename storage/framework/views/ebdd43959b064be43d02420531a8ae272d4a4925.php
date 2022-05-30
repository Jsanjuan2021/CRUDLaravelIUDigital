
    


        

<?php echo csrf_field(); ?>
<?php echo $__env->make('dashboard.partials.validation-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group">
    <input class="form-control" type="text" name="publication" id="publication" placeholder="Nombre Publicacion" value="<?php echo e(old('publication', $post -> publication)); ?>">
</div>
<br>
<div class="form-group">
    <textarea class="form-control" name="publication_description" id="publication_description" cols="30" rows="10"><?php echo e(old('publication_description', $post -> publication_description)); ?></textarea>
</div>
<br>
<div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="<?php echo e(url('dashboard/post')); ?>" class="btn btn-danger">Cancelar</a>
</div><?php /**PATH C:\laragon\www\IUDLaravel\resources\views/dashboard/post/_form.blade.php ENDPATH**/ ?>