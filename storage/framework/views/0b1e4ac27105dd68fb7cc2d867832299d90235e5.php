<div class="sidebar">
	<div class="sidebar-content">
		<ul class="navigation">
			<li class="<?php echo e((request()->is('admin')) ? 'active' : ''); ?>"><a href="<?php echo e(url('/admin')); ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
			<li>
				<a href="#"><span>Address Settings</span><i class="icon-location4"></i></a>
				<ul>
					<li class="<?php echo e((request()->is('admin/division')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/division')); ?>">Division</a></li>
					<li class="<?php echo e((request()->is('admin/district')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/district')); ?>">District</a></li>
					<li class="<?php echo e((request()->is('admin/slider')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/slider')); ?>">Slider</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Category Settings</span><i class="icon-aid"></i></a>
				<ul>
					<li class="<?php echo e((request()->is('admin/category')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/category')); ?>">Category</a></li>
					<li class="<?php echo e((request()->is('admin/sub_category')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/sub_category')); ?>">Sub Category</a></li>
					<li class="<?php echo e((request()->is('admin/brand')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/brand')); ?>">Brand</a></li>
				</ul>
			</li>
            <li class="<?php echo e((request()->is('admin/color')) ? 'active' : ''); ?>" >
                <a href="<?php echo e(route('color.index')); ?>"><span>Color</span><i class="icon-balloon"></i></a>
            </li>
			<li>
				<a href="#"><span>Products</span><i class="icon-android"></i></a>
				<ul>
					<li class="<?php echo e((request()->is('admin/product/create')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/product/create')); ?>">Add Product</a></li>
					<li class="<?php echo e((request()->is('admin/product')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/product')); ?>">Product List</a></li>

				</ul>
			</li>
			<li class="<?php echo e((request()->is('admin/slider')) ? 'active' : ''); ?>" >
				<a href="<?php echo e(url('/admin/slider')); ?>"><span>Slider</span><i class="icon-archive"></i></a>

			</li>
		</ul>
	</div>
</div>
<?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/Backend/layouts/sidebar.blade.php ENDPATH**/ ?>