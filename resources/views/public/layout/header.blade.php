<!-- start header -->
<div class="header">
	<div class="header-wrap">
		<div class="logo">
		<br /><br /><br /><br /><br />
		</div>
		<div class="h_right">
					<h4></h4>
			<!-- start nav-->
			<ul class="flexy-menu thick orange">
				<li>
					<a  href="">
						<span class="">Trang chủ</span>	
						<i class="icon3"></i>
					</a>
				</li>
				<li>
					<a href="">
						<span class="">Danh mục</span>	
						<i class="icon2"></i>
					</a>
					<ul>
						@foreach(getCategories() as $category)
							<li><a href="">{{ $category->name_cat }}</a></li>
						@endforeach
					</ul>
				</li>
				<li>

					<!-- <a href="login.php">
						<span>Đăng nhập</span>	
						<i class="icon"></i>
					</a> -->

					<a href="">
						<span>Chào, Cao</span>	
						<i class="icon2"></i>
					</a>
					<ul>
						<li><a href="index.php">Quản lí</a></li>
						<li><a href="logout.php">Đăng xuất</a>
					</ul>

				</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>