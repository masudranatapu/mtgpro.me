@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('blogs', 'active')
@section('blog', 'active')
@section('title') Blog Edit @endsection
@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css">
<style>
.bootstrap-tagsinput {
    width: 100% !important;
    display: block;
    width: 100%;
    padding: 0.4375rem 0.75rem;
    font-size: .875rem;
    font-weight: 400;
    line-height: 1.4285714;
    color: #232e3c;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #dadcde;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 4px;
    transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.bootstrap-tagsinput .tag {
    margin-right: 2px;
    color: white;
    background: #ed6b4d;
    padding: 2px 4px 4px 9px;
    border-radius: 4px;
}
</style>
<div class="page-wrapper">
    {{--
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Edit Post') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.blog')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Edit Post') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.blog')}}" class="btn btn-primary">{{ __('Back')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.blog.update', $blog->id)}}" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="row d-flex justify-content-center">
                                    <div class="col-xl-10">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Title')}}</label>
                                                    <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{ $blog->title }}" required="">
                                                    @error('title')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Select Category')}}</label>
                                                    <select name="category_id" class="form-control" required="">
                                                        <option value="" class="d-none">Category</option>
                                                        @foreach($category as $row)
                                                        <option value="{{$row->id}}" @if($row->id == $blog->category_id) selected @endif>
                                                            {{ $row->category_name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                    @error('category_id')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">{{ __('Author Name')}}</label>
                                                    <input type="text" class="form-control" name="author" placeholder="{{ __('Author name')}}" value="{{ $blog->author ?? 'Admin' }}">
                                                    @error('author')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">{{ __('Tags')}}</label>
                                                    <input type="text" data-role="tagsinput" class="form-control" name="tag" placeholder="{{ __('Vcard,card')}}" value="{{ $blog->tag }}">
                                                    @error('tag')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label required" >{{ __('Is Active') }}</label>
                                                    <div class="">
                                                        <select class="form-control" name="is_active" required id="is_active" required>
                                                            <option value="1" {{ $blog->is_active==1 ? 'selected':'' }}>{{ __('Active') }}</option>
                                                            <option value="0" {{ $blog->is_active==0 ? 'selected':'' }}>{{ __('Inactive') }}</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Order Id</label>
                                                    <input type="number" class="form-control" name="order_id" min="0" placeholder="{{ __('Order Id')}}" value="{{ $blog->order_id }}">
                                                    @error('order_id')
                                                        <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Summary</label>
                                                    <textarea type="text" class="form-control" name="summary" placeholder="{{ __('Summary')}}">{{ $blog->summary }}</textarea>
                                                    @error('summary')
                                                        <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">{{ __('Meta Description')}}</label>
                                                    <textarea  class="form-control" name="meta_description" placeholder="{{ __('Meta Description')}}">{{ $blog->meta_description }}</textarea>
                                                    @error('meta_description')
                                                        <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">{{ __('Image')}} <span class="text-danger text-italic">{{ __('Recommended Size (800*533 px)')}}</span></label>
                                                    <input type="file" class="form-control" name="image">
                                                    @error('image')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="{{asset($blog->image)}}" width="120" class="rounded" alt="image">
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label class="form-label required">{{ __('Description')}}</label>
                                                    <textarea name="details" id="summernote" class="form-control" cols="30" rows="5" required="">{{ $blog->details }}</textarea>
                                                    @error('details')
                                                    <div class="text-danger">{{$message}}</div>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <button type="submit" class="btn btn-primary">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-edit" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                    <path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3">
                                                    </path>
                                                    <path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3">
                                                    </path>
                                                    <line x1="16" y1="5" x2="19" y2="8"></line>
                                                    </svg>
                                                     Update
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@include('admin.includes.footer')
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
<script type="text/javascript">
	$.ajaxSetup({
				headers: {
					'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
				}
			});
      $(document).ready(function() {
        $('#summernote').summernote({
         callbacks: {
            onImageUpload: function(image) {
                uploadImage(image[0]);
            }
        },
        toolbar: [
            ['style', ['bold', 'italic', 'underline', 'clear']],
            // ['font', ['strikethrough', 'superscript', 'subscript']],
            ['fontsize', ['fontsize']],
            ['color', ['color']],
            ['table', ['table']],
            ['para', ['paragraph', 'style']],
            ['height', ['height']],
            ['Insert', ['picture', 'link', 'video','hr']],
            ['Misc', ['fullscreen', 'codeview']],
        ],
        imageTitle: {
          specificAltField: true,
        },
      lang: 'en-US',
      popover: {
          image: [
            //   ['imagesize', ['imageSize100', 'imageSize50', 'imageSize25']],
              ['float', ['floatLeft', 'floatRight', 'floatNone']],
              ['remove', ['removeMedia']],
          ],
      },
        height: 300,
    });
    });

      function uploadImage(image) {
				var data = new FormData();
				data.append("image", image);
				$.ajax({
					url: '{{URL("admin/ajax/text-editor/image/")}}',
					cache: false,
					contentType: false,
					processData: false,
					data: data,
					type: "post",
					success: function(url) {
						var image = $('<img>').attr('src', url).attr('data-src', url).attr('class', 'img-fluid');
						$('#summernote').summernote("insertNode", image[0]);
					},
					error: function(data) {
						console.log(data);
					}
				});
			}

</script>
@endsection
