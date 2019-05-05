<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obj;
use App\Application;
use App\Complex;

class DealsController extends Controller
{
    public function addForm(){
        $objs=Obj::all();
        $applications=Application::all();
        $complexs=Complex::with(['rewards','construct'])->get();
        return view('deals.addForm',compact('objs','applications','complexs'));
        return dd($conplexs);
    }
    public function addFormWithApp($id){
        $complexs=Complex::with(['rewards','construct'])->get();
        $objs=Obj::all();
        $application=Application::find($id);
        return view('deals.addFormWithApp',compact('application','objs','complexs'));
    }
}
