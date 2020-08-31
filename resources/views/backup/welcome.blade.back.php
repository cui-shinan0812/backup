<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="ここにサイト説明を入れます">
		<meta name="keywords" content="キーワード１,キーワード２,キーワード３,キーワード４,キーワード５">

        <link rel="stylesheet" href="{!! asset('/css/default.css') !!}">
		<link rel="stylesheet" href="{!! asset('/css/style.css') !!}">
		<script src="{!! asset('/js/openclose.js') !!}"></script>
		<script src="{!! asset('/js/fixmenu.js') !!}"></script>
		<script src="{!! asset('/js/fixmenu_pagetop.js') !!}"></script>
		<script src="{!! asset('/js/ddmenu_min.js') !!}"></script>
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        
        </style>
    </head>
    <body>

        <header>
            
            <div class="inner">
                <h1 id="logo"><a href="index.html"><img src="images/logo.png" alt="ポータルサイト"></a></h1>
                @if (Route::has('login'))
                        @auth
                            <p class="login"><a href="login.html">{{ trans('index.home') }}</a></p>
                        @else
                            <p class="login"><a href="{{ route('login') }}">ログイン</a></p>

                            @if (Route::has('register'))
                                <p class="login"><a href="{{ route('register') }}">{{ __('Register') }}</a></p>
                            @endif
                        @endauth
                @endif
                
                
            </div>
        </header>

        <!--PC用（901px以上端末）メニュー-->
        <nav id="menubar" class="nav-fix-pos">
            <ul class="inner">
                <li><a href="index.html">平台介绍<span>Home</span></a></li>
                <li><a href="info.html">企业分类<span>Enterprise</span></a>
                    <ul class="ddmenu">
                        <li><a href="list_foods.html">建設業</a></li>
                        <li><a href="list_job.html">製造業</a></li>
                        <li><a href="list_clinic.html">電気・ガス業</a></li>
                        <li><a href="list_school.html">商業</a></li>
                        <li class="title"><a href="#">金融・保険業</a></li>
                        <li><a href="list_fudosan.html">不動産業</a></li>
                        <li><a href="list_fudosan_chintai.html">サービス業</a></li>
                    </ul>
                </li>
                <li><a href="list_base.html">交流活动<span>Event</span></a>
                    
                </li>
                <li><a href="info.html">新闻<span>News</span></a></li>
                <li><a href="faq.html">联系方式<span>Contact</span></a></li>

            </ul>
        </nav>
        <!--小さな端末用（900px以下端末）メニュー-->
        <nav id="menubar-s">
            <ul>
                <li><a href="index.html">平台介绍<span>Home</span></a></li>
                <li><a href="info.html">企业分类<span>Enterprise</span></a></li>
                <li><a href="list_base.html">交流活动<span>Event</span></a>
                <li><a href="info.html">新闻<span>News</span></a></li>
                <li><a href="faq.html">联系方式<span>Contact</span></a></li>
            </ul>
        </nav>

        <div id="contents" class="inner">

            <div id="contents-in">

                <aside id="mainimg">
                    <a href="#"><img src="images/mainimg_01.jpg" alt="行业分类1" id="img1"></a>
                    <a href="#"><img src="images/mainimg_02.jpg" alt="行业分类2" id="img2"></a>
                    <a href="#"><img src="images/mainimg_03.jpg" alt="行业分类3" id="img3"></a>
                    <a href="#"><img src="images/mainimg_04.jpg" alt="行业分类4" id="img4"></a>
                    <a href="#"><img src="images/mainimg_05.jpg" alt="行业分类5" id="img5"></a>
                </aside>

                <div id="main">

                    <h2>会社概要 About Us　</h2>
                    <p>
                        &nbsp;&nbsp;日中交流センターは日本の静岡県で一般社団法人として発足した。メンバーが主に長年にわたり中日両国の民間友好事業に力を尽くしてきた方々やこれから日中間の友好の懸け橋を目指す有志者たちで構成されている。
                        <br>
                        &nbsp;&nbsp;日本一高い富士山、日本一深い駿河湾を持つふじのくに静岡県は、温暖な気候や豊な水資源、変化に富む地形に恵まれ、観光業、農林水産業が盛んでいるだけではなく、「ものづくり県」とも呼ばれ、東日本と西日本のほぼ真ん中に位置する静岡県は名古屋と東京をつなぐ東名、新東名高速道路、富士山静岡空港、清水港、御前崎港など交通の利便性が良いため、日本を代表する多くの企業が静岡に集まっている。
                        <br>
                        &nbsp;&nbsp;この魅力が多い静岡を拠点にし、日中両国の文化交流と経済交流を促進することを目的とし、その目的に資するため、次の事業を行う。
                        <br>
                        （１） 中国からの訪日視察・交流・体験・調査・研修などの受入事業。
                        <br>
                        （２） 地方創生と来日外国人を対象とした市場の活性化に貢献する事業。
                        <br>
                        （３） 日中間の文化・経済交流促進のための調査分析・提案事業。
                        <br>
                        （４） 日中間の海外事業支援に関するコンサルタント事業。
                        <br>
                        （５） 翻訳・通訳サービス事業。
                        <br>
                        （６） 旅行サービス手配業。
                        <br>
                        （７） 上記事業に関連する範囲における公共団体等から受託する事業。
                        <br>
                        （８） 前各号に附帯又は関連する事業。
                        <br>
                        &nbsp;&nbsp;政府、企業、教育交流など様々なテーマとしたイベントを通じて日中両国民の相互理解を深めることに努めている。

                    </p>

                    <section id="new">
                        <h2>近期活动内容</h2>
                        <dl>
                            <dt>2019/03/18</dt>
                            <dd>企業交流イベントの追加<span class="newicon">NEW</span></dd>
                            <dt>2019/01/11</dt>
                            <dd>プロダクトの登録のページ改善されました</dd>

                        </dl>
                        <p class="r">&raquo;&nbsp;<a href="#">過去ログ</a></p>
                    </section>


                    <section>

                        <h2>新着 求人情報</h2>

                        <div class="list">
                            <h4><a href="item.html">プロジェクトマネージャー</a></h4>
                            <p>
                                １、静岡県在住
                                <br>
                                ２、日中交流事業に関心がある方
                                <br>
                                ３、通訳・翻訳（日本語、中国語）経験のある方
                                <br>
                                ４、インバウンド、日中交流事業の企画・手配経験のある方
                                <br>
                            </p>
                            <p class="name"><a href="item.html">More..</a></p>
                        </div>

                    </section>
                </div>
            
            <!--/#main-->

                <div id="sub">

                    <nav>
                        <h2>检索</h2>
                        <ul class="submenu">
                            <li><a href="list_foods.html">产品</a></li>
                            <li><a href="list_job.html">企业</a></li>

                        </ul>
                    </nav>

                    

                    <section>

                        <h2>新闻</h2>

                        <div class="list-sub">
                            <a href="#" target="_blank">
                            <p class="img"><img src="images/sample_yahoo.jpg" alt=""></p>
                            <h4>静岡風情</h4>
                            <p>浙江省青少年訪日代表団</p>
                            <span class="new">new</span>
                            </a>
                        </div>

                        <div class="list-sub">
                            <a href="#" target="_blank">
                            <p class="img"><img src="images/sample_amazon.jpg" alt=""></p>
                            <h4>島田風情</h4>
                            <p>上海市奉賢区青少年書画院友好交流団来静</p>
                            <span class="new">new</span>
                            </a>
                        </div>

                    </section>

                    <section>

                    <h2>近期活动</h2>

                        <div class="list-sub">
                            <a href="#">
                            <p class="img t"><img src="images/sample_side1.jpg" alt="タイトル"></p>
                            <h4>企業交流</h4>
                            <p>浙江省塗料工業協会視察団訪日</p>
                            <p class="name">2019/10/11・島田市・開催</p>
                            </a>
                        </div>

                        <div class="list-sub">
                            <a href="#">
                            <p class="img t"><img src="images/sample_side2.png" alt="タイトル"></p>
                            <h4>企業交流</h4>
                            <p>こ中日共創（MIJBC）交流団杭州・上海訪問</p>
                            <p class="name">2019/11/9・島田市・開催</p>
                            </a>
                        </div>

                        <div class="list-sub">
                            <a href="#">
                            <p class="img t"><img src="images/sample_side3.jpg" alt="タイトル"></p>
                            <h4>対日投資</h4>
                            <p>中国对日投资支援体制説明会</p>
                            <p class="name">2019/11/9・島田市・開催</p>
                            </a>
                        </div>

                    

                    </section>

                    <div class="box1">
                        <h2 class="mb10">運営会社</h2>
                        <p>東京都新宿区XXXXビル３F<br>
                        TEL：03-8032-0201<br>
                        受付：10:00〜19:00<br>
                        定休日：水曜日</p>
                    </div>
                </div>
                <!--/#sub-->
            </div>
	
        </div>


        <footer>

            <div id="footermenu" class="inner">
                <ul>
                    <li class="title">检索</li>
                    <li><a href="index.html">产品</a></li>
                    <li><a href="info.html">企业</a></li>
                </ul>
                <ul>
                    <li class="title">情報一覧</li>
                    <li><a href="list_foods.html">広告関連記事</a></li>
                    <li><a href="list_job.html">技術情報</a></li>
                    <li><a href="list_clinic.html">情報セキュリティーについて</a></li>
                    <li><a href="list_school.html">免責事項</a></li>
                </ul>
                <ul>
                    <li class="title">会社概要</li>
                    <li><a href="list_fudosan.html">会社概要</a></li>
                    <li><a href="list_fudosan.html">採用情報</a></li>
                    <li><a href="list_fudosan_chintai.html">個人情報の取り扱いについて</a></li>
                </ul>
                <ul>
                    <li class="title">ヘルプ</li>
                    <li><a href="faq.html">サイトポリシー</a></li>
                    <li><a href="faq.html">よく頂く質問</a></li>
                    <li><a href="contact.html">お{{ trans('index.inquiry') }}</a></li>

                </ul>

            </div>
            <!--/footermenu-->

            <div id="copyright">
                <small>Copyright&copy; <a href="index.html">{{ trans('index.unite_corporation') }}</a> All Rights Reserved.</small>
                <span class="pr"><a href="https://template-party.com/" target="_blank">Web Design: Kusunoki株式会社</a></span>
            </div>

        </footer>

        <!--ページの上部に戻る「↑」ボタン-->
        <p class="nav-fix-pos-pagetop"><a href="#">↑</a></p>

        <!--メニュー開閉ボタン-->
        <div id="menubar_hdr" class="close"></div>
        <!--メニューの開閉処理条件設定　900px以下-->
            <script>
                if (OCwindowWidth() <= 900) {
                    open_close("menubar_hdr", "menubar-s");
                }
            </script>

       
    </body>
</html>
