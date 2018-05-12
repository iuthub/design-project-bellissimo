    

    <?php $__env->startSection('content'); ?>

       <div class="card">
            <div class="card-header">
                Trashed products
            </div>
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <th>
                            Image
                        </th>

                        <th>
                            Name
                        </th>

                        <th>
                            Price
                        </th>

                         <th>
                            Restore
                        </th>
                        <th>
                            Destroy
                        </th>
                    
                    </thead>

                    <tbody>
                        <?php if($products->count() > 0): ?>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo e($product->featured); ?>"  alt="<?php echo e($product->Name); ?>" width="200px" height="200px">
                                    </td>

                                    <td><?php echo e($product->title); ?></td>

                                    <td><?php echo e($product->price); ?></td>
                                    
                                    <td>
                                        <a href="<?php echo e(route('product.restore', ['id'=>$product->id])); ?>" class="btn btn-xs btn-success">Restore</a>
                                    </td>

                                    <td>
                                        <a href="<?php echo e(route('product.kill', ['id'=>$product->id])); ?>" class="btn btn-xs btn-danger">Delete</a>
                                    </td>

                                
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                            <tr>
                                <th colspan="5" class="text-center">No trashed products</th>
                            </tr>
                        <?php endif; ?>
                    </tbody>                   
                            
                </table>
            </div>

       </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>