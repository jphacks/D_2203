<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Judgement;
use App\Models\User;

class CourseController extends Controller
{
    //
    public function index() {
        //ログイン中のユーザーの紐付けidからjudgementテーブルのレコードを取得
        //$judge = Judgement::find(\Auth::user()->judgements_id);
        //dd($judge->sql_1);
        return view('courses.index');
    }

    public function show($course){
        //dd($course);
        //ログイン中のユーザーの紐付けidからjudgementテーブルのレコードを取得
        $judge = Judgement::find(\Auth::user()->judgements_id);
        //judgeをviewに渡す
        return view("courses.{$course}.index", ['judge' => $judge]);
    }

    public function detail($course, $course2,Request $request){
        $answer = $request->input('clear');
        if(isset($answer)){
            switch ($answer){
                case 'step':
                    //law_1_clearを1に変更
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->law_1_clear = 1;
                    $judge->law_2 = 1;
                    $judge->xss_1 = 1;
                    $judge->sql_1 = 1;
                    $judge->save();
                    //$msg = '正解です！';
                    return view("courses.law");
                case 'yyy':
                    //law_1_clearを1に変更
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->law_2_clear = 1;
                    $judge->law_3 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.law");
                case 'zzz':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->law_3_clear = 1;
                    
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.law");
                case 'xssis':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->xss_1_clear = 1;
                    $judge->xss_2 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.xss");
                case 'xssstep':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->xss_2_clear = 1;
                    $judge->xss_3 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.xss");
                case 'xssss':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->xss_3_clear = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.xss");
                case 'start':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->sql_1_clear = 1;
                    $judge->sql_2 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.sql");
                case 'step':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->sql_2_clear = 1;
                    $judge->sql_3 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.sql");
                case 'sqli':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->sql_3_clear = 1;
                    $judge->save();
                    return view("courses.sql");
                return back();
            }
        }
            
        return view("courses.{$course}.{$course2}");
    }
}   
