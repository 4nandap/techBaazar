<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.css')
</head>
<body>
    <!-- BEGIN #page-container -->
	<div id="page-container" class="fade show">
		@include('layouts.header')

		@yield('content')

        @include('layouts.footer')
	</div>
	<!-- END #page-container -->

    @include('layouts.theme')
    @include('layouts.js')
</body>
</html>
