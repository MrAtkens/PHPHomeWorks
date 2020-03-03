<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|User[] $users
 */
?>



<?php $__env->startSection('content'); ?>

    <div class="card card-body">
        <table class="table table-bordered mb-0">
            <thead>
            <tr>
                <th>#</th>
                <th>Имя пользователя</th>
                <th nowrap style="width: 1%;">Действия</th>
            </tr>
            </thead>

            <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($user->id); ?></td>
                    <td><?php echo e($user->username); ?></td>
                    <td></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/pages/users/index.blade.php ENDPATH**/ ?>