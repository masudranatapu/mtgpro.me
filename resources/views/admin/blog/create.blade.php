@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('blogs','active')
@section('blog','active')
@section('title') {{ __('Blog Create')}} @endsection
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
    {{-- <div class="container-xl">
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Add New Post') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.blog')}}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <form action="{{route('admin.blog.store')}}" method="post" class="card" enctype="multipart/form-data">
                        @csrf
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Create Post') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.blog')}}" class="btn btn-primary">{{ __('Back')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="row d-flex justify-content-center">
                                <div class="col-xl-10">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label required">{{ __('Title')}}</label>
                                                <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{old('title')}}">
                                                @error('title')
                                                    <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label required">{{ __('Select Category')}}</label>
                                                <select name="category_id" class="form-control">
                                                    <option value="" class="d-none">{{ __('Category')}}</option>
                                                    @foreach($category as $row)
                                                        <option value="{{$row->id}}">{{ $row->category_name }}</option>
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
                                                <input type="text" class="form-control" name="author" placeholder="{{ __('Author name')}}" value="{{old('author')}}">
                                                @error('author')
                                                    <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('Tags')}}</label>
                                                <input type="text" data-role="tagsinput" class="form-control" name="tag" placeholder="{{ __('card,vcard')}}" value="{{old('tag')}}">
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
                                                        <option value="1">{{ __('Active') }}</option>
                                                        <option value="0">{{ __('Inactive') }}</option>
                                                    </select>
                                                </div>
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
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('Summary')}}</label>
                                                <textarea class="form-control" name="summary" placeholder="{{ __('Summary')}}" value="{{old('summary')}}"></textarea>
                                                @error('summary')
                                                    <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">{{ __('Meta Description')}}</label>
                                                <textarea  class="form-control" name="meta_description" placeholder="{{ __('Meta Description')}}" value="{{old('meta_description')}}"></textarea>
                                                @error('meta_description')
                                                    <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <label class="form-label required">{{ __('Description')}}</label>
                                                <textarea name="details" id="summernote" class="form-control" cols="30" rows="5" value="{{old('details')}}"></textarea>
                                                @error('details')
                                                    <div class="text-danger">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-3">
                                                <button type="submit" class="btn btn-primary">
                                                   <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                        <line x1="12" y1="5" x2="12" y2="19"></line>
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                    </svg>
                                                    Add
                                                </button>
                                            </div>
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
    @include('admin.includes.footer')
</div>




<div class="modal modal-blur fade" id="contact-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="modal-title text-danger text-capitalize">{{ __('WARNING!')}}</div>
                <div>{{ __('This action will remove contact message data. It is not revertable action.')}}</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link link-secondary me-auto" data-bs-dismiss="modal">{{ __('Cancel')}}</button>
                <a href="" class="btn btn-danger" id="contact_user_id">{{ __('Yes, proceed')}}</a>
            </div>
        </div>
    </div>
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
            ['Insert', ['picture', 'link', 'video', 'hr']],
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
