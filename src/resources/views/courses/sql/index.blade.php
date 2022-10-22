@extends('layout')
@section('title','ぺねらぼ | XSS')
@section('content')
<header class="site-header">
    <div class="wrapper site-header__wrapper">
      <a href="/" class="brand">ぺねらぼ</a>
      <nav class="nav">
        <a class="nav__toggle" aria-expanded="false" type="button">
          menu
        </a>
        <ul class="nav__wrapper">
          <li class="nav__item"><a href="/">Home</a></li>
          <li class="nav__item"><a href="/courses">コース一覧</a></li>
          <li class="nav__item">
            @guest <!--ログインしていなかったら表示-->
            <a href="{{ url('/register') }}"><i class="fa-solid fa-circle-user header_login_button"></i></a>
            @endguest</li>
        </ul>
      </nav>
    </div>
  </header>
    <div class="main">
        <div class="course_container">
            <div class="flex bg-white justify-between">
                <div class="course_exp">
                    <h3 class="course_exp_title">SQL injection (SQLi)</h3>
                    <p>SQL injectionとはデータベースから不正に情報を引き出したり削除したりする攻撃です．</p>
                    <p>このコースではどの様に情報を引き出すのかを学習します。</p>
                </div>
                <img style="width: 400px; padding:50px;" src="https://budougumi0617.github.io/logos/mysql.png" alt="">
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
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTwonVQAAmGp7?format=png&name=large" alt="">
        <div class="btn_container">
            <a href="sql/sql_1" class="btn-flat-border">第1ステージを学習する</a>
        </div>
        @endif
        @if($judge->sql_1 != 1)
        <div class="flex">
            <h3 class="syo">第1ステージ</h3>
            <p class="syo-mi" style="color: red">※法律ステージが未クリアなので進めないよ!</p>
        </div>
        
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTwonVQAAmGp7?format=png&name=large" alt="">
        
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
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTwVIUAAEefOs?format=png&name=large" alt="">
        
        <div class="btn_container">
            <a href="sql/sql_2" class="btn-flat-border">第2ステージを学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->sql_2 != 1)
        <div class="flex">
            <h3 class="syo">第2ステージ</h3>
            <p class="syo-mi" style="color: red">※第1ステージが未クリアなので進めないよ!</p>
        </div>
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTwVIUAAEefOs?format=png&name=large" alt="">
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
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTwDiUoAAENO_?format=png&name=large" alt="">
        
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
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTwDiUoAAENO_?format=png&name=large" alt="">
        
        <div class="btn_container">
            <p class="btn-flat-border-lock">第2ステージが未クリアです</p>
        </div>
        @endif

    </div>