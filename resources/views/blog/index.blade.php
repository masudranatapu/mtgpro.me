@extends('layouts.app')
<?php
$rows = $data ?? [];
$settings  = getSetting();
$category = $category ?? [];
?>
@section('title') {{ $settings->site_name }}: Blog @endsection
@section('blog','active')
@if (!empty($category))
@section($category->category_slug, 'active')
@else
@section('all','active')
@endif
@push('custom_css')
<style>

  .centered{
    text-align: center;
    display: block;
    font-size: 64px;
    font-weight: bold;
    margin-top:30px;
    }
    .wrapper{
        position: relative;
    }

    .blog{
        margin-top: 30px;

    }
   .card{
    border: 0px;
    overflow: hidden;
   }
   .card-img-top{
    border-radius: 20px;
    width: 100%;
    /* height: 260px; */

   }
   .blog_image{
    overflow: hidden;
    border-radius: 20px;
    width: 100%;
    max-height: 260px;

   }
   .blog_image img{
    transition:all 0.4s ease;
   }
   .card:hover .blog_image img {
    transform: scale(1.1);
}
   .blog_category{
    font-weight: 600;
    font-size:16px;
    font-family:sans-serif;
   }
   .bolg_date{
    font-weight: 300;
    font-size:14px;
    float: right;
   }
   .blog-title{
    font-size: 22px;
    line-height: 1.3;
    color: rgb(39, 40, 41);
    /* margin-bottom: 24px; */
    min-height: 85px;
    max-height: 85px;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow: hidden;
    }

    .blog-short-description{
        font-weight: 400;
        font-size:13px;
        margin-top: 24px;
    }
    .flex-shrink-0{
        max-width: 60px;
        max-height: 60px;
        border-radius: 50px;
    }
    .blog-author-name-by{
        font-weight: 400;
        font-size:16px;
        margin-bottom:0;
    }
    .blog-author-name{
        font-weight: 600;
        font-size:16px;
        color: rgb(39, 40, 41);
    }
    .blog-author-name:hover{
        color: rgb(39, 40, 41);
    }
    .blog-author-designation{
        font-size: 16px;

    }
    .latest-post{
    overflow: hidden;
    border-radius: 20px;
    }
    .latest-post img{
    transition:all 0.4s ease;
    border-radius: 20px;
   }
   .card:hover .latest-post img {
    transform: scale(1.1);
}
.blog-title-category{
    font-size: 32px;
    color: rgb(39, 40, 41);
    margin-bottom: 24px;
}

.blog-category-group{
    margin-left:20px;
    /* margin-bottom: 24px; */
}
.blog-category-group li{

    display: inline-block;
    padding: 10px;
    color: rgb(39, 40, 41);
    /* margin-top: 30px; */
}
.blog-category-group li a{
    color: rgb(39, 40, 41);
}
.blog-category-group li a:hover{
    color: rgb(243, 90, 87);
}
.subscribe{
    float: right;
    font-weight: 600;
    font-size: 16px;
}
.subscribe i{
    margin-right: 10px;
}
.all{
    text-align: center;
    height: 45px;
    width: 55px;
    background-color: #ffffff;
    border-radius: 20px;
}

.all:hover{
    color: #ffffff;
}

.blog-category-group .all a{
    color: rgb(39, 40, 41);
}
.blog-category-group .all a:hover{
    color: #ffffff;
}
.link-overlay, .overlay {
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    bottom: 0;
    right: 0;
    z-index: 1;
}

.category-title{
    margin-top: 0;
    color: #272829;
    font-size: 64px;
    line-height: 1.3;
    font-weight: 500;
    letter-spacing: -.02em;

}


.feature-title{
  -webkit-transition: .3s linear;
    transition: .3s linear;
    font-size: 45px;
    line-height: 1.2;
}
    @media only screen and (min-width: 960px) {
        .blog_image img {
          max-height: 260px;
          min-height: 260px;
      }
    }
    @media only screen and (max-device-width: 480px) {
      .feature-title {
      font-size: 20px;
      }
      .centered {
        font-size: 36px;
        margin-top: 15px;
      }
      .blog-category-group li {
          padding: 7px;
          font-size: 14px;
      }
    }

    /* different techniques for iPad screening */
    @media only screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait) {
      .feature-title {
        font-size: 20px;
        }
    }
</style>
@endpush
@section('meta_tag')
    <meta name="keywords" content="{{ $settings->seo_keywords }}" />
    <meta name="description" content="Read news about QR Codes, tips to improve your marketing and advice on networking." />
    <meta property="og:description" content="Read news about QR Codes, tips to improve your marketing and advice on networking." />
    <meta name="twitter:description" content="Read news about QR Codes, tips to improve your marketing and advice on networking.">
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="WEBSITE" />
    <meta property="og:title" content="Blog: News on QR codes, marketing and networking tips | {{ $settings->site_name }}" />
    <meta name="twitter:title" content="Blog: News on QR codes, marketing and networking tips | {{ $settings->site_name }}">
    <meta name="twitter:card" value="summary_large_image">
    <meta property="og:image" content="{{ asset($settings->seo_image) }}" />
    <meta name="twitter:image" content="{{ asset($settings->seo_image) }}">
    <meta name="twitter:site" content="{{Request::url()}}" />
    <meta name="twitter:url" content="{{Request::url()}}" />
    <link rel="canonical" href="{{Request::url()}}">
    <meta property="og:site_name" content="{{$settings->site_name}}" />
    <meta property="og:type" content="website" />
