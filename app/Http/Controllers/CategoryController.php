<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreUpdateRequest;
use App\Models\Category;
use App\Models\Product;
use DataTables;

class CategoryController extends Controller
{
    public function uploadImage(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image_name      =       time().'.'.$request->image->extension();
        $request->image->move(public_path('/img/categories'), $image_name);
        return $image_name;
    }

    //show parent categories
    public function index()
    {
        $parentCategories = Category::where('parent_id',0)->get();
        return view('Admin.category.index')->with('categories',$parentCategories);
    }
    public function parentcategorysearch(Request $request)
    {
       if($request->ajax())
       {
           $searchText=$request->searchtext;
           $parentCategories = Category::where('parent_id',0)
                                        ->where('name', 'like', '%' . $searchText . '%')->get();
           $output="";
           if(count($parentCategories)>0){
            foreach($parentCategories as $cat)
            {
             $output.='<div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flip-card" style="height:100%">
                <div class="card bg-light flip-card-inner">
                    <p class="pt-4 lead pr-1 pl-1" style="font-size: 30px;font-weight: 400;font-family: cursive;">'.$cat->name.'</p>
                    <div class="card-body pl-0 pt-0 pb-0">
                        <img class="img1" src="'.asset('/img/categories/'.$cat->image).'" width="106.5%" style="height: 260px;">
                    </div>
                    <div class="flip-card-back pt-5" style="background-color:#828282;">
                        <div class="pt-2 mb-4">
                            <a href="'.route('category.edit',['category'=>$cat->id]).'" class="btn btn-success mr-3" type="button">
                                <i class="fas fa-edit"></i> Edit
                            </a>';
                            if (Auth::user()->hasRole('superadmin')==true){
                            $output.='<a onclick="deletefunction('.$cat->id.')" class="btn btn-danger" type="button">
                                <i class="fas fa-trash-alt"></i> Delete
                            </a>
                            <form action="'. route('category.destroy',['category'=>$cat->id]).'" id="'.$cat->id.'" method="POST" style="display:none">
                            @csrf @method("DELETE")
                            <button type="submit"></button>
                            </form>';
                            }
                            $output.='</div>
                    </div>
                    <a href="'.route("category.show",["category"=>$cat->id]).'" class="btn btn-light pro-btn mb-3 mr-2 ml-2" type="button">
                        <i class="fab fa-product-hunt"></i> View Contents
                    </a>

                </div>
            </div>';
        }
        }else{
            $output.='<p>No Categories found</p>';
        }
           echo json_encode($output);
       }

    }

    public function create()
    {
        if (Auth::user()->hasRole('superadmin')==false)return view('errors.401');
        return view('Admin.category.create');
    }

    public function store(CategoryStoreUpdateRequest $request)
    {
        if (Auth::user()->hasRole('superadmin')==false)return view('errors.401');

        $validated = $request->validated();
        $image_name=$this->uploadImage($request);

        $category=new Category;
        $category->parent_id=$validated["parent_id"];
        $category->name=$validated["name"];
        $category->ar_name=$validated["ar_name"];
        $category->description=$validated["description"];
        $category->ar_description=$validated["ar_description"];
        $category->image = $image_name;
        $category->save();

        return back()->with('success', 'Successful create operation.');
        //return redirect('/category')->with('success','Category Created Succesfully');
    }

    //FIX add table inside your page   I think its fixed
    public function show(Category $category)
    {
        return view('Admin.category.show')->with('category',$category);
    }

    public function getproducts(Request $request)
    {
        if ($request->ajax())
        {
            if($request->input('id'))
                $products= DB::table('products')->where('category_id', $request->input('id'))->get();
            else
                $products= '';

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

    public function edit(Category $category)
    {
        if (auth::user()->hasrole('superadmin')==false && auth::user()->hasrole('editoradmin')==false)
            return view('errors.401');
        $category=Category::find($category->id);
        return view('Admin.category.edit')->with('category',$category);
    }

    public function update(CategoryStoreUpdateRequest $request, Category $category)
    {
        if (auth::user()->hasrole('superadmin')==false && auth::user()->hasrole('editoradmin')==false)
            return view('errors.401');

        $validated = $request->validated();
        if($request->image!=null)
        {
            $image_name=$this->uploadImage($request);
            $category->image = $image_name;
        }
        $category->parent_id=$validated["parent_id"];
        $category->name=$validated["name"];
        $category->ar_name=$validated["ar_name"];
        $category->description=$validated["description"];
        $category->ar_description=$validated["ar_description"];
        $category->save();
        return back()->with('success', 'Successful update operation.');
    }

    public function destroy(Category $category)
    {
        if (Auth::user()->hasRole('superadmin')==false)return view('errors.401');
        $category=Category::find($category->id);
        $category->delete();
        return redirect('/category')->with('success','Category Deleted Succesfully.');
    }
}
