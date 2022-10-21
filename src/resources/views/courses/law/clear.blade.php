@extends('layout')
@section('title','ぺねらぼ | 法律')
@section('content')
    <div class="main">
        <div class="course_container">
            <div class="flex bg-white justify-between">
                <div class="course_exp">
                    <h3 class="course_exp_title">CyberSecurity Laws</h3>
                    <div class="flex">
                        <h1 style="margin: 30px 100px 0 300px">{{$msg->stage}}</h1>
                    <img width="300px" src="https://thumb.ac-illust.com/cf/cf770c271115a0f08b09de20532e27e4_t.jpeg" alt="">
                    </div>
                </div>
                <img style="width: 400px" src="https://s3-ap-northeast-1.amazonaws.com/cdn.kuraneo2.jp/production/imgs/images/000/044/311/original.?1573890686" alt="">
            </div>
            
        </div>
        <div class="btn_container">
            <a href="/courses/law" class="btn-flat-border">ステージ一覧に戻る</a>
        </div>