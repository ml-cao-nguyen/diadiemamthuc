<?php $b="color";$a=$c=""; ?>
<?php include("view/template/public//inc/header.php")?>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
 <div class="portfoli">
 	<!-- start main_content -->
 			<h3 class="style" style="color:red"><?php echo $infoCat['name_cat'] ?></h3><br />
				<ul class="folio_list">
				<?php foreach ($ListPostsByIdCat as $key => $post) {?>
					<li>
						<div class="foli_img">
							<a href="publicIndexDetail.php?pid=<?php echo $post['id_post'] ?>">
				 				<span class="next"> </span>
							</a>
							<?php if($post['image']!=null){ ?>
								<img src="files/images/<?php echo $post['image'] ?>" style="width: 300px;height: 190px" alt="" />
							<?php }else{?>
								<img src="files/images/image.jpg" style="width: 300px;height: 190px" >
							<?php }?>
						</div>	
						<h3 class="style"><?php echo $post['title'] ?></h3>
						<p class="para">Địa điểm: <?php echo $post['location'] ?></p>
						<p class="para">Thời gian: <?php echo $post['time_create'] ?></p>
						<p class="para">Người đăng: <?php echo $post['fullname'] ?></p>
						<h4><a  href="publicIndexDetail.php?pid=<?php echo $post['id_post'] ?>">Chi tiết</a></h4>
					</li>
				<?php } ?>
					<div class="clear"></div>
				</ul>
		<div class="clear"></div>
	<!-- end main_content -->
	</div>
</div>
</div>
<?php include("view/template/public//inc/footer.php")?>