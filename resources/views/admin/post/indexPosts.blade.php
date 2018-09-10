<?php include_once('view/template/admin/inc/header.php'); ?>
<?php $c = "active";
	  $a=$b=$d="";
?>	 
<?php include_once('view/template/admin/inc/left_bar.php'); ?>	 
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> QUẢN LÍ BÀI ĐĂNG</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
	                      	<form class="form-horizontal style-form" action="adminIndexPosts.php?action=search" method="post">
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
			  				<br>
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
									  <th>Tiêu đề</th>
									  <th>Địa điểm</th>
									  <th>Danh mục</th>
									  <th>Hình ảnh</th>
									  <th>Tác giả</th>
									  <th width="140px">Ngày đăng</th>
									  <th style="width:100px">Thao tác</th>
								  </tr>
                              </thead>
                              <tbody>
								<?php 
									if($listPosts!=null){
										foreach($listPosts as $key => $posts){
									
								?>
								  <tr>
									  <td class="numeric"><?php echo $posts['id_post']; ?></td>
									  <td><?php echo $posts['title']; ?></td>	
									  <td><?php echo $posts['location']; ?></td>								  
									  <td><?php echo $posts['name_cat']; ?></td>									 <td>
									  		<?php if($posts['image']!=null){ ?>
				                            <img src="files/images/<?php echo $posts['image']?>" width="120">
				                          <?php }else{?>
				                            <img src="files/images/image.jpg" width="120">
				                          <?php }?>
									  </td>	 							  
									  <td><?php echo $posts['fullname']; ?></td>									  
									  <td><?php echo $posts['time_create']; ?></td>									  
																  
									  <td align = "center">
									  		<a class="btn btn-primary btn-xs" 
										  		href="adminIndexPosts.php?action=update&pid=<?php echo $posts['id_post']; ?>">
										  		<i class="fa fa-pencil"></i>
									  		</a> - 
                                     		<a class="btn btn-danger btn-xs" 
	                                     		href="adminIndexPosts.php?action=del&pid=<?php echo $posts['id_post']; ?>">
	                                     		<i class="fa fa-trash-o "></i>
                                     		</a>	
									  </td>									  
								  </tr>
								<?php 
											}
										}else{
								?>
								 <tr><td colspan= "8">Không có bài viết!!!</td></tr>
								 <?php 	} ?>
                              </tbody>
							</table>
							<div style="margin-left:20px">
								<a href="adminIndexPosts.php?action=create"><i class="fa fa-check"></i>Thêm bài đăng</a>
							</div>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
