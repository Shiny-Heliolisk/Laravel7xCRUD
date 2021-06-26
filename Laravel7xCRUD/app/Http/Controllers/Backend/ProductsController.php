<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Backend\ProductsModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{

    public function index()
    {
        // $products = ProductsModel::all();
        $products = DB::table('products')->paginate(10);
        //truyền dữ liệu xuống view
        $data = [];
        $data['products'] = $products;

        return view('backend/products/index',$data);
    }

    public function create()
    {
        return view('backend/products/create');
    }

    public function edit($id)
    {
        $product = ProductsModel::findOrFail($id);
        $data=[];
        $data['product'] = $product;
        return view('backend/products/edit',$data);
    }

    public function delete($id)
    {
        $product = ProductsModel::findOrFail($id);
        //truyeefn dl xuoosng view
        $data = [];
        $data['product'] = $product;
        return view('backend/products/delete',$data);
    }
    public function store(Request $request)
    {
        //validate dữ liệu
        $validatedData = $request->validate([

            'product_name' => 'required',
         
            'product_desc' => 'required',
         
            'product_quantity' => 'required',
         
            'product_price' => 'required',
         
         ]);

        $product_name = $request->input('product_name','');
        $product_desc = $request->input('product_desc','');
        $product_publish = $request->input('product_publish','');
        $product_quantity = $request->input('product_quantity',0);
        $product_price = $request->input('product_price',0);

        $product = new ProductsModel();

        if(!$product_publish){
            $product_publish = date("Y:m:d H:i:s");
        }
        $product->product_name = $product_name;
        $product->product_desc = $product_desc;
        $product->product_publish = $product_publish;
        $product->product_quantity = $product_quantity;
        $product->product_price = $product_price;
        $product->product_image = '';

        $product->save();

        return redirect('backend/products/index')->with('status','thêm sản phẩm thành công');
    }
    public function update($id)
    {
        echo "<pre>";

   print_r($_POST);

   echo "</pre>";
    }
    public function destroy($id)
    {
        $product = ProductsModel::findOrFail($id);
        $product->delete();
        return redirect('/backend/products/index')->with('status','xóa thành công');
    }
}
