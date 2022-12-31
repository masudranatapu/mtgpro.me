@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('title') Theme List @endsection
@section('settings','active')
@section('themes','active')
@section('content')
<div class="page-wrapper">
    {{-- <div class="container-xl">
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                        {{ __('Themes') }}
                    </h2>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <h1 class="text-center text-warning ">Coming soon....</h1>
            </div>

        </div>
    </div>
 @include('admin.includes.footer')
</div>


<div id="editModal" class="modal animate__animated animate__fadeIn" role="dialog">
<div class="modal-dialog">
    <div class="modal-content">
      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">{{ __('Edit Theme') }}</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form action="" method="POST" enctype="multipart/form-data" id="theme_edit_frm">
          @csrf

          <div class="mb-3">
              <label class="form-label required" for="theme_name">{{ __('Theme Name') }}</label>
              <input type="text" class="form-control" name="theme_name" value="" placeholder="Enter theme names" value="{{old('theme_name')}}" id="theme_name" required>
              @error('theme_name')
                  <div class="text-danger">{{$message}}</div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label required" for="theme_description">{{ __('Theme Description') }}</label>
              <input type="text" class="form-control" name="theme_description" value="" placeholder="Enter theme Description" value="{{old('theme_description')}}" id="theme_description" required>
              @error('theme_description')
                  <div class="text-danger">{{$message}}</div>
              @enderror
          </div>

          <div class="mb-3">
              <label class="form-label " for="theme_thumbnail">{{ __('Theme Thumbnail') }}</label>
              <input type="file" class="form-control" name="theme_thumbnail" id="theme_thumbnail">
              @error('theme_thumbnail')
                  <div class="text-danger">{{$message}}</div>
              @enderror
          </div>
          <div class="mb-3">
              <img src="" width="120" class="rounded" alt="theme_thumbnail" id="theme_thumbnail_photo">
          </div>

          <div class="mb-3">
              <label class="form-label required" for="theme_price">{{ __('Theme Price') }}<span class="text-danger">({{ __('For free, enter 0') }})</span></label>
              <input type="text" class="form-control" name="theme_price" value="" placeholder="Enter theme names" value="{{old('theme_price')}}" id="theme_price" required>
              @error('theme_price')
                  <div class="text-danger">{{$message}}</div>
              @enderror
          </div>
          <div class="mb-3">
              <label class="form-label required" for="status">{{ __('Status') }}</label>
              <div class="">
                  <select class="form-control" name="status" required id="status" required>
                      <option value="1" >{{ __('Active') }}</option>
                      <option value="0" >{{ __('Inactive') }}</option>
                  </select>
              </div>
          </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
          <button type="submit" class="btn btn-success">{{ __('Update') }}</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">{{ __('Close') }}</button>
      </div>
   </form>
    </div>
  </div>
</div>

@endsection

@section('scripts')
<script>
$(document).on('click','.edit_theme',function(e){
    var id = $(this).data('id');
    var theme_name = $(this).data('theme_name');
    var theme_description = $(this).data('theme_description');
    var theme_price = $(this).data('theme_price');
    var theme_thumbnail = $(this).data('theme_thumbnail');
    var status = $(this).data('status');
    var url = $(this).data('url');


    $('#theme_edit_frm').attr('action',url);
    $('#theme_name').val(theme_name);
    $('#theme_thumbnail_photo').attr('src',theme_thumbnail);
    $('#theme_description').val(theme_description);
    $('#theme_price').val(theme_price);
    $('#status').val(status);

})
</script>

@endsection
