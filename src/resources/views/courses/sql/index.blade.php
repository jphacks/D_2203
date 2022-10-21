@extends('layout')
@section('title','ぺねらぼ | XSS')
@section('content')
    <div class="main">
        <div class="course_container">
            <div class="flex bg-white justify-between">
                <div class="course_exp">
                    <h3 class="course_exp_title">SQL injection (SQLi)</h3>
                    <p>SQL injectionとはデータベースから不正に情報を引き出したり削除したりする攻撃です．</p>
                    <p>このコースではどの様に情報を引き出すのかを学習します。</p>
                </div>
                <img style="width: 400px" src="https://static.vecteezy.com/system/resources/previews/006/843/150/original/xss-attack-black-glyph-icon-cross-site-scripting-software-attack-client-side-code-injection-malware-computer-damage-silhouette-symbol-on-white-space-isolated-illustration-vector.jpg" alt="">
            </div>
        </div>
        <!--第1ステージ-->
        @if($judge->sql_1 == 1)
        <div class="flex">
            @if($judge->sql_1_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第1ステージ</h3>
        </div>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="sql/sql_1" class="btn-flat-border">第1ステージを学習する</a>
        </div>
        @endif
        @if($judge->sql_1 != 1)
        <div class="flex">
            <h3 class="syo">第1ステージ</h3>
            <p class="syo-mi" style="color: red">※法律ステージが未クリアなので進めないよ!</p>
        </div>
        
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <p class="btn-flat-border-lock">法律ステージが未クリアです</p>
        </div>
        @endif
        <!--第2ステージ-->
        @if($judge->sql_2 == 1)
        <div class="flex">
            @if($judge->sql_2_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第2ステージ</h3>
        </div>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="/sql/sql_2" class="btn-flat-border">第2ステージを学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->sql_2 != 1)
        <div class="flex">
            <h3 class="syo">第2ステージ</h3>
            <p class="syo-mi" style="color: red">※第1ステージが未クリアなので進めないよ!</p>
        </div>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <p class="btn-flat-border-lock">第1ステージが未クリアです</p>
        </div>
        @endif
        <!--クリアしてない場合終了-->
        @if($judge->sql_3 == 1)
        <div class="flex">
            @if($judge->sql_3_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第3ステージ</h3>
        </div>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="sql/sql_3" class="btn-flat-border">第3ステージを学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->sql_3 != 1)
        <div class="flex">
            <h3 class="syo">第3ステージ</h3>
            <p class="syo-mi" style="color: red">※第2ステージが未クリアなので進めないよ!</p>
        </div>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%; filter: blur(10px);" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <p class="btn-flat-border-lock">第2ステージが未クリアです</p>
        </div>
        @endif

    </div>