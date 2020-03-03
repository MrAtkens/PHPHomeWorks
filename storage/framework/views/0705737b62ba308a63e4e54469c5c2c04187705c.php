<?php $__env->startSection('content'); ?>
    <div class="mb-3">

        <form action="<?php echo e(route('film.destroy', [$film])); ?>" method="post">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <a href="<?php echo e(route('film.edit', [$film])); ?>" class="btn btn-info">Изменить</a>
            <button type="submit" class="btn btn-danger">Удалить</button>
        </form>

    </div>
    <?php $__env->startComponent('components.film', ['film' => $film, 'actors' => explode(',', $film->actors)]); ?>
        <?php echo e($film->description); ?>

    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/show.blade.php ENDPATH**/ ?>