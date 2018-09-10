<?php include("view/template/public//inc/header.php")?>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '1935412906691839',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
 <div class="blog">
 	<!-- start main_content -->
	<div class="blog_left">
	    <h3 class="style"><?php echo $infoPosts['title'] ?></h3>
	    <div class="extra">
	   		 Địa điểm: <?php echo $infoPosts['location'] ?><br />
			Đăng bởi: <span class="username"><?php echo $infoPosts['fullname']; ?> </span> | 
			<time pubdate="">
				<?php echo $infoPosts['time_create'] ?>					
			</time>
	    </div>
	    <?php if($infoPosts['image']!=null){ ?>
			<img src="files/images/<?php echo $infoPosts['image'] ?>" style="width:600px;height:300px;" alt="">
		<?php }else{?>
			<img src="files/images/image.jpg" style="width:600px;height:300px;">
		<?php }?>
	    <div class="links" style="text-align:justify">
				<?php echo $infoPosts['preview'] ?>
		</div>
		<div class="links" style="text-align:justify">
				<p><?php echo $infoPosts['detail'] ?></p> 
		</div> 	
	<div
		<div class="fb-comments" data-href="quanlidiadiemamthuc.com?pid=<?php echo $infoPosts['title'] ?>" data-colorscheme="light" data-numposts="5" data-width="900">	
	</div>
	</div>
	<div class="sidebar">	
			<h3>Danh mục</h3>
			<ul class="s_nav">
			<?php foreach($listCat as $key => $cat){?>
				<li>
					<a href="publicIndexCat.php?cid=<?php echo $cat["id_cat"]?>">
						<span><?php echo $cat["name_cat"]; ?></span><label><?php echo $cat["num_post"]; ?></label><div class="clear"></div>
					</a>
				</li> 
			<?php }?>
			</ul>	
	</div>		
	
	<div class="clear"></div>
	<!-- end main_content -->
</div>
</div>
</div>
<?php include("view/template/public//inc/footer.php")?>