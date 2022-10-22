@extends('layout')
@section('title','ぺねらぼ | 法律')
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
  <style>

.brand {
  font-weight: bold;
  font-size: 20px; }
 
.site-header {
  position: relative;
  background-color: #def7ff; }
 
.site-header__wrapper {
  padding-top: 1rem;
  padding-bottom: 1rem; }
  @media (min-width: 600px) {
    .site-header__wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding-top: 0;
      padding-bottom: 0; } }
@media (min-width: 600px) {
  .nav__wrapper {
    display: flex; } }
 
@media (max-width: 599px) {
  .nav__wrapper {
    position: absolute;
    top: 100%;
    right: 0;
    left: 0;
    z-index: -1;
    background-color: #d9f0f7;
    visibility: hidden;
    opacity: 0;
    transform: translateY(-100%);
    transition: transform 0.3s ease-out, opacity 0.3s ease-out; }
    .nav__wrapper.active {
      visibility: visible;
      opacity: 1;
      transform: translateY(0); } }
 
.nav__item a {
  display: block;
  padding: 1.5rem 1rem; }
 
.nav__toggle {
  display: none; }
  @media (max-width: 599px) {
    .nav__toggle {
      display: block;
      position: absolute;
      right: 1rem;
      top: 1rem; } }
  </style>
    <div class="main">
        <div class="course_container">
            <div class="flex bg-white justify-between">
                <div class="course_exp">
                    <h3 class="course_exp_title">CyberSecurity Laws</h3>
                    <p>サイバーセキュリティの世界にも法律は存在します。サイト主の承諾がない状態で攻撃を行ってしまうと逮捕に至ってしまう場合もあります。</p>
                    <p>このコースでは遵守しなくてはならない法律を学習します。</p>
                </div>
                <img style="width: 400px" src="https://s3-ap-northeast-1.amazonaws.com/cdn.kuraneo2.jp/production/imgs/images/000/044/311/original.?1573890686" alt="">
            </div>
        </div>
        <!--第1ステージ-->
        <div class="flex">
            @if($judge->law_1_clear == 1)
            <img style="margin-top: 40px" height="50px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
            @endif
            <h3 class="syo">第1ステージ</h3>
        </div>
            <img style="margin-left: 200px" width="70%" src="https://pbs.twimg.com/media/FfpTw9TVsAAKcur?format=png&name=large" alt="">
        <div class="btn_container">
            <a href="law/law_1" class="btn-flat-border">第1ステージを学習する</a>
        </div>
        <!--第2ステージ-->
        {{-- @if($judge->law_2 == 1)
        <div class="flex">
            @if($judge->law_2_clear == 1)
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
            <a href="law/law_2" class="btn-flat-border">第2ステージを学習する</a>
        </div>
        @endif --}}
{{-- 
        <!--クリアしてない場合-->
        @if($judge->law_2 != 1)
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
        <!--第2ステージ-->
        @if($judge->law_3 == 1)
        <div class="flex">
            @if($judge->law_3_clear == 1)
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
            <a href="law/law_3" class="btn-flat-border">第3ステージを学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->law_3 != 1)
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
        @endif --}}
        

    </div>