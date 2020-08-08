<?php $__env->startSection('title', '|| Product'); ?>
<?php $__env->startSection('head', 'Product'); ?> 
<?php $__env->startSection('head_name', 'Product'); ?>
<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('product.store')); ?>" method="post" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title">ADD Product</h6></div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Category Name:</label>
                            <select class="select-full" name="category_name" id="category_name">
                            	<option value="" selected>Select One</option>
                            	<?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->category_id); ?>"><?php echo e($value->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            <?php if($errors->first('brand_name')): ?>
                                <label for="brand_name" class="error"><?php echo e($errors->first('brand_name')); ?></label>
                            <?php endif; ?>
                                
                            
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Sub Category Name:</label>
                            <select class="select-full" name="sub_category_name" id="sub_category_name">
                            	<option value="" selected>Select One</option>
                            	
                            </select>
                                <?php if($errors->first('sub_category_name')): ?>
                                <label for="sub_category_name" class="error"><?php echo e($errors->first('sub_category')); ?></label>
                            	<?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Brand Name:</label>
                            <select class="select-full" name="brand_name" id="brand_name">
                                <option value="" selected>Select One</option>
                                <?php $__currentLoopData = $brand; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($value->brand_id); ?>"><?php echo e($value->brand_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                            	<?php if($errors->first('brand_name')): ?>
                                <label for="brand_name" class="error"><?php echo e($errors->first('brand_name')); ?></label>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Name:</label>
                            <input type="text" class="form-control" name="product_name" id="product_name" placeholder="product name">
                            <?php if($errors->first('product_name')): ?>
                                <label for="product_name" class="error"><?php echo e($errors->first('product_name')); ?></label>
                            	<?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Quantity:</label>
                            <input type="number" class="form-control" name="product_quantity" id="product_quantity" placeholder="product quantity">
                            <?php if($errors->first('product_quantity')): ?>
                                <label for="product_quantity" class="error"><?php echo e($errors->first('product_quantity')); ?></label>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Weight:</label>
                            <input type="text" class="form-control" id="product_weight" name="product_weight" placeholder="Product Weight (KG)">
                            <?php if($errors->first('product_weight')): ?>
                                <label for="product_weight" class="error"><?php echo e($errors->first('product_weight')); ?></label>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Size:</label>
                            <input type="text" class="form-control" id="product_size" name="product_size" placeholder="Product Size ()">
                            <?php if($errors->first('product_size')): ?>
                                <label for="product_size" class="error"><?php echo e($errors->first('product_size')); ?></label>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-md-12">
                            <label>Product Prize:</label>
                            <input type="text" class="form-control" id="product_prize" name="product_prize" placeholder="Product prize ()">
                            <?php if($errors->first('product_prize')): ?>
                                <label for="product_prize" class="error"><?php echo e($errors->first('product_prize')); ?></label>
                                <?php endif; ?>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                	<div class="row">
	                    <div class="col-md-12">
	                    	<label>Description:</label>
	                        <input type="text" class="form-control" name="description" id="description" placeholder="Description">
                            <?php if($errors->first('description')): ?>
                                <label for="description" class="error"><?php echo e($errors->first('description')); ?></label>
                                <?php endif; ?>
	                    </div>
                    </div>
                </div>

                <div class="form-group"> 
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now">Product Image</label>
                                    <input type="file" id='previmage' src="<?php echo e(asset('backend_assets/images/BackendImg/Slider/sliderlogo.png')); ?>" name="images[]"  class="img-responsive" onchange="readURL(this);" />
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" id="plus"><i class="fa fa-plus-circle"></i></button>
                    </div>
                </div>
                <div class="input_field"></div>

                <div class="form-actions text-right">
                    <input type="reset" value="Cancel" class="btn btn-danger">
                    <input type="submit" value="Submit report" class="btn btn-primary">
                </div>

            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('backend_assets/js/product.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajara/resources/views/Backend/Admin/Product/product.blade.php ENDPATH**/ ?>