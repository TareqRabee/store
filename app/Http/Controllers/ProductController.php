<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('admin.products.index', compact('products', 'categories'));
    }
    public function create()
    {
        $categories=Category::all();
        return view('admin.products.create',compact('categories'));
    }
    public function store(Request $request)
    {
        $product = new Product;
        $product->name=$request->name;
        $product-> quantity=$request->quantity;
        $product-> price=$request->price;
        $product-> category_id=$request->category;
        $product-> description=$request->description;
        $product-> image="w";
        $product-> save();
        return redirect()->back();

    }
    public function show (Product $product){


    }
    public function edit ($id){
        $product=Product::find($id);
        $Category_name=Category::where('id',$product->category_id)->first();
        $categories=Category::all();
        return view ('admin.products.edit',compact('product','categories','Category_name'));


    }
    public function update (Request $request,$id){
        $product=Product::find($id);
        $product->name=$request->name;
        $product->quantity=$request->quantity;
        $product-> price=$request->price;
        $product-> category_id=$request->category;
        $product-> description=$request->description;
        $product-> save();
        return redirect('products ');


    }
    public function destroy ($id){
        Product::find($id)->delete();
        return redirect()->back();
    }


}
