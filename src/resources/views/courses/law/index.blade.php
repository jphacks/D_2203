sql instal
<head>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Economica:700" rel="stylesheet">
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lato:300,400,700|M+PLUS+Rounded+1c:300,400,500,700,800|Quicksand:400,700&amp;display=swap" as="style">
</head>
<body>
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

        <!--第1章-->
        <h3 class="syo">第1ステージ</h3>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="law/law_1" class="btn-flat-border">第1ステージを学習する</a>
        </div>

        <!--第2章-->
        @if($judge->sql_1 == 1)
        <h3 class="syo">第2章</h3>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="#" class="btn-flat-border">第2章を学習する</a>
        </div>
        @endif

        <!--クリアしてない場合-->
        @if($judge->sql_1 != 1)
        <div class="flex">
            <h3 class="syo">第2章</h3>
            <p class="syo-mi" style="color: red">※第1章が未クリアなので進めないよ!</p>
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
            <p class="btn-flat-border-lock">第1章が未クリアです</p>
        </div>
        @endif
        <!--クリアしてない場合終了-->
        

    </div>
</body>