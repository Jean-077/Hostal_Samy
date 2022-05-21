

<?php $__env->startSection('css'); ?>
<link href="https://cdn.datatables.net/1.12.0/css/dataTables.bootstrap5.min.css" rel="stylesheet">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contenido'); ?>
<a href="recepcionista/create" class="btn btn-primary"> CREAR </a>

<table id="recepcionistas" class="table table-striped table-bordered shadow-lg mt-4" style="width=100%">
    <thead class="bg-primary text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido</th>
            <th scope="col">DNI</th>
            <th scope="col">Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $recepcionistas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $recepcionista): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($recepcionista->id); ?></td>
            <td><?php echo e($recepcionista->codRecepcionista); ?></td>
            <td><?php echo e($recepcionista->nombre); ?></td>
            <td><?php echo e($recepcionista->apellido); ?></td>
            <td><?php echo e($recepcionista->DNI); ?></td>
            <td>
                <form action="<?php echo e(route ('recepcionista.destroy', $recepcionista->id)); ?>" method="POST">
                <a href="/recepcionista/<?php echo e($recepcionista->id); ?>/edit" class="btn btn-info">Editar</a>
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class=" btn btn-danger ">Borrar</button>
                </form>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table>

<?php $__env->startSection('js'); ?>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.0/js/dataTables.bootstrap5.min.js"></script>

<script>
$(document).ready(function() {
    $('#recepcionista').DataTable();
});

</script>

<?php $__env->stopSection(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.plantillabase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\samy\resources\views/recepcionista/index.blade.php ENDPATH**/ ?>