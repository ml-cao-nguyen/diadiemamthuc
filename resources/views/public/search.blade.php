<?php $b="color";$a=$c=""; ?>
<?php include("view/template/public//inc/header.php")?>
<!-- start main -->
<div class="main_bg">
<div class="wrap">
 <div class="portfoli">
 	<!-- start main_content -->
 			<?php if($listSearch!=null){ ?>
 			<h3 class="style" style="color:red">Kết quả tìm được cho "<?php echo $search ?>"</h3><br />
				<ul class="folio_list">
			<?php foreach ($listSearch as $key => $search) {?>
					<li>
						<div class="foli_img">
							<a href="publicIndexDetail.php?pid=<?php echo $search['id_post'] ?>">
				 				<span class="next"> </span>
							</a>
							<?php if($search['image']!=null){ ?>
								<img src="files/images/<?php echo $search['image'] ?>" style="width: 300px;height: 190px" alt="" />
							<?php }else{?>
								<img src="files/images/image.jpg" style="width: 300px;height: 190px" >
							<?php }?>
						</div>	
						<h3 class="style"><?php echo $search['title'] ?></h3>
						<p class="para">Địa điểm: <?php echo $search['location'] ?></p>
						<p class="para">Thời gian: <?php echo $search['time_create'] ?></p>
						<p class="para">Người đăng: <?php echo $search['fullname'] ?></p>
						<h4><a  href="publicIndexDetail.php?pid=<?php echo $search['id_post'] ?>">Chi tiết</a></h4>
					</li>
			<?php } ?>
					<div class="clear"></div>
				</ul>
			 <?php }else{ ?> 
			 	<h3 class="style" style="color:red">Không có kết quả phù hợp!!!</h3><br />
			 	<ul class="folio_list"><li></li></ul>
			 <?php } ?> 
		<div class="clear"></div>
	<!-- end main_content -->
	</div>
</div>
</div>
<?php include("view/template/public//inc/footer.php")?>