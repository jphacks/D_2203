<!DOCTYPE html>
<html dir="ltr" lang="ja">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" /> -->
	
	<link rel="stylesheet" href="{{ asset('/css/bootstrap.css')  }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/style.css')  }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/dark.css')  }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/font-icons.css')  }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('/css/animate.css')  }}" type="text/css" />

	

	<!-- <link rel="stylesheet" href="css/magnific-popup.css" type="text/css" /> -->
	<!-- <link rel="stylesheet" href="css/custom.css" type="text/css" /> -->

	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Home | ぺねらぼ</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<section id="slider" class="slider-element slider-parallax vh-100">
			<div class="slider-inner" style="background: url('images/parallax/home/9.jpg') center center no-repeat; background-size: cover;">

				<div class="vertical-middle slider-element-fade">
					<div id="wrappers"><canvas id="canvas"></canvas></div>
					<div id="condainer">
                     <div class="container">
						<!--ここにコンテンツ-->
						<div class="emphasis-title center">
							<h1 data-animate="fadeInUp"><strong>ぺねらぼ</strong> へようこそ</h1>
							<h4 data-animate="fadeInUp">みたいな</h4>
						</div>
					 </div>
                    </div>
					<!-- <div class="container">
						
					</div> -->
				</div>

			</div>
		</section>

		@include('components.header')

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap py-0">

				<!-- <div class="section parallax min-vh-100 dark m-0 border-0 d-flex" style="background-image: url('images/parallax/1.jpg');" data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
					<div class="vertical-middle">
						<div class="container">

							<div class="row col-mb-50">
								<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn">
									<i class="i-plain i-xlarge mx-auto mb-0 icon-code"></i>
									<div class="counter counter-large counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span>K+</div>
									<h5>Lines of Codes</h5>
								</div>

								<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="200">
									<i class="i-plain i-xlarge mx-auto mb-0 icon-magic"></i>
									<div class="counter counter-large counter-lined"><span data-from="3000" data-to="15360" data-refresh-interval="100" data-speed="2500"></span>+</div>
									<h5>KBs of HTML Files</h5>
								</div>

								<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="400">
									<i class="i-plain i-xlarge mx-auto mb-0 icon-file-text"></i>
									<div class="counter counter-large counter-lined"><span data-from="10" data-to="386" data-refresh-interval="25" data-speed="3500"></span>*</div>
									<h5>No. of Templates</h5>
								</div>

								<div class="col-sm-6 col-lg-3 text-center" data-animate="bounceIn" data-delay="600">
									<i class="i-plain i-xlarge mx-auto mb-0 icon-time"></i>
									<div class="counter counter-large counter-lined"><span data-from="60" data-to="1200" data-refresh-interval="30" data-speed="2700"></span>+</div>
									<h5>Hours of Coding</h5>
								</div>
							</div>

						</div>
					</div>
				</div> -->

				<div class="section parallax min-vh-100 m-0 border-0 d-flex" style="background-image: url('images/parallax/home/background-1.png');" data-bottom-top="background-position:-200px -250px;" data-top-bottom="background-position:0px -400px;">
					<div class="vertical-middle">
						<div class="container">

							<div class="row">
								<div class="col-md-5">
									<div class="emphasis-title">
										<h2>初めてでも<br>安心</h2>
										<p class="lead topmargin-sm">"ぺねらぼ" はセキュリティ初学者向けに制作された<br>実践形の学習サイトです。</p>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="row p-0 align-items-stretch">

					<div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #1abc9c;">
						<div>
							<h3 class="text-uppercase" style="font-weight: 600;">納得のいく解説</h3>
							<p style="line-height: 1.8;">なぜ脆弱性は生まれるのでしょうか？<br>なぜこのプログラムは危険なのでしょうか？<br>丁寧な解説資料でいつでも確認できます。</p>
							<a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
							<i class="icon-bulb bgicon"></i>
						</div>
					</div>

					<div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #34495e;">
						<div>
							<h3 class="text-uppercase" style="font-weight: 600;">安全な設計</h3>
							<p style="line-height: 1.8;">実際に危険なプログラムを動かすのはちょっと怖いですよね？<br>安心・安全のシナリオで設計されたチュートリアルは環境構築が不要<br>詳しい原理も不安なく学ぶことができます</p>
							<a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
							<i class="icon-cog bgicon"></i>
						</div>
					</div>

					<div class="col-lg-4 dark col-padding overflow-hidden" style="background-color: #e74c3c;">
						<div>
							<h3 class="text-uppercase" style="font-weight: 600;">さらなる理解へ</h3>
							<p style="line-height: 1.8;">もし物足りなくなったらリファレンスをのぞいてみてください。<br>セキュリティの世界がもっと面白くなるようなコラムの数々を<br>用意しています。</p>
							<a href="#" class="button button-border button-light button-rounded text-uppercase m-0">Read More</a>
							<i class="icon-thumbs-up bgicon"></i>
						</div>
					</div>

				</div>

				<div class="clear"></div>

				<div class="section m-0 border-0" style="background-image: url('images/parallax/3.jpg');">
					<div class="heading-block center border-bottom-0 mb-0">
						<h2>"全てのシステムにセキュリティを"</h2>
						<h5>みたいな</h5>
						<!--仮-->
					</div>
				</div>

				<div class="section parallax min-vh-100 dark m-0 border-0 d-flex" style="background-image: url('images/parallax/home/10.jpg');"  data-bottom-top="background-position:0px 0px;" data-top-bottom="background-position:0px -300px;">
					<div class="vertical-middle">
						<div class="container">

							<h1>About Us<br>></h1>

						</div>
					</div>
				</div>

				<div class="section parallax dark m-0 border-0" style="padding: 150px 0; background-image: url('images/parallax/home/7.jpg');" data-bottom-top="background-position:0px -300px;" data-top-bottom="background-position:0px 0px;">
					<div class="container text-center">

						<div class="emphasis-title">
							<h2>いますぐ始める</h2>
							<p class="lead topmargin-sm">最初は簡単なチュートリアルです。さあ、お気軽にどうぞ。</p>
						</div>

						<a href="{{ route('login') }}" class="button button-border button-rounded button-light button-large">ログイン</a>
						<a href="{{ route('register') }}" class="button button-rounded button-white button-light button-large">会員登録</a>

					</div>
				</div>
			</div>
		</section><!-- #content end -->

		@include('components.footer')
		

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('js/jquery.js')  }}"></script>
	<script src="{{ asset('js/plugins.min.js')  }}"></script>
	<script src="{{ asset('js/canvas.js')  }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('js/functions.js')  }}"></script>

</body>
</html>