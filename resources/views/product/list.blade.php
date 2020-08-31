@extends('layouts.template')

@section('jquery')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".quick-view").click(function() {
            $.get("/product/quickView?product_id=" + this.id,function(data,status){
				$("#quickView").html(data);
			});
        });

        $(".add-to-cart").click(function() {
			$.get("/inquiry?query=" + this.id,function(data,status){
				$("#inquiryView").html(data);
			});
		});

        $(".three-d-btn").click(function() {
			$("#threeDView").html("<iframe style='width:100%;height:600px' src='https://www.ar720.cn/web3d/shoe/index.html?from=singlemessage&isappinstalled=0'></iframe>");
		});


    });
</script>

<style>

</style>

@endsection

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li class="active">{{ trans('product.product_list') }}</li>
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
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside widget -->
                <div class="aside">
                    

                <h3 class="aside-title">Filter by:</h3>
                    <ul class="filter-list">
                        <li><span class="text-uppercase">{{ trans('product.built_at') }}:</span></li>
                        <li><a href="#">上海</a></li>
                        <li><a href="#">杭州</a></li>
                        <li><a href="#">武漢</a></li>
                        <li><a href="#">寧波</a></li>
                        <li><a href="#">義烏</a></li>
                        <li><a href="#">広州</a></li>
                        <li><a href="#">深セン</a></li>
                    </ul>

                   
                </div>
                <!-- /aside widget -->

                @if(count($top_rated_products)> 0)
                <div class="aside">
                    <h3 class="aside-title">Top Rated Product</h3>
                    @foreach($top_rated_products as $top_rated_product)
                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                            <img src="{!! asset($top_rated_product->icon_url) !!}" alt="">
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#">{{ $top_rated_product->name }}</a></h2>
                            <h3 class="product-price">${{ $top_rated_product->price }}</h3>
                            <div class="product-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o empty"></i>
                            </div>
                        </div>
                    </div>
                    <!-- /widget product -->
                    @endforeach
                    
                </div>
                @endif
                <!-- /aside widget -->
            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-9">
                <!-- store top filter -->
                <div class="store-filter clearfix">
                    
                    <div class="pull-right">
                       
                        <ul class="store-pages">
                        
                        </ul>
                    </div>
                </div>
                <!-- /store top filter -->

                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                    <div class="row">
                        @foreach($products as $product)
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>{{ $product->category }}</span>

                                    </div>
                                    <button class="main-btn quick-view" id="{{ $product->id }}"><a href="#PreviewModal" data-toggle="modal"><i class="fa fa-search-plus"></i> view</a></button>
                                    <img src="{!! asset($product->icon_url) !!}" alt="">
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price"><a href="/product/single?product_id={{ $product->id }}">{{ $product->name }}</a> </h3>
                                    
                                   
                                    <div class="product-btns">
                                        @if(!is_null($product->three_d_url))
                                        <button class="primary-btn icon-btn three-d-btn"><a href="#threeDModal" data-toggle="modal"><i class="fa fa-share-alt"></i>3D</a></button>
                                        @endif
                                        <button class="main-btn add-to-cart" id="{{ $product->id }},product"><a href="#InquiryModal" data-toggle="modal"> {{ trans('index.short_inquiry') }}</a></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->
                        @endforeach

                    </div>
                    <!-- /row -->
                </div>
                <!-- /STORE -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">
                    
                    </div>
                    <div class="pull-right">
                        
                        <ul class="store-pages">
                            
                        </ul>
                    </div>
                </div>
                <!-- /store bottom filter -->
            </div>
            <!-- /MAIN -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<div id="PreviewModal" class="modal fade">
    <!-- class modal and fade -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal header -->
                <h4>{{ trans('index.unite_corporation') }}</h4>
            </div>
            <div class="modal-body" id="inquireArea">
                <!-- section -->
                <div class="section">
                    <!-- container -->
                    <div class="container" id="quickView">

                        
                    </div>
                    <!-- /container -->
                </div>
                <!-- /section -->
            </div>
            <div class="modal-footer">
				<!-- modal footer -->
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.close') }}</button>
                
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!--/ .modal -->


<div id="threeDModal" class="modal fade">
    <!-- class modal and fade -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal header -->
                <h4>3D View</h4>
            </div>
            <div class="modal-body" id="threeDView">
                
            </div>
            <div class="modal-footer">
				<!-- modal footer -->
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.close') }}</button>
                
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!--/ .modal -->

<div id="InquiryModal" class="modal fade">
    <!-- class modal and fade -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal header -->
                <h4>{{ trans('product.unite_corporation') }}</h4>
            </div>

            <div class="modal-body" id="inquireArea">
                <!-- container -->
                <div class="container" id="inquiryView">


                </div>
                <!-- /container -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.close') }}</button>
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div>
<!--/ .modal -->
@endsection