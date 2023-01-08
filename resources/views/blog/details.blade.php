@extends('layouts.app')
@section('blogDetails','active')
<?php
$setting  = getSetting();
?>
@section('title', $data->title)

@push('custom_css')
<style>

  .breadcrumb-link {
    display: inline;
    margin-right: 13.5px;
    color: rgba(39,40,41,.6);
    font-size: 15px;
    line-height: 1.366;
    font-weight: 500;
  }
  .post-breadcrumbs a{
    color: rgba(39,40,41,.6);
  }
  .post-breadcrumbs a:hover{
    color: rgba(39,40,41,.6);
  }
  .blog_category{
    font-weight: 600;
    font-size:16px;
    margin-bottom: 24px;
   }
   .blog-title{
    font-weight: 600;
    font-size:54px;
    margin-bottom: 24px;
   }
   .blog-post-date-length {
    display: flex;
}
.originally-published-collection {
    padding-left: 8px;
}
.inline {
    display: inline-block;
    margin-bottom: 0;
}
.blog-post-length {
    display: inline-block;
}
.div-block{
    margin-top: 16px;
}
.div-block p{
    font-size: 14px;
    font-weight: 400;
}
.div-block span{
    margin-left: 16px;
    font-size: 14px;
    font-weight: 400;
}
.blog-author-image{
    height: 70px;
    max-width: 70px;
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
        font-size: 15px;
        font-weight: 400;

    }
    .social-link i{
        color: rgb(39, 40, 41);
        padding: 10px;
        font-size: 20px;
    }
    .blog-details-photo img{
        border-radius: 20px;
    }
    .blog-details-photo{
        margin-top: 30px;
    }
    .blog-details-content{
        margin-top: 30px;
    }
    .blog-details-content p{
        font-size: 16px;
        font-weight: 300;

    }
    .blog-details-content span a{
        font-size: 16px;
        font-weight: 600;
        color: rgb(243, 90, 87);
    }
    .blog-details-content h4{
        font-size: 54px;
        font-weight: 600;
    }
    .blog-post-share-row {
        position: relative;
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: justify;
        -webkit-justify-content: space-between;
        -ms-flex-pack: justify;
        justify-content: space-between;
    }
    .share-label {
    margin-bottom: 19px;
    color: #272829;
    font-size: 20px;
    font-weight: 600;
}
.blog-post-share-social {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: end;
    -webkit-align-items: flex-end;
    -ms-flex-align: end;
    align-items: flex-end;
}
.author-social-link-block {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    width: 24px;
    height: 24px;
    margin-right: 13px;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    font-family: 'Fa brands 400',sans-serif;
    color: #272829;
    font-weight: 400;
}
.w-inline-block {
    max-width: 100%;
    display: inline-block;
}

.feature-image img{
    width: 100%;
    border-radius: 32px;
    -o-object-fit: cover;
    object-fit: cover;
}
.author-pic {
    width: 72px;
    height: 72px;
    margin-right: 16px;
    border-radius: 100px;
}

.originally-published-text {
    margin-bottom: 10px;
    color: rgba(39,40,41,.75);
    font-weight: 400;
}
.originally-published-text,.blog-author-name {
    color: rgba(39,40,41,.75);
    font-weight: 600;
}
.blog-details-content img {
    max-width: 100%!important;
}
.blog-details-content a {
    background-color: transparent;
    color: #f35a57;
    font-weight: 600;
    text-decoration: none;
}
.blog-details-content iframe {
    max-width: 100%!important;
}
.blog-details-content h2 {
    margin-top: 0;
    margin-bottom: 24px;
    color: #272829;
    font-size: 56px;
    line-height: 1.3;
    font-weight: 600;
    letter-spacing: -.02em;
}

.blog-details-content ul {
    margin-bottom: 10px;
    padding-left: 40px;
    overflow: hidden;
    color: rgba(39, 40, 41, 0.75);
    font-size: 16px;
}

    @media only screen and (min-width: 960px) {

    }
    @media only screen and (max-device-width: 480px) {
        .blog-title {
            font-weight: 600;
            font-size: 25px;
            margin-bottom: 10px;
        }
        .wrapper {
            margin-bottom: 70px;
        }
        .blog-author-designation {
            font-size: 12px;
            font-weight: 400;
        }
        .blog-author-name {
            font-size: 13px;
        }
        .blog-author-name-by {
            font-size: 13px;
        }
        .author-pic {
            width: 60px;
            height: 60px;
            margin-right: 8px;
            border-radius: 100px;
        }
        .social-link i {
            padding: 5px;
            font-size: 13px;
        }
        .blog-details-content h2,.blog-details-content h3,.blog-details-content h1{
            font-size: 20px!important;
        }
        .blog-details-content h4 {
            font-size: 16px!important;
        }

    }
