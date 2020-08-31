@extends('layouts.template')

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">主页</a></li>
            <li><a href="/enterprise/products">企业</a></li>
            <li class="active">产品预览</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">
                <div class="col-md-6">
                    <div id="product-main-view">
                        <div class="product-view">
                            <img src="{!! asset('images/product/main-product01.jpg') !!}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{!! asset('images/product/main-product02.jpg') !!}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{!! asset('images/product/main-product03.jpg') !!}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{!! asset('images/product/main-product04.jpg') !!}" alt="">
                        </div>
                    </div>
                    <div id="product-view">
                        <div class="product-view">
                            <img src="{!! asset('images/product/thumb-product01.jpg') !!}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{!! asset('images/product/thumb-product02.jpg') !!}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{!! asset('images/product/thumb-product03.jpg') !!}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="{!! asset('images/product/thumb-product04.jpg') !!}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">
                        <div class="product-label">
                            <span>最新</span>

                        </div>
                        <h2 class="product-name">专利爆款万圣节雨刮贴纸可移除汽车后挡风玻璃雨刮贴汽车车贴装饰</h2>
                        <h3 class="product-price">$32.50 <del class="product-old-price">$45.00</del></h3>
                        <div>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>

                        </div>
                        <p><strong>在库状况:</strong> 在库</p>
                        <p><strong>品牌:</strong> 阿里巴巴</p>
                        <p>车身贴纸采用的是市面上材料为高粘度特制可移除静电膜材料，随时贴随时揭，可重复循环使用，不用担心给车上留下任何胶痕。市面上有些劣质材料，贴在车上，很难揭下来，而且太阳暴晒之后汽车玻璃全是胶痕，很难移除，对汽车玻璃伤害很大。手臂是柔性PVC,耐压耐折，单面印刷。质量有保证。可支持定做，支持OEM。

                            节日性产品，现做工艺，非质量原因，不接受退货换货

                            好消息：彩色纸卡包装已上线，适合亚马逊FBA发货，纸卡上印有产品介绍，安装说明，提升档次节省头程运费。</p>


                        <div class="product-btns">
                            <div class="qty-input">
                                <span class="text-uppercase"><strong>库存:</strong>1000 </span>

                            </div>

                        </div>
                        <div class="product-options">

                            <ul class="color-option">
                                <li><span class="text-uppercase">颜色:</span></li>
                                <li><a href="#" style="background-color:#475984;"></a></li>
                                <li><a href="#" style="background-color:#8A2454;"></a></li>
                                <li><a href="#" style="background-color:#BF6989;"></a></li>
                                <li><a href="#" style="background-color:#9A54D8;"></a></li>
                            </ul>
                        </div>


                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">详细信息</a></li>
                            <li><a data-toggle="tab" href="#tab2">公司</a></li>

                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <h4>介绍视频</h4>
                                <video src="/i/movie.ogg" controls="controls">
                                    your browser does not support the video tag
                                </video>
                                <hr>
                                <img src="{!! asset('images/product/banner01.jpg') !!}" alt="">
                                <hr>
                                <img src="{!! asset('images/product/banner01.jpg') !!}" alt="">
                                <hr>
                                <img src="{!! asset('images/product/banner01.jpg') !!}" alt="">
                                <hr>
                            </div>
                            <div id="tab2" class="tab-pane fade in">
                                <h4>介绍视频</h4>
                                <video src="/i/movie.ogg" controls="controls">
                                    your browser does not support the video tag
                                </video>

                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <!-- /Product Details -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->



@endsection