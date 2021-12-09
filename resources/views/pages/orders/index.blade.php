@extends('layouts.master')

{{-- title --}}
@section('title', 'Orders')

@section('style-libraries')

@endsection

{{-- style --}}
@section('styles_section')
    <link rel="stylesheet" href="{{ asset('css/products/index.css') }}">
@endsection

@section('scripts_section')
    <script src="{{ asset('js/products/index.js') }}"></script>
    {{-- <script>
        $(document).ready(function () {
            $(".delete-product").on("click", function (e) {
                const id = $(this).attr("id-product");
                let url = {{ route('product.delete') }}
                console.log(url)
            })
        }
    </script> --}}
@endsection

{{-- content --}}
@section('content')
    {{-- Alert message --}}
    <div class="container-fluid py-2">
        @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @elseif (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{session('success')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
    </div>
    {{-- end --}}

    <div class="d-flex justify-content-between ml-3 mr-5 mb-4">
        <form action="" class="form-inline">
            <div class="form-group">
                <input type="text" name="key" placeholder="Search By Name" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">
                <i class="fa fa-search"></i>
            </button>
        </form>
        <a class="btn btn-success" href="{{ route('product.add') }}" role="button">Thêm mới sản phẩm</a>
    </div>
    <table class="table ml-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price </th>
                <th>Price Sale</th>
                <th>Status</th>
                <th>Quantity</th>
                <th>Created date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody id="tbody">
            @if($products)
                @foreach ($products as $product)
                    <tr id="product-{{ $product->id }}">
                        <td scope="row">{{ $product->id }}</td>
                        <td class="col-2 text-truncate name">{{ $product->name }}</td>
                        <td class="category">Quần áo</td>
                        <td class="price">{{ $product->price }}</td>
                        <td class="price_sale">{{ $product->price_sale }}</td>
                        <td class="state">{{ $product->state }}</td>
                        <td class="quantity">{{ $product->quantity }}</td>
                        <td class="created_at">{{ $product->created_at->format('s-m-h : d/m/Y') }}</td>
                        <td class="text-center actions">
                            <a
                                id-product={{ $product->id }}
                                class="btn btn-warning mr-2"
                                href="{{ route('product.edit', ['id'=>$product->id]) }}"
                                role="button"
                            >
                                Sửa
                            </a>
                            <a
                                class="btn btn-danger m1-2 btn-delete"
                                role="button"
                                data-id="{{ $product->id }}"
                                {{-- data-toggle="modal" --}}
                                {{-- data-target="#deleteModal" --}}
                            >
                                Xóa
                            </a>
                        </td>
                    </tr>

                @endforeach
            @endif
            <!-- Delete Warning Modal -->
            <div class="modal modal-danger fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="Delete" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Xóa sản phẩm</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <h5 class="text-center">Bạn muốn xóa sản phẩm này?</h5>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                    <button type="button" class="btn btn-sm btn-danger btn-delete-product">Yes, Delete Contact</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Delete Modal -->
        </tbody>
    </table>
@endsection
