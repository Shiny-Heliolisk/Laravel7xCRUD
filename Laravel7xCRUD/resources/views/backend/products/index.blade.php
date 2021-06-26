@extends('backend.layouts.main')
@section('title','danh sách sản phẩm')

@section('content')
<h1>Danh sách sản phẩm</h1>
@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div style="padding:20px">
    <a href="{{url('backend/products/create')}}" class="btn btn-info">Thêm sản phẩm</a>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>hình ảnh</th>
            <th>tên sp</th>
            <th>giá sp</th>
            <th>tồn kho</th>
            <th>hành động</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>id</th>
            <th>hình ảnh</th>
            <th>tên sp</th>
            <th>giá sp</th>
            <th>tồn kho</th>
            <th>hành động</th>
        </tr>
    </tfoot>

    <tbody>
        @if(isset($products) && !empty($products))

        @foreach ($products as $product)

        <tr>

            <td>{{ $product->id }}</td>

            <td></td>

            <td>{{ $product->product_name }}</td>

            <td>{{ $product->product_price }} USD</td>

            <td>{{ $product->product_quantity }}</td>

            <td>

                <a href='{{url("/backend/products/edit/$product->id")}}' class="btn btn-warning">Sửa sản phẩm</a>

                <a href='{{url("/backend/products/delete/$product->id")}}' class="btn btn-danger">Xóa sản phẩm</a>

            </td>

        </tr>

        @endforeach

        @else

        Chưa có bản ghi nào trong bảng này

        @endif

    </tbody>
</table>

    {{$products->links()}}

@endsection