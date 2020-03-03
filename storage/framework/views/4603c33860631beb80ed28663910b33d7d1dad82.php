<?php $__env->startSection('content'); ?>

    <?php if($errors->any()): ?>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="alert alert-danger mb-3">
                <?php echo e($error); ?>

            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

    <form action="<?php echo e($action ?? route('film.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php if($method ?? false): ?>
            <?php echo method_field($method); ?>
        <?php endif; ?>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Название" name="name" required value="<?php echo e($film->name ?? ''); ?>">
        </div>

        <div class="form-group">
            <textarea name="description" rows="10" class="form-control" placeholder="Описание" required><?php echo e($film->description ?? ''); ?></textarea>
        </div>

        <div class="form-group">
            <input type="text" name="image_url" class="form-control" placeholder="Изображение" required value="<?php echo e($film->image_url ?? ''); ?>"></input>
        </div>

        <div class="form-group">
            <input type="text" name="actors" class="form-control" placeholder="Актёры" required value="<?php echo e($film->actors ?? ''); ?>"></input>
        </div>

        <div class="form-group">
            <input type="number" name="year" class="form-control" placeholder="Год" required value="<?php echo e($film->year ?? ''); ?>"></input>
        </div>

        <div class="form-group">
            <select name="rating" class="form-control">
                <option disabled>Рейтинг</option>
                <?php for($i = 1; $i <= 5; $i++): ?>
                    <option value="<?php echo e($i); ?>" <?php echo e(($film->rating ?? 0) == $i ? 'selected' : ''); ?>><?php echo e($i); ?></option>
                <?php endfor; ?>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.bootstrap', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/form.blade.php ENDPATH**/ ?>