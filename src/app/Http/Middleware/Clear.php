<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Judgement;

class Clear
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    //アクセスしたページがまだ解放されていなかった場合に403を返す処理
    public function handle(Request $request, Closure $next)
    {
        //urlからcourse2の値を取得
        $course2 = $request->route()->parameter('course2');

        //ログイン中のユーザーの紐付けidからjudgementテーブルのレコードを取得
        $judge = Judgement::find(\Auth::user()->judgements_id);

        //dd($judge->$course2);
        
        if($judge->$course2 == 0){
            abort(403);
        } else {
            return $next($request);
        }
    }
}
