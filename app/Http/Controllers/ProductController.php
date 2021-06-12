<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function product()
    {
        $record = Product::get();
        return view('admin.product.index', compact('record'));
    }

    public function productEdit($id)
    {
        $record = Product::find($id);
        return view('admin.product.edit', compact('record'));
    }

    public function productUpdate(Request $request,$id)
    {
        $old_record = Product::find($id);
        $old_record->name = $request->name;
        $old_record->price = $request->price;
        $old_record->discount = $request->discount;
        $old_record->text = $request->text;
        $old_record->img = $request->img;
        // 存檔
        $old_record->save();

        return redirect('admin/product')->with('message', '修改成功');
    }

    public function productDelete($id)
    {
        $old_record = Product::find($id);
        $old_record->delete();

        return redirect('/admin/product')->with('message', '刪除成功');
    }

    public function push(Request $request)
    {
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'discount' => $request->discount,
            'text' => $request->product_context,
            'img' => $request->img,
        ]);

        return redirect('/admin/product')->with('message', '新增成功');
    }

    public function add()
    {
        return view('admin.product.add');
    }
}
