<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=width,user-scalable=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>{{ trans('index.unite_corporation') }}</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

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
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    @section('jquery')
    <script data-ad-client="ca-pub-9144441852343989" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    
    <script type="text/javascript">
    $(document).ready(function() {
        $("#registerEmailButton").click(function() {
            alert('hello');
        });

    });
    </script>

    <style>

    </style>
    @show
</head>

<body>

@include('layouts.header')

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header">{{ trans('index.lookup_from_here') }} <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ trans('index.search_by_oem_product') }} <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            
                            <div class="row">
                                <div class="col-md-4">  
                                    <ul class="category-list2" style="margin-top:-15px;margin-left:-17px">                                      
                                        <li><a href="/product/filterByCategory?category=雑貨・アパレル">{{ trans('index.groceries_apparel') }}</a></li>
                                        <li><a href="/product/filterByCategory?category=工具用品">{{ trans('index.tool') }}</a></li>
                                        <li><a href="/product/filterByCategory?category=機械部品">{{ trans('index.machine') }}</a></li>
                                        <li><a href="/product/filterByCategory?category=デジタル家電">{{ trans('index.digital_appliances') }}</a></li>
                                        <li><a href="/product/filterByCategory?category=建築材料">{{ trans('index.construction_material') }}</a></li>
                                        <li><a href="/product/filterByCategory?category=おもちゃ">{{ trans('index.toys') }}</a></li>
                                        <li><a href="/product/filterByCategory?category=その他">{{ trans('index.other') }}</a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ trans('index.search_by_oem_factory') }} <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="category-list2" style="margin-top:-15px;margin-left:-17px">
                                        <li><a href="/enterprise/filterByCategory?category=雑貨・アパレル">{{ trans('index.groceries_apparel') }}</a></li>
                                        <li><a href="/enterprise/filterByCategory?category=工具用品">{{ trans('index.tool') }}</a></li>
                                        <li><a href="/enterprise/filterByCategory?category=機械部品">{{ trans('index.machine') }}</a></li>
                                        <li><a href="/enterprise/filterByCategory?category=デジタル家電">{{ trans('index.digital_appliances') }}</a></li>
                                        <li><a href="/enterprise/filterByCategory?category=建築材料">{{ trans('index.construction_material') }}</a></li>
                                        <li><a href="/enterprise/filterByCategory?category=おもちゃ">{{ trans('index.toys') }}</a></li>
                                        <li><a href="/enterprise/filterByCategory?category=その他">{{ trans('index.other') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!--<li><a href="#">Men’s Clothing</a></li> -->
                </ul>
            </div>
            <!-- /category nav -->

            <!-- menu nav -->
            <div class="menu-nav">
                <span class="menu-header">{{ trans('index.menu') }} <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="/"><B>{{ trans('index.home') }}</B> </a></li>
                    <li><a href="/enterprise/recommend"><B>{{ trans('index.recommend_enterprise') }}</B> </a></li>
                    <li><a href="/product/recommend"><B>{{ trans('index.recommend_product') }}</B> </a></li>
                    
                    <li><a href="/events"><B>{{ trans('index.exchange_event') }}</B> </a></li>
                    
                    <li><a href="/japanoem"><B>JAPAN-OEM</B> </a></li>
                    <li><a href="/contact"><B>{{ trans('index.inquiry') }}</B> </a></li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->

@section('contents')

<p>
    @if( Session::has('locale') )
        Locale: {{ Session::get('locale') }} <br>
        Message: {{ Lang::get('test.message') }}
    @else
        no session locale set
    @endif
</p>

@show

@include('layouts.footer')

    <!-- jQuery Plugins -->
    @if(env('APP_ENV') == 'production')
    <script src="{!! secure_asset('js/jquery.min.js') !!}"></script>
    <script src="{!! secure_asset('js/bootstrap.min.js') !!}"></script>
    
	<script src="{!! secure_asset('js/slick.min.js') !!}"></script>
    <script src="{!! secure_asset('js/nouislider.min.js') !!}"></script>
    <script src="{!! secure_asset('js/jquery.zoom.min.js') !!}"></script>
    
    <script src="{!! secure_asset('js/main.js') !!}"></script>
    @else
    <script src="{!! asset('js/jquery.min.js') !!}"></script>
    <script src="{!! asset('js/bootstrap.min.js') !!}"></script>
    
	<script src="{!! asset('js/slick.min.js') !!}"></script>
    <script src="{!! asset('js/nouislider.min.js') !!}"></script>
    <script src="{!! asset('js/jquery.zoom.min.js') !!}"></script>
    
    <script src="{!! asset('js/main.js') !!}"></script>
    @endif
</body>

@section('script')


@show
</html>