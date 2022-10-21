@extends('layout')
@section('title','ぺねらぼ | 法律')
@section('content')
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
        
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="{{asset('images/law_1/law_1_1.png')}}" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="law/law_1" class="btn-flat-border">第1ステージを学習する</a>
        </div>
        <!--第2ステージ-->
        @if($judge->law_2 == 1)
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
        @endif

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
        @endif
        

    </div>