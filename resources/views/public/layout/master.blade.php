<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Quản lí địa điểm ẩm thực</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  @include('public.layout.styles')

  @include('public.layout.scripts')  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- start sb-search -->
<div id="sb-search" class="sb-search" style="margin:10px 0px;">
	<form method="post" action="publicIndexSearch.php">
		<input class="sb-search-input" placeholder="Nhập tìm kiếm..." type="text" value="" name="search" id="search">
		<input class="sb-search-submit" type="button" value="">
		<span class="sb-icon-search"></span>
	</form>
	<script src="{{ asset('template/public/js/classie.js') }}"></script>
	<script src="{{ asset('template/public/js/uisearch.js') }}"></script>
	<script>
			new UISearch( document.getElementById( 'sb-search' ) );
	</script>
</div>
<div class="wrapper">
  @include('public.layout.header')

  @yield('content')

  @include('public.layout.footer')
</body>
</html>
