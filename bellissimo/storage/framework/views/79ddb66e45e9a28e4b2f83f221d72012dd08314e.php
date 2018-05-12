    

    <?php $__env->startSection('content'); ?>

       <div class="card">
            <div class="panel-heading">
                Trashed posts
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
                            Edit
                        </th>

                         <th>
                            Restore
                        </th>
                        <th>
                            Destroy
                        </th>
                    
                    </thead>

                    <tbody>
                        <?php if($posts->count() > 0): ?>
                            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <img src="<?php echo e($post->featured); ?>"  alt="<?php echo e($post->Name); ?>" width="200px" height="200px">
                                    </td>

                                    <td><?php echo e($post->Name); ?></td>

                                    <td>Price</td>

                                    <td>Edit</td>

                                    <td>
                                        <a href="<?php echo e(route('post.restore', ['id'=>$post->id])); ?>" class="btn btn-xs btn-success">Restore</a>
                                    </td>

                                    <td>
                                        <a href="<?php echo e(route('post.kill', ['id'=>$post->id])); ?>" class="btn btn-xs btn-danger">Delete</a>
                                    </td>

                                
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        <?php else: ?>
                            <tr>
                                <th colspan="5" class="text-center">No trashed posts</th>
                            </tr>
                        <?php endif; ?>
                    </tbody>                   
                            
                </table>
            </div>

       </div>

    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>