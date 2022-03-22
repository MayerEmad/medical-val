<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use DataTables;
class AdminController extends Controller
{
    public function onlysuperadmin()
    {
        if (Auth::user()->hasRole('superadmin')==false)
            return view('errors.401');
        return;
    }

    public function showProfile()
    {
        return view('Admin.profile');
    }
    public function adminstablepage()
    {
        $this->onlysuperadmin();
        return view('Admin.admins.table');
    }
    public function adminstabledata(Request $request)
    {
        $this->onlysuperadmin();
        if ($request->ajax()) {
            $admins = User::whereRoleIs('admin')->orWhereRoleIs('editoradmin')->get();
            return Datatables::of($admins)
            ->addIndexColumn()
            ->addColumn('type', function($row)
            {
                $type=$row->roles[0]['display_name'];
                return $type;
            })
            ->addColumn('action', function($row)
            {
                $action = '<a herf id="edit-admin" data-id='.$row->id.' class="btn btn-success">Edit </a>
                <a id="delete-admin" data-id='.$row->id.' class="btn btn-danger delete-user">Delete</a>';
                return $action;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
    }

    //Display admins in Page
    public function index()
    {
        return view('Admin.dashboard');
    }

   //Invitation Page
    public function create()
    {
        $this->onlysuperadmin();
        return view('Admin.admins.create-invitation');
    }


    //Insert admin into database
    public function store(Request $request)
    {
        //$this->onlysuperadmin();return "store";
    }


    public function show(User $id)
    {
        //
    }


    public function edit(User $id)
    {
        $this->onlysuperadmin();
        return "edit permissions";
    }

    //Change admins roles
    public function update(Request $request,  $id)
    {
        $this->onlysuperadmin();

        $admin=User::find($id);
        $oldRole=$admin->roles[0]['name'];
        $newRole=$request->role;
        if($oldRole!=$newRole)
        {
            $admin->detachRole($oldRole);
            $admin->attachRole($newRole);
            return redirect()->route('admin.tablepage')->with('success','Admin '.$admin->name.' Became '.$newRole);
        }
        return redirect()->route('admin.tablepage')->with('success','Admin '.$admin->name.' already is '.$newRole);
    }

    //Delete an Admin from the system
    public function destroy($id)
    {
        $this->onlysuperadmin();
        $admin=User::find($id);
        $name=$admin->name;
        $admin->delete();
        return redirect()->route('admin.tablepage')->with('success','User '.$name.' Deleted Succesfully.');
    }
}
