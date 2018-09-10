<?php include_once('view/template/admin/inc/header.php'); ?>	
<?php $d = "active";
	  $a=$b=$c="";
?>	 
<?php include_once('view/template/admin/inc/left_bar.php'); ?>	
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> THÊM NGƯỜI DÙNG</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" enctype="multipart/form-data" action="adminIndexUser.php?action=add" method="post" id="form1">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Username</label>
								<div class="col-sm-10">
									<input type="text" name="username" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Password</label>
								<div class="col-sm-10">
									<input type="password" name="password" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Fullname</label>
								<div class="col-sm-10">
									<input type="text" name="fullname" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Avatar</label>
								<div class="col-sm-10">
									<input type="file" name="avatar" class="form-control">
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
									<input type="number" name="phone" class="form-control">
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" name="email" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Chức vụ</label>
								<div class="col-sm-5">
									<select class="form-control" name="id_role">
									<?php foreach($listRole as $key => $role):?>
										<option value="<?php echo $role['id_role'];?>"><?php echo $role['name_role'] ?></option>
									<?php endforeach ?>
								</select>
								</div>	
							</div>
							<div align="center">
								<input type="submit" class="btn btn-info" value="Thêm">
							</div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
