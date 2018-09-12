@extends('public.layout.master') 
@section('content')
<!-- start slider -->
  <div class="sidebar top">	
    <!---start-da-slider----->
    <div id="da-slider" class="da-slider">

      @foreach(getCategories() as $category)
        <div class="da-slide">
          <h2>{{ $category->name_cat }}</h2>
          <p>{{ $category->introduce }}</p>
          <a class="da-link" href="">Xem thêm</a>
        </div>
      @endforeach

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

      @foreach(getCategories() as $category)
        <li><a href="">
              <span>{{ $category->name_cat }}</span>
              <label>{{ $category->num_posts }}</label>
            <div class="clear"></div>
          </a>
        </li>
      @endforeach

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
    </div>
  </div>

<!-- start main -->
  <div class="main_bg">
    <div class="index-main-top">
      <!-- start main_content -->
      <div class="grid_info" align="center">
        <h3 style="font-size:30px;padding-top:20px">Bài viết mới</h3>
      </div>

      <div class="new-posts-wrap">

        @foreach($newPosts as $post)
          <div class="content_left">
            <div class="grids">
              <ul class="list">
                <li>
                  <div class="grid_img">
                    <a href="">
                      <span class="next"></span>
                    </a>
                    <img src="{{ asset('template/public/images/slider1.jpg') }}">
                  </div>
                </li>
                <li class="top">
                  <div class="grid_info">
                    <a href="">
                      <h2 style="font-size:20px;color:red;margin-bottom: 10px;">{{ $post->title }}</h2>
                    </a>
                    <p>
                      <span style="font-size: 14px;font-weight: bold;color: black;">Người đăng:</span>Nguoi dang
                    </p>
                    <p> 
                      <span style="font-size: 14px;font-weight: bold;color: black;">Thời gian:</span>{{ $post->time_create }}
                    </p>
                    <p>
                      <span style="font-size: 14px;font-weight: bold;color: black;">Địa điểm:</span>{{ $post->location }}
                    </p><br/>
                    <p style="text-align:justify">{{ $post->preview }}</p>
                  </div>
                </li>
              </ul>
            </div>
          </div>	
        @endforeach

        <div class="clear"></div>
      </div>
    </div>

    <div class="index-main-bottom">
      <div class="grid_info" align="center">
        <h3 style="font-size:30px;padding-top:20px">Theo danh mục</h3>
      </div>
      
      @foreach($postByCategories as $category)
        <div class="content_right">
          <div class="grid_info" style = "padding-left:0%;">
            <a href="">
              <h3 style="font-size:20px;color:red;padding-top:10px">{{ $category->name_cat }}</h3>
            </a>
          </div>

          @foreach($category->posts as $post)
          <div class="grids">
            <ul class="list1">
              <li>
                <div class="grid_img">
                  <a href="">
                    <span class="next"></span>
                  </a>
                  <img src="{{ asset('template/public/images/slider1.jpg') }}">
                </div>
              </li>
              <li class="left">
                <div class="grid_info">
                  <a href="">
                    <h2 style="font-size:20px;color:red;margin-bottom: 10px;">{{ $post->title }}</h2>
                  </a>
                  <p class="post-location">
                    <span style="font-size: 14px;font-weight: bold;color: black;">Địa điểm: </span>{{ $post->location }}
                  </p>
                  <p class="post-preview-bottom">{{ $post->preview }}</p>
                </div>
              </li>
            </ul>
          </div>
          @endforeach

          <div class="clear"></div>
        </div>
      @endforeach

      <div class="clear"></div>	
    </div>
</div>
@endsection