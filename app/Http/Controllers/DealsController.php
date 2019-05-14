<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obj;
use App\Application;
use App\Complex;
use App\Deal;

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
    public function createDeal(Request $request){

        $deal=new Deal;
        $deal->application_id=$request->app_id;
        $deal->obj_id=$request->obj_id;
        $deal->profit=$request->reward;
        $deal->save();
        return redirect(route('deals.index'));
    }
    public function index(){
        if(Auth::user()->hasRole('administrator')){
            $deals=Deal::all()->paginate(10);
        }else{
            $deals = Deal::whereHas('application', function ($query) {
                $query->where('user_id',Auth::user()->id);
            })->paginate(10);
        }
       return view('deals.index',compact('deals'));
    }
}