</style>
@endpush
@section('meta_tag')
    <meta name="keywords" content="{{ $data->tag }}" />
    <meta name="description" content="{{strip_tags($data->details)}}" />
    <meta property="og:description" content="{{strip_tags($data->details)}}" />
    <meta name="twitter:description" content="{strip_tags({$data->details)}}">
    <meta property="og:url" content="{{Request::url()}}" />
    <meta property="og:type" content="WEBSITE" />
    <meta property="og:title" content="{{ $data->title}}" />
    <meta name="twitter:title" content="{{ $data->title}}">
    <meta name="twitter:card" value="summary_large_image">
    <meta property="og:image" content="{{ asset($data->image) }}" />
    <meta name="twitter:image" content="{{ asset($data->image) }}">
    <meta name="twitter:site" content="{{Request::url()}}" />
    <meta name="twitter:url" content="{{Request::url()}}" />
    <link rel="canonical" href="{{Request::url()}}">
@endsection

@push('meta-tag')
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$data->title}}" />
<meta property="og:site_name" content="agami24"/>
<meta property="og:image" content="{{asset($data->image)}}" />
<meta property="og:image:width" content="800" />
<meta property="og:image:height" content="533" />
<meta property="og:type" content="article" />
@if(isset($keyward) && !empty($keyward))
<meta property="keywards" content="{{$keyward}}" />
@endif
@if(isset($data->summary) && !empty($data->summary))
<meta name="description" content="{{strip_tags(implode(' ', array_slice(explode(' ', $data->summary), 0, 40)))}}" />
<meta property="og:description" content="{{strip_tags(implode(' ', array_slice(explode(' ', $data->details), 0, 40)))}}" />
@else
<meta name="description" content="{{strip_tags(implode(' ', array_slice(explode(' ', $data->details), 0, 40)))}}" />
<meta property="og:description" content="{{strip_tags(implode(' ', array_slice(explode(' ', $data->details), 0, 40)))}}" />
@endif
<!-- Twitter Card data -->
<meta name="twitter:card" value="summary_large_image">
<meta name="twitter:title" content="{{$data->title}}">
@if(isset($data->details) && !empty($data->details))
<meta name="twitter:description" content="{{strip_tags(implode(' ', array_slice(explode(' ', $data->details), 0, 40)))}}">
@endif
<meta name="twitter:site" content="@agami24"/>
<meta name="twitter:creator" content="@agami24"/>
<meta name="twitter:url" content="{{Request::url()}}"/>
<link rel="canonical" href="{{Request::url()}}">
@if(!empty($data->image))
<meta name="twitter:image" content="{{asset($data->image)}}">
<meta name="twitter:image:src" content="{{asset($data->image)}}" />
@endif
<script type="application/ld+json">
    {
    "@context": "https://schema.org",
    "@type": "NewsArticle",
    "url" : "{{Request::url()}}",
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ Request::url() }}"
    },
    "articleBody" : "{{str_replace('/[^a-zA-Z0-9]/g', ' ', $data->details)}}",
    "headline": "{{$data->title}}",
    "name": "{{$data->title}}",
    "articleSection": "{{$data->category_name}}",
    @if(!empty($data->image))
    "thumbnailUrl":{
        "@type": "ImageObject",
        "url": "{{asset($data->image)}}",
        "width": 800,
        "height": 533
    },
    "image": {
        "@type": "ImageObject",
        "url": "{{asset($data->image)}}",
        "width": 800,
        "height": 533
    },
    @endif
    "dateCreated": "{{ $data->created_at }}",
    "datePublished": "{{ $data->created_at }}",
    "dateModified": "{{ $data->updated_at }}",
    "inLanguage": "bn",
    @if(!empty($keyward))
    "keywords": "{{ $keyward }}",
    @endif
    @if(!empty($data->author))
    "author": {
        "@type": "Person",
        "name": "{{ $data->author }}"
    },
    @endif
    "description": "{{$data->details}}"
}
</script>
@if(!empty($data->image))
<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "ImageObject",
		"url": "{{asset($data->image)}}",
		"height": 800,
		"width": 533
	}
