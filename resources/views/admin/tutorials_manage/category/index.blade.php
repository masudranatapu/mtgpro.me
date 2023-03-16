@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])

@section('title')
    Tutorial Category
@endsection

@section('tutorials_category', 'active')

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
                                        {{ __('Tutorial Category') }}
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="float-end">
                                        <a href="javascript:;" class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#crateTutorialsCategory">
                                            {{ __('Add New') }}
                                        </a>
                                    </div>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="crateTutorialsCategory" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                    Create Tutorial Category
                                                </h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close">
                                                </button>
                                            </div>
                                            <form action="{{ route('admin.tutorialcategory.store') }}" method="POST">
                                                @csrf
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label class="form-label">
                                                                    Tutorial Category Name
                                                                    <span style="color: red">*</span>
                                                                </label>
                                                                <input type="text" name="title" id="title"
                                                                    class="form-control @error('title') border-danger @enderror"
                                                                    placeholder="Title" required
                                                                    value="{{ old('title') }}">
                                                                @error('title')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-12">
                                                            <div class="mb-2">
                                                                <label class="form-label">
                                                                    Status
                                                                    <span style="color: red">*</span>
                                                                </label>
                                                                <select name="status"
                                                                    class="form-control @error('status') border-danger @enderror"
                                                                    required>
                                                                    <option value="1">Active</option>
                                                                    <option value="0">Inactive</option>
                                                                </select>
                                                                @error('status')
                                                                    <span class="text-danger">{{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">
                                                        Close
                                                    </button>
                                                    <button type="submit" class="btn btn-primary">
                                                        Save changes
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive px-2 py-2">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th class="text-center">{{ __('SL') }}</th>
                                                <th>{{ __('Title') }}</th>
                                                <th class="text-center">{{ __('Status') }}</th>
                                                <th class="text-center">{{ __('Action') }}</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tutorialcategories as $key => $categories)
                                                <tr>
                                                    <td class="text-center">{{ $key + 1 }}</td>
                                                    <td>{{ $categories->title }}</td>
                                                    <td class="text-center">
                                                        @if ($categories->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span class="badge bg-info">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="javascript:;" style="min-width: 55px;" class="btn btn-info btn-sm mb-1 mb-lg-0"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#editTutorialsCategory_{{ $categories->id }}">
                                                            Edit
                                                        </a>
                                                        <a style="min-width: 55px;" href="{{ route('admin.tutorialcategory.delete', $categories->id) }}"
                                                            class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Are you sure!')">
                                                            Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <div class="modal fade" id="editTutorialsCategory_{{ $categories->id }}"
                                                    tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                                    Edit Tutorial Category
                                                                </h1>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close">
                                                                </button>
                                                            </div>
                                                            <form
                                                                action="{{ route('admin.tutorialcategory.update', $categories->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                <div class="modal-body">
                                                                    <div class="row">
                                                                        <div class="col-12">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">
                                                                                    Tutorial Category Name
                                                                                    <span style="color: red">*</span>
                                                                                </label>
                                                                                <input type="text" name="title"
                                                                                    id="title"
                                                                                    class="form-control @error('title') border-danger @enderror"
                                                                                    placeholder="Title" required
                                                                                    value="{{ $categories->title }}">
                                                                                @error('title')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12">
                                                                            <div class="mb-2">
                                                                                <label class="form-label">
                                                                                    Status
                                                                                    <span style="color: red">*</span>
                                                                                </label>
                                                                                <select name="status"
                                                                                    class="form-control @error('status') border-danger @enderror"
                                                                                    required>
                                                                                    <option value="1"
                                                                                        @if ($categories->status == 1) selected @endif>
                                                                                        Active</option>
                                                                                    <option value="0"
                                                                                        @if ($categories->status == 0) selected @endif>
                                                                                        Inactive
                                                                                    </option>
                                                                                </select>
                                                                                @error('status')
                                                                                    <span
                                                                                        class="text-danger">{{ $message }}</span>
                                                                                @enderror
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">
                                                                        Close
                                                                    </button>
                                                                    <button type="submit" class="btn btn-primary">
                                                                        Save changes
                                                                    </button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-12">
                                        {{ $tutorialcategories->links('pagination::bootstrap-4') }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
