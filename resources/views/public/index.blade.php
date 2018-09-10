@extends('public.layout.master') 
@section('content')
<!-- start slider -->
	<div class="sidebar top">	
		<!---start-da-slider----->
		<div id="da-slider" class="da-slider">

			<div class="da-slide">
				<h2>Danh Muc 1</h2>
				<p>Gioi thieu</p>
				<a class="da-link" href="">  Xem thêm</a>
			</div>

			<nav class="da-arrows">
				<span class="da-arrows-prev"></span>
				<span class="da-arrows-next"></span>
			</nav>
		</div>

	 	<!---strat da-slider scipt---->
	  <link rel="stylesheet" type="text/css" href="{{ asset('template/public/css/da_slider.css') }}" />
		<script type="text/javascript" src="{{ asset('template/public/js/modernizr.custom.28468.js') }}"></script>
		<script type="text/javascript" src="{{ asset('template/public/js/jquery.cslider.js') }}"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//end da-slider script---->
		<h3>Danh mục</h3>
		<ul class="s_nav">

			<li><a href="">
					<span>Danh muc 1</span>
					<label>10</label>
					<div class="clear"></div>
				</a>
			</li>
 
		</ul>
	</div>
	<div class="slider">
		<div class="image-slider">
			<!-- Slideshow 1 -->
			<ul class="rslides" id="slider1">
				<li><img src="{{ asset('template/public/images/slider1.jpg') }}" alt=""></li>
				<li><img src="{{ asset('template/public/images/slider2.jpg') }}" alt=""></li>
				<li><img src="{{ asset('template/public/images/slider3.jpg') }}" alt=""></li>
			</ul>
		<!-- Slideshow 2 -->
		</div>
	</div>

<!-- start main -->
<div class="main_bg">
<div class="wrap">
 <div class="main">
 	<!-- start main_content -->
	<div class="grid_info" style = "padding-left:50%;">
		<h3 style="font-size:30px;padding-top:20px">Bài viết mới</h3>
	</div>
	<div class="content">

		<div class="content_left">
			<div class="grids">
				<ul class="list">
					<li>
						<div class="grid_img">
							<a href="">
				 				<span class="next"></span>
							</a>

								<img src="files/images/image.jpg">

						</div>						
					</li>
					<li class="top">
						<div class="grid_info">
							<a href="">
								<h2 style="font-size:20px;color:red;margin-bottom: 10px;">
								Title post</h2>
							</a>
							<p>
								<span style="font-size: 14px;font-weight: bold;color: black;">Người đăng:</span>
								Nguyen Van Cao
							</p>
							<p> 
								<span style="font-size: 14px;font-weight: bold;color: black;">Thời gian:</span>
								20/11/2018
							</p>
							<p>
								<span style="font-size: 14px;font-weight: bold;color: black;">Địa điểm:</span>
								147 mai thuc loan, Hue
							</p><br/>
							<p style="text-align:justify">Thong tin preview</p>
						</div>						
					</li>
					<div class="clear"></div>
				</ul>
			</div>
		</div>	

		<div class="clear"></div>
	</div>
	<div class="clear"></div>	
	<div class="grid_info" style = "padding-left:46%;">
		<h3 style="font-size:30px;padding-top:20px">Theo danh mục</h3>
	</div>
	<div class="content" style="width:100%">	

		<div class="content_right">
			<div class="grid_info" style = "padding-left:0%;">
				<a href="">
					<h3 style="font-size:20px;color:red;padding-top:10px">Danh muc 1</h3>
				</a>
			</div>
			<div class="grids">

				<ul class="list1">
					<li>
						<div class="grid_img">
							<a href="">
				 				<span class="next"></span>
							</a>

								<img src="files/images/image.jpg">

						</div>
					</li>
					<li class="left">
					<div class="grid_info">
						<a href="">
							<h2 style="font-size:20px;color:red;margin-bottom: 10px;">Title bai viet moi</h2>
						</a>
						<p>
							<span style="font-size: 14px;font-weight: bold;color: black;">Người đăng:</span>
							Full name
						</p>
						<p> 
							<span style="font-size: 14px;font-weight: bold;color: black;">Thời gian:</span>
							20/10/2018
						</p>
						<p>
							<span style="font-size: 14px;font-weight: bold;color: black;">Địa điểm:</span>
							147 mai thuc loan
						</p><br/>
						<p style="text-align:justify">Preview</p>
					</div>	
					</li>
					<div class="clear"></div>
				</ul>

			</div>
		</div>
		
		<div class="clear"></div>	
	</div>

	<!-- start sidebar -->
	
	<div class="clear"></div>	
	<!-- end main_content -->
</div>

</div>
</div>
@endsection