</script>
@endif
<script type="application/ld+json">
	{
		"@context":"http://schema.org",
		"@type":"BreadcrumbList",
		"itemListElement":[
			{
				"@type":"ListItem",
				"position":1,
				"item":{
					"@id":"{{url('/')}}",
					"name":"Home"
				}
			},
			{
				"@type":"ListItem",
				"position":2,
				"item":{
					"@id":"{{url('category/'.$data->category_slug)}}",
					"name":"{{$data->category_name}}"
				}
			},
			{
				"@type":"ListItem",
				"position":3,
				"item":{
					"name" : "{{$data->title}}",
					"@id":"{{Request::url()}}"
				}
			}
		]
	}
</script>
@endpush
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-12 mx-md-auto">
            <div class="post-breadcrumbs d-none d-md-block my-md-5 my-sm-2">
                <a href="{{ route('home') }}" class="breadcrumb-link">{{ __('Home')}}</a>
                <div class="breadcrumb-link">&gt;</div>
                <a href="{{ route('blog') }}" class="breadcrumb-link">{{ __('Blog')}}</a>
                <div class="breadcrumb-link">&gt;</div>
                <a href="{{ route('blog.category',$data->category_slug ?? 'mtg') }}" class="breadcrumb-link">{{ $data->category_name }}</a>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-10 col-12 mx-md-auto">
            <div class="wrapper">

                <div class="blog-detais-header">
                    <p class="blog_category">{{ $data->category_name }}</p>
                    <h1 class="blog-title">{{ $data->title }}</h1>
                    <div class="blog-post-date-length">
                        <div class="originally-published-text"><strong>{{ __('Originally Published:')}} </strong></div>
                        <div class="originally-published-collection">{{ date('M d, Y', strtotime($data->created_at))}}</div>
                        {{-- <div class="blog-post-length">8 min read</div> --}}
                    </div>
                    <div class="div-block">
                        <p>{{ __('Last Updated')}}: <span>{{ date('M d, Y', strtotime($data->updated_at))}}</span></p>
                    </div>

                    <div class="d-flex position-relative media-flex bg-white align-items-center mb-md-3 p-md-2 p-sm-2">
                        <div class="flex-shrink-0">
                           <img src="{{getAvatar($data->profile_image)}}" alt="{{ $data->author }}" title="{{ $data->author }}" class="author-pic img-fluid p-1 media-120 lazy blog-author-image" style="display: inline-block;">
                        </div>
                        <div class="flex-grow-1 px-1">
                            <div class="row">
                                <div class="col-md-10">
                                    <p class="blog-author-name-by py-1">By <a href="#" class="blog-author-name">{{ $data->author }}</a></p>
                                    <h6 class="blog-author-designation py-1">{{ $data->designation }} @ {{ $setting->site_name }}</h6>
                                </div>
                                {{-- <div class="col-md-2">
                                    <div class="social-link float-right pull-right text-right">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                       </div>
                                </div> --}}
                            </div>
                            </div>
                     </div>
                </div>
                @if (!empty($data->image))
                    <div class="feature-image my-3">
                        <img src="{{asset($data->image)}}" class="img-fluid imag-responsive" alt="{{ $data->title }}" title="{{ $data->title }}">
                    </div>
                @endif
                <div class="blog-details-content">
                    {!! $data->details !!}
                </div>
                <div class="blog-post-share-row mb-md-4">
                    <div class="social-share-wrapper">
                       <div class="share-label">{{ __('Share')}}</div>
                       <div class="blog-post-share-social">
                          <a href="javascript:void(0)" class="social_share author-social-link-block fb w-inline-block" data-url="https://www.facebook.com/sharer/sharer.php?u={{Request::url()}}"  title="{{ __('Share on Facebook') }}">
                            <i class="fab fa-facebook"></i>
                          </a>
                          <a href="javascript:void(0)" class="social_share author-social-link-block linkedin w-inline-block" data-url="https://www.linkedin.com/shareArticle?mini=true&url={{Request::url()}}" title="Share on Linkedin">
                             <i class="fab fa-linkedin"></i>
                          </a>
                          <a href="javascript:void(0)" class="social_share author-social-link-block twitter w-inline-block"  data-url="https://twitter.com/share?text={{Request::url()}}" title="{{ __('Share on Twitter') }}">
                            <i class="fab fa-twitter"></i>
                          </a>
                       </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom_js')
<script>
    $('.social_share').click(function(){
     var url = $(this).data('url');
        window.open(url, '', 'window settings');
    });
</script>
@endpush
