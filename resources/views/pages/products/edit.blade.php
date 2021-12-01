@extends('layouts.master')

{{-- title --}}
@section('title', 'Edit product')

@section('style-libraries')

@endsection

{{-- style --}}
@section('styles_section')
    <link rel="stylesheet" href="{{ asset('css/products/index.css') }}">
@endsection

@section('scripts_section')
    <script src="{{ asset('js/products/index.js') }}"></script>
    {{-- <script>
        $(function () {
            $("#description").summernote();
        });
    </script> --}}
@endsection

{{-- content --}}
@section('content')
    <form action="" method="post" class="">
        @csrf
        <div class="pt-2 pr-3 pl-5">
            <div class="row">
{{-- right --}}
                <div class="col-md-9 pr-5">
                    {{-- name --}}
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Tên sản phẩm">
                        @error('name')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- image --}}
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="text" name="image" class="form-control" id="image" placeholder="image">
                        @error('image')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- image_list --}}
                    <div class="form-group">
                        <label for="">Image list</label>
                        <input type="text" name="image_list" class="form-control" id="image_list" placeholder="image_list">
                        @error('image_list')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- description --}}
                    <div class="form-group">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                        @error('description')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
{{-- left --}}
                <div class="col-md-3 pr-3">
                    {{-- category --}}
                    <div class="form-group">
                        <label for="">Category</label>

                        <select class="form-control" name="category_id" id="category_id">
                            <option disabled>Select One</option>
                            <option>Quần</option>
                            <option>Áo</option>
                        </select>
                        @error('category')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                        <label for="">Price before discount</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Giá sản phẩm">
                        @error('price')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- price sale --}}
                    <div class="form-group">
                        <label for="">Price Sale</label>
                        <input type="text" name="price_sale" class="form-control" id="price_sale" placeholder="Giá sản phẩm">
                        @error('price_sale')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- image --}}
                    <div class="form-group">
                        <label for="">Image</label>
                        <input type="text" name="image" class="form-control" id="image" placeholder="image">
                        @error('image')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- size --}}
                    <div class="form-group">
                        <label for="">Size Product</label>
                        <input type="text" name="size" class="form-control" id="size" placeholder="size product">
                        @error('size')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- color --}}
                    <div class="form-group">
                        <label for="">Color Product</label>
                        <input type="text" name="color" class="form-control" id="color" placeholder="color product">
                        @error('color')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- status --}}
                    <div class="form-group">
                        <label for="">Status</label>
                        <div class="radio">
                            <label for="">
                                <input type="radio" name="status" id="1" checked>
                                <span>Public</span>
                            </label>
                            <label for="">
                                <input type="radio" name="status" id="2" checked>
                                <span>Private</span>
                            </label>
                            <label for="">
                                <input type="radio" name="status" id="3" checked>
                                <span>Out of order</span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phấm</button>
        </div>
    </form>
@endsection
