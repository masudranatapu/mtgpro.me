@extends('user.layouts.app')
@section('title') {{ __('My Cards') }}  @endsection
 @push('custom_css')
<style>
  .card-status input[type=checkbox]{
	height: 0;
	width: 0;
	visibility: hidden;
}

.card-status label {
    cursor: pointer;
    text-indent: -9999px;
    width: 50px;
    height: 22px;
    background: grey;
    display: block;
    border-radius: 100px;
    position: relative;
    overflow: hidden;
}

.card-status label:after {
    content: '';
    position: absolute;
    top: 1px;
    left: 5px;
    width: 19px;
    height: 19px;
    background: #fff;
    border-radius: 90px;
    transition: 0.3s;
}
.card-status input:checked + label {
	background: #bada55;
}

.card-status input:checked + label:after {
	left: calc(100% - 5px);
	transform: translateX(-100%);
}

.card-status label:active:after {
	width: 50px;
}

</style>
@endpush
@section('dashboard','active')
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
                <div class="container-fluid">
                    <div class="row">
                        @if(isset($cards) && count($cards)>0)
                        @foreach($cards as $key => $card)

                        <div class="col-md-6 col-xl-4">
                            <!-- user card -->

                                <div class="dashboard_card user_card" style="background-color: #E8F4ED;height: 400px;">
                                    <div class="card_body">
                                        <div class="card_cover_bg">
                                            <!-- cover image -->
                                            <div class="cover_photo">
                                                <img src="{{ getCover($card->cover) }}" class="img-fluid" alt="{{ $card->title }} {{ $card->title2 }}">
                                            </div>
                                            <div class="user_card_profile text-center">
                                                <div class="profile_image">
                                                    <!-- profile image -->
                                                    <div class="profile_photo">
                                                        <img src="{{ getProfile($card->profile) }}" class="img-fluid" alt="{{ $card->title }} {{ $card->title2 }}">
                                                    </div>
                                                    <!-- logo -->
                                                    <div class="logo">
                                                        <img src="{{ getLogo($card->logo) }}" alt="{{ $card->company_name }}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- user card info -->
                                        <div class="card_info mt-4 text-center">
                                            <div class="profile_name">
                                                <h3>{{ $card->title }} {{ $card->title2 }}</h3>
                                                <h5>{{ $card->designation }} {{ __('at') }} {{ $card->company_name }}</h5>
                                            </div>
                                            <div class="card_btn mt-3 mb-4">
                                                <a href="{{ route('user.card.edit',$card->id) }}" class="btn-sm btn-secondary">{{ __('Edit Card') }}</a>
                                                <a target="__blank" href="{{ route('card.preview',$card->card_url) }}" class="btn-sm btn-secondary"><i class="fa fa-check"></i> {{ __('Live') }}</a>
                                                @if (checkPackage())
                                                <div class="card-status d-inline-block position-relative mt-3">
                                                    <input type="checkbox" name="change-status" id="switch_{{$card->id}}" value="{{$card->status}}"  {{ $card->status==1 ? 'checked':'' }}  class="change-status" data-id="{{ $card->id }}" /><label for="switch_{{$card->id}}">Toggle</label>
                                                </div>
                                                @endif

                                            </div>
                                        </div>
                                    </div>
                                </div>

                        </div>
                        @endforeach
                        @endif
                        <div class="col-md-6 col-xl-4">
                            <!-- create new card -->
                            <a href="{{ route('user.card.create') }}">
                                <div class="dashboard_card text-center">
                                    <div class="card_body">
                                        <span class="plus_icon">
                                            <img src="{{ asset('assets/img/icon/plus.svg') }}" alt="{{ __('Create New Card') }}">
                                        </span>
                                        <p>{{ __('Create New Card') }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('custom_js')
<script>
    $.ajaxSetup({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
           });


    $(document).on('change','.change-status', function() {
        var change_status = $('input[name="change-status"]:checked').val() ?? 0;
        var card_id = $(this).attr('data-id');
        var get_url = $('#base_url').val();

        $.ajax({
            type: 'POST',
            url: "{{ URL::route('user.card.change-status') }}",
            data: {
            '_token': $('input[name=_token]').val(),
            'id': card_id
            },
            success: function(data) {
                if(data.status==true){
                    toastr.success(data.msg);
                }
                else{
                        toastr.warning(data.msg);
                    }
            },
        });



        // $.ajax({
        //     type: 'GET',
        //     url: get_url + '/card/change-status/'+card_id,
        //     async: true,
        //     beforeSend: function () {
        //         $("body").css("cursor", "progress");
        //     },
        //     success: function (response) {
        //         $("#personalized_link_help").text(response.message).removeClass('text-danger').addClass('text-success');

        //     },
        //     complete: function (data) {
        //         $("body").css("cursor", "default");
        //     }
        // });


})
</script>
@endpush
