@extends('backend.layouts.main')
@section('title','danh sách danh mục')

@section('content')
<h1>Danh sách danh mục</h1>

@if(session('status'))
<div class="alert alert-success">
    {{session('status')}}
</div>
@endif
<div style="padding:20px">
    <a href="{{url('backend/category/create')}}" class="btn btn-info">Thêm danh mục</a>
</div>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
    <thead>
        <tr>
            <th>id</th>
            <th>hình ảnh</th>
            <th>tên danh mục</th>
            <th>slug</th>
            <th>mô tả</th>
            <th>hành động</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>id</th>
            <th>hình ảnh</th>
            <th>tên danh mục</th>
            <th>slug</th>
            <th>mô tả</th>
            <th>hành động</th>
        </tr>
    </tfoot>

    <tbody>
    
        @if(isset($categ) && !empty($categ))

        @foreach ($categ as $category)

        <tr>
            
            <td>{{ $category->id }}</td>

            <td></td>

            <td>{{ $category->name }}</td>

            <td>{{ $category->slug }}</td>

            <td>{{ $category->desc }}</td>

            <td>

                <a href='{{url("/backend/category/edit/$categ->id")}}' class="btn btn-warning">Sửa danh mục</a>

                <a href='{{url("/backend/category/delete/$categ->id")}}' class="btn btn-danger">Xóa danh mục</a>

            </td>

        </tr>

        @endforeach

        @else

        Chưa có bản ghi nào trong bảng này

        @endif

    </tbody>
</table>



@endsection
