<?php $__env->startSection('title', 'Posts'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Posts</h1>
    <a href="<?php echo e(route('posts.create')); ?>" class="btn btn-primary mb-2">Create Post</a>
    <div class="list-group">

        <?php if(count($posts) >= 0): ?>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="list-group-item justify-content-between align-items-center d-flex">
                    <div class="d-flex">
                        <?php if($post->image): ?>
                            <img src="<?php echo e(Storage::url($post->image)); ?>" alt="Post image" class="img-thumbnail me-3"
                                style="width: 100px; height: 100px;">
                        <?php else: ?>
                            <img src="https://via.placeholder.com/100" alt="Default Image" class="img-thumbnail me-3"
                                style="width: 100px; height: 100px;">
                        <?php endif; ?>
                        <div>
                            <h6><a href="<?php echo e(route('posts.show', $post->id)); ?>"><?php echo e($post->title); ?></a></h6>
                            <p>in category <?php echo e($post->category->name); ?></p>
                            <p>
                                Status:

                                <span class="badge <?php echo e($post->is_published ? 'bg-success' : 'bg-secondary'); ?>">
                                    <?php echo e($post->is_published ? 'Published' : 'Draft'); ?>

                                </span>
                            </p>
                        </div>
                    </div>

                    <div class="align-self-center">
                        <a href="<?php echo e(route('posts.edit', $post->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                        <form action="<?php echo e(route('posts.destroy', $post->id)); ?>" method="POST" style="display: inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-sm btn-danger"
                                onclick="return confirm('Are you sure want to delete this data?');">
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Joki\imam\blog-MSIB-master\resources\views/posts/index.blade.php ENDPATH**/ ?>