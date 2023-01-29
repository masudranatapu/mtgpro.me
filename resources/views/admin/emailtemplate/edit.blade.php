@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('email-template', 'active')

@push('css')

@endpush

@section('title')
    {{ __('Edit Email Template') }}
@endsection

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-sm-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="col">
                                    <div class="float-left">
                                        {{ __('Edit Email Template') }}
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.email.templateupdate', $emailtemplates->id) }}" method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Type</label>
                                            <input type="text" class="form-control" readonly name="type" value="{{ $emailtemplates->type }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject" value="{{ $emailtemplates->subject }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label>Body</label>
                                            <textarea name="body" class="form-control" cols="30" rows="10">{{ $emailtemplates->body }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 text-center">
                                            <button type="submit" class="btn btn-success">Update</button>
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
@endsection

@section('scripts')

@endsection
