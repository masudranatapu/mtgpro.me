@extends('user.layouts.app')
@section('title') {{ __('My Cards') }}  @endsection
@section('dashboard','active')
@push('custom_css')
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/> --}}
<style type="text/css">


</style>
@endpush

@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{ __('My Cards') }} <a class="create_plus_icon" href="{{ route('user.card.create') }}"><i class="fab fa-plus"></i></a></h1>
                    </div>
                </div>
            </div>
        </div>
            <div class="content">
                <form class="form-horizontal" method="POST" action="{{ route('user.card.crop-upload') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                   @csrf
                <div>
                    <div class="frame"  style="width:360px;height:240px"  data-size="360,360"
                    data-max-file-size="2">
                       <input type="file" class="form-control slim" name="avatar" id="myCropper">
                    </div>
                 </div>

                <button type="submit" class="btn btn-primary">Submit </button>


                </form>

                {{-- <div class="demo">
                    <div class="image-wrapper">
                        <div id="custom-preview-wrapper"></div>
                        <div id="cropped-resized">
                            <h3>Images resized (50x50)</h3>
                        </div>
                    </div>
                    <div class="image-wrapper" id="image-4-wrapper">
                        <img id="image-3" src="{{ asset('assets/img/banner-img.png') }}">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
@push('custom_js')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slim.min.css') }}" />
{{-- <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rcrop.min.css') }}" /> --}}
<script type="text/javascript" src="{{ asset('assets/js/slim.kickstart.min.js') }}"></script>

<script type="text/javascript">
    var cropper = new Slim(document.getElementById('myCropper'), {
        ratio: '3:3',
        minSize: {
            width: 360,
            height: 240,
        },
        size: {
            width: 720,
            height: 480,
        },
        willSave: function(data, ready) {
            console.log(data);
          ready(data);
        },
        meta: {
            viewid:1
      },
        download: true,
        instantEdit: true,
        label: 'Upload: Click here or drag an image file onto it',
        buttonConfirmLabel: 'Crop',
        buttonConfirmTitle: 'Crop',
        buttonCancelLabel: 'Cancel',
        buttonCancelTitle: 'Cancel',
        buttonEditTitle: 'Edit',
        buttonRemoveTitle: 'Remove',
        buttonDownloadTitle: 'Download',
        buttonRotateTitle: 'Rotate',
        buttonUploadTitle: 'Upload',
        statusImageTooSmall:'This photo is too small. The minimum size is 360 * 240 pixels.'
    });
    </script>
{{-- <script type="text/javascript" src="{{ asset('assets/js/rcrop.min.js') }}"></script> --}}
{{-- <script>
    $(document).ready(function(){
        $('#image-3').rcrop({
            minSize : [200,200],
            preserveAspectRatio : true,

            preview : {
                display: false,
                size : [100,100],
                wrapper : '#custom-preview-wrapper'
            }
        });

        $('#image-3').on('changed', function(){
            var srcOriginal = $(this).rcrop('getDataURL');
            var srcResized = $(this).rcrop('getDataURL', 50,50);

            $('#cropped-original').append('<img src="'+srcOriginal+'">');
            $('#cropped-resized').append('<img src="'+srcResized+'">');
        })
    });
</script> --}}
@endpush
