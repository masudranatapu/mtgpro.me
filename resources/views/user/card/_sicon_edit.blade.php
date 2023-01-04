
<form action="{{ route('user.card.sicon_update') }}" method="post" id="iconUpdateForm" enctype="multipart/form-data">
    @csrf
    <input id="id" type="hidden" name="id" value="{{ $icon->id }}">
    <div class="form-group">
        <label class="imgLabel" for="logo">
            <input type="file" class="form-control upload_icon" name="logo" id="upload_icon" data-id="{{ $icon->id }}" hidden>
            <img id="previewIcon" src="{{ getIcon($icon->icon_image) }}" alt="">
            {{-- <input type="file" onchange="loadFile(event)" class="upload_icon" name="logo" id="logo" hidden> --}}
            {{-- <input type="file" class="upload_icon" name="logo" id="upload_icon" data-id="{{ $icon->id }}" hidden> --}}
            <span>Select photo here or drag and drop <br /> one in place of current</span>
        </label>
        @if($errors->has('logo'))
        <span class="help-block text-danger">{{ $errors->first('logo') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label class="form-label" style="text-transform: capitalize;">{{ $icon->icon.' profile link' }} <span class="text-dark">*</span></label>
        <input type="text" name="content" class="form-control" placeholder="{{ $icon->icon.' profile link' }}" required value="{{ $icon->content }}">
        @if($errors->has('content'))
        <span class="help-block text-danger">{{ $errors->first('content') }}</span>
        @endif
    </div>
    <div class="form-group">
        <label class="form-label">{{ __('Link title') }}</label>
        <input type="text" name="label" class="form-control" placeholder="Title" value="{{ $icon->label ?? $icon->icon }}" required>
        @if($errors->has('label'))
        <span class="help-block text-danger">{{ $errors->first('label') }}</span>
        @endif
    </div>
    {{-- <div class="form-group mb-4">
        <a href="#" target="_blank">
            {{ __('Test your link') }}
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" fill="#03a9f4">
                <path d="M384 320c-17.67 0-32 14.33-32 32v96H64V160h96c17.67 0 32-14.32 32-32s-14.33-32-32-32L64 96c-35.35 0-64 28.65-64 64V448c0 35.34 28.65 64 64 64h288c35.35 0 64-28.66 64-64v-96C416 334.3 401.7 320 384 320zM488 0H352c-12.94 0-24.62 7.797-29.56 19.75c-4.969 11.97-2.219 25.72 6.938 34.88L370.8 96L169.4 297.4c-12.5 12.5-12.5 32.75 0 45.25C175.6 348.9 183.8 352 192 352s16.38-3.125 22.62-9.375L416 141.3l41.38 41.38c9.156 9.141 22.88 11.84 34.88 6.938C504.2 184.6 512 172.9 512 160V24C512 10.74 501.3 0 488 0z"></path>
            </svg>
        </a>
    </div> --}}
    <div class="form-group">
        <div class="float-left">
            <button type="button" class="text-danger scion_remove" data-url="{{ route('user.card.sicon_remove') }}" data-id="{{ $icon->id }}">
                <i class="fa fa-trash"></i>
                {{ __('Remove') }}
            </button>
        </div>
        <div class="float-right">
            <button type="button" class="btn btn-secondary mr-2 back">{{ __('Cancel') }}</button>
            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
        </div>
    </div>
</form>


<script>
//   $('.upload_icon').on('change', function(){
//         if (isImage($(this).val())){
//             if(this.files[0].size > 10000) {
//                 toastr.error("Please upload file less than 100KB. Thanks!!", 'Error', {
//                 closeButton: true,
//                 progressBar: true,
//                 });
//                 return false;
//             }
//             $(this).siblings('#previewIcon').attr('src', URL.createObjectURL(this.files[0]));
//         }
//         else
//         {
//             toastr.error("Only image files are allowed to upload.", 'Error', {
//                 closeButton: true,
//                 progressBar: true,
//             });
//         }
//     });

// // If user tries to upload videos other than these extension , it will throw error.
// function isImage(filename) {
//     var ext = getExtension(filename);
//     switch (ext.toLowerCase()) {
//     case 'jpeg':
//     case 'jpg':
//     case 'png':
//     case 'webp':
//     case 'gif':
//     case 'svg':
//     return true;
//     }
//     return false;
// }
// function getExtension(filename) {
// var parts = filename.split('.');
// return parts[parts.length - 1];
// }
</script>


@push('custom_js')
{{-- <script>
    var cropper = new Slim(document.getElementById('upload_icon'), {
        ratio: '1:1',
        minSize: {
            width: 50,
            height: 50,
        },
        size: {
            width: 80,
            height: 80,
        },
        willSave: function(data, ready) {
            var id = $('#upload_icon').attr('data-id');
            $('#previewIcon').attr("src", data.output.image);
            $('.sicon_' + id).find('.social_logo').attr("src", data.output.image);
            $('.sicon_single_list_' + id).find('.social_media_name').find('img').attr("src", data.output.image);
          ready(data);
        },
        meta: {
            viewid:1
      },
        download: false,
        instantEdit: true,
    });
</script> --}}
@endpush


