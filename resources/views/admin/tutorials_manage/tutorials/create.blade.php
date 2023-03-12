@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
@endpush

@section('title')
    Create Tutorials
@endsection

@section('tutorials_manage', 'active')

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
                                        {{ __('Create Tutorials') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="{{ route('admin.tutorials.index') }}" class="btn btn-info">
                                            {{ __('Back') }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('admin.tutorials.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Enter Tutorial Title
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" autocomplete="off" name="title"
                                                    class="form-control @error('title') border-danger @enderror"
                                                    placeholder="Tutorial title" required value="{{ old('title') }}">
                                                @error('title')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Enter Author Name
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" autocomplete="off" name="author" id="blog_author"
                                                    class="form-control @error('author') border-danger @enderror"
                                                    placeholder="Author Name" required
                                                    value="{{ auth()->user()->username }}">
                                                @error('author')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Enter Publish Date
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <input type="text" autocomplete="off" name="publish_date" id="datepicker"
                                                    class="form-control @error('publish_date') border-danger @enderror"
                                                    placeholder="Publish Date" required value="{{ old('publish_date') }}">
                                                @error('publish_date')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Tutorials Category
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="category_id" id="category" required class="form-control">
                                                    @foreach ($tutorialCategories as $category)
                                                        <option value="{{ $category->id }}"
                                                            @if (old('category_id') == $category->id) selected @endif>
                                                            {{ $category->title }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12">
                                            <div class="mb-2">
                                                <label class="form-label">Status<span class="text-danger">*</span></label>
                                                <select name="status" id="status" required class="form-control">
                                                    <option value="1"
                                                        @if (old('status') == 1) selected @endif>Pubilsh</option>
                                                    <option value="0"
                                                        @if (old('status') == 0) selected @endif>Unpubilsh</option>
                                                </select>
                                                @error('status')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Tutorials File Type
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <select name="file_type" class="form-control" id="tutorialsFileType"
                                                    required>
                                                    <option disabled selected>Select One</option>
                                                    <option value="1">Image</option>
                                                    <option value="2">Video</option>
                                                    <option value="3">Youtube video link</option>
                                                </select>
                                                @error('file_type')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12 col-xl-8" id="showfile">

                                        </div>

                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Short Description
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <textarea name="short_description" required class="form-control" cols="30" style="height: 100px;"
                                                    placeholder="Short description" onkeyup="countChars(this);">{{ old('short_description') }}</textarea>
                                                <span id="charNum"></span>
                                                @error('short_description')
                                                    <span class="invalid-feedback"
                                                        role="alert"><strong>{{ $message }}</strong></span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Tags
                                                </label>
                                                <input type="text" autocomplete="off" name="tags" class="form-control"
                                                    value="{{ old('tags') }}">
                                                @error('tags')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                            <div class="mb-2">
                                                <label class="form-label">
                                                    Discription
                                                    <span class="text-danger">*</span>
                                                </label>
                                                <textarea name="discription" class="summernote" class="form-control" id="discription">{{ old('discription') }}</textarea>
                                                @error('discription')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-1">
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.polyfills.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script>
        $("#datepicker").datepicker();

        $(".summernote").summernote({
            height: 250,
        });

        var input = document.querySelector("input[name='tags']");
        // initialize Tagify on the above input node reference
        new Tagify(input);
    </script>
    <script>
        $("#tutorialsFileType").on('change', function() {

            var tutorialsfiletypeid = $("#tutorialsFileType").val();
            // alert(tutorialsfiletypeid);

            if (tutorialsfiletypeid == 1) {

                $("#showfile").html(`
                    <div class="mb-2">
                        <label class="form-label">
                            Image
                            <span class="text-danger">*</span>
                        </label>
                        <input type="file" name="file_url" class="form-control" required>
                    </div>
                `);

            } else if (tutorialsfiletypeid == 2) {

                $("#showfile").html(`
                    <div class="mb-2">
                        <label class="form-label">
                            Video File
                            <span class="text-danger">*</span>
                        </label>
                        <input type="file" name="file_url" class="form-control" required>
                    </div>
                `);

            } else {

                $("#showfile").html(`
                    <div class="mb-2">
                        <label class="form-label">
                            Youtube Video Link
                            <span class="text-danger">*</span>
                        </label>
                        <input type="text" autocomplete="off" name="file_url" class="form-control" required placeholder="Youtube video link">
                    </div>
                `);

            }

        });
    </script>
@endpush
