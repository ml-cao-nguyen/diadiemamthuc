@extends('public.layout.master') 
@section('content')
<!-- start main -->
<div class="main_bg">
	<div class="category-wrap">
		<div class="portfoli">
			<!-- start main_content -->
			<h3 class="style" style="color:red">{{ $category->name_cat }}</h3><br />
				<ul class="folio_list">
					@foreach($posts as $key => $post)
						<li>
							<div class="foli_img">
								<a href="">
									<span class="next"></span>
								</a>
								<img src="{{ asset('template/public/images/slider1.jpg') }}">
							</div>	
							<h3 class="style">{{ $post->title }}</h3>
							<p class="para">Địa điểm: {{ $post->location }}</p>
							<p class="para">Thời gian: {{ $post->time_create }}</p>
							<p class="para">Người đăng: </p>
							<h4><a  href="">Chi tiết</a></h4>
						</li>
						@if ((($key + 1) % 5) == 0)
							<div class="clear"></div>
						@endif
					@endforeach
				</ul>
				<div class="clear"></div>
			<!-- end main_content -->
		</div>
	</div>
</div>
@endsection
