@extends('public.layout.master') 
@section('content')
<!-- start main -->
<div class="main_bg">
 <div class="search-wrap">
 	<!-- start main_content -->
		<h3 class="style" style="color:red;">Kết quả tìm được cho "{{ $keyword }}"</h3><br />
		@foreach($listSearch as $category)
			@if (count($category->posts) > 0)
				<h4 class="style" style="color:red;margin: 30px 0px;">{{ $category->name_cat }}</h4>
				<ul class="folio_list search_list">
					@foreach($category->posts as $post)
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
						<div class="clear"></div>
					@if (count($category->posts) >= 5)
						<div class="search-more">
							<a href="">Xem thêm >></a>
						</div>
					@endif
				</ul>
			@endif
		@endforeach
		<div class="clear"></div>
	<!-- end main_content -->
	</div>
</div>
@endsection