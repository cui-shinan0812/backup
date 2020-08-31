@extends('layouts.template')

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li class="active">{{ trans('enterprise.enterprise_list') }}</li>
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
                        <li><span class="text-uppercase">{{ trans('enterprise.built_at') }}:</span></li>
                        @foreach($cities as $city)
                        <li><a href="{{ $city }}">{{ $city }}</a></li>
                        @endforeach

                    </ul>

                </div>
                <!-- /aside widget -->



                <!-- aside widget 
					<div class="aside">
						<h3 class="aside-title">Filter By Color:</h3>
						<ul class="color-option">
							<li><a href="#" style="background-color:#475984;"></a></li>
							<li><a href="#" style="background-color:#8A2454;"></a></li>
							<li class="active"><a href="#" style="background-color:#BF6989;"></a></li>
							<li><a href="#" style="background-color:#9A54D8;"></a></li>
							<li><a href="#" style="background-color:#675F52;"></a></li>
							<li><a href="#" style="background-color:#050505;"></a></li>
							<li><a href="#" style="background-color:#D5B47B;"></a></li>
						</ul>
					</div>
					 /aside widget -->

            


                @if(count($top_rated_enterprises) > 0)
                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Top Rated Enterprise</h3>
                    @foreach($top_rated_enterprises as $top_rated_enterprise)
                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                        @if(!is_null($top_rated_enterprise->icon_url))
                                    <img id="icon" src="../{{ $enterprise->icon_url }}" alt="">
                                    @else
                                    <img id="icon"  alt="">
                                    @endif
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#">{{ $top_rated_enterprise->name }}</a></h2>
                            <h3 class="product-price">${{ $top_rated_enterprise->location }}</h3>
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
                        @foreach($enterprises as $enterprise)
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span>{{ $enterprise->location }}</span>

                                    </div>
                                    
                                    @if(!is_null($enterprise->icon_url))
                                    <img id="icon" src="../{{ $enterprise->icon_url }}" alt="">
                                    @else
                                    <img id="icon"  alt="">
                                    @endif
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price">{{ $enterprise->category }} </h3>
       
                                    <h2 class="product-name"><a href="/enterprise/single?enterprise_id={{ $enterprise->id }}">{{ $enterprise->name }}</a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"> <a href="#InquireModal" data-toggle="modal">{{ trans('index.short_inquiry') }}</a> </button>

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

<div id="InquireModal" class="modal fade">
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
                    <div class="container">
                        <!-- row -->
                        <div class="row">
                            <form id="checkout-form" class="clearfix">
                                <div class="col-md-6">
                                    <div class="billing-details">

                                        <div class="section-title">
                                            <h5 class="title">お{{ trans('index.inquiry') }}</h5>
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="title" placeholder="{{ trans('index.title') }}">
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea class="input" placeholder="{{ trans('index.content') }}" cols=27 ></textarea>
                                        </div>
                                        


                                    </div>
                                </div>


                            </form>
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /container -->
                </div>
                <!-- /section -->
            </div>
            <div class="modal-footer">
                <!-- modal footer -->
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="editAPI()">{{ trans('index.send') }}</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.cancel') }}</button>
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!-- / .modal -->
@endsection