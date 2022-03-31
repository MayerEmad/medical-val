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
           $products= Product::all();
            return view('Admin.product.allProducts')->with('products',$products);;
    }

    public function getproducts(Request $request)
    {
        if ($request->ajax())
        {
            $products= Product::all();
            return Datatables::of($products)
                ->addIndexColumn()
                ->addColumn('action', function($row){
                        $action = '<a id="show-product" data-id='.$row->id.' class="btn btn-info">Show</a>';
                    if(Auth::user()->hasRole('editoradmin'))
                        $action.= ' <a id="edit-product" data-id='.$row->id.' class="btn btn-success">Edit</a>';
                    if(Auth::user()->hasRole('superadmin'))
                        $action.= ' <a id="edit-product" data-id='.$row->id.' class="btn btn-success">Edit</a> <a id="delete-product" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
                    return $action;
                })
                ->rawColumns(['action'])->make(true);
        }
    }

    public function create(Request $category)
    {
        if(auth::user()->hasrole('superadmin')==false && auth::user()->hasrole('editoradmin')==false)
            return view('errors.401');
        $category=Category::find($category->id);
        return view('Admin.product.create')->with('category',$category);
    }

    public function store(ProductStoreUpdateRequest $request)
    {
        if(auth::user()->hasrole('superadmin')==false && auth::user()->hasrole('editoradmin')==false)
            return view('errors.401');
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
        if (auth::user()->hasrole('superadmin')==false && auth::user()->hasrole('editoradmin')==false)
            return view('errors.401');
        $product=Product::find($product->id);
        return view('Admin.product.edit')->with('product',$product);
    }

    public function update(ProductStoreUpdateRequest $request, Product $product)
    {
        if (auth::user()->hasrole('superadmin')==false && auth::user()->hasrole('editoradmin')==false)
            return view('errors.401');
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
        if($product->quantity>0){
            $product->instock=1;
        }else{
            $product->instock=0;
        }
        $product->discount=$validated["discount"];
        $product->save();
        return back()->with('success', 'Successful update product operation.');
    }


    public function destroy(Product $product)
    {
        if (auth::user()->hasrole('superadmin')==false)
            return view('errors.401');
        $product=Product::find($product->id);
        $product->delete();
        return back()->with('success','Product Deleted Succesfully.');
    }
}
