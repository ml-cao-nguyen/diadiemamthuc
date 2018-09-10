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
          	<h3><i class="fa fa-angle-right"></i> QUẢN LÍ NGƯỜI DÙNG</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">			
                      <div class="content-panel">
                      	<form class="form-horizontal style-form" action="adminIndexUser.php?action=search" method="post">
			  				<div class="form-group" >
								<div class="col-sm-3" style="margin-left:55%">
									<input type="text" name="searchTxt" class="form-control" >
								</div>
								<div>
									<input type="submit" class="btn btn-info" name="search" value="Tìm kiếm">
									<input type="submit" class="btn btn-info" name="showall" value="Hiển thị tất cả">
								</div>
							</div>
			  			</form>
				  		<?php
						if (isset($_GET['msg'])) {
							$msg = $_GET['msg'];
							switch ($msg) {
							case '0':
								echo "<p style='color:red;margin-left:10px'><strong>Thêm thất bại</strong></p>";
								break;
							case '1':
								echo "<p style='color:green;margin-left:10px'><strong>Thêm thành công!</strong></p>";
								break;
							case '2':
								echo "<p style='color:red;margin-left:10px'><strong>Sửa thất bại!</strong></p>";
								break;
							case '3':
								echo "<p style='color:green;margin-left:10px'><strong>Sửa thành công</strong></p>";
								break;
							case '4':
								echo "<p style='color:red;margin-left:10px'><strong>Xóa thất bại!</strong></p>";
								break;
							case '5':
								echo "<p style='color:green;margin-left:10px'><strong>Xóa thành công</strong></p>";
								break;
							default:
								break;
							}
						}
						?>
                          <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
								  <tr>
									  <th class="numeric">ID</th>
									  <th>Username</th>
									  <th>Fullname</th>
									  <th style="width:70px;">Chức vụ</th>
									  <th style="width:60px;">Avatar</th>
									  <th style="width:100px;">Thao tác</th>
								  </tr>
                              </thead>
                              <tbody>
								<?php 
									if($listUser!=null){
										foreach($listUser as $key=>$user){
								?>
								  <tr>
									    <td class="numeric"><?php echo $user['id_user']; ?></td>
									    <td><?php echo $user['username']; ?></td>									  
									    <td><?php echo $user['fullname']; ?></td>									  									  
									    <td><?php echo $user['name_role']; ?></td>									  
									    <td>
										    <?php if($user['avatar']!=null){ ?>
												<img src="files/avatar/<?php echo $user['avatar'];?>" class="img-circle" style="width:50px;height:50px;">
											<?php }else{?>
												<img src="files/avatar/avatar.jpg" class="img-circle" style="width:50px;height:50px;">
											<?php }?>
										</td>									  
									    <td align = "center">
										    <a class="btn btn-primary btn-xs" 
									  			href="adminIndexUser.php?action=update&uid=<?php echo $user['id_user']; ?>">
									  		<i class="fa fa-pencil"></i>
									  		</a> - 
                                     		<a class="btn btn-danger btn-xs" 
	                                     		href="adminIndexUser.php?action=del&uid=<?php echo $user['id_user']; ?>">
	                                     		<i class="fa fa-trash-o "></i>
                                     		</a>	
										</td>									  
								  </tr>
								 <?php 
										}
									}else{			
								 ?>
								 	<tr><td colspan= "6">Không có kết quả phù hợp!!!</td></tr>
								 <?php }?>
                              </tbody>
							</table>
							<div style="margin-left:20px">
								<a href="adminIndexUser.php?action=create"><i class="fa fa-check"></i>Thêm người dùng</a>
							</div>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
