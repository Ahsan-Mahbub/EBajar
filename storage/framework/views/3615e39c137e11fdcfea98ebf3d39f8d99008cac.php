<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?php echo e(url('/admin')); ?>"><img src="<?php echo e(asset('backend_assets/images/ebajara2.png')); ?>" alt="EBajara"></a>
			<a class="sidebar-toggle"><i class="icon-paragraph-justify2"></i></a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-icons">
				<span class="sr-only">Toggle navbar</span>
				<i class="icon-grid3"></i>
			</button>
			<button type="button" class="navbar-toggle offcanvas">
				<span class="sr-only">Toggle navigation</span>
				<i class="icon-paragraph-justify2"></i>
			</button>
		</div>

		<ul class="nav navbar-nav navbar-right collapse" id="navbar-icons">
			<li class="user dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown">
					<img src="asset(images/demo/users/face1.png)" alt="">
					<span style="color: #000; font-variant-caps: small-caps;"><?php echo e(Auth::user()->name); ?></span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">

					<li class="<?php echo e((request()->is('admin/profile')) ? 'active' : ''); ?>"><a href="<?php echo e(url('/admin/profile')); ?>"><i class="icon-user"></i> Profile Change</a></li>
					
						<form  action="<?php echo e(route('logout')); ?>" method="POST">
		                    <?php echo csrf_field(); ?>
		                    <button><i class="icon-exit"></i> Logout</button>
		                </form>
					</li>
				</ul>
			</li>
		</ul>
	</div><?php /**PATH /home/kiri2ka/Laravel/Running Project/EBajar/resources/views/Backend/layouts/navbar.blade.php ENDPATH**/ ?>