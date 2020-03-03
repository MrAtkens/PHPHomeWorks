<?php
/**
 * @var \Illuminate\Database\Eloquent\Collection|User[] $users
 */
?>



<?php $__env->startSection('content'); ?>
    <div class="card card-body">
        <div class="mb-3">
            <a href="<?php echo e(route('admin.user.create')); ?>" class="btn btn-secondary">Добавить пользователя</a>
        </div>
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
                    <td>
                        <a href="<?php echo e(route('admin.user.show', $user)); ?>">
                            <?php echo e($user->username); ?>

                            <?php if($user->superadmin): ?>
                                <span class="badge badge-primary">super admin</span>
                            <?php endif; ?>
                        </a>
                    </td>

                    <td>
                        <?php if($user->username != 'admin' && $user->id != 1): ?>
                            <a href="<?php echo e(route('admin.user.edit', $user)); ?>">Редактировать</a>
                            <a href="<?php echo e(route('admin.user.password.edit', $user)); ?>" class="text-warning">Обновить пароль</a>
                            <a href="<?php echo e(route('admin.user.destroy', $user)); ?>" class="text-danger"
                               onclick="event.preventDefault(); document.getElementById('delete-<?php echo e($user->id); ?>').submit()">
                                Удалить
                                <form id="delete-<?php echo e($user->id); ?>" action="<?php echo e(route('admin.user.destroy', $user)); ?>" method="post"
                                      class="d-none" >
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>


                                </form>
                            </a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/admin/pages/users/index.blade.php ENDPATH**/ ?>