<div class="sidebar">
	<div class="sidebar-content">
		<ul class="navigation">
			<li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a href="{{ url('/admin') }}"><span>Dashboard</span> <i class="icon-screen2"></i></a></li>
			<li>
				<a href="#"><span>Address Settings</span><i class="icon-location4"></i></a>
				<ul>
					<li class="{{ (request()->is('admin/division')) ? 'active' : '' }}" ><a href="{{ url('/admin/division')}}">Division</a></li>
					<li class="{{ (request()->is('admin/district')) ? 'active' : '' }}" ><a href="{{ url('/admin/district')}}">District</a></li>
					<li class="{{ (request()->is('admin/slider')) ? 'active' : '' }}" ><a href="{{ url('/admin/slider')}}">Slider</a></li>
				</ul>
			</li>
			<li>
				<a href="#"><span>Category Settings</span><i class="icon-aid"></i></a>
				<ul>
					<li class="{{ (request()->is('admin/category')) ? 'active' : '' }}" ><a href="{{ url('/admin/category')}}">Category</a></li>
					<li class="{{ (request()->is('admin/sub_category')) ? 'active' : '' }}" ><a href="{{ url('/admin/sub_category')}}">Sub Category</a></li>
					<li class="{{ (request()->is('admin/brand')) ? 'active' : '' }}" ><a href="{{ url('/admin/brand')}}">Brand</a></li>
				</ul>
			</li>
            <li class="{{ (request()->is('admin/color')) ? 'active' : '' }}" >
                <a href="{{ route('color.index')}}"><span>color</span><i class="icon-balloon"></i></a>
            </li>
			<li>
				<a href="#"><span>Products</span><i class="icon-android"></i></a>
				<ul>
					<li class="{{ (request()->is('admin/product/create')) ? 'active' : '' }}" ><a href="{{ url('/admin/product/create')}}">Add Product</a></li>
					<li class="{{ (request()->is('admin/product')) ? 'active' : '' }}" ><a href="{{ url('/admin/product')}}">Product List</a></li>

				</ul>
			</li>
			<li class="{{ (request()->is('admin/slider')) ? 'active' : '' }}" >
				<a href="{{ url('/admin/slider')}}"><span>Slider</span><i class="icon-archive"></i></a>

			</li>
		</ul>
	</div>
</div>
