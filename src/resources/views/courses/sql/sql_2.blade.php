
@extends('layout')
@section('title','ぺねらぼ | SQL | ステージ2')
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
<div id="wrapper">
  <div id="container-2"><!--左固定エリア-->
  <header>
    <section>
        <div class="area">
        <h2>SQLインジェクションとは</h2>
        <p>本来の入力とは意図しない文字列などを入力することでデータを不正に入手する攻撃のことです。</p>
        <p>世の中ので起きる個人情報漏洩事件の大半はこのSQLインジェクションというものによって引き起こされています。</p>
        
        </div>
      <!--/area1--></section>
        <section>
        <div class="area">
        <h2>意図しない文字列とは？</h2>
        <p>まず本来の入力に対してSQLは「usernameとpasswordが一致したらログイン」という方法を取っています。</p>
        <p>このusernameとpasswordはデータベースに保存されている「penerabo」と「penerabo_password」で比較を行っています。</p>
        <p>この比較を無理やりTrue(真)にしたらどうなるでしょうか？</p>
        </div>
      <!--/area2--></section>
        <section>
        <div class="area">
        <h2>試してみましょう</h2>
        <p>usernameは「penerabo」でパスワードは秘密です。秘密ですが、無理やりパスワード比較の結果をTrueにしてみましょう。</p>
        <p>passwordに「' or 1=1;--」と入力してください。</p>
        <p>ログインに成功するとキーワードがでてきます。</p>
        <p>なぜこの入力でログインできてしまうのかは次のステージで解説します。</p>
        </div>
        <form action="#">
            <input name="clear" type="text" placeholder="キーワード">
            <div class="btn_container">
                <input style="background-color: white; width:300px; margin-left: -95px" class="btn-flat-border" type="submit" value="このコースをクリアする">
            </div>
        </form>
      <!--/area3--></section>
    
  </header>
  <!--/fixed-area--></div>
    
  <div id="fixed-area"><!--右エリア-->
    <form>
        
        <h1>Login Menu</h1>
        <input name="username" type="text" placeholder="Username"/>
        <input name="password" type="password" placeholder="Password"/>
        <button>Login</button>
        <?php 
        if(isset($_GET['username'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        if($username == 'penerabo' && $password == "' or 1=1;--"){
            echo 'ログイン成功！！キーワードは「sqli」だよ！';
        }else{
            echo 'ログイン失敗';
        }
        }?>
      </form>
  <!--/container--></div>
<!--/wrapper--></div>
  
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stickyfill/2.1.0/stickyfill.min.js"></script>
<script src="http://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/move02/6-4/js/6-4.js"></script>

@endsection