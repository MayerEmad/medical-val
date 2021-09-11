<?php
namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;

class OrderController extends Controller
{
    // show Orders for Client
    public function getOrders()
    {
        return response()->json(['message' => 'Api.OrderController.getOrders']);
    }

    // insert new Order for the Client
    public function addOrder()
    {
        return response()->json(['message' => 'Api.OrderController.addOrder']);
    }

    // update Order for the Client
    public function updateOrder()
    {
        return response()->json(['message' => 'Api.OrderController.updateOrder']);
    }
}



// order belongs to client
