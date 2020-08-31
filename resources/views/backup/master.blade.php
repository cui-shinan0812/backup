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

        @section('content')

        @show

        @include('layouts.footer')
         <!-- jQuery Plugins -->
        <script src="{!! asset('js/jquery.min.js') !!}"></script>
        <script src="{!! asset('js/bootstrap.min.js') !!}"></script>       
        <script src="{!! asset('js/slick.min.js') !!}"></script>
        <script src="{!! asset('js/nouislider.min.js') !!}"></script>
        <script src="{!! asset('js/jquery.zoom.min.js') !!}"></script> 
        <script src="{!! asset('js/main.js') !!}"></script>

    </body>
    @section('script')

    @show
</html>
