
<div class="breadcrumb-line">
	<ul class="breadcrumb">
		<li class="{{ (request()->is('admin')) ? 'active' : '' }}"><a href="{{ url('/admin') }}">Home</a></li>
		<li class="active">@yield('head_name')</li>
	</ul>

	<div class="visible-xs breadcrumb-toggle">
		<a class="btn btn-link btn-lg btn-icon" data-toggle="collapse" data-target=".breadcrumb-buttons"><i class="icon-menu2"></i></a>
	</div>

	<ul class="breadcrumb-buttons collapse">
		<li class="dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-search3"></i> <span>{{ __('color.search') }}</span> <b class="caret"></b></a>
			<div class="popup dropdown-menu dropdown-menu-right">
				<div class="popup-header">
					<a href="#" class="pull-left"><i class="icon-paragraph-justify"></i></a>
					<span>Quick search</span>
					<a href="#" class="pull-right"><i class="icon-new-tab"></i></a>
				</div>
				<form action="#" class="breadcrumb-search">
					<input type="text" placeholder="Type and hit enter..." name="search" class="form-control autocomplete">
					<div class="row">
						<div class="col-xs-6">
							<label class="radio">
								<input type="radio" name="search-option" class="styled" checked="checked">
								Everywhere
							</label>
							<label class="radio">
								<input type="radio" name="search-option" class="styled">
								Invoices
							</label>
						</div>

						<div class="col-xs-6">
							<label class="radio">
								<input type="radio" name="search-option" class="styled">
								Users
							</label>
							<label class="radio">
								<input type="radio" name="search-option" class="styled">
								Orders
							</label>
						</div>
					</div>

					<input type="submit" class="btn btn-block btn-success" value="Search">
				</form>
			</div>
		</li>

		<li class="language dropdown">
			<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/flags/german.png" alt=""> <span>{{ __('color.change_language') }}</span> <b class="caret"></b></a>
			<ul class="dropdown-menu dropdown-menu-right icons-right">
				<li class="{{ (request()->is('admin/locale/en')) ? 'active' : '' }}"><a href="locale/en"><img src="images/flags/english.png" alt=""> English</a></li>
				<li class="{{ (request()->is('admin/locale/bn')) ? 'active' : '' }}"><a href="locale/bn"><img src="images/flags/bangladesh.png" alt="">Bangla</a></li>
			</ul>
		</li>
	</ul>
</div>
<h1>@yield('head')</h1>

