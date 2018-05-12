<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="pane panel-default">
        <div class="panel-heading">
            Create a new tag
        </div>

        <div class="panel-body">
            <form action="<?php echo e(route('tag.store')); ?>" method="post">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="name">Tag</label>
                    <input type="text" name="tag" class="form-control">
                </div>

                <div class="form-group">
                    <button class="btn btn-seccess" type="submit">
                        Store tag
                    </button>
                </div>


              

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>