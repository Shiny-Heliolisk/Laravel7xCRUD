<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\CategModel;
use Illuminate\Http\Request;

class CategController extends Controller
{
    public function cIndex()
    {
        return view('/backend/category/index');
    }

    public function cCreate()
    {
        return view('backend/category/create');
    }

    public function cStore(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
        ]);
        $name = $request->input('name','');
        $desc = $request->input('desc','');
        $slug = $request->input('slug','');

        $categ = new CategModel();

        $categ->name = $name;
        $categ->desc = $desc;
        $categ->slug = $slug;
        $categ->image = '';

        $categ->save();

        return redirect('backend/category/index')->with('status', 'thêm danh mục thành công');
    }
}
