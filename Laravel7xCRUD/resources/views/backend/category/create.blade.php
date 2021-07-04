@extends('backend.layouts.main')
@section('title','tạo mới sản phẩm')
@section('content')
<h1>tạo mới danh mục</h1>

@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form name="category" action="{{url('/backend/category/store')}}" method="post">

    @csrf

    <div class="form-group">

        <label for="name">Tên danh mục:</label>

        <input type="text" name="name" class="form-control" id="name">

    </div>

    <div class="form-group">

        <label for="slug">Slug:</label>

        <input type="text" name="slug" class="form-control" id="slug">

    </div>

    <div class="form-group">

        <label for="image">Ảnh minh họa:</label>

        <input type="file" name="image" class="form-control" id="image">

    </div>

    <div class="form-group">

        <label for="desc">Mô tả:</label>

        <textarea name="desc" class="form-control" rows="10" id="desc"></textarea>

    </div>

    <button type="submit" class="btn btn-info">Thêm danh mục</button>

</form>
@endsection