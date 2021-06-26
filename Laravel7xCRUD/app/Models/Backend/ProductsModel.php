<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    //khai báo tên bảng
    protected $table = 'products';
    //khai báo khóa chính
    protected $primaryKey = 'id';
}
