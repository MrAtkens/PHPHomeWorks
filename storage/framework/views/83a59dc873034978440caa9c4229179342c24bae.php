<?php $__env->startSection('content'); ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger mb-3">
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <h1><?php echo e($user->username); ?></h1>
    <p class="lead">
        <b>Создан: </b> <?php echo e($user->created_at); ?>

    </p>

    <div class="card">
        <div class="card-header">
            Смена пароля
        </div>
        <div class="card-body">
            <form action="<?php echo e(route('user.password')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>

                <div class="form-group">
                    <label for="password">Пароль</label>
                    <input type="password" class="form-control" name="password" placeholder="Напишите пароль..." required>
                </div>

                <div class="form-group">
                    <label for="password_confirmation">Повторите</label>
                    <input type="password" class="form-control" name="password_confirmation" placeholder="Повторите пароль..." required>
                </div>

                <button type="submit" class="btn btn-success">Обновить пароль</button>
            </form>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/pages/profile.blade.php ENDPATH**/ ?>