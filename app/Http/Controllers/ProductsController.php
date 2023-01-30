<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index(){
        $products = Product::get();
//        dd($products);
        return view('products.products')->with(compact('products'));
    }
    
    public function create(){
//         Product::create($request->all());
        return view('products.create');
    }
    public function store(Request $request){
//        dd($request->all());
        Product::create($request->all());
        return redirect()->to('/products');
    }
    public function destroy($id){
//        dd($id);
        $products=Product::find($id);
        $products->delete();
        
        return redirect()->back();
    }
    public function edit($id){
        $product=Product::find($id);
        return view('products.edit')->with (compact('product'));
    }
    public function update(Request $request,$id){
        $products=Product::find($id);
        $products->update(['name'=>$request->name, 'slug'=>$request->slug, 'price'=>$request->price, 'photo'=>$request->photo]);
        return redirect()->to('/products');
    }
    
}








