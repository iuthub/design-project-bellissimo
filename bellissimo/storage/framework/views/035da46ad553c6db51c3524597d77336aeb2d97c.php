<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('admin.includes.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="card">
        <div class="card-header">
            Create a new product
        </div>

        <div class="card-body">
            <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
                <?php echo e(csrf_field()); ?>


                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="text" name="price" class="form-control">
                </div>

                <div class="form-group">
                    <label for="featured">Featured image</label>
                    <input type="file" name="featured" class="form-control">
                </div>

                <div class="form-group">
                    <label for="category">Select a category</label>
                    <select name="category_id" id="category" class="form-control">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">
                    
                    </textarea>
                </div>

                <div class="form-group">
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">
                            Store product
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>