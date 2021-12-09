@extends('layouts.master')

{{-- title --}}
@section('title', 'Categories')

@section('style-libraries')

@endsection

{{-- style --}}
@section('styles_section')
    <link rel="stylesheet" href="{{ asset('css/categories/index.css') }}">
@endsection

@section('scripts_section')
    <script src="{{ asset('js/categories/index.js') }}"></script>
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
        <a class="btn btn-success" href="{{ route('category.create') }}" role="button">Thêm mới danh mục</a>
    </div>
    <table class="table ml-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Category Name</th>
                <th>Categories Parent </th>
                <th>Status</th>
                <th>Created date</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody id="tbody">
            @if($categories)
                @foreach ($categories as $categorie)
                    <tr id="category-{{ $categorie->id }}">
                        <td scope="row">{{ $categorie->id }}</td>
                        <td class="categoryName">{{ $categorie->categoryName }}</td>
                        <td class="parentID">{{ $categorie->parentID }}</td>
                        <td class="status">
                            @if ($categorie->status === 1)
                                <span class="text-success bg-success p-1 rounded">public</span>
                            @else
                                <span class="text-white bg-dark rounded">public</span>
                            @endif
                        </td>
                        <td class="created_at">{{ $categorie->created_at->format('s-m-h : d/m/Y') }}</td>
                        <td class="text-center actions">
                            <a
                                id-category={{ $categorie->id }}
                                class="btn btn-warning mr-2"
                                href="{{ route('category.edit', ['id'=>$categorie->id]) }}"
                                role="button"
                            >
                                Sửa
                            </a>
                            <a
                                class="btn btn-danger m1-2 btn-delete"
                                role="button"
                                data-id="{{ $categorie->id }}"
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
                            <h5 class="modal-title" id="exampleModalLabel">Xóa danh mục</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                                <h5 class="text-center">Bạn muốn xóa danh mục này?</h5>
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
