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
        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/slick.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/slick-theme.css') !!}" />
        <!-- Bootstrap -->
        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/bootstrap.min.css') !!}" />

        <!-- Slick -->
        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/slick.css') !!}" />
        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/slick-theme.css') !!}" />
        <!-- nouislider -->

        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/nouislider.min.css') !!}" />
        <!-- Font Awesome Icon -->

        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/font-awesome.min.css') !!}" />
        <!-- Custom stlylesheet -->

        <link type="text/css" rel="stylesheet" href="{!! asset('/css/product/style.css') !!}" />
            
		<script src="{!! asset('/js/openclose.js') !!}"></script>
		<script src="{!! asset('/js/fixmenu.js') !!}"></script>
		<script src="{!! asset('/js/fixmenu_pagetop.js') !!}"></script>
        <script src="{!! asset('/js/ddmenu_min.js') !!}"></script>

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <title>Unite Corpration</title>
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

   

    </head>
    <body>

        @include('layouts.header')

        @include('layouts.nav')

        <div id="contents" class="inner">
            <div id="contents-in">
                @section('mainimg')

                @show

                @section('main')

                @show
                
                <div id="sub">

                    <nav>
                        <h4>检索</h4>
                        <ul class="submenu">
                            <li><a href="/enterprise/home#main">推荐产品</a></li>
                            <li><a href="/enterprise/home#search_product_main">产品检索</a></li>
                            <li><a href="/enterprise/home#enterprise_main">推荐企业</a></li>
                            <li><a href="/enterprise/home#search_enterprise_main">企业检索</a></li>
                        </ul>
                    </nav>

                    <section>

                        <h4>新闻</h4>

                        <div class="list-sub">
                            <a href="#" target="_blank">
                            <p class="img"><img src="{!! asset('images/main/sample_yahoo.jpg') !!}" alt=""></p>
                            <h5>静岡風情</h5>
                            <p>浙江省青少年訪日代表団</p>
                            <span class="new">new</span>
                            </a>
                        </div>

                        <div class="list-sub">
                            <a href="#" target="_blank">
                            <p class="img"><img src="{!! asset('images/main/sample_amazon.jpg') !!}" alt=""></p>
                            <h5>島田風情</h5>
                            <p>上海市奉賢区青少年書画院友好交流団来静</p>
                            <span class="new">new</span>
                            </a>
                        </div>

                    </section>

                    <section>

                    <h4>近期活动</h4>

                        <div class="list-sub">
                            <a href="#">
                            <p class="img t"><img src="{!! asset('images/main/sample_side1.jpg') !!}" alt="タイトル"></p>
                            <h5>企業交流</h5>
                            <p>浙江省塗料工業協会視察団訪日</p>
                            <p class="name">2019/10/11・島田市・開催</p>
                            </a>
                        </div>



                        <div class="list-sub">
                            <a href="#">
                            <p class="img t"><img src="{!! asset('images/main/sample_side3.jpg') !!}" alt="タイトル"></p>
                            <h5>対日投資</h5>
                            <p>中国对日投资支援体制説明会</p>
                            <p class="name">2019/11/9・島田市・開催</p>
                            </a>
                        </div>

                    </section>

                </div>
            </div>

        </div>

        @include('layouts.footer')
        <!-- jQuery Plugins -->
        <script src="{!! secure_asset('js/jquery.min.js') !!}"></script>
        <script src="{!! secure_asset('js/bootstrap.min.js') !!}"></script>
        
        <script src="{!! secure_asset('js/slick.min.js') !!}"></script>
        <script src="{!! secure_asset('js/nouislider.min.js') !!}"></script>
        <script src="{!! asset('js/jquery.zoom.min.js') !!}"></script>
        
        <script src="{!! secure_asset('js/main.js') !!}"></script>
    </body>
</html>


