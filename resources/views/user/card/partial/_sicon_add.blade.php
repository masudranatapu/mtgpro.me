<?php

if($icon->type=='mobile'){
$type = "number";

}
else if($icon->type=='mail'){
    $type = "address";
}
else{
    $type = $icon->type;
}


?>
<form action="{{ route('user.card.add_icon') }}" id="iconCreateForm" method="post"
enctype="multipart/form-data">
@csrf
<input type="hidden" name="card_id" value="{{ $card->id }}">
<input type="hidden" name="icon_id" id="icon_id" value="{{ $icon->id }}">
<div class="form-group">
     {{-- <label class="imgLabel" for="upload_icon"> --}}
        <input type="file" class="form-control upload_icon" name="logo" id="upload_icon" data-id="" hidden>
        <img id="content_icon" src="{{ getIcon($icon->icon_image) }}" style="background: {{ $icon->icon_color ?? '#f9f9f9' }}" alt="" width="100" height="100">
        @if($errors->has('logo'))
        <span class="help-block text-danger">{{ $errors->first('logo') }}</span>
        @endif
    {{-- </label> --}}
</div>
<div class="form-group">
    <label class="form-label">
        <span id="content_link">{{ $icon->icon_title }} {{ $type }}</span>
        <span class="text-dark">*</span>
    </label>
    <input type="text" name="content" class="form-control content_input"
        placeholder="{{ $icon->icon_title }} {{ $type }}" required>
    @if($errors->has('content'))
    <span class="help-block text-danger">{{ $errors->first('content') }}</span>
    @endif
</div>
<div class="form-group">
    <label for="label" class="form-label">{{ __('Link title') }}</label>
    <input type="text" name="label" class="form-control mcin"
        data-preview="link_title_show" placeholder="Title" required
        id="content_title" data-id="" maxlength="20">
    @if($errors->has('label'))
    <span class="help-block text-danger">{{ $errors->first('label') }}</span>
    @endif
</div>
<div class="form-group text-center float-lg-right">
    <button type="button" class="btn btn-secondary backfirstModal mr-2">{{
        __('Cancel') }}
    </button>
    <button type="submit" class="btn btn-primary" id="icon-save-btn">{{
        __('Save') }}
    </button>
</div>
</form>
<script>
    //    var cropper = new Slim(document.getElementById('upload_icon'), {
    //     ratio: '1:1',
    //     minSize: {
    //         width: 50,
    //         height: 50,
    //     },
    //     size: {
    //         width: 440,
    //         height: 440,
    //     },
    //     willSave: function(data, ready) {
    //         $('#showlogo_2').attr('src', data.output.image);
    //         ready(data);
    //     },

    //     download: false,
    //     instantEdit: true,
    //     // label: 'Upload: Click here or drag an image file onto it',
    //     buttonConfirmLabel: 'Crop',
    //     buttonConfirmTitle: 'Crop',
    //     buttonCancelLabel: 'Cancel',
    //     buttonCancelTitle: 'Cancel',
    //     buttonEditTitle: 'Edit',
    //     buttonRemoveTitle: 'Remove',
    //     buttonDownloadTitle: 'Download',
    //     buttonRotateTitle: 'Rotate',
    //     buttonUploadTitle: 'Upload',
    //     statusImageTooSmall: 'This photo is too small. The minimum size is 360 * 240 pixels.'
    // });

</script>
