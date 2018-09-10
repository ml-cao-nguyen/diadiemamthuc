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
          	<h3><i class="fa fa-angle-right"></i> SỬA NGƯỜI DÙNG</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" enctype="multipart/form-data" action="adminIndexUser.php?action=edit&uid=<?php echo $infoUser['id_user'];?>" method="post">
					  
							<div class="form-group">
								<label class="col-lg-2 col-sm-2 control-label">Username</label>
								<div class="col-lg-10">
									<p class="form-control-static"><?php echo $infoUser['username'];?></p>
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
									<input type="text" name="fullname" value="<?php echo $infoUser['fullname'];?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Avatar</label>
								<div class="col-sm-10">
										<?php if($infoUser['avatar']!=null){ ?>
											<img src="files/avatar/<?php echo $infoUser['avatar'];?>" class="img-circle" style="width:200px;height:200px;margin-left:35%;">
										<?php }else{ ?>
											<img src="files/avatar/avatar.jpg" class="img-circle" style="width:200px;height:200px;margin-left:35%;">
										<?php } ?>
									<br /><br />
									<input type="file" name="avatar" class="form-control">
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Phone</label>
								<div class="col-sm-10">
									<input type="number" name="phone" value="<?php echo $infoUser['phone'];?>" class="form-control">
								</div>
							</div>
                            <div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="email" name="email" value="<?php echo $infoUser['email'];?>" class="form-control">
								</div>
							</div>
							<?php if($ssUser['id_user']==1){?>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Chức vụ</label>
								<div class="col-sm-5">
									<select class="form-control" name="id_role">
									<?php 
										$str = "";
										foreach($listRole as $key => $role):
										if($role['id_role']==$infoUser['id_role']){
											$str = "selected";
										}else{
											$str = "";
										}
									?>
										<option <?php echo $str;?> value="<?php echo $role['id_role'];?>"><?php echo $role['name_role'] ;?></option>
									<?php endforeach ?>
									</select>
								</div>	
							</div>
							<?php }?>
							<div align="center">
								<input type="submit" value="Sửa" class="btn btn-info">
							</div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
