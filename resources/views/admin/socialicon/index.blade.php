@extends('admin.layouts.admin_app', ['header' => true, 'nav' => true, 'demo' => true])
@section('title') Social Icon List @endsection
@section('settings','active')
@section('social_icon','active')
@section('content')
<div class="page-wrapper">
    {{--         <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none mt-2 mb-3">
            <div class="row align-items-center">
                <div class="col">
                    <div class="page-pretitle">
                        {{ __('Overview') }}
                    </div>
                    <h2 class="page-title">
                    {{ __('Social Icon') }}
                    </h2>
                </div>
                <div class="col">
                    <div class="float-end">
                        <a href="{{route('admin.social-icon.create')}}" class="btn btn-primary">{{ __('Add Social Icon')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="page-body">
        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-sm-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="col">
                                <div class="float-left">
                                    {{ __('Social Icon') }}
                                </div>
                            </div>
                            <div class="col">
                                <div class="float-end">
                                    <a href="{{route('admin.social-icon.create')}}" class="btn btn-primary">{{ __('Add Social Icon')}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive px-2 py-2">
                                <table class="table table-vcenter card-table" id="table">
                                    <thead>
                                        <tr>
                                            <th>{{ __('SL.No') }}</th>
                                            <th>{{ __('Icon Name') }}</th>
                                            <th>{{ __('Icon fa ') }}</th>
                                            <th>{{ __('Icon Title') }}</th>
                                            <th>{{ __('Example') }}</th>
                                            <th>{{ __('Status') }}</th>
                                            <th>{{ __('Actions') }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($socileicons as $key => $socile)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$socile->icon_name}}</td>
                                            <td><i class="{{ $socile->icon_fa }}"></i></td>
                                            <td>{{$socile->icon_title}}</td>
                                            <td>{{$socile->example_text}}</td>
                                            <td>
                                                @if($socile->status == 1)
                                                <span class="badge bg-success">{{ __('Active')}}</span>
                                                @else
                                                <span class="badge bg-info">{{ ___('Inactive')}}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.social-icon.edit', $socile->id) }}" title="Edit socile icon" class="btn btn-primary btn-sm">
                                                    {{ __('Edit')}}
                                                </a>
                                                <a href="{{ route('admin.social-icon.destroy', $socile->id) }}" title="Edit socile icon" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure, you want to delete socile icon ?')">
                                                    {{ __('Delete')}}
                                                </a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            {{ $socileicons->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.includes.footer')
</div>
@endsection
