<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CrudController extends Controller
{
    private $product, $products;

    public function index()
    {
        return view('crud.index');
    }

    public function create(Request $request)
    {
        Product::newProduct($request);
        return back()->with('message','Product uploaded successfully');
    }
    public function manage()
    {
        $this->products = Product::all();

        return view('crud.manage',['products'=>$this->products]);
    }

    public function edit($id)
    {
        $this->product = Product::find($id);
        return view('crud.edit', ['product' => $this->product]);
    }

    public function update(Request $request, $id)
    {
        if ($request->file('image'))
        {
            $this->validate($request,[
                'image'=>'image',
            ]);
        }
        Product::updateProduct($request, $id);
        return redirect('/crud/manage-product')->with('message', 'Product Info Updated Successfully');
    }
    public function delete($id)
    {
        Product::deleteProduct($id);
        return back()->with('message', 'Product Successfully Deleted');
    }
}
