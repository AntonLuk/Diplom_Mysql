<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;
use App\Permission;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
class EntrustController extends Controller
{
    public function index(){
        $roles=Role::all();
        $permissions=Permission::with('roles')->get();
        //return Excel::download(new UsersExport, 'users.xlsx');
        //return Excel::download(new UsersExport, 'users.xlsx');
       //return dd($permissions);
       return view('entrust.index',compact('roles','permissions'));
    }
    public function applyset(Request $request){
        $roles=Role::all();
        $permissons=Permission::all();
        $test=$request->request->all();

//        foreach ($request as $req){
//            foreach ($req as $permission){
//                $per=Permission::find($permission);
//                array_push($test,$per);
//            }
//        }

        return dd($test);
    }
}
