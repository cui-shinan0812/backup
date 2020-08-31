<?php $__env->startSection('contents'); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><?php echo e(trans('index.home'), false); ?></a></li>
            <li class="active">ニュース</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- HOME -->
<div id="home">
    <!-- container -->
    <div class="container">
        <!-- home wrap -->
        <div class="home-wrap">
            <!-- home slick -->
            <div id="home-slick">
                <!-- banner -->
                <div class="banner banner-1">
                    <img src="<?php echo asset('images/product/banner01.jpg'); ?>" alt="">

                    <hr>
                    <div>
                        <h4>日中企業交流、130個以上企業参加されている</h4>
                    </div>
                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="banner banner-1">
                    <img src="<?php echo asset('images/product/banner02.jpg'); ?>" alt="">

                </div>
                <!-- /banner -->

                <!-- banner -->
                <div class="banner banner-1">
                    <img src="<?php echo asset('images/product/banner03.jpg'); ?>" alt="">
                    <div class="banner-caption">
                        <h1 class="white-color">新活动 <span>企划中</span></h1>
                        <button class="primary-btn">参加</button>
                    </div>
                </div>
                <!-- /banner -->
            </div>
            <!-- /home slick -->
        </div>
        <!-- /home wrap -->
    </div>
    <!-- /container -->
</div>

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section-title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h2 class="title">直近イベント</h2>
                    <div class="pull-right">
                        <div class="product-slick-dots-1 custom-dots"></div>
                    </div>
                </div>
            </div>
            <!-- /section-title -->

            <!-- banner -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="banner banner-2">
                    <img src="<?php echo asset('images/product/banner14.jpg'); ?>" alt="">
                    <div class="banner-caption">
                        <h2 class="white-color">Alibaba<br>イベント</h2>
                        <button class="primary-btn">会場へ</button>
                    </div>
                </div>
            </div>
            <!-- /banner -->

            <!-- Product Slick -->
            <div class="col-md-9 col-sm-6 col-xs-6">
                <div class="row">
                    <div id="product-slick-1" class="product-slick">
                        <!-- Product Single -->
                        <div class="product product-single">
                            <div class="product-thumb">
                                <div class="product-label">
                                    <span>最新</span>

                                </div>

                                
                                <img src="<?php echo asset('images/product/product01.jpg'); ?>" alt="">
                            </div>
                            <div class="product-body">
                                <h3 class="product-price">150人申し込み中 </h3>

                                <h2 class="product-name"><a href="#">チャイナフェスティバル2019</a></h2>
                                <div class="product-btns">
                                    <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                    <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                    <button class="primary-btn add-to-cart"><i class="fa fa-shopping-cart"></i> <?php echo e(trans('index.inquiry'), false); ?></button>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->

                       

                        
                    </div>
                </div>
            </div>
            <!-- /Product Slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->





<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/event/news.blade.php ENDPATH**/ ?>