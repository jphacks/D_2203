<!DOCTYPE html>
<html dir="ltr" lang="ja">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="SemiColonWeb" />
    <link rel="shortcut icon" href="/images/logo/favicon.ico">

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
    <title>ぺねらぼ | 法律 | 第1ステージ</title>

</head>

<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Document Wrapper
	============================================= -->
        <div id="wrapper" class="clearfix">
            <section id="slider" class="slider-element slider-parallax vh-100">
                <div class="slider-inner" style="background: url('images/glasses.jpg') center center no-repeat; background-size: cover;">
                    <!-- <h3 data-animate="fadeInUp" style="color:antiquewhite; text-shadow:1px 1px 1px #3c3c3c; margin:60px 0 0 40px;">&nbsp;&nbsp;&nbsp;初めに</h3> -->
                    <div class="vertical-middle slider-element-fade">
                        <h1 data-animate="fadeInUp" style="color:antiquewhite; text-shadow:1px 1px 1px #3c3c3c; margin:25px 0; text-align:center; ">ぺねらぼを利用するにあたって</h1>
                        <div id="condainer">
                            <div class="container" data-animate="fadeInUp" style="margin: 2em auto; padding: 1em; width: 90%; border: 1px solid #ccc; background-color: #292a2d; box-shadow: 1px 1px 2px #ccc;">
                                <h3 data-animate="fadeInUp" style="color:#f8e9d6; text-shadow:1px 1px 2px #3c3c3c;">当サイトで学んだ脆弱性を他のサイトでテストするような行為は、たとえ悪意を持っていなくても犯罪になり得ます</h3>
                                <h2 data-animate="fadeInUp" style="color:red; text-shadow:1px 1px 2px #3c3c3c; text-align:center;">絶対に行わないでください</h2>

                            </div>
                        </div>
                        <!-- <div class="container">
        
    </div> -->
                    </div>
            </section>
            @include('header')

        </div><!-- #wrapper end -->


        <!-- Content
		============================================= -->
        <!-- Content
		============================================= -->
        <section id="content">
            <div class="content-wrap">
                <div class="container">

                    <div class="single-post mb-0 mw-sm mx-auto">

                        <!-- Single Post
						============================================= -->
                        <div class="entry">

                            <!-- Entry Title
							============================================= -->
                            <div class="entry-title">
                                <h2>この章は、ぺねらぼで学ぶ知識を正しく利用するための準備です。必ず目を通してください。</h2>
                            </div><!-- .entry-title end -->

                            <div class="row align-items-center mt-2">
                                <div class="col-md-3">
                                    <!-- Entry Meta
									============================================= -->
                                    <div>
                                        <ul class="d-flex flex-column entry-meta no-separator">
                                            <img src="images/logo/favicon.png" alt="">
                                        </ul>
                                    </div><!-- .entry-meta end -->
                                </div>
                                <div class="col-md-9">
                                    <p class="text-larger text-muted mt-3">セキュリティ学習は通常、攻撃者の手口を学ぶことでその対策を身に着けていく形で進めていきます。しかしその目的によらず実在するサイトへの攻撃は法律に抵触するおそれがあります。</p>
                                </div>
                            </div>



                            <!-- Entry Content
							============================================= -->
                            <div class="entry-content mt-3">

                                <p>情報セキュリティの三要素、CIAについて見ていきましょう。</p>

                                <p>これは「機密性」（<span style="color:aqua;">C</span>onfidentiality）「完全性」（<span style="color:coral;">I</span>ntegrity）「可用性」（<span style="color:lawngreen;">A</span>vailability）を指し、これらすべての対策をしていくことが、情報セキュリティにつながるとされています。</p>

                                <p>サイバー攻撃による犯罪とそれを取り締まる法律には下記のような例があります。やはり外部のサーバーに不正な手順でアクセスするなどの行為は慎むべきだということが分かりますね。</p>

                                <blockquote>
                                    <p>①不正アクセス禁止法違反（不正アクセス罪等）<br>他人のID・パスワードを使って不正にログインする行為やセキュリティ・ホール攻撃を行って、認証機能を攻撃する行為を処罰する。<br><br>②電子計算機損壊等業務妨害罪（刑法234条の2）<br>HTTPサーバに不正に侵入して、データを書き換えて、ホームページを介して行う情報提供業務を妨害する行為等を処罰する。処罰範囲は広範。<br><br>③電磁的記録不正作出等罪（刑法161条の2）<br>異なる意味を持たせるようにサーバ上のデータを不正に書き換える行為等を処罰する。オンラインゲームにおけるデータの改変によるチート等。</p>
                                </blockquote>

                                <p>では、セキュリティエンジニア以外は実際に脆弱性診断や、ペネトレーションテストを行う機会が無いのでしょうか？</p>

                                <p>もちろん、そんなことありません<br>
                                    それどころか、他分野のエンジニアや学生までもが今もなお脆弱性を発見し、検挙しているのです！</p>

                                <pre>
