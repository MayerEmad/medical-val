<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Category;
use DataTables;
use App\Http\Requests\ProductStoreUpdateRequest;

class ProductController extends Controller
{
    public function onlysuperadmin()
    {
        if (Auth::user()->hasRole('superadmin')==false) 
            return view('errors.401'); 
        return;
    }
    public function editoradmin()
    {
        if (Auth::user()->hasRole('superadmin')==false && Auth::user()->hasRole('editoradmin')==false) 
            return view('errors.401'); 
        return;
    }
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image_name      =       time().'.'.$request->image->extension();
        $request->image->move(public_path('/img/products'), $image_name);
        return $image_name; 
    }


    public function index()
    {
       // return view('Admin.product.productDetails');      
    }

    public function create(Request $category)
    {
        $this->onlysuperadmin();
        $category=Category::find($category->id);
        return view('Admin.product.create')->with('category',$category);
    }

    public function store(ProductStoreUpdateRequest $request)
    {
        $this->onlysuperadmin();
        $validated = $request->validated(); 
        $image_name=$this->uploadImage($request);

        $product=new Product;
        $product->category_id=$validated["category_id"];
        $product->name=$validated["name"];
        $product->ar_name=$validated["ar_name"];
        $product->description=$validated["description"];
        $product->ar_description=$validated["ar_description"];
        $product->price=$validated["price"];
        $product->quantity=$validated["quantity"];
        $product->discount=$validated["discount"];
        $product->image = $image_name;
        $product->save();
        return back()->with('success', 'Successful create operation.');
    }
   
    public function show(Product $product)
    {
        //dd("show ".$product->id);
        return view('Admin.product.show')->with('product',$product);
    }

    public function edit(Product $product)
    {
        $this->editoradmin();
        $product=Product::find($product->id);
        return view('Admin.product.edit')->with('product',$product);
    }
   
    public function update(ProductStoreUpdateRequest $request, Product $product)
    {
        $this->editoradmin();
        $validated = $request->validated(); 
        if($request->image!=null)
        {
            dd($request->image);
            $image_name=$this->uploadImage($request);
            $product->image = $image_name;
        }
        $product->category_id=$validated["category_id"];
        $product->name=$validated["name"];
        $product->ar_name=$validated["ar_name"];
        $product->description=$validated["description"];
        $product->ar_description=$validated["ar_description"];
        $product->price=$validated["price"];
        $product->quantity=$validated["quantity"];
        $product->discount=$validated["discount"];
        $product->save();
        return back()->with('success', 'Successful update product operation.');
    }

    
    public function destroy(Product $product)
    {
        $this->onlysuperadmin();
        $product=Product::find($product->id);
       // $product->delete();
        return back()->with('success','Product Deleted Succesfully.');
    }
}
