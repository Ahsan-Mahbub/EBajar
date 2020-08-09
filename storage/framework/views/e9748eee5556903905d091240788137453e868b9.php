<div class="sidebar">
	<div class="sidebar-content">
		<ul class="navigation">
			<li class="<?php echo e((request()->is('admin')) ? 'active' : ''); ?>"><a href="<?php echo e(url('/admin')); ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
			<li>
				<a href="#"><span>Account Settings</span><i class="icon-user4"></i></a>
				<ul>
					<li><a href="form_components.html">Form components</a></li>
					<li><a href="form_layouts.html">Form layouts</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Address Settings</span><i class="icon-location4"></i></a>
				<ul>
					<li class="<?php echo e((request()->is('admin/division')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/division')); ?>">Division</a></li>
					<li class="<?php echo e((request()->is('admin/district')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/district')); ?>">District</a></li>
					<li class="<?php echo e((request()->is('admin/upzilla')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/upzilla')); ?>">Upzilla</a></li>
					<li><a href="form_layouts.html">Form layouts</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Category Settings</span><i class="icon-aid"></i></a>
				<ul>
					<li class="<?php echo e((request()->is('admin/category')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/category')); ?>">Category</a></li>
					<li class="<?php echo e((request()->is('admin/sub_category')) ? 'active' : ''); ?>" ><a href="<?php echo e(url('/admin/sub_category')); ?>">Sub Category</a></li>
				</ul>
			</li>
			<li class="<?php echo e((request()->is('admin/brand')) ? 'active' : ''); ?>" >
				<a href="<?php echo e(url('/admin/brand')); ?>"><span>Brand</span><i class="icon-briefcase"></i></a>
				
			</li>
			<li>
				<a href="#"><span>Products</span><i class="icon-user4"></i></a>
				<ul>
					<li><a href="form_components.html">Form components</a></li>
					<li><a href="form_layouts.html">Form layouts</a></li>
				</ul>
			</li>
			<li class="<?php echo e((request()->is('admin/slider')) ? 'active' : ''); ?>" >
				<a href="<?php echo e(url('/admin/slider')); ?>"><span>Slider</span><i class="icon-archive"></i></a>
				
			</li>
		</ul>
	</div>
</div><?php /**PATH /home/jubair/Desktop/E-commerce/EBajara/resources/views/Backend/layouts/sidebar.blade.php ENDPATH**/ ?>