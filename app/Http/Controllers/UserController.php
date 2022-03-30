<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderProductItem;
use DataTables;

class UserController extends Controller
{
    public function onlysuperadmin()
    {
        if (Auth::user()->hasRole('superadmin')==false){
            return view('errors.401');
        }
        return;
    }

    //Display Users in Page
    public function index()
    {
        if (auth::user()->hasrole('superadmin')==false)
            return view('errors.401');
        return view('Admin.users.index');
    }

    public function userstabledata(Request $request)
    {
        if (auth::user()->hasrole('superadmin')==false)
            return view('errors.401');
        if ($request->ajax()) {
            $users = User::whereRoleIs('customer')->get();
            return Datatables::of($users)
            ->addIndexColumn()
            ->addColumn('type', function($row)
            {
                $type=$row->roles[0]['display_name'];
                return $type;
            })
            ->addColumn('action', function($row)
            {
                $action = '<a herf id="edit-user" data-id='.$row->id.' class="btn btn-success">Make Admin</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    //Change Users roles
    public function update(Request $request,  $id)
    {
        if (auth::user()->hasrole('superadmin')==false)
            return view('errors.401');

        $user=User::find($id);
        $oldRole=$user->roles[0]['name'];
        $newRole=$request->role;
        if($oldRole!=$newRole)
        {
            $user->detachRole($oldRole);
            $user->attachRole($newRole);
            return redirect()->route('user.index')->with('success','user '.$user->name.' Became '.$newRole);
        }
        return redirect()->route('user.index')->with('success','user '.$user->name.' already is '.$newRole);
    }

     //Display Orders in Page
     public function ordersTablePage()
     {
         if (auth::user()->hasrole('superadmin')==false)
            return view('errors.401');
         return view('Admin.orders.index');
     }

     public function ordersTableData(Request $request)
     {
         if (auth::user()->hasrole('superadmin')==false)
            return view('errors.401');
         if ($request->ajax()) {
             $orders = Order::all();
             return Datatables::of($orders)
             ->addIndexColumn()
             ->addColumn('name', function($row)
             {
                 $name=$row->user->name;
                 return $name;
             })
             ->addColumn('action', function($row)
             {
                 $url=route('admin.orderShow',$row->id);
                 $action = '<a herf id="show-order" data-id='.$row->id.' class="btn btn-success">Show Order</a>';
                 return $action;
             })
             ->rawColumns(['action'])
             ->make(true);
         }
     }

     public function orderShow($id)
     {
        $order=Order::find($id);
        $data = [
            'total'  => $order->total_price,
            'products'   => $order->products,
        ];
        return view('Admin.orders.show')->with('data',$data);
     }

}
