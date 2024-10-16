

<?php $__env->startSection('title', 'Show Category'); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <h3 class="card-header">
            <?php echo e($category->name); ?>

        </h3>
        <div class="card-body">
            <blockquote class="blockquote mb-3">
                <p><?php echo e($category->description); ?></p>
            </blockquote>
            <a href="<?php echo e(route('categories.index')); ?>" class="btn btn-outline-success">Kembali</a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Joki\imam\blog-MSIB-master\resources\views/categories/show.blade.php ENDPATH**/ ?>