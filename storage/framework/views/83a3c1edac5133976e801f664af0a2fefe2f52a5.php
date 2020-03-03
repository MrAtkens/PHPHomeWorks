<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-xs-12 col-lg-4">

            <?php echo $__env->make('admin.blocks.errors', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class="card card-body">
                <form action="<?php echo e(route('admin.user.update', $user)); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" class="form-control" name="username"
                               placeholder="Enter username..." value="<?php echo e(old('username') ?? $user->username); ?>">
                    </div>

                    <div class="form-group">
                        <input type="hidden" name="superadmin" value="0">
                        <input type="checkbox" id="superadmin" name="superadmin" value="1"
                                <?php echo e((old('superadmin') ?? $user->superadmin) ? 'checked' : ''); ?>>
                        <label for="superadmin">Super admin</label>
                    </div>

                    <button class="btn btn-success" type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\OSPanel\domains\laravel.loc\resources\views/admin/pages/users/update.blade.php ENDPATH**/ ?>