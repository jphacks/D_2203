<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Judgement;
use App\Models\User;

class JudgementController extends Controller
{
    //
    public function index() {
        //ログイン中のユーザーの紐付けidからjudgementテーブルのレコードを取得
        $judge = Judgement::find(\Auth::user()->judgements_id);

        //dd($judge->sql_1);
        
        return view('index', ['judge' => $judge]);
    }
}
