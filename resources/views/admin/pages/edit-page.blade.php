@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('settings', 'active')
@section('page', 'active')
@section('content')
<div class="page-wrapper">
{{--     <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="mb-3 page-title">
                        {{ __('Edit Page') }}
                    </h2>
              </div>
            </div>
        </div>
    </div> --}}

    <div class="page-body">
        <div class="container-xxxl" style="width: 96%; padding-left: 2%; padding-right: 2%">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-8">
                    <iframe src="{{ route('home') }}" style="width: 100%">{{ __('Your browser isn\'t compatible')}}</iframe>
                </div>
                <div class="col-sm-12 col-lg-4" >
                    <form action="{{ route('admin.update.home','home') }}" method="post"
                        enctype="multipart/form-data" class="card">
                        @csrf
                        <div class="card-body" style="max-height: 1000px;overflow-y: scroll;">
                            <div class="row">
                                @foreach ($section_name as $section )
                                <div class="col-12">
                                    <hr>
                                    <strong>Section {{ $section->section_name }}</strong>

                                    @php

                                        $data = DB::table('pages')->where('page_name',$id)->where('section_name', $section->section_name)->get();
                                    @endphp
                                        @if(isset($data) && count($data)>0)
                                        @foreach($data as $item)
                                            <div class="col-12">
                                                <div id="section" class="row">
                                                    <div class="col-md-12 col-xl-12">
                                                        <div class="mb-3">
                                                            <label class="form-label">{{ ucfirst(str_replace('_', ' ', $item->section_title)) }}</label>
                                                            @if(($item->is_video == 1))
                                                            <input type="file" name="{{ $item->section_title }}" value="" class="form-control" />
                                                                <small class="help-block text-danger">Preferred Size (794x594) PX</small>
                                                                {!! $errors->first($item->section_title, '<span class="help-block text-danger">:message</span>') !!}
                                                                {{-- <video autoplay="" loop="" style="padding-left: 0; padding-right: 0;width:100px;height:auto;" muted="" playsinline="" data-wf-ignore="true" data-object-fit="cover" >
                                                                    <source src="{{ asset($item->section_content) }}" data-wf-ignore="true">
                                                                </video> --}}
                                                            @elseif($item->is_photo == 1)
                                                                <input type="file" name="{{ $item->section_title }}" value="" class="form-control" />
                                                                <small>Preferred Size (794x594) PX</small>

                                                            @else
                                                            <textarea rows="3" cols="10" class="form-control" name="{{ $item->section_title }}"
                                                                data-bs-toggle="autosize" placeholder="{{ ucfirst(str_replace('_', ' ', $item->section_title)) }}">{{ $item->section_content }}</textarea>
                                                            @endif

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            @endif
                                </div>
                                @endforeach
                                <div class="col-md-4 col-xl-4 my-3">
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Save') }}
                                        </button>
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
@endsection
