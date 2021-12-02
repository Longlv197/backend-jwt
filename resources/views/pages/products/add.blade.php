@extends('layouts.master')

{{-- title --}}
@section('title', 'Add Product')

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
    <form action="{{ route('produt.store') }}" method="post" class="" enctype="multipart/form-data">
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
                        <input type="file" name="image" class="form-control-file" id="image">
                        @error('image')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- image_list --}}
                    <div class="form-group">
                        <label for="">Image list</label>
                        <input type="file" name="image_list[]" class="form-control-file" id="image_list" multiple>
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
                            <option value="1">Quần</option>
                            <option value="2">Áo</option>
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

                    {{-- size --}}
                    <div class="form-group">
                        <label for="">Size Product</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="S">
                                <label class="form-check-label" for="size1">Size S</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="M">
                                <label class="form-check-label" for="size1">Size M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="L">
                                <label class="form-check-label" for="size1">Size L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="XL">
                                <label class="form-check-label" for="size1">Size XL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="XXL">
                                <label class="form-check-label" for="size1">Size XXL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="XXXL">
                                <label class="form-check-label" for="size1">Size XXXL</label>
                            </div>
                        </div>

                        @error('size')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- color --}}
                    <div class="form-group">
                        <label for="">Color Product</label>
                        <div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="favcolor[]" id="color1" value="White">
                                <label class="form-check-label" for="color1">Trắng</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" name="favcolor[]" id="color2" value="Black">
                                <label class="form-check-label" for="color2">Đen</label>
                            </div>
                            {{-- <div class="form-check form-check-inline">
                                <input type="color" id="favcolor" name="favcolor" value="#ebeb99"><br><br>
                                <label class="form-check-label ml-1">Other</label>
                            </div> --}}
                        </div>

                        @error('color')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- status --}}
                    <div class="form-group">
                        <label for="">Status</label>
                        <div class="form-check">
                            <label class="form-check-label" for="">
                                <input type="radio" class="form-check-input" name="status" value="1">
                                <span>Public</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="">
                                <input type="radio" class="form-check-input" name="status" value="2" checked>
                                <span>Private</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label" for="">
                                <input type="radio" class="form-check-input" name="status" value="3">
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
