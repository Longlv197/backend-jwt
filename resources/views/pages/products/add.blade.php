@extends('layouts.master')

{{-- title --}}
@section('title', 'Add Product')

@section('style-libraries')

@endsection

@section('scripts_section')
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('js/products/add.js') }}"></script>
@endsection

{{-- style --}}
@section('styles_section')
    <link rel="stylesheet" href="{{ asset('css/products/add.css') }}">
@endsection

{{-- navbar-link --}}
@section('navbar-link')
    <!-- Left navbar links -->
    <li class="nav-item d-none d-sm-inline-block">
        <a href="{{ route('product.index') }}" class="nav-link text-dark font-weight-bold">Products</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <span class="nav-link">Add product</span>
    </li>
@endsection


{{-- content --}}
@section('content')
    <form action="{{ route('product.store') }}" id="formAdd" method="post" enctype="multipart/form-data">
        @csrf
        <div class="pt-2 pr-3 pl-5">
            <div class="row">
{{-- right --}}
                <div class="col-md-9 pr-5">
                    {{-- name --}}
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Tên sản phẩm">
                        @if ($errors->has('name'))
                            <small class="help-block text-danger">{{ $errors->first('name') }}</small>
                        @endif
                    </div>

                    {{-- image --}}
                    <div class="form-group">
                        <label for="">Ảnh hiện thị đầu tiên</label>
                        <input type="file" name="image" class="form-control-file" id="image">
                        <div id="frames"></div>
                        @if ($errors->has('image'))
                            <small class="help-block text-danger">{{ $errors->first('image') }}</small>
                        @endif
                    </div>

                    {{-- image_list --}}
                    <div class="form-group">
                        <label for="">Danh sách các ảnh</label>
                        <input type="file" name="image_list[]" class="form-control-file" id="image_list" multiple>
                        <div id="frame_list" class="mt-2"></div>
                        @error('image_list')
                            <small class="help-block text-danger">{{ $errors->first('image_list') }}</small>
                        @enderror
                    </div>

                    {{-- description --}}
                    <div class="form-group">
                        <label for="">Mô tả sản phẩm</label>
                        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                        @error('description')
                            <small class="help-block text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>
{{-- left --}}
                <div class="col-md-3 pr-3">
                    {{-- category --}}
                    <div class="form-group">
                        <label for="">Danh mục</label>

                        <select class="form-control" name="category_id" id="category_id">
                            <option disabled>Chọn 1 danh mục</option>
                            <option value="1">Quần</option>
                            <option value="2">Áo</option>
                        </select>
                        @error('category')
                            <small class="help-block text-danger">{{ $errors->first('category') }}</small>
                        @enderror
                    </div>

                    {{-- unit --}}
                    <div class="form-group">
                        <label for="">Đơn vị sản phẩm</label>

                        <select class="form-control" name="unit_id" id="unit_id">
                            <option disabled>Chọn 1 loại đơn vị</option>
                            <option value="1">Cái</option>
                            <option value="2">Đôi</option>
                        </select>
                        @error('unit')
                            <small class="help-block text-danger">{{ $errors->first('unit') }}</small>
                        @enderror
                    </div>

                    {{-- category --}}
                    <div class="form-group">
                        <label for="">Số lượng sản phẩm</label>

                        <input type="number" name="quantity" class="form-control" id="quantity" placeholder="Số lượng sản phẩm">
                        @error('quantity')
                            <small class="help-block text-danger">{{ $errors->first('quantity') }}</small>
                        @enderror
                    </div>

                    {{-- price --}}
                    <div class="form-group">
                        <label for="">Giá gốc</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Giá sản phẩm">
                        @error('price')
                            <small class="help-block text-danger">{{ $errors->first('price') }}</small>
                        @enderror
                    </div>

                    {{-- price sale --}}
                    <div class="form-group">
                        <label for="">Giá sale</label>
                        <input type="number" name="price_sale" class="form-control" id="price_sale" placeholder="Giá sản phẩm">
                        @error('price_sale')
                            <small class="help-block text-danger">{{ $errors->first('price_sale') }}</small>
                        @enderror
                    </div>

                    {{-- size --}}
                    <div class="form-group">
                        <label for="">Size sản phẩm</label>
                        <div class="size-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size1" name="size[]" value="S">
                                <label class="form-check-label" for="size1">Size S</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size2" name="size[]" value="M">
                                <label class="form-check-label" for="size1">Size M</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size3" name="size[]" value="L">
                                <label class="form-check-label" for="size1">Size L</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size4" name="size[]" value="XL">
                                <label class="form-check-label" for="size1">Size XL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size5" name="size[]" value="XXL">
                                <label class="form-check-label" for="size1">Size XXL</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="size6" name="size[]" value="XXXL">
                                <label class="form-check-label" for="size1">Size XXXL</label>
                            </div>
                        </div>

                        @error('size')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- color --}}
                    <div class="form-group">
                        <label for="">Loại Màu sản phẩm</label>
                        <div class="color-group">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form-check-inline" type="checkbox" name="favcolor[]" id="color1" value="White">
                                <label class="form-check-label" for="color1">Trắng</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input form-check-inline" type="checkbox" name="favcolor[]" id="color2" value="Black">
                                <label class="form-check-label" for="color2">Đen</label>
                            </div>
                        </div>

                        @error('color')
                            <small class="help-block">{{ $message }}</small>
                        @enderror
                    </div>

                    {{-- status --}}
                    <div class="form-group">
                        <label for="">Trạng thái</label>
                        <div class="status-group">
                            <div class="form-check">
                                <label class="form-check-label" for="">
                                    <input type="radio" class="form-check-input" name="status" value="1">
                                    <span>Hiển thị</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">
                                    <input type="radio" class="form-check-input" name="status" value="2">
                                    <span>Ẩn sản phẩm</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="">
                                    <input type="radio" class="form-check-input" name="status" value="3">
                                    <span>Hết hàng</span>
                                </label>
                            </div>
                            @error('status')
                                <small class="help-block">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Thêm sản phấm</button>
        </div>
    </form>
@endsection
