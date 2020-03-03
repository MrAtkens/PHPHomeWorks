<?php $__env->startSection('nav-links'); ?>
    <?php $__env->startComponent('components.nav-link', [
        'link' => 'http://google.com'
    ]); ?>
        HELLO WORLD!
    <?php echo $__env->renderComponent(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h1>SECOND</h1>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/second.blade.php ENDPATH**/ ?>