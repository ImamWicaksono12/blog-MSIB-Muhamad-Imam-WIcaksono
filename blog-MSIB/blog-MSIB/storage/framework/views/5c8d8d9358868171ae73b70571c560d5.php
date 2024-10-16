<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Categories</h1>
    <a href="<?php echo e(route('categories.create')); ?>" class="btn btn-primary mb-2">Create Category</a>
    <div class="list-group">
        
        <?php if(count($categories) >= 0): ?>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="list-group-item justify-content-between align-items-center d-flex">
                    <a href="<?php echo e(route('categories.show', $category->id)); ?>"><?php echo e($category->name); ?></a>
                    <div>
                        <a href="<?php echo e(route('categories.edit', $category->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('categories.destroy', $category->id)); ?>" method="POST" style="display: inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure want to delete this data?');">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <div class="list-group-item jsutify-content-between align-items-center">
                No data
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Joki\imam\blog-MSIB-master\resources\views/categories/index.blade.php ENDPATH**/ ?>