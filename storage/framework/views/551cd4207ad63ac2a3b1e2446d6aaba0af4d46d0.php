<?php $__env->startSection('content'); ?>
    <?php $__env->startComponent('components.all_films', ['films' => $films]); ?>
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/index.blade.php ENDPATH**/ ?>