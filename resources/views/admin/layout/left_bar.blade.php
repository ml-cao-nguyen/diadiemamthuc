<?php
	include_once("model/userModel.php");
	$ssUser = $_SESSION['ssUser'];
	$id_user = $ssUser['id_user'];
	$mUser = new userModel();
	$sUser = $mUser->getUser($id_user);
?>
<body>
  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="publicIndex.php" class="logo"><b>Admin</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Đăng xuất</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
	  <?php if($ssUser['id_role']==1){?>
	  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="adminIndexUser.php?action=update&uid=<?php echo $sUser['id_user']?>">
                  <?php if($sUser['avatar']!=null){ ?>
                    <img src="files/avatar/<?php echo $sUser['avatar'];?>" class="img-circle" style="width:100px;height:100px;"></a></p>
                  <?php }else{?>
                    <img src="files/avatar/avatar.jpg" class="img-circle" style="width:100px;height:100px;"></a></p>
                  <?php }?>

              	  <h5 class="centered"><?php echo $sUser['fullname']?></h5>
              	  <br />
                  <li>
                      <a class="<?php echo $a;?>" href="adminIndex.php">
                          <i class="fa fa-desktop"></i>
                          <span>Trang chủ</span>
                      </a>
                  </li>
				  <li>
                      <a class="<?php echo $b;?>" href="adminIndexCat.php">
                          <i class="fa fa-book"></i>
                          <span>Danh mục</span>
                      </a>
                  </li>
				  <li>
                      <a class="<?php echo $c;?>" href="adminIndexPosts.php">
                          <i class="li_news"></i>
                          <span>Bài đăng</span>
                      </a>
                  </li>
				  <li>
                      <a class="<?php echo $d;?>" href="adminIndexUser.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Người dùng</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  <?php }elseif($ssUser['id_role']==2){?>   
	  <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered">
                    <a href="adminIndexUser.php?action=update&uid=<?php echo $sUser['id_user']?>">
                      <?php if($sUser['avatar']!=null){ ?>
                        <img src="files/avatar/<?php echo $sUser['avatar'];?>" class="img-circle" style="width:100px;height:100px;"></a></p>
                      <?php }else{?>
                        <img src="files/avatar/avatar.jpg" class="img-circle" style="width:100px;height:100px;"></a></p>
                      <?php }?>
                    </a>
                  </p>

              	  <h5 class="centered"><?php echo $sUser['fullname']?></h5>
              	  	
                  <li>
                      <a class="<?php echo $a;?>" href="adminIndex.php">
                          <i class="fa fa-desktop"></i>
                          <span>Trang chủ</span>
                      </a>
                  </li>
				  <li>
                      <a class="<?php echo $c;?>" href="adminIndexPosts.php">
                          <i class="li_news"></i>
                          <span>Bài đăng</span>
                      </a>
                  </li>
				  <li>
                      <a class="<?php echo $d;?>" href="adminIndexUser.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Người dùng</span>
                      </a>
                  </li>
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
	  <?php }?>
    