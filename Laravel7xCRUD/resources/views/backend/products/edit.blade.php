@extends('backend.layouts.main')
@section('title','chỉnh sửa thông tin sản phẩm')
@section('content')
<h1>chỉnh sửa</h1>
<form name="product" action='{{url("/backend/products/update/$product->product_id")}}' method="post">
    @csrf
    <div class="form-group">

        <label for="product_name">Tên sản phẩm:</label>

        <input type="text" name="product_name" value="{{$product->product_name}}" class="form-control" id="product_name">

    </div>

    <div class="form-group">

        <label for="product_image">Ảnh sản phẩm:</label>

        <input type="file" name="product_image" class="form-control" id="product_image">

    </div>

    <div class="form-group">

        <label for="product_image">Mô tả sản phẩm:</label>

        <textarea name="product_desc" class="form-control" rows="10">{{$product->product_desc}}</textarea>

    </div>

    <div class="form-group">
        <label for="product_publish">Thời gian mở bán:</label>
        <input type="text" name="product_publish" value="{{$product->product_publish}}" style="width: 250px" class="form-control" id="product_publish">
    </div>

    <div class="form-group">

        <label for="product_quantity">Tồn kho sản phẩm:</label>

        <input type="number" name="product_quantity" value="{{$product->product_quantity}}" style="width: 250px" class="form-control" id="product_quantity">

    </div>

    <div class="form-group">

        <label for="product_price">Giá sản phẩm:</label>

        <input type="text" name="product_price" value="{{$product->product_price}}" style="width: 250px" class="form-control" id="product_price">

    </div>
    <button type="submit" class="btn btn-info">cập nhật sản phẩm</button>

</form>
@endsection
@section('appendjs')

<link rel='stylesheet" href="{{ asset("/be-assets/js/bootstrap-datetimepicker.min.css") }}' />



<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.21.0/moment.min.js" type="text/javascript"></script>



<script src='{{ asset("/be-assets/js/bootstrap-datetimepicker.min.js") }}'></script>



<script type="text/javascript">
    $(function() {

        $('#product_publish').datetimepicker({

            format: "YYYY-MM-DD HH:mm:ss",
            icons: {

                time: 'far fa-clock',

                date: 'far fa-calendar',

                up: 'fas fa-arrow-up',

                down: 'fas fa-arrow-down',

                previous: 'fas fa-chevron-left',

                next: 'fas fa-chevron-right',

                today: 'fas fa-calendar-check',

                clear: 'far fa-trash-alt',

                close: 'far fa-times-circle'

            }
        });

    });
</script>

@endsection