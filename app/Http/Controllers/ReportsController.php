<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Deal;
use Illuminate\Support\Facades\Auth;
use App\User;
use PhpOffice\PhpWord\PhpWord;
use Carbon\Carbon;
class ReportsController extends Controller
{
    public function dealsUsers(Request $request){
        //$users=User::with('deals')->where('created_at','like','2019-05-12')->get();

//        $user = User::find(Auth::user()->id);
//        $user->load(['deals' => function ($q) {
//            $q->where('profit',20000);
//        }]);



       $userName=Auth::user()->name;
        $date=Carbon::now();
            $start = $request->start;
            $end = $request->end;
            $users = User::with(['deals' => function ($query) use ($start,$end) {
                    $query->whereBetween('deals.created_at',[$start,$end]);
            }])->get();

//                $users = User::whereHas('deals', function ($query) use ($start,$end) {
//            $query->whereBetween('created_at',[$start,$end]);
//        })->get();
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $tpl = $phpWord->loadTemplate(public_path('usersDeals.docx'));
        $tpl->setValue('user',$userName);
        $tpl->setValue('date',$date);
        $tpl->setValue('date_start', $request->start);
        $tpl->setValue('date_end',$request->end);
        $i = 0;
        $total_count=0;
        $total_prof=0;
        $tpl->cloneRow('num', $users->count() + 1);
        foreach($users as $user)
        {
            $userprof=0;
            $i++;
            $tpl->setValue('num#'.$i, $i);
            $tpl->setValue('name#'.$i, $user->name);
                     $count=count($user->deals);
            $tpl->setValue('count#'.$i, $count);
           foreach ($user->deals as $deal){
               $userprof+=$deal->profit;
           }
            $tpl->setValue('userProf#'.$i, $userprof);
           $total_prof+=$userprof;
            $total_count += $count;
        }
        $i++;
        $tpl->setValue('num#'.$i,"");
        $tpl->setValue('name#'.$i, "Итого");
        $tpl->setValue('count#'.$i, $total_count);
        $tpl->setValue('userProf#'.$i, $total_prof);
        $tpl->saveAs(public_path('users.docx'));
        return response()->download(public_path('users.docx'));

        // $deals=User::find($user)->with('applicationsHas')->count();
        return view ('reports.dealsUsers',compact('users'));
    }
    public function dealsUsersForm(){
        return view('reports.dealsUsers');
    }
}
