<?php echo csrf_field(); ?>
<?php echo $__env->make('dashboard.partials.validation-error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="form-group mb-3">
    <input class="form-control" type="text" name="category" id="category" placeholder="Nombre categoria">
</div>

<div class="form-group mb-3">
    <textarea class="form-control" name="description_category" id="description_category" cols="30" rows="10" placeholder="Descripción de la categoria"></textarea>
</div>

<div class="mb-3">
    <a href="" class="btn btn-danger btn-sm">Cancelar</a>
    <button class="btn btn-success btn-sm" type="submit">Guardar</button>
</div><?php /**PATH C:\laragon\www\IUDLaravel\resources\views/dashboard/category/_form.blade.php ENDPATH**/ ?>