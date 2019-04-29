<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
class EntrustController extends Controller
{
    public function index(){
        $roles=Role::all();
        $permissions=Permission::with('roles')->get();
        //return dd($permissions);
        return view('entrust.index',compact('roles','permissions'));
    }
}
