<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Model;

class CategModel extends Model
{
    //khai báo tên bảng
    protected $table = 'category';
    //khai báo khóa chính
    protected $primaryKey = 'id';
}
