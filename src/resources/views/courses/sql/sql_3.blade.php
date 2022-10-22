
@extends('layout')
@section('title','ぺねらぼ | SQL | ステージ3')
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
        <h2>ログインの裏側</h2>
        <p>ログイン機能の裏側にはデータベースとの照合があることはすでに学習しました。</p>
        <p>実際には「SELECT * FROM user WHERE username='(:username)' and password='(:password)';」という文が書かれています。</p>
        <p>入力したユーザーネームとパスワードに合致するユーザーが存在するかを確認しています。</p>
        
        </div>
      <!--/area1--></section>
        <section>
        <div class="area">
        <h2>無理やりTrueにされる</h2>
        <p>この「and password='(:password)'」の部分に「' or 1=1;--」という入力を行うと...</p>
        <p>「and password='' or 1=1;--」となり、「パスワードが空であるか1が1であるか」という認証に変わります。</p>
        <p>1=1は絶対にTrueなので認証を通ってログインができてしまうのです。</p>
        <p>今回の様にログインだけでなく、「union」というものを使って文を伸ばすこともできます。そこで全部のデータを削除だったり、特定のデータを引き出したりすることが可能になります。</p>
        </div>
      <!--/area2--></section>
        <section>
        <div class="area">
        <h2>対策</h2>
        <p>対策としてはエスケープ処理というものがあります。これはクオーテーションなどの特殊文字を別の文字に書き換える処理です。</p>
        <p>これをすることにより本来のクオーテーションの効果を無効化することでインジェクションされないように対策ができます</p>
        <p>これでSQLステージは終了です。キーワードは「sqli」です。</p>

        <h2><span style="color: red">アプデ予定</span> </h2>
        <p>対策コーディングを右側のスペースで行えるようにアップデートを行います。</p>
        
        
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