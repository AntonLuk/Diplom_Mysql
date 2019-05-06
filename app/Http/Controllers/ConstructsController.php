<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Construct;
class ConstructsController extends Controller
{
    public function index(){
        $constructs=Construct::all();
        return view('constructs.index',compact('constructs'));
    }
    public function destroy($id){
        $construct=Construct::find($id);
        $construct->delete();
        return(redirect(route('constructs.index')));
    }
    public function addForm(){
        return view('constructs.addForm');
    }
    public function create(Request $request){
        $construct=new Construct();
        $construct->name=$request->name;
        $construct->save();
        return(redirect(route('constructs.index')));
    }
    public function edit(Request $request){
        $construct=Construct::find($request->id);
        $construct->name=$request->name;
        $construct->save();
        return(redirect(route('constructs.index')));
    }
    public function editForm($id){
        $construct=Construct::find($id);
        return view('constructs.editForm',compact('construct'));
    }
}
