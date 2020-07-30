<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1">
<title>E Bajara @yield('title')</title>
@include('Backend.layouts.css')
@include('Backend.layouts.js')
</head>
<body>
@include('Backend.layouts.navbar')
 	<div class="page-container">
		@include('Backend.layouts.sidebar')
	 	<div class="page-content">
		@include('Backend.layouts.header')
		@yield('content')
        @include('Backend.layouts.footer')
		</div>
	</div>
</body>
</html>