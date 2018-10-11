<!DOCTYPE html>
<html lang="en">
  <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Dashboard">
		<meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

		<title>Admin</title>

		<!-- Bootstrap core CSS -->
		<link href="{{ asset('template/admin/css/bootstrap.css') }}" rel="stylesheet">
		<!--external css-->
		<link href="{{ asset('template/admin/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="{{ asset('template/admin/css/zabuto_calendar.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('template/admin/js/gritter/css/jquery.gritter.css') }}" />
		<link rel="stylesheet" type="text/css" href="{{ asset('template/admin/lineicons/style.css') }}">    
		<!-- Custom styles for this template -->
		<link href="{{ asset('template/admin/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('template/admin/css/style-responsive.css') }}" rel="stylesheet">
		<script src="{{ asset('template/admin/js/jquery-1.11.1.min.js') }}"></script>
		<script src="{{ asset('template/admin/js/jquery.js') }}"></script>
		<script src="{{ asset('template/admin/js/jquery.validate.js') }}"></script>
		<script src="{{ asset('template/admin/js/jquery.validate.min.js') }}"></script>
	</head>
  <body>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
	
	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" action="{{ route('login') }}" method="post" id="form1">
			  	{!! csrf_field() !!}
		        <h2 class="form-login-heading">Đăng nhập</h2>
		        <div class="login-wrap">
					<input type="text" class="form-control" name="username" id="username" placeholder="Username" autofocus>
					<br>
					<input type="password" class="form-control" name="password" id="password" placeholder="Password">
					<br>
					<input type="submit" class="btn btn-theme btn-block" name="login" value="Đăng nhập">
					<br>	
					<a data-toggle="modal" href="#myModal" style="margin-left: 42%">Đăng kí</a>
					<br>
		        </div>	
		      </form>	 
		      <!-- Modal -->
	          <div role="dialog" tabindex="-1" id="myModal" class="modal fade" >
	              <div class="modal-dialog">
	              	<form method = "post" action="{{ route('register') }}" id="form2">
					  {!! csrf_field() !!}
	                  <div class="modal-content">
	                      <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                          <h4 class="modal-title">Đăng kí</h4>
	                      </div>
	                      <div class="modal-body">
	                          <input type="text" name="username" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix">
	                      </div>
						  <div class="modal-body">
	                          <input type="text" name="fullname" placeholder="Fullname" autocomplete="off" class="form-control placeholder-no-fix">
	                      </div>
	                      <div class="modal-body">
	                          <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
	                      </div>
						  <div class="modal-body">
	                          <input type="text" name="phone" placeholder="Phone" autocomplete="off" class="form-control placeholder-no-fix">
	                      </div>
	                      <div class="modal-body">
	                          <input type="password"  name="password" placeholder="Password" autocomplete="off" class="form-control placeholder-no-fix">
	                      </div>
	                      <div class="modal-footer centered">
	                          <button data-dismiss="modal" class="btn btn-theme04" type="button">Hủy</button>
	                          <input type="submit"  class="btn btn-theme03" value="Đăng kí">
	                      </div>
	                  </div>
	                  </form>
	              </div>
	          </div>
	          <!-- modal --> 	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="{{ asset('template/admin/js/bootstrap.min.js') }}"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="{{ asset('template/admin/js/jquery.backstretch.min.js') }}"></script>
    <script>
        $.backstretch("{{ asset('template/admin/img/login-bg.jpg') }}", {speed: 1000});
    </script>
  </body>
</html>
