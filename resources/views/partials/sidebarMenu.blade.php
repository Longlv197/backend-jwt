<?php
    $menus = config('menu');
    // dd($menus)
?>

<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        @foreach ($menus as $menu)
            <li class="nav-item has-treeview menu-open">
                <a href="{{ route($menu['route-name']) }}" class="nav-link">
                    <i class="nav-icon {{ $menu['nav-icon'] }}"></i>
                    <p>
                        {{ $menu['label'] }}
                        @if (@isset($menu['items']))
                            <i class="right fas fa-angle-left"></i>
                        @endif
                    </p>
                </a>
                @if (@isset($menu['items']))
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ $menu['route'] }}" class="nav-link active">
                            <i class="{{ $route['nav-icon'] }} nav-icon"></i>
                            <p>{{ $menu['label'] }}</p>
                            </a>
                        </li>
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
      {{-- <li class="nav-item has-treeview menu-open">
        <a href="{{ route('product.index') }}" class="nav-link">
          <i class="nav-icon fab fa-product-hunt"></i>
          <p>
            Quản lý sản phẩm
            {{-- <i class="right fas fa-angle-left"></i> --}}
      {{--     </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{ route('product.index') }}" class="nav-link active">
              <i class="fas fa-list-ul nav-icon"></i>
              <p>Danh sách sản phẩm</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('product.edit') }}" class="nav-link">
              <i class="fas fa-pen-square nav-icon"></i>
              <p>Cập nhật sản phẩm</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="{{ route('product.add') }}" class="nav-link">
              <i class="fas fa-plus nav-icon"></i>
              <p>Thêm sản phẩm</p>
            </a>
          </li>
        </ul>
      </li>--}}

{{-- Category --}}
      {{-- <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-list-alt"></i>
          <p>
            Quản lý danh mục
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Danh sách danh mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Cập nhật danh mục</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>Thêm danh mục</p>
            </a>
          </li>
        </ul>
      </li>--}}

{{-- User --}}
    {{-- <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link">
        <i class="nav-icon fas fas fa-user"></i>
        <p>
            Quản lý nhân viên
            <i class="right fas fa-angle-left"></i>
        </p>
        </a>
        <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Danh sách nhân viên</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Cập nhật thông tin</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Thêm nhân viên</p>
                </a>
            </li>
        </ul>
    </li> --}}



