<div class="sidebar">
	<div class="sidebar-content">
		<ul class="navigation">
			<li class="<?php echo e((request()->is('admin')) ? 'active' : ''); ?>"><a href="<?php echo e(url('/admin')); ?>"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
			<li>
				<a href="#"><span>Accunt</span><i class="icon-user4"></i></a>
				<ul>
					<li><a href="form_components.html">Form components</a></li>
					<li><a href="form_layouts.html">Form layouts</a></li>
					<li><a href="form_grid.html">Inputs grid</a></li>
					<li><a href="wysiwyg.html">WYSIWYG editor</a></li>
					<li><a href="validation.html">Validation</a></li>
					<li><a href="file_uploader.html">Multiple file uploader</a></li>
					<li><a href="form_snippets.html">Form snippets</a></li>
				</ul>
			</li>
		</ul>
	</div>
</div><?php /**PATH /home/kiri2ka/Laravel/xxx-xxx/School/resources/views/Backend/layouts/sidebar.blade.php ENDPATH**/ ?>