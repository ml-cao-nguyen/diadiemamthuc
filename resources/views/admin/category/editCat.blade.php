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
          	<h3><i class="fa fa-angle-right"></i> SỬA DANH MỤC</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                      <form class="form-horizontal style-form" action="adminIndexCat.php?action=edit&cid=<?php echo $infoCat['id_cat'];?>"  id="form1" method="post">
							<div class="form-group"></div>
							<div class="form-group">
								<label class="col-sm-2 col-sm-2 control-label">Tên danh mục:</label>
								<div class="col-sm-10">
									<input type="text" name="name_cat" class="form-control" value="<?php echo $infoCat['name_cat'];?>">
								</div>
							</div>
              <div class="form-group">
                <label class="col-sm-2 col-sm-2 control-label">Mô tả:</label>
                <div class="col-sm-10">
                  <textarea name="introduce" class="form-control" rows=5 ><?php echo $infoCat['introduce'];?></textarea>
                </div>
              </div>
							<div align="center">
								<input type="submit" name="submit" class="btn btn-info" value="Sửa">
							</div>
                      </form>
                  </div>
          		</div><!-- col-lg-12-->      	
          	</div><!-- /row -->
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
