<?php include_once('view/template/admin/inc/header.php'); ?>	
<?php $a = "active";
	  $b=$c=$d="";
?>
<?php include_once('view/template/admin/inc/left_bar.php'); ?>	

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                	<div class="row mtbox">
                		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                			<div class="box1">
				  		        <span class="li_heart"></span>
				  			    <h3><?php echo $num_posts_today['num_posts']; ?></h3>
                			</div>
				  			<p><?php echo $num_posts_today['num_posts']; ?> bài đã được đăng hôm nay. Whoohoo!</p>
                		</div>
                		<div class="col-md-2 col-sm-2 box0">
                			<div class="box1">
				  			<span class="li_cloud"></span>
				  			<h3><?php echo $num_posts['num_posts']; ?></h3>
                			</div>
				  			<p><?php echo $num_posts['num_posts']; ?> tổng số bài viết đã được đăng.</p>
                		</div>
                		<div class="col-md-2 col-sm-2 box0">
                			<div class="box1">
				  			<span class="li_stack"></span>
				  			<h3><?php echo $num_user['num_user']; ?></h3>
                			</div>
				  			<p><?php echo $num_user['num_user']; ?> thành viên hoạt động.</p>
                		</div>
                	</div><!-- /row mt -->	
                    <div class="row mt">
                      	
                    <div class="col-md-4 mb">
                      <!-- INSTAGRAM PANEL -->
                      <div class="instagram-panel pn">
                        <i class="fa fa-instagram fa-4x"></i>
                        <p>@THISISYOU<br/>
                        </p>
                        <p><i class="fa fa-comment"></i> | <i class="fa fa-heart"></i> </p>
                      </div>
                    </div><!-- /col-md-4 -->
            	<div class="col-md-4 col-sm-4 mb">
            		<div class="white-panel pn">
            			<div class="white-header">
	  			              <h5>BÀI ĐĂNG MỚI</h5>
            			</div>
            			<div class="row">
        				<div class="col-sm-6 col-xs-6 goleft">
                <a href="publicIndexDetail.php?pid=<?php echo $listTopPosts[0]['id_post']?>">
        					<p><?php echo $listTopPosts[0]['title']?></p>
                </a>
        				</div>
        				<div class="col-sm-6 col-xs-6"></div>
                      		</div>
                      		<div class="centered">
                          <?php if($listTopPosts[0]['image']!=null){ ?>
                            <img src="files/images/<?php echo $listTopPosts[0]['image']?>" width="120">
                          <?php }else{?>
                            <img src="files/images/image.jpg" width="120">
                          <?php }?>
                      		</div>
                    		</div>
                    	</div><!-- /col-md-4 -->
                      	
						<div class="col-md-4 mb">
							<!-- WHITE PANEL - TOP USER -->
							<div class="white-panel pn">
								<div class="white-header">
									<h5>THÀNH VIÊN MỚI</h5>
								</div>
								<p>
                  <?php if($listTopUser[0]['avatar']!=null){ ?>
                      <img src="files/avatar/<?php echo $listTopUser[0]['avatar'] ?>" class="img-circle" width="80"></p>
                  <?php }else{ ?>
                     <img src="files/avatar/avatar.jpg" class="img-circle" width="80"">
                  <?php } ?>
								<p><b><?php echo $listTopUser[0]['fullname'] ?></b></p>
							</div>
						</div><!-- /col-md-4 -->
                    </div><!-- /row -->
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->                  
                  
      <div class="col-lg-3 ds">
          <h3>TEAM MEMBERS</h3>
          <!-- First Member -->
          <div class="desc">
            <div class="thumb">
              <img class="img-circle" src="files/avatar/<?php echo $listUser[0]['avatar'];?>" width="35px" height="35px" align="">
            </div>
            <div class="details">
              <p><a href="#"><?php echo $listUser[0]['fullname'];?></a><br/>
              <muted><?php echo $listUser[0]['email'];?></muted>
              </p>
            </div>
          </div>
          <!-- Second Member -->
          <div class="desc">
            <div class="thumb">
              <img class="img-circle" src="files/avatar/<?php echo $listUser[1]['avatar'];?>" width="35px" height="35px" align="">
            </div>
            <div class="details">
              <p><a href="#"><?php echo $listUser[1]['fullname'];?></a><br/>
                 <muted><?php echo $listUser[1]['email'];?></muted>
              </p>
            </div>
          </div>
          <!--COMPLETED ACTIONS DONUTS CHART-->
					<h3>THÔNG BÁO</h3>              
          <!-- First Action -->
          <?php foreach ($listTopUser as $key => $user) { ?>
          <div class="desc">
          	<div class="thumb">
          		<span class="badge bg-theme"><i class="fa fa-clock-o"></i></span>
          	</div>
          	<div class="details">
          		   <a href="#"><?php echo $user['username']; ?></a> đã đăng kí vào website.<br/>
          		</p>
          	</div>
          </div>
          <?php } ?>
          </div><!-- /col-lg-3 -->
          </div><! --/row -->
          </section>
      </section>
      <!--main content end-->
<?php include_once('view/template/admin/inc/footer.php'); ?>	
