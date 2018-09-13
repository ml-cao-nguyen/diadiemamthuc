@extends('public.layout.master') 
@section('content')
<!-- start main -->
<div class="main_bg">
	<div class="detail-wrap">
		<div class="blog">
			<!-- start main_content -->
			<div class="blog_left">
				<h3 class="style">{{ $post->title }}</h3>
				<div class="extra">
					Địa điểm: {{ $category->location }}<br />
					Đăng bởi: <span class="username">{{ $user->username }}</span> | 
				<time pubdate="">{{ $post->time_create }}</time>
				</div>
				<img src="{{ asset('template/public/images/slider1.jpg') }}">
				<div class="" style="text-align:justify">{{ $post->preview }}</div><hr />
				<div class="" style="text-align:justify">{{ $post->detail }}</div>
			</div>
			<div class="detail-blog-right">
				<div class="sidebar">	
					<h3>Danh mục</h3>
					<ul class="s_nav">
					@foreach(getCategories() as $category)
						<li>
							<a href="">
								<span>{{ $category->name_cat }}</span><label>{{ $category->num_posts }}</label><div class="clear"></div>
							</a>
						</li>
					@endforeach
					</ul>
				</div>
				<div class="post-relate">
					<ul>
						<h4 class="style" style="margin: 20px auto;color:#f53300;">Cùng đề tài</h4>
						@foreach($posts as $post)
						<li>
							<div class="foli_img">
								<a href="">
									<span class="next"></span>
								</a>
								<img src="{{ asset('template/public/images/slider1.jpg') }}">
							</div>	
							<h6 class="search-post-title">{{ $post->title }}</h6>
							<p class="para">Địa điểm: {{ $post->location }}</p>
							<h4><a  href="">Chi tiết</a></h4>
						</li>
						@endforeach
					</ul>
				</div>
			</div>
			<div class="clear"></div>
			<!-- end main_content -->
		</div>
	</div>
</div>
@endsection
