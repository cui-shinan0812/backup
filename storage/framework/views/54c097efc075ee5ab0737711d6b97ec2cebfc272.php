<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=width,user-scalable=yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title><?php echo e(trans('index.unite_corporation'), false); ?></title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Hind:400,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="<?php echo asset('/css/product/bootstrap.min.css'); ?>" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="<?php echo asset('/css/product/slick.css'); ?>" />
    <link type="text/css" rel="stylesheet" href="<?php echo asset('/css/product/slick-theme.css'); ?>" />


    <!-- nouislider -->

    <link type="text/css" rel="stylesheet" href="<?php echo asset('/css/product/nouislider.min.css'); ?>" />
    <!-- Font Awesome Icon -->

    <link type="text/css" rel="stylesheet" href="<?php echo asset('/css/product/font-awesome.min.css'); ?>" />
    <!-- Custom stlylesheet -->

    <link type="text/css" rel="stylesheet" href="<?php echo asset('/css/product/style.css'); ?>" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <?php $__env->startSection('jquery'); ?>
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
    <?php echo $__env->yieldSection(); ?>
</head>

<body>

<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- NAVIGATION -->
<div id="navigation">
    <!-- container -->
    <div class="container">
        <div id="responsive-nav">
            <!-- category nav -->
            <div class="category-nav show-on-click">
                <span class="category-header"><?php echo e(trans('index.lookup_from_here'), false); ?> <i class="fa fa-list"></i></span>
                <ul class="category-list">
                    <li class="dropdown side-dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo e(trans('index.search_by_oem_product'), false); ?> <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            
                            <div class="row">
                                <div class="col-md-4">  
                                    <ul class="category-list2" style="margin-top:-15px;margin-left:-17px">                                      
                                        <li><a href="/product/filterByCategory?category=雑貨・アパレル"><?php echo e(trans('index.groceries_apparel'), false); ?></a></li>
                                        <li><a href="/product/filterByCategory?category=工具用品"><?php echo e(trans('index.tool'), false); ?></a></li>
                                        <li><a href="/product/filterByCategory?category=機械部品"><?php echo e(trans('index.machine'), false); ?></a></li>
                                        <li><a href="/product/filterByCategory?category=デジタル家電"><?php echo e(trans('index.digital_appliances'), false); ?></a></li>
                                        <li><a href="/product/filterByCategory?category=建築材料"><?php echo e(trans('index.construction_material'), false); ?></a></li>
                                        <li><a href="/product/filterByCategory?category=おもちゃ"><?php echo e(trans('index.toys'), false); ?></a></li>
                                        <li><a href="/product/filterByCategory?category=その他"><?php echo e(trans('index.other'), false); ?></a></li>
                                    </ul>
                                    <hr class="hidden-md hidden-lg">
                                </div>
                            </div>
                        </div>
                    </li>
                    
                    <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo e(trans('index.search_by_oem_factory'), false); ?> <i class="fa fa-angle-right"></i></a>
                        <div class="custom-menu">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="category-list2" style="margin-top:-15px;margin-left:-17px">
                                        <li><a href="/enterprise/filterByCategory?category=雑貨・アパレル"><?php echo e(trans('index.groceries_apparel'), false); ?></a></li>
                                        <li><a href="/enterprise/filterByCategory?category=工具用品"><?php echo e(trans('index.tool'), false); ?></a></li>
                                        <li><a href="/enterprise/filterByCategory?category=機械部品"><?php echo e(trans('index.machine'), false); ?></a></li>
                                        <li><a href="/enterprise/filterByCategory?category=デジタル家電"><?php echo e(trans('index.digital_appliances'), false); ?></a></li>
                                        <li><a href="/enterprise/filterByCategory?category=建築材料"><?php echo e(trans('index.construction_material'), false); ?></a></li>
                                        <li><a href="/enterprise/filterByCategory?category=おもちゃ"><?php echo e(trans('index.toys'), false); ?></a></li>
                                        <li><a href="/enterprise/filterByCategory?category=その他"><?php echo e(trans('index.other'), false); ?></a></li>
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
                <span class="menu-header"><?php echo e(trans('index.menu'), false); ?> <i class="fa fa-bars"></i></span>
                <ul class="menu-list">
                    <li><a href="/"><B><?php echo e(trans('index.home'), false); ?></B> </a></li>
                    <li><a href="/enterprise/recommend"><B><?php echo e(trans('index.recommend_enterprise'), false); ?></B> </a></li>
                    <li><a href="/product/recommend"><B><?php echo e(trans('index.recommend_product'), false); ?></B> </a></li>
                    
                    <li><a href="/events"><B><?php echo e(trans('index.exchange_event'), false); ?></B> </a></li>
                    
                    <li><a href="/japanoem"><B>JAPAN-OEM</B> </a></li>
                    <li><a href="/contact"><B><?php echo e(trans('index.inquiry'), false); ?></B> </a></li>
                </ul>
            </div>
            <!-- menu nav -->
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /NAVIGATION -->

<?php $__env->startSection('contents'); ?>

<p>
    <?php if( Session::has('locale') ): ?>
        Locale: <?php echo e(Session::get('locale'), false); ?> <br>
        Message: <?php echo e(Lang::get('test.message'), false); ?>

    <?php else: ?>
        no session locale set
    <?php endif; ?>
</p>

<?php echo $__env->yieldSection(); ?>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- jQuery Plugins -->
    <?php if(env('APP_ENV') == 'production'): ?>
    <script src="<?php echo secure_asset('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo secure_asset('js/bootstrap.min.js'); ?>"></script>
    
	<script src="<?php echo secure_asset('js/slick.min.js'); ?>"></script>
    <script src="<?php echo secure_asset('js/nouislider.min.js'); ?>"></script>
    <script src="<?php echo secure_asset('js/jquery.zoom.min.js'); ?>"></script>
    
    <script src="<?php echo secure_asset('js/main.js'); ?>"></script>
    <?php else: ?>
    <script src="<?php echo asset('js/jquery.min.js'); ?>"></script>
    <script src="<?php echo asset('js/bootstrap.min.js'); ?>"></script>
    
	<script src="<?php echo asset('js/slick.min.js'); ?>"></script>
    <script src="<?php echo asset('js/nouislider.min.js'); ?>"></script>
    <script src="<?php echo asset('js/jquery.zoom.min.js'); ?>"></script>
    
    <script src="<?php echo asset('js/main.js'); ?>"></script>
    <?php endif; ?>
</body>

<?php $__env->startSection('script'); ?>


<?php echo $__env->yieldSection(); ?>
</html><?php /**PATH /var/www/html/kusunoki/resources/views/layouts/template.blade.php ENDPATH**/ ?>