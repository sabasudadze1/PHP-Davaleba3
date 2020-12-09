<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function getAllProducts(){
        $products = Product::orderBy('id', 'DESC')->get();

        
    //    return Product::select('*')->get();
    // $products = Product::all();

    return view('products-page')->with('products', $products);
    }
    public function saveProducts(Request $request){

        // print_r([
        //     'name' => $request->name,
        //     'shock' => $request->stock,
        //     'sale' => $request->sale,
        //     'price' => $request->price,
        //     'token' => $request->token,

        // ]);


     

       Product::create([
           'name' => $request->name,
           'shock' => $request->stock,
           'sale' => $request->sale,
           'price' => $request->price,
           'category' => $request->category
       ]);
       return redirect('/product/all');

        // var_dump($_GET);
        // return 'works';
}

    public function editProducts(){
        return 'works';
    }
    public function updateProducts(){
        return 'works';
    }
    public function deleteProducts(){
        return 'works';
    }
}