string userName = ctx.getAuthenticatedUserName();
string query = "SELECT * FROM items WHERE owner 
             = '" + userName + "' AND itemname = '" + ItemName.Text + "'";
sda = new SqlDataAdapter(query, conn);
DataTable dt = new DataTable();
sda.Fill(dt);
</pre>

                                <p>上記のコードはCWE-89に登録されているSQLインジェクションの脆弱性を含むC#のプログラムです。発見、報告された脆弱性の数々はそれぞれに識別子が割り振られ、<a href="https://cve.mitre.org/">CVE(Common Vulnerabilities and Exposures)</a>という辞書によって管理されるようになったり、<a href="https://www.ipa.go.jp/index.html">IPA(独立行政法人情報処理推進機構)</a>という組織によって管理されたりします。</p>

                                <!-- <div class="row align-wide-lg mb-4 text-center">
									<div class="col-sm-6">
										<img src="images/blog/grid/1.jpg" alt="Image">
										<figcaption class="text-center mt-2 text-muted text-smaller">Image Caption Text</figcaption>
									</div>
									<div class="col-sm-6">
										<iframe width="560"height="315" src="https://www.youtube.com/embed/P3Huse9K6Xs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
										<figcaption class="text-center mt-2 text-muted text-smaller">Video Caption Text</figcaption>
									</div>
								</div> -->

                                <p>正しい手順を踏んで脆弱性を発見することができれば、セキュリティ業界に誰でも貢献することができるのです。正しい倫理観を持って、いつか脆弱性の検挙ができるよう頑張りましょう！</p>
                                <p>この章は以上です。キーワードは「step」です。</p>
                                <div class="content-wrap">
                                    <form action="#">
                                        <input name="clear" type="text" placeholder="キーワード">
                                        <div class="btn_container">
                                            <input style="" class="btn-flat-border" type="submit" value="このコースをクリアする">
                                        </div>
                                    </form>
                                </div>

                                <!-- Post Single - Content End -->

                                <!-- Tag Cloud
								============================================= -->
                                <!-- <div class="tagcloud clearfix bottommargin">
									<a href="#">general</a>
									<a href="#">information</a>
									<a href="#">media</a>
									<a href="#">press</a>
									<a href="#">gallery</a>
									<a href="#">illustration</a>
								</div> -->
                                <!-- .tagcloud end -->

                                <!-- <div class="clear"></div> -->

                                <!-- Post Single - Share
								============================================= -->
                                <!-- <div class="si-share border-0 d-flex justify-content-between align-items-center">
									<span>Share this Post:</span>
									<div>
										<a href="#" class="social-icon si-borderless si-facebook">
											<i class="icon-facebook"></i>
											<i class="icon-facebook"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-twitter">
											<i class="icon-twitter"></i>
											<i class="icon-twitter"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-pinterest">
											<i class="icon-pinterest"></i>
											<i class="icon-pinterest"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-gplus">
											<i class="icon-gplus"></i>
											<i class="icon-gplus"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-rss">
											<i class="icon-rss"></i>
											<i class="icon-rss"></i>
										</a>
										<a href="#" class="social-icon si-borderless si-email3">
											<i class="icon-email3"></i>
											<i class="icon-email3"></i>
										</a>
									</div>
								</div> -->
                                <!-- Post Single - Share End -->

                            </div>
                        </div>
                        <!-- .entry end -->

                        <!-- Post Navigation
						============================================= -->
                        <!-- <div class="row justify-content-between col-mb-30 post-navigation">
							<div class="col-12 col-md-auto text-center">
								<a href="#">&lArr; This is a Standard post with a Slider Gallery</a>
							</div>

							<div class="col-12 col-md-auto text-center">
								<a href="#">This is an Embedded Audio Post &rArr;</a>
							</div>
						</div>
                        .post-navigation end

						<div class="line"></div> -->

                        <!-- Post Author Info
						============================================= -->
                        <!-- <div class="card">
							<div class="card-header"><strong>Posted by <a href="#">John Doe</a></strong></div>
							<div class="card-body">
								<div class="author-image">
									<img src="images/author/1.jpg" alt="Image" class="rounded-circle">
								</div>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores, eveniet, eligendi et nobis neque minus mollitia sit repudiandae ad repellendus recusandae blanditiis praesentium vitae ab sint earum voluptate velit beatae alias fugit accusantium laboriosam nisi reiciendis deleniti tenetur molestiae maxime id quaerat consequatur fugiat aliquam laborum nam aliquid. Consectetur, perferendis?
							</div>
						</div> -->
                        <!-- Post Single - Author End -->

                        <!-- <div class="line"></div> -->

                        <!-- Comments
						============================================= -->
                        <!-- <div id="comments" class="clearfix">

							<h3 id="comments-title"><span>3</span> Comments</h3> -->

                        <!-- Comments List
							============================================= -->
                        <!-- <ol class="commentlist clearfix">

								<li class="comment even thread-even depth-1" id="li-comment-1">

									<div id="comment-1" class="comment-wrap clearfix">

										<div class="comment-meta">

											<div class="comment-author vcard">

												<span class="comment-avatar clearfix">
												<img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60' /></span>

											</div>

										</div>

										<div class="comment-content clearfix">

											<div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

											<p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

											<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

										</div>

										<div class="clear"></div>

									</div>


									<ul class='children'>

										<li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

											<div id="comment-3" class="comment-wrap clearfix">

												<div class="comment-meta">

													<div class="comment-author vcard">

														<span class="comment-avatar clearfix">
														<img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40' /></span>

													</div>

												</div>

												<div class="comment-content clearfix">

													<div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

													<p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

													<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

												</div>

												<div class="clear"></div>

											</div>

										</li>

									</ul>

								</li>

								<li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

									<div id="comment-2" class="comment-wrap clearfix">

										<div class="comment-meta">

											<div class="comment-author vcard">

												<span class="comment-avatar clearfix">
												<img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60' /></span>

											</div>

										</div>

										<div class="comment-content clearfix">

											<div class="comment-author"><a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

											<p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

											<a class='comment-reply-link' href='#'><i class="icon-reply"></i></a>

										</div>

										<div class="clear"></div>

									</div>

								</li>

							</ol> -->
                        <!-- .commentlist end -->

                        <!-- <div class="clear"></div> -->

                        <!-- Comment Form
							============================================= -->
                        <!-- <div id="respond">

								<h3>Leave a <span>Comment</span></h3>

								<form class="row" action="#" method="post" id="commentform">
									<div class="col-md-4 form-group">
										<label for="author">Name</label>
										<input type="text" name="author" id="author" value="" size="22" tabindex="1" class="sm-form-control" />
									</div>

									<div class="col-md-4 form-group">
										<label for="email">Email</label>
										<input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
									</div>

									<div class="col-md-4 form-group">
										<label for="url">Website</label>
										<input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
									</div>

									<div class="w-100"></div>

									<div class="col-12 form-group">
										<label for="comment">Comment</label>
										<textarea name="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
									</div>

									<div class="col-12 form-group">
										<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
									</div>
								</form>

							</div> -->
                        <!-- #respond end -->

                        <!-- </div> -->
                        <!-- #comments end -->

                    </div>

                </div>
            </div>



        </section><!-- #content end -->


        @include('footer')
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