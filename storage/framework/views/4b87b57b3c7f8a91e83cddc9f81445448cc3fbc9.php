 
<?php $__env->startSection('title', '|| Product'); ?>
<?php $__env->startSection('head', 'Product'); ?> 
<?php $__env->startSection('head_name', 'Product'); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo e(route('product.store')); ?>" class="form-horizontal"  method="post" enctype="multipart/form-data"><?php echo csrf_field(); ?>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title">Basic Info</h6></div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Category:</label>
                    <div class="col-sm-10">
                        <select class="select-full" name="category_name" id="category_name">
                            <option value="" selected>Select One</option>
                                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($value->category_id); ?>"><?php echo e($value->category_name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                        <label class="col-sm-2 control-label">sub Category:</label>
                        <div class="col-sm-10">
                            <select class="select-full" name="sub_category_name" id="sub_category_name">
                                <option value="" selected>Select One</option>
                            </select>
                            <?php if($errors->first('sub_category_name')): ?>
                                <label for="sub_category_name" class="error"><?php echo e($errors->first('sub_category_name')); ?></label>
                            <?php endif; ?>
                        </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Brand:</label>
                    <div class="col-sm-10">
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

                <div class="form-group">
                    <label class="col-sm-2 control-label">Product Name:</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="product_name" id="product_name" placeholder="product name">
                            <?php if($errors->first('product_name')): ?>
                                <label for="product_name" class="error"><?php echo e($errors->first('product_name')); ?></label>
                                <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Prize::</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="product_prize" name="product_prize" placeholder="Product prize ()">
                            <?php if($errors->first('product_prize')): ?>
                                <label for="product_prize" class="error"><?php echo e($errors->first('product_prize')); ?></label>
                                <?php endif; ?>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">Description:</label>
                    <div class="col-sm-10">
                        <textarea rows="5" cols="5" class="form-control" name="description" id="description" placeholder="Description"></textarea>
                        
                            <?php if($errors->first('description')): ?>
                                <label for="description" class="error"><?php echo e($errors->first('description')); ?></label>
                                <?php endif; ?>
                    </div>
                </div>


                <div class="form-group">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <label for="input-file-now">Product Image</label>
                                    <input type="file" id="input-file-now" name="images[]"  class="dropify" />
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success" id="plus"><i class="fa fa-plus-circle"></i></button>
                    </div>
                </div>
                <div class="input_field"></div>

                

            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading"><h6 class="panel-title">specification</h6></div>

            <div class="mobile">
                <div class="panel-body">
                    <h5>Mobile</h5>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Model Name</label>
                        <div class="col-sm-9">
                            <input type="txet" class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Battery Capacity (mAh)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="" id="" placeholder="mAh">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Camera Front (Megapixels)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="" id="" placeholder="Megapixels">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Number Of Back Camera</label>
                        <div class="col-sm-9">
                            <input type="number" class="form-control" name="" id="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Back Camera (Megapixels)</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="" id="" placeholder="16+14+3 Megapixels">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Number of SIM</label>
                        <div class="col-sm-9">
                           <select class="select-full" name="" id="">
                                <option value="" selected>Select One</option>
                                <option value=""> Duel SIM</option>
                                <option value=""> Single SIM</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Multiple select: </label>
                        <div class="col-sm-9">
                            <select multiple="multiple" class="multi-select" tabindex="2">
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option> 
                                <option value="Canada">Canada</option> 
                                <option value="Cape Verde">Cape Verde</option> 
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Condition:</label>
                        <div class="col-sm-9">
                           <select class="select-full" name="" id="">
                                <option value="" selected>Select One</option>
                                <option value=""> New</option>
                                <option value=""> Used</option>
                                
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Screen Size (inches)</label>
                        <div class="col-sm-9">
                            <input type="txet" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">RAM Memory</label>
                        <div class="col-sm-9">
                            <input type="txet" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">ROM Memory</label>
                        <div class="col-sm-9">
                            <input type="txet" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">External SD card</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <div class="choice"><span class=""><input type="radio" name="inline-radio" class="styled" checked="checked"></span></div>
                                Checked
                            </label>
                            <label class="radio-inline">
                                <div class="choice"><span class=""><input type="radio" name="inline-radio" class="styled" checked="checked"></span></div>
                                Checked
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Operating System</label>
                        <div class="col-sm-9">
                            <select class="select-full" name="" id="">
                                <option value="" selected>Select One</option>
                                <option value=""> Mack OS</option>
                                <option value=""> Android</option>
                                <option value=""> Oxizen OS</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Operating System Verson</label>
                        <div class="col-sm-9">
                            <input type="txet" class="form-control" name="" id="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Network: </label>
                        <div class="col-sm-9">
                            <select multiple="multiple" class="multi-select" tabindex="2">
                                <option value="Cambodia">5G</option> 
                                <option value="Cameroon">4G</option> 
                                <option value="Canada">3G</option> 
                                <option value="Cape Verde">2G</option> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Resolution: </label>
                        <div class="col-sm-9">
                            <select multiple="multiple" class="multi-select" tabindex="2">
                                <option value="Cambodia">full HD</option> 
                                <option value="Cameroon">Non HD</option> 
                                <option value="Canada">3G</option> 
                                <option value="Cape Verde">2G</option> 
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">What’s in the box: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="" id="" placeholder="1x Mobile, Charger, Head phone and Battery">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Warranty Policy EN: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="" id="" placeholder="1 year replesment">
                        </div>
                    </div>

                </div>
            </div>


            <div class="shart">
                <div class="panel-body">
                    <h5>Shirt</h5>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Main Material: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="description" id="description" placeholder="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Size: </label>
                        <div class="col-sm-9">
                            <select multiple="multiple" class="multi-select" tabindex="2">
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option> 
                                <option value="Canada">Canada</option> 
                                <option value="Cape Verde">Cape Verde</option> 
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">color: </label>
                        <div class="col-sm-9">
                            <select multiple="multiple" class="multi-select" tabindex="2">
                                <option value="Cambodia">Cambodia</option> 
                                <option value="Cameroon">Cameroon</option> 
                                <option value="Canada">Canada</option> 
                                <option value="Cape Verde">Cape Verde</option> 
                            </select>
                        </div>
                    </div>

                </div>
            </div>


        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
                <div class="panel-heading"><h6 class="panel-title"><i class="icon-pencil"></i> Product details</h6></div>
                <div class="panel-body">
                        <div class="block-inner">
                            <textarea class="editor" placeholder="Enter text ..."></textarea>
                        </div>
                </div>
            </div>
    </div>
</div>

<div class="form-actions text-right">
    <input type="reset" value="Cancel" class="btn btn-danger">
    <input type="submit" value="Submit report" class="btn btn-primary">
</div>





</form>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
    <script type="text/javascript" src="<?php echo e(asset('backend_assets/js/product.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Backend.layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/Backend/Admin/Product/product.blade.php ENDPATH**/ ?>