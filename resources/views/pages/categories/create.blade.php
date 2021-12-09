@extends('layouts.master')

{{-- title --}}
@section('title', 'Thêm danh mục')

@section('style-libraries')

@endsection

{{-- style --}}
@section('styles_section')
    <link rel="stylesheet" href="{{ asset('css/categories/create.css') }}">
@endsection

{{-- navbar-link --}}
@section('navbar-link')
    <!-- Left navbar links -->
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('product.index') }}" class="nav-link text-dark font-weight-bold">Danh mục</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link">Thêm danh mục</span>
    </li>
@endsection

@section('scripts_section')
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/categories/create.js') }}"></script>
@endsection

{{-- content --}}
@section('content')

    <form action="{{ route('category.store') }}" id="formCreateCategory" method="post" enctype="multipart/form-data">
        @csrf
        <div class="pt-2 pr-3 pl-5">
            <div class="row">
                <div class="col-md-5 mr-3" id="category-create-form">
                    <div>
                        <h2>Thêm danh mục</h2>
                    </div>
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Tên danh mục">
                        @if ($errors->has('name'))
                            <p class="help is-danger">{{ $errors->first('name') }}</p>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="status-group" id="status-group">
                            <div class="form-check">
                                <label class="form-check-label" for="status-public">
                                    <input type="radio" class="form-check-input" name="status" id="status-public" value="1">
                                    <span>Public</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="status-private">
                                    <input type="radio" class="form-check-input" name="status" id="status-private" value="2">
                                    <span>Private</span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục cha</label>
                        <div class="form-category">
                            <select class="form-control" name="category_id" id="category_id">
                                <option disabled>Chọn 1 danh mục</option>
                                @if ($categories)
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->categoryName }}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end mt-5">
                        <button type="submit" class="btn btn-primary" id="btn-add-category">Thêm danh mục</button>
                    </div>
                </div>
                <div class="col-md-6 pr-5 border border-info">

                </div>
            </div>
        </div>
    </form>
@endsection
