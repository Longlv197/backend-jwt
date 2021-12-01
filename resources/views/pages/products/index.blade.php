@extends('layouts.master')

{{-- title --}}
@section('title', 'Products')

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
    <form action="" class="form-inline pl-3 pt-3 mb-3 text-right mr-2">
        <div class="form-group">
            <input type="text" name="key" placeholder="Search By Name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-search"></i>
        </button>
    </form>
    <table class="table pl-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price </th>
                <th>Price Sale</th>
                <th>Status</th>
                <th>Image</th>
                <th>Color</th>
                <th>Size</th>
                <th>Created date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td scope="row">1</td>
                <td class="col-2 text-truncate">Áo giữ nhiệt nam co dãn 4 chiều, áo thun giữ nhiệt nam dài tay thu đông</td>
                <td>Quần áo</td>
                <td>₫170.000</td>
                <td>₫129.000</td>
                <td>Public</td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td scope="row"></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
@endsection
