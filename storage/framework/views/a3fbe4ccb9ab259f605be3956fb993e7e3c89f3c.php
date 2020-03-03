<div class="card" style="width: 18rem;">
    <img src="<?php echo e($film->image_url); ?>" class="card-img-top">
    <div class="card-body">
        <p card="card-text"><small style="color: grey"><?php echo e($film->year); ?></small></p>
        <a href="<?php echo e(route('film.show', [$film])); ?>">
            <h5 class="card-title"><?php echo e($film->name); ?> <span class="badge badge-warning"><?php echo e($film->rating); ?></span></h5>
        </a>
        <p class="card-text"><?php echo e($slot); ?></p>
        <?php $__currentLoopData = $actors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $actor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="badge badge-primary"><?php echo e($actor); ?></span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/components/film.blade.php ENDPATH**/ ?>