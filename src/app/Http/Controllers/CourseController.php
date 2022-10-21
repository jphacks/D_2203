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
                case 'xxx':
                    //law_1_clearを1に変更
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->law_1_clear = 1;
                    $judge->law_2 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.clear", ['msg' => $msg]);
                case 'yyy':
                    //law_1_clearを1に変更
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->law_2_clear = 1;
                    $judge->law_3 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.clear", ['msg' => $msg]);
                case 'zzz':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->law_3_clear = 1;
                    $judge->xss_1 = 1;
                    $judge->sql_1 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.clear", ['msg' => $msg]);
                case 'aaa':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->xss_1_clear = 1;
                    $judge->xss_2 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.clear", ['msg' => $msg]);
                case 'aaa':
                    $judge = Judgement::find(\Auth::user()->judgements_id);
                    $judge->xss_2_clear = 1;
                    $judge->xss_3 = 1;
                    $judge->save();
                    $msg = "正解です";
                    return view("courses.clear", ['msg' => $msg]);
                return back();
            }
        }
            
        // if(isset($answer)){
        //     if($answer == "xxx"){
        //         //law_1_clearを1に変更
        //         $judge = Judgement::find(\Auth::user()->judgements_id);
        //         $judge->law_1_clear = 1;
        //         $judge->law_2 = 1;
        //         $judge->save();
        //         $msg = "正解です";
        //         return view("courses.clear", ['msg' => $msg]);
        //     } else if($answer == "yyy"){
        //         return view("clear");
        //     }
        //     else{
        //         $msg = "不正解です";
        //         return back();
        //     }
        // }
        return view("courses.{$course}.{$course2}");
    }
}   
