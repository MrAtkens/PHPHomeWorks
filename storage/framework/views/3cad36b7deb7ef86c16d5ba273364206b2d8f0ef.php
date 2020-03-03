<div class="card-deck">
    <?php $__currentLoopData = $films ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $film): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $__env->startComponent('components.film', [ 'film' => $film, 'actors' => explode(',', $film->actors)]); ?>
            <?php echo e($film->description); ?>

        <?php echo $__env->renderComponent(); ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/components/all_films.blade.php ENDPATH**/ ?>