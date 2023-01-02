@extends('user.layouts.app')
@section('title') {{ __('My Cards') }}  @endsection
@push('custom_css')
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
                        @foreach($cards as $key => $item)

                        <div class="col-md-6 col-xl-4">
                            <!-- user card -->

                                <div class="dashboard_card user_card" style="background-color: #E8F4ED;">
                                    <div class="card_body">
                                        <div class="card_cover_bg">
                                            <!-- cover image -->
                                            <div class="cover_photo">
                                                <img src="{{ getCover($item->cover) }}" class="img-fluid" alt="image">
                                            </div>
                                            <div class="user_card_profile text-center">
                                                <div class="profile_image">
                                                    <!-- profile image -->
                                                    <div class="profile_photo">
                                                        <img src="{{ getProfile($item->profile) }}" class="img-fluid" alt="image">
                                                    </div>
                                                    <!-- logo -->
                                                    <div class="logo">
                                                        <img src="{{ getLogo($item->logo) }}" alt="image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- user card info -->
                                        <div class="card_info mt-4 text-center">
                                            <div class="profile_name">
                                                <h3>{{ $item->name }}</h3>
                                                <h5>{{ $item->designation }}</h5>
                                            </div>
                                            <div class="card_btn mt-3 mb-4">
                                                <a href="{{ route('user.card.edit',$item->id) }}" class="btn-sm btn-secondary">{{ __('Edit Card') }}</a>
                                                <a target="__blank" href="{{ route('card.preview',$item->card_url) }}" class="btn-sm btn-secondary"><i class="fa fa-check"></i> {{ __('Live') }}</a>
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
@endpush
