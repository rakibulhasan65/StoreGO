<?php $__env->startSection('page-title'); ?>
    <?php echo e(__('Coupons')); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('title'); ?>
    <div class="d-inline-block">
        <h5 class="h4 d-inline-block text-white font-weight-bold mb-0 "><?php echo e(__('Coupons')); ?></h5>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcrumb'); ?>
    <li class="breadcrumb-item"><a href="<?php echo e(route('dashboard')); ?>"><?php echo e(__('Home')); ?></a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo e(__('Coupons')); ?></li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('action-btn'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Create Coupans')): ?>
    <a class="btn btn-sm btn-icon  btn-primary me-2 text-white" data-url="<?php echo e(route('coupons.create')); ?>" data-title="<?php echo e(__('Add Coupon')); ?>" data-ajax-popup="true" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(__('Create')); ?>">
        <i  data-feather="plus"></i>
    </a>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startPush('script-page'); ?>
    <script>
        $(document).on('click', '#code-generate', function () {
            var length = 10;
            var result = '';
            var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
            var charactersLength = characters.length;
            for (var i = 0; i < length; i++) {
                result += characters.charAt(Math.floor(Math.random() * charactersLength));
            }
            $('#auto-code').val(result);
        });
    </script>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
 <!-- [ Main Content ] start -->
 <div class="row">
    <!-- [ basic-table ] start -->
    <div class="col-xl-12">
        <div class="card">
            <div class="card-body table-border-style">
                <div class="table-responsive">
                    <table class="table dataTable">
                        <thead>
                            <tr>
                                <th> <?php echo e(__('Name')); ?></th>
                                <th> <?php echo e(__('Code')); ?></th>
                                <th> <?php echo e(__('Discount (%)')); ?></th>
                                <th> <?php echo e(__('Limit')); ?></th>
                                <th> <?php echo e(__('Used')); ?></th>
                                <th> <?php echo e(__('Action')); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $coupons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $coupon): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($coupon->name); ?></td>
                                <td><?php echo e($coupon->code); ?></td>
                                <td><?php echo e($coupon->discount); ?></td>
                                <td><?php echo e($coupon->limit); ?></td>
                                <td><?php echo e($coupon->used_coupon()); ?></td>
                                <td class="Action">
                                    <div class="d-flex">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Show Coupans')): ?>
                                            <a href="<?php echo e(route('coupons.show', $coupon->id)); ?>" class="btn btn-sm btn-icon  bg-light-secondary me-2" data-tooltip="Edit" data-original-title="<?php echo e(__('View')); ?>" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(__('View Coupon')); ?>" data-tooltip="View">
                                                <i  class="ti ti-eye f-20"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Edit Coupans')): ?>
                                            <a class="btn btn-sm btn-icon  bg-light-secondary me-2" data-url="<?php echo e(route('coupons.edit', $coupon->id)); ?>"  data-title="<?php echo e(__('Edit Coupon')); ?>" data-ajax-popup="true" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e(__('Edit')); ?>">
                                                <i  class="ti ti-edit f-20"></i>
                                            </a>
                                        <?php endif; ?>
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('Delete Coupans')): ?>
                                            <a class="bs-pass-para btn btn-sm btn-icon bg-light-secondary" href="#"
                                                data-title="<?php echo e(__('Delete Lead')); ?>"
                                                data-confirm="<?php echo e(__('Are You Sure?')); ?>"
                                                data-text="<?php echo e(__('This action can not be undone. Do you want to continue?')); ?>"
                                                data-confirm-yes="delete-form-<?php echo e($coupon->id); ?>"
                                                data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="<?php echo e(__('Delete')); ?>">
                                                <i class="ti ti-trash f-20"></i>
                                            </a>
                                            <?php echo Form::open(['method' => 'DELETE', 'route' => ['coupons.destroy', $coupon->id], 'id' => 'delete-form-' . $coupon->id]); ?>

                                            <?php echo Form::close(); ?>

                                        <?php endif; ?>
                                    </div>
                                </td>


                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- [ basic-table ] end -->
</div>
<!-- [ Main Content ] end -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Diligent Soft IT\StoreGo\resources\views/coupon/index.blade.php ENDPATH**/ ?>