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
			var myIframe = document.createElement('iframe');
            myIframe.src = $(this).val();
            document.body.appendChild(myIframe);
            myIframe.style.width = '100%';
            myIframe.style.height = '600px';
			$("#threeDView").html(myIframe);
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
            <li class="active">{{ trans('index.product') }}</li>
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
                            <img src="../{{ $product->image_1_url }}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="../{{ $product->image_2_url }}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="../{{ $product->image_3_url }}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="../{{ $product->image_4_url }}" alt="">
                        </div>
                    </div>
                    <div id="product-view">
                        <div class="product-view">
                            <img src="../{{ $product->image_1_url }}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="../{{ $product->image_2_url }}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="../{{ $product->image_3_url }}" alt="">
                        </div>
                        <div class="product-view">
                            <img src="../{{ $product->image_4_url }}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="product-body">

                        <h2 class="product-name">{{ $product->name }}</h2>
                        <table class="shopping-cart-table table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-left">{{ trans('product.price') }}:</th>
                                    @if(is_null($product->price))                                
                                    <th class="text-left">{{ trans('index.inquiry') }}</th>
                                    @else
                                    <th class="text-left">{{ explode(",",$product->price)[0] }}{{ explode(",",$product->price)[1] }}</th>
                                    @endif         
                                </tr>
                            </thead>
                                <tbody>
                                    <tr>
                                        <th class="text-left">{{ trans('product.deadline') }}:</th>
                                        @if(is_null($product->minimum_build_days))
                                        <th class="text-left">{{ trans('index.inquiry') }}</th>
                                        @else
                                        <th class="text-left"> {{ explode(",",$product->minimum_build_days)[0] }}{{ explode(",",$product->minimum_build_days)[1]}} </th>
                                        @endif
                                    </tr>
                                    <tr>
                                        <th class="text-left">{{ trans('product.minimum_order_quantity') }}:</th>
                                        <th class="text-left">{{ $product->minimum_order_quantity }} pcs</th>
                                    </tr>
                                    <tr>
                                        <th class="text-left">{{ trans('product.built_at') }}:</th>
                                        <th class="text-left">{{ $product->build_at }}</th>
                                    </tr>
                                </tbody>
                                <hr>
                        </table>
                        
                        <div class="product-btns">
                            <div class="pull-right">
                                @if(!is_null($product->three_d_url))
                                <button class="main-btn icon-btn three-d-btn" value="{{ $product->three_d_url }}"><a href="#threeDModal" data-toggle="modal"><i class="fa fa-share-alt"></i>3D</a></button>
                                @endif
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="product-tab">
                        <ul class="tab-nav">
                            <li class="active"><a data-toggle="tab" href="#tab1">{{ trans('product.product_information') }}</a></li>
                            <li><a data-toggle="tab" href="#tab2">{{ trans('product.supplier') }}</a></li>
                            <li><a data-toggle="tab" href="#tab3">{{ trans('index.inquiry') }}</a></li>
                        </ul>
                        <div class="tab-content">
                            <div id="tab1" class="tab-pane fade in active">
                                <h4>{{ trans('product.product_detail') }}</h4>
                                
                                <p>{{ $product->comment }}</p>

                                <h4>{{ trans('product.product_introduction_video') }}</h4>
                                @if(!is_null($product->video_url))
                                <iframe style='width:60%;max-width:800px;height:400px;'
                                    src="{{ $product->video_url }}">
                                    </iframe>
                                @else
                                <p>{{ trans('product.not_uploaded') }}</p>
                                @endif

                                @if(!is_null($product->image_5_url) || !is_null($product->image_6_url) || !is_null($product->image_7_url) || !is_null($product->image_8_url) || !is_null($product->image_9_url) || !is_null($product->image_10_url) || !is_null($product->image_11_url))
                                <h4>{{ trans('product.extra_introduction')}}{{ trans('index.image') }}</h4>

                                @if(!is_null($product->image_5_url))
                                <hr>
                                <img src="../{{ $product->image_5_url }}" alt="">
                                @endif

                                @if(!is_null($product->image_6_url))
                                <hr>
                                <img src="../{{ $product->image_6_url }}" alt="">
                                @endif

                                @if(!is_null($product->image_6_url))
                                <hr>
                                <img src="../{{ $product->image_6_url }}" alt="">
                                @endif

                                @if(!is_null($product->image_7_url))
                                <hr>
                                <img src="../{{ $product->image_7_url }}" alt="">
                                @endif

                                @if(!is_null($product->image_8_url))
                                <hr>
                                <img src="../{{ $product->image_8_url }}" alt="">
                                @endif

                                @if(!is_null($product->image_9_url))
                                <hr>
                                <img src="../{{ $product->image_9_url }}" alt="">
                                @endif

                                @if(!is_null($product->image_10_url))
                                <hr>
                                <img src="../{{ $product->image_10_url }}" alt="">
                                @endif
                                @endif
                                
                            </div>
                            <div id="tab2" class="tab-pane fade in">

                                @include('enterprise.basic')

                            </div>
                            <div id="tab3" class="tab-pane fade in">

                                <div class="row">
                                    
                                    <div class="col-md-6">
                                        @auth
                                        @include('common.inquiry')
                                        @else
                                        <h5 class="text-uppercase">{{ trans('product.inquiry_after_login') }}</h5>
                                        @include('common.login')
                                        @endauth
                                    </div>
                                </div>
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

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="title">{{ trans('index.recommended') }}</h4>
                </div>
            </div>
            <!-- section title -->

            @foreach($recommend_products as $recommend_product)
            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">
                    <div class="product-thumb">
                        <button class="main-btn quick-view" id="{{ $recommend_product->id }}"><a href="#PreviewModal" data-toggle="modal"><i class="fa fa-search-plus"></i> view</a></button>
                        <img src="{!! asset($recommend_product->icon_url) !!}" alt="">
                    </div>
                    <div class="product-body">
                        
                        <h2 class="product-name"><a href="/product/single?product_id={{ $recommend_product->id }}"> {{ $recommend_product->name}}</a></h2>
                        <div class="product-btns">
                            @if(!is_null($recommend_product->three_d_url))
							<button class="primary-btn three-d-btn"><a href="#threeDModal" data-toggle="modal">&nbsp&nbsp<i class="fa fa-share-alt"></i>&nbsp3D</a>&nbsp&nbsp</button>
							@endif
                            <button class="main-btn add-to-cart" id="{{ $recommend_product->id }},product"><a href="#InquiryModal" data-toggle="modal">{{ trans('index.short_inquiry') }}</a></button>
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
    <!-- /container -->
</div>
<!-- /section -->

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
                <h4>{{ trans('index.unite_corporation') }}</h4>
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


@endsection