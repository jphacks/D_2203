@extends('layout')
@section('title','ぺねらぼ | コース一覧')
@section('content')
<header class="site-header">
    <div class="wrapper site-header__wrapper">
      <a href="#" class="brand">ぺねらぼ</a>
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
<div class="container">
    <div class="row">
        <a href="/courses/law">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="https://s3-ap-northeast-1.amazonaws.com/cdn.kuraneo2.jp/production/imgs/images/000/044/311/original.?1573890686">
                </div>
                <div class="team-content">
                    <h3 class="course_name">Laws</h3>
                </div>
                <div class="social">
                    <p class="course_detail">セキュリティに関する法律はたくさんあります．</p>
                </div>
            </div>
        </div>
        </a>
        <a href="/courses/sql">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="https://budougumi0617.github.io/logos/mysql.png">
                </div>
                <div class="team-content">
                    <h3 class="course_name">SQLi</h3>
                </div>
                <div class="social">
                    <p class="course_detail">データベースから不正にデータを取得することができてしまう脆弱性</p>
                </div>
            </div>
        </div>
        </a>
        <a href="/courses/xss">
        <div class="col-12 col-sm-6 col-md-4 col-lg-3">
            <div class="our-team">
                <div class="picture">
                    <img class="img-fluid" src="https://static.vecteezy.com/system/resources/previews/006/843/150/original/xss-attack-black-glyph-icon-cross-site-scripting-software-attack-client-side-code-injection-malware-computer-damage-silhouette-symbol-on-white-space-isolated-illustration-vector.jpg">
                </div>
                <div class="team-content">
                    <h3 class="course_name">XSS</h3>
                </div>
                <div class="social">
                    <p class="course_detail">データベースから不正にデータを取得することができてしまう脆弱性</p>
                </div>
            </div>
        </div>
        </a>
    </div>
</div>