<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;

class ProductController extends Controller
{
   // return Product Collection
   public function getProducts()
   {
       return response()->json(['message' => 'Api.ProductController.getProducts']);
   }
}
