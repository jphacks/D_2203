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
                    <h3 class="course_exp_title">Cross Site Scripting (XSS)</h3>
                    <p>XSS(クロスサイトスクリプティング)とは、WebサイトやWebアプリの脆弱性を利用して悪質なスクリプトを埋め込み、ユーザーの情報を抜き取ったりする攻撃です。</p>
                    <p>このコースではどの様にスクリプトを埋め込みユーザーの情報を抜き取るのかを学習します。</p>
                </div>
                <img style="width: 400px" src="https://static.vecteezy.com/system/resources/previews/006/843/150/original/xss-attack-black-glyph-icon-cross-site-scripting-software-attack-client-side-code-injection-malware-computer-damage-silhouette-symbol-on-white-space-isolated-illustration-vector.jpg" alt="">
            </div>
        </div>
        <!--第1ステージ-->
        @if($judge->xss_1 == 1)
        <div class="flex">
            @if($judge->xss_1_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第1ステージ</h3>
        </div>
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpW7suUYAAiRaw?format=png&name=large" alt="">
        
        <div class="btn_container">
            <a href="xss/xss_1" class="btn-flat-border">第1ステージを学習する</a>
        </div>
        @endif
        @if($judge->xss_1 != 1)
        <div class="flex">
            <h3 class="syo">第1ステージ</h3>
            <p class="syo-mi" style="color: red">※法律ステージが未クリアなので進めないよ!</p>
        </div>
        
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpW7suUYAAiRaw?format=png&name=large" alt="">
        
        <div class="btn_container">
            <p class="btn-flat-border-lock">法律ステージが未クリアです</p>
        </div>
        @endif
        <!--第2ステージ-->
        @if($judge->xss_2 == 1)
        <div class="flex">
            @if($judge->xss_2_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第2ステージ</h3>
        </div>
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpW764UAAASS5F?format=png&name=large" alt="">
        
        <div class="btn_container">
            <a href="xss/xss_2" class="btn-flat-border">第2ステージを学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->xss_2 != 1)
        <div class="flex">
            <h3 class="syo">第2ステージ</h3>
            <p class="syo-mi" style="color: red">※第1ステージが未クリアなので進めないよ!</p>
        </div>
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpW764UAAASS5F?format=png&name=large" alt="">
        
        <div class="btn_container">
            <p class="btn-flat-border-lock">第1ステージが未クリアです</p>
        </div>
        @endif
        @if($judge->xss_3 == 1)
        <div class="flex">
            @if($judge->xss_3_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第3ステージ</h3>
        </div>
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpW8LCUYAAoYSu?format=png&name=large" alt="">
        
        <div class="btn_container">
            <a href="xss/xss_3" class="btn-flat-border">第3ステージを学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->xss_3 != 1)
        <div class="flex">
            <h3 class="syo">第3ステージ</h3>
            <p class="syo-mi" style="color: red">※第2ステージが未クリアなので進めないよ!</p>
        </div>
        <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpW8LCUYAAoYSu?format=png&name=large" alt="">
        
        <div class="btn_container">
            <p class="btn-flat-border-lock">第2ステージが未クリアです</p>
        </div>
        @endif
        <!--クリアしてない場合終了-->
        

    </div>