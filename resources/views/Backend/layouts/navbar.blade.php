<div class="navbar navbar-inverse" role="navigation">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ url('/admin') }}"><img src="{{asset('backend_assets/images/ebajara2.png')}}" alt="EBajara"></a>
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
					<span style="color: #000; font-variant-caps: small-caps;">{{Auth::user()->name}}</span>
					<i class="caret"></i>
				</a>
				<ul class="dropdown-menu dropdown-menu-right icons-right">

					<li class="{{ (request()->is('admin/profile')) ? 'active' : '' }}"><a href="{{url('/admin/profile')}}"><i class="icon-user"></i> Profile Change</a></li>
					
						<form  action="{{ route('logout') }}" method="POST">
		                    @csrf
		                    <button><i class="icon-exit"></i> Logout</button>
		                </form>
					</li>
				</ul>
			</li>
		</ul>
	</div>