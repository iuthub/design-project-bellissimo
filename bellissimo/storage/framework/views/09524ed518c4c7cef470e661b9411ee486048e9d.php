<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
   

    <div class="card">
        <div class="card-header">
            Update category: <?php echo e($category->name); ?>

        </div>

        <div class="card-body">
            <form action="<?php echo e(route('category.update', ['id' =>$category->id])); ?>" method="post">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="<?php echo e($category->name); ?>" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-seccess" type="submit">
                        Update category
                    </button>
                </div>
            

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>