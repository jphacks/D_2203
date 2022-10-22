
@extends('layout')
@section('title','ぺねらぼ | SQL | ステージ1')
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
  
    <section>
        <div class="area">
        <h2>SQLとは</h2>
        <p>プログラミングの世界で用いられるデータベース、データベースを操作するデータベース言語のことです。</p>
        <p>このデータベースをうまく活用することで様々なデータを管理保存しておくことができるため今日の世界ではなくてはならないものとなっています。</p>
        </div>
      <!--/area1--></section>
        <section>
        <div class="area">
        <h2>確認しよう</h2>
        <p>ではこのステージでは動作を確認してみましょう。右側にいつも見るようなログイン画面を用意しました。</p>
        <p>Usernameに「penerabo」と入力しPasswordに「penerabo_password」と入力してみましょう。</p>
        <p>ログインに成功するとキーワードが表示されます。</p>
        </div>
      <!--/area2--></section>
        <section>
        <div class="area">
        <h2>何が問題？</h2>
        <p>このログイン機能はSQLを用いてデータベースに登録されている名前とパスワードを照合しています。</p>
        <p>一見問題のないフォームに見えますが、重大な脆弱性が存在しています。次の章でどのような危険があるのかを見ていきましょう。</p>
        </div>
        <form action="#">
            <input name="clear" type="text" placeholder="キーワード">
            <div class="btn_container">
                <input style="background-color: white; width:300px; margin-left: -95px" class="btn-flat-border" type="submit" value="このコースをクリアする">
            </div>
        </form>
      <!--/area3--></section>
    
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
        if($username == 'penerabo' && $password == 'penerabo_password'){
            echo 'ログイン成功！！キーワードは「start」だよ！';
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