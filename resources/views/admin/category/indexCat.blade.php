<?php include_once('view/template/admin/inc/header.php'); ?>	
<?php $b = "active";
	  $a=$c=$d="";
?> 
<?php include_once('view/template/admin/inc/left_bar.php'); ?>	 
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> QUẢN LÍ DANH MỤC</h3>
		  		<div class="row mt">
			  		<div class="col-lg-12">
                      <div class="content-panel">
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
									  <th>Tên danh mục</th>
									  <th>Mô tả</th>
									  <th>Thao tác</th>
								  </tr>
                              </thead>
                              <tbody>
									<?php foreach ($listCat as $key => $cat): ?>
										<tr>
											<td class="numeric"><?php echo $cat['id_cat']; ?></td>
											<td><?php echo $cat['name_cat']; ?></td>	
											<td><?php echo $cat['introduce']; ?></td>								  
											<td align = "center">
												<a class="btn btn-primary btn-xs" 
										  			href="adminIndexCat.php?action=update&cid=<?php echo $cat['id_cat']; ?>">
										  		<i class="fa fa-pencil"></i>
										  		</a> - 
	                                     		<a class="btn btn-danger btn-xs" 
		                                     		href="adminIndexCat.php?action=del&cid=<?php echo $cat['id_cat']; ?>">
		                                     		<i class="fa fa-trash-o "></i>
	                                     		</a>	
											</td>									  
										</tr>
									<?php endforeach ?>
                              </tbody>
							</table>
							<div style="margin-left:20px">
								<a href="adminIndexCat.php?action=create"><i class="fa fa-check"></i>Thêm danh mục</a>
							</div>
                          </section>
                  </div><!-- /content-panel -->
               </div><!-- /col-lg-4 -->			
		  	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
