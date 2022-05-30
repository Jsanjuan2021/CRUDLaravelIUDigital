

<?php $__env->startSection('content'); ?>
    <h4>Publicaciones</h4>

    <a href="<?php echo e(url('dashboard/post/create')); ?>" class="btn btn-primary">Crear nuevo post</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Publicación</th>
            <th scope="col">Contenido</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $post; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($post -> id); ?></th>
                <td><?php echo e($post -> publication); ?></td>
                <td><?php echo e($post -> publication_description); ?></td>
                <td>
                    <a href="<?php echo e(route('post.show', $post -> id)); ?>" class="btn btn-success">Ver</a>
                    <a href="<?php echo e(route('post.edit', $post -> id)); ?>" class="btn btn-primary">Editar</a>
                    
                    <form action="<?php echo e(url('/dashboard/post/'.$post->id)); ?>" method="post" class="d-inline">
                        <?php echo csrf_field(); ?>

                        <?php echo e(method_field('DELETE')); ?>

    
                        <input type="submit" onclick="return confirm('¿Deseas eliminar esta publicación')" value="Eliminar" class="btn btn-danger">   
                    </form>

                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        </tbody>
    </table>

    
    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\IUDLaravel\resources\views/dashboard/post/index.blade.php ENDPATH**/ ?>