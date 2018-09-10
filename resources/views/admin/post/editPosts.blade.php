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
          	<h3><i class="fa fa-angle-right"></i> SỬA BÀI ĐĂNG</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
						<form class="form-horizontal style-form" action="adminIndexPosts.php?action=edit&pid=<?php echo $infoPosts['id_post']?>" enctype="multipart/form-data" id="form1" method="post">
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Tiêu đề</label>
								<div class="col-sm-10">
									<input type="text" name="title" value="<?php echo $infoPosts['title']?>" class="form-control">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Địa điểm</label>
								<div class="col-sm-10">
									<input type="text" class="form-control" name="location" value="<?php echo $infoPosts['location']?>">
								</div>
							</div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Danh mục</label>
								<div class="col-sm-10">
									<select class="form-control" name="id_cat">
									<?php foreach($listCat as $key => $cat):
										if($cat['id_cat']==$infoPosts['id_cat']){
												$str = "selected";
											}else{
												$str = "";
											}
									?>
										<option <?php echo $str;?> value="<?php echo $cat['id_cat']?>"><?php echo $cat['name_cat'];?></option>
									<?php endforeach ?>
								</select>
								</div>	
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Image</label>
								<div class="col-sm-10">
									<?php if($infoPosts['image']!=null){ ?>
										<img src="files/images/<?php echo $infoPosts['image']?>" width="300" height="170">
									<?php }else{?>
										<img src="files/images/image.jpg" width="300" height="170">
									<?php }?>
									<br /><br />
									<input type="file" name="image" class="form-control">
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Mô tả</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="5" name="preview"><?php echo $infoPosts['preview'];?></textarea>
								</div>
							</div>
							
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Chi tiết</label>
								<div class="col-sm-10">
									<textarea class="form-control" rows="15" name="detail"><?php echo $infoPosts['detail'];?></textarea>
								</div>
							</div>

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