@endsection
@section('content')
<section class="mb-md-5 md-sm-2">
<div class="container">
    <div class="wrapper">
        @if (!empty($category))
        <h2 class="text-center category-title pt-md-4 pt-sm-2">Category: {{ $category->category_name }}</h2>
        @else
        <h2 class="centered">{{ __('Blog')}}</h2>
        @endif
        <div class="blog-category-group my-md-4 my-sm-2">
            <ul>
                <li class="all"><a class="@yield('all')" href="{{ route('blog') }}">{{ __('All')}}</a></li>
                @if (!empty($categories))
                @foreach ($categories as $category)
                <li><a class="@yield($category->category_slug)" href="{{ route('blog.category',$category->category_slug) }}">{{ $category->category_name }}</a></li>
                @endforeach
                @endif
                {{-- <li class="subscribe"><i class="fa fa-envelope"> </i><a href="#">Subscribe</a></li> --}}
              </ul>
        </div>
        @if (!empty($rows) && count($rows) > 0)
          @for($i=0; $i<=0; $i++)
          @if(!empty($rows[$i]))
          <?php
          $row = $rows[$i];
          if(!empty($row->summary)){
            $summary = $row->summary;
          }else{
            $summary =strip_tags(implode(' ', array_slice(explode(' ', $row->details), 0, 40))) ;
          }
          ?>
          <div class="row g-0 bg-light position-relative bg-white">
            <div class="col-md-4 col-lg-4 mb-md-0 p-md-4 ">
                <div class="card blog-card">
                    <div class="latest-post">
                      <a href="{{ $row->blog_url }}" class="blog-title-category" title="{{ $row->title }}">
                        <img src="{{ asset($row->image) }}" class="w-100" alt="{{ $row->title }}" title="{{ $row->title }}">
                      </a>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-lg-8 p-4 ps-md-0 blog-card">
              <a class="link-overlay" href="{{ $row->blog_url }}" title="{{ $row->title }}"></a>
                <h6 class="blog_category">{{ $row->category_name }} <span class="bolg_date">{{ date('M d, Y', strtotime($row->created_at))}}</span></h6>
                <h4 class="blog-title-category feature-title">{{ $row->title }}</h4>
                <p class="blog-short-description">{{ $row->summary }}</p>
                <div class="d-flex position-relative">
                    <img src="{{ getAvatar($row->profile_image) }}" class="flex-shrink-0 me-3 img-fluid " alt="{{ $row->title }}" title="{{ $row->title }}">
                    <div>
                      @if (!empty($row->author))
                      <p class="blog-author-name-by">By <a href="{{ $row->blog_url }}" class="blog-author-name">{{ $row->author }}</a></p>
                      @endif
                      @if (!empty($row->designation))
                      <p class="blog-author-designation">{{ $row->designation }} @ {{ $settings->site_name }}</p>
                      @endif
                    </div>
                  </div>
            </div>
          </div>
          @endif
          @endfor
        <div class="row blog">
          @for($i=1; $i<=20; $i++)
          @if(!empty($rows[$i]) && isset($rows[$i]))
          <?php
            $row = $rows[$i];
            if(!empty($row->summary)){
              $summary = $row->summary;
            }else{
              $summary =strip_tags(implode(' ', array_slice(explode(' ', $row->details), 0, 40))) ;
            }
          ?>
          <div class="col-md-6 col-lg-4 mt-3">
              <div class="card blog-card">
                  <div class="card-body">
                    <a class="link-overlay" href="{{ $row->blog_url }}" title="{{ $row->title }}"></a>
                    <div class="blog_image">
                      <img src="{{ asset($row->image) }}" class="card-img-top img-fluid" title="{{ $row->title }}" alt="{{ $row->title }}">
                    </div>
                      <p class="blog_category py-md-3 py-sm-2 text-uppercase">{{ $row->category_name }} <span class="bolg_date">{{ date('M d, Y', strtotime($row->created_at))}}</span></p>
                    <h4 class="blog-title">{{ $row->title }}</h4>
                    <p class="blog-short-description">{{ $summary }}</p>
                    <div class="d-flex position-relative">
                      <img src="{{ getAvatar($row->profile_image) }}" class="flex-shrink-0 me-3 img-fluid" alt="{{ $row->title }}" title="{{ $row->title }}">
                      <div>
                        @if (!empty($row->author))
                        <p class="blog-author-name-by">By <a href="{{ $row->blog_url }}" class="blog-author-name" title="{{ $row->author }}">{{ $row->author }}</a></p>
                        @endif
                        @if (!empty($row->designation))
                        <p class="blog-author-designation">{{ $row->designation }} @ {{ $settings->site_name }}</p>
                        @endif
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          @endif
          @endfor
          <div class="row">
            <div class="col-md-12 py-md-4 py-sm-2">
              {{ $rows->links() }}
            </div>
          </div>
       </div>
       @else
       <div class="text-center py-md-5 py-sm-3">
        <p>{{ __('Article not found')}}</p>
       </div>
        @endif
    </div>
</div>
</section>
@endsection
@push('bottom-scripts')
@endpush('custom_js')
