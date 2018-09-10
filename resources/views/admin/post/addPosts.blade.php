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
          	<h3><i class="fa fa-angle-right"></i> THÊM BÀI ĐĂNG</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
						<form class="form-horizontal style-form" action="adminIndexPosts.php?action=add" enctype="multipart/form-data" method="post" id="form1">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Tiêu đề</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="title">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Địa điểm</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="location">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Danh mục</label>
								<div class="col-sm-10">
									<select class="form-control" name="id_cat">
									<?php foreach($listCat as $key => $cat): ?>
										<option value="<?php echo $cat['id_cat'];?>"><?php echo $cat['name_cat'];?></option>
									<?php endforeach;?>
									</select>
								</div>	
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Image</label>
								<div class="col-sm-10">
									<img src="">
									<input type="file" name="image" class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Mô tả</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="preview" rows="5"></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Chi tiết</label>
								<div class="col-sm-10">
									<textarea class="form-control" name="detail" rows="15"></textarea>
								</div>
							</div>

							<div align="center">
								<input type="submit" value="Đăng bài" class="btn btn-info">
							</div>
						</form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
