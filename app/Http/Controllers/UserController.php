<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
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
        $this->onlysuperadmin();
        return view('Admin.users.index');
    }

    public function userstabledata(Request $request)
    {
        $this->onlysuperadmin();
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
        $this->onlysuperadmin();

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


}
