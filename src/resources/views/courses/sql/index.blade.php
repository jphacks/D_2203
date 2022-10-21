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
                    <h3 class="course_exp_title">Cross Site Scripting (XSS)</h3>
                    <p>XSS(クロスサイトスクリプティング)とは、WebサイトやWebアプリの脆弱性を利用して悪質なスクリプトを埋め込み、ユーザーの情報を抜き取ったりする攻撃です。</p>
                    <p>このコースではどの様にスクリプトを埋め込みユーザーの情報を抜き取るのかを学習します。</p>
                </div>
                <img style="width: 400px" src="https://static.vecteezy.com/system/resources/previews/006/843/150/original/xss-attack-black-glyph-icon-cross-site-scripting-software-attack-client-side-code-injection-malware-computer-damage-silhouette-symbol-on-white-space-isolated-illustration-vector.jpg" alt="">
            </div>
        </div>
        <!--第1章-->
        <h3 class="syo">第1章</h3>
        <div class="course_container">
            <div class="flex-wrap">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
                <img style="width: 50%;" src="https://prog-8.com/images/ogp/default.png" alt="">
            </div>
        </div>
        <div class="btn_container">
            <a href="sql/sql_1" class="btn-flat-border">第1章を学習する</a>
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

<a href="sql/sql_1">sql_1</a>
<a href="sql/sql_2">sql_2</a>
<a href=""></a>

@include('header')