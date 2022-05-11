<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

use \DB;
use App;


class ShopController extends Controller
{
    public function shop(Category $parentCat = null , Category $subCat = null)
    {
        $products = Product::paginate(30)->withQueryString();
        $categories = Category::where('parent_id',0)->get();

        return view('shop', compact('products','categories','parentCat','subCat'));
    }

    public function filter(Request $request)
    {
        $output='';
        if($request->ajax())
        {
            $productName=preg_replace('/[^\pL\p{N}]/u', '', $request->product_name);
            $priceRange = preg_replace('/[^0-9-]/i', '', $request->price_range);
            $priceRange = explode('-', $priceRange);
            $hasSale = ($request->hasSale==="true")? 1 : 0;
            $parentCategoryId = preg_replace('/[^0-9]/i', '', $request->category_id);
            $subCategoryId=preg_replace('/[^0-9-]/i', '', $request->sub_category_id); // -1 get all subCats from parentCat
            if($subCategoryId==-1){
                $subCategoryId = Category::where('parent_id',$parentCategoryId)->pluck('id')->all();
            }
            $products = Product::where(function ($query) use($subCategoryId){
                                        if (is_array($subCategoryId) && count($subCategoryId)>1)
                                            $query->whereIn('category_id', $subCategoryId);
                                        else
                                            $query->where('category_id', $subCategoryId);
                                    })
                                    ->wherebetween('price', $priceRange)
                                    ->where(function ($query) use($hasSale){
                                        if ($hasSale == 1)
                                            $query->where('discount','<>',0);
                                    })
                                    ->where(function ($query) use($productName){
                                        if (session()->get('locale') == 'ar')
                                            $query->where('ar_name', 'LIKE', '%' . $productName . '%');
                                        else
                                            $query->where('name', 'LIKE', '%' . $productName . '%');
                                    })
                                    //->wherebetween('discount', [$hasSale,999999999])
                                ->get();

                if(count($products)>0)
                {
                    foreach($products as $product)
                    {
                        //$output.=$product->name." ".$product->ar_name."<br> ";
                        $afterDiscount=$product->price-$product->discount;
                        $output.=
                        '<div class="col-sm-6 col-lg-4 col-md-6 text-center item mb-4" onclick="submitForm('.$product->id.')">
                            <div class="product-option">
                                <a href="'.action('Client\CartController@store', ['product' => $product]).'" onclick="showSwal("auto-close","'.__("message.item_added").'")"  title="Add to cart" ><i class="fas fa-shopping-cart"></i></a>
                                <a href="'.action('Client\WishListController@store', ['product' => $product]).'" title="Add to wishlist"><i class="fas fa-heart"></i></a>
                                <a href="'.action('Client\CompareController@store', ['product' => $product]).'" title="Compare"><i class="far fa-copy"></i></a>
                            </div>';
                            if($product->discount>0)
                                $output.='<span class="tag">'.__('message.Sale').'</span>';
                            $output.='<img src="'.asset('images/product_01.png').'" alt="Image">';
                            if (session()->get('locale') == 'ar')
                                $output.='<h3 class="text-dark">'.$product->ar_name.'</h3>';
                            else
                                $output.='<h3 class="text-dark">'.$product->name.'</h3>';
                            $output.='<p class="price"><del>'.$product->price.'</del> &mdash; $'.$afterDiscount.'</p>
                        </div>';
                    }
                }
                else{
                    $output.='<p>No products found</p>';
                }
                echo json_encode($output);
        }
    }

    public function getSubCategories(Request $request){
        if($request->ajax())
        {
            $parentCategoryId = preg_replace('/[^0-9]/i', '', $request->parent_category_id);
            $subCategories = Category::where('parent_id',$parentCategoryId)->get();
            return $subCategories;
            // echo json_encode($subCategories);
        }
    }

    public function productDetails(Request $request)
    {
        $product=Product::find($request->id);
        return view('shop-single')->with('product',$product);
    }
}
