<?php include_once('view/template/admin/inc/header.php'); ?>	
  <body>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
	
	  <div id="login-page">
	  	<div class="container">
		      <form class="form-login" action="login.php" method="post" id="form1">
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
				<?php
					if (isset($_GET['msg'])) {
						$msg = $_GET['msg'];
						switch ($msg) {
							case '0':
								echo "<p style='color:red'><strong>Sai tên đăng nhập hoặc mật khẩu</strong></p>";
								break;
							case '1':
								echo "<p style='color:red'><strong>Tên đăng nhập đã tồn tại!</strong></p>";
								break;
							case '2':
								echo "<p style='color:red'><strong>Email đã tồn tại!</strong></p>";
								break;
							case '3':
								echo "<p style='color:green'><strong>Đăng kí thành công</strong></p>";
								break;
							default:
								break;
						}
					}
				?>			
		        </div>	
		      </form>	 
		      <!-- Modal -->
	          <div role="dialog" tabindex="-1" id="myModal" class="modal fade" >
	              <div class="modal-dialog">
	              <script type="text/javascript">
				        $().ready(function() {
				          // validate signup form on keyup and submit
				          $("#form2").validate({
				            rules: {
				              username: {
				                required: true,
				                minlength: 5
				              },
				              email: {
				                required: true,
				              },
				              password: {
				                required: true,
				                minlength: 5
				              },
				            },
				            messages: {
				              username: {
				                required: "<span style='color:red; font-weight:bold'>Username không được để trống!!</span>",
				                minlength: "<span style='color:red; font-weight:bold'>Username tối thiểu 5 kí tự !!</span>"
				              },
				              email: {
				                required: "<span style='color:red; font-weight:bold'>Email không được để trống!!</span>",
				              },
				              password: {
				                required: "<span style='color:red; font-weight:bold'>Password không được để trống!!</span>",
				                minlength: "<span style='color:red; font-weight:bold'>Password tối thiểu 5 kí tự !!</span>"
				              },
				            }
				          });
				        });
				    </script> 
	              	<form method = "post" action="signin.php" id="form2">
	                  <div class="modal-content">
	                      <div class="modal-header">
	                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	                          <h4 class="modal-title">Đăng kí</h4>
	                      </div>
	                      <div class="modal-body">
	                          <input type="text" name="username" placeholder="Username" autocomplete="off" class="form-control placeholder-no-fix">
	                      </div>
	                      <div class="modal-body">
	                          <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
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
    <script src="view/template/admin/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="view/template/admin/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("view/template/admin/img/login-bg.jpg", {speed: 500});
    </script>
  </body>
</html>
