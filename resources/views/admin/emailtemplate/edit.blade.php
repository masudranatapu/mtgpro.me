@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('email-template', 'active')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('assets/css/summernote.css') }}"> --}}
    <style>
        .note-modal-footer {
            height: 56px;
        }
    </style>
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
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.email.template') }}" class="btn btn-primary">Back</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>sl</th>
                                            <th>Tags</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($emailtemplates->hasTags as $tags)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $tags->tags }}</td>
                                                <td>{{ $tags->discription }}</td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="3">
                                                    <p class="text-danger text-center">No Tags found</p>
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <form action="{{ route('admin.email.templateupdate', $emailtemplates->id) }}"
                                    method="post">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label>Type</label>
                                            <input type="text" class="form-control" readonly name="type"
                                                value="{{ $emailtemplates->type }}">
                                        </div>
                                        <div class="col-md-6">
                                            <label>Subject</label>
                                            <input type="text" class="form-control" name="subject"
                                                value="{{ $emailtemplates->subject }}">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-12">
                                            <label>Body</label>
                                            <textarea name="body" class="form-control summernote" cols="30" rows="10">{{ $emailtemplates->body }}</textarea>
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

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    {{-- <script src="{{ asset('assets/js/summernote.js') }}"></script> --}}
    <script>
        $(document).ready(function() {
            $('.summernote').summernote({

                height: 300,
                toolbar: [
                    ['style', ['bold', 'underline', 'italic', 'clear']],
                    ['font', ['strikethrough', 'superscript', 'subscript']],
                    ['fontsize', ['fontsize']],
                    ['color', ['color']],
                    ['para', ['ul', 'ol', 'paragraph']],
                    ['insert', ['link']],
                    ['view', ['codeview', ]],

                ],

            });
        });
    </script>
@endpush
