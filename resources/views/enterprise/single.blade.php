@extends('layouts.template')

@section('jquery')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".quick-view").click(function() {
            $.get("/product/quickView?product_id=" + this.id, function(data, status) {
                $("#quickView").html(data);
            });
        });

        $(".add-to-cart").click(function() {
            $.get("/inquiry?query=" + this.id, function(data, status) {
                $("#inquiryView").html(data);
            });
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
            <li class="active">{{ trans('index.brief_introduction_corporation') }}</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->


<div class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <h2>{{ $enterprise->name }}</h2>
            </div>
            <div class="col-md-12" style="margin-top:20px">

                @include('enterprise.basic')
            </div>
        </div>
    </div>
</div>
<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h4 class="title">{{ trans('index.image') }}</h4>
                </div>
            </div>
            <!-- section title -->


            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">

                    <div class="product-body">
                        @if(is_null($enterprise->icon_url))
                        <img src="" alt="">
                        @else
                        <img src="{{ Storage::disk('s3')->url($enterprise->icon_url) }}" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">

                    <div class="product-body">
                        @if(is_null($enterprise->image_1_url))
                        <img src="" alt="">
                        @else
                        <img src="{{ Storage::disk('s3')->url($enterprise->image_1_url) }}" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">

                    <div class="product-body">
                        @if(is_null($enterprise->image_2_url))
                        <img src="" alt="">
                        @else
                        <img src="{{ Storage::disk('s3')->url($enterprise->image_2_url) }}" alt="">
                        @endif
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

        </div>
        <!-- /row -->
        <div class="row">
        <div class="col-md-12">
                <div class="section-title">
                    <h4 class="title">{{ trans('product.introduction_video') }}</h4>
                </div>
            </div>
            <!-- section title -->

            <!-- Product Single -->
            <div class="col-md-12">


                @if(!is_null($enterprise->video_url))
                                <iframe style='width:60%;max-width:800px;height:400px;'
                                    src="{{ $enterprise->video_url }}">
                                    </iframe>
                                @else
                                <p>{{ trans('product.not_uploaded') }}</p>
                                @endif
            </div>
        </div>
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
            <!-- ASIDE -->
            <div id="aside" class="col-md-2">
                <!-- aside widget -->
                <div class="aside">


                    <h3 class="aside-title">Filter by:</h3>
                    <ul class="filter-list">

                    </ul>


                </div>
                <!-- /aside widget -->


                <!-- /aside widget -->
            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-10">
                <!-- store top filter -->
                <div class="store-filter clearfix">

                    <div class="pull-right">

                        <ul class="store-pages">
                            <li><span class="text-uppercase">Page:</span></li>
                            <li class="active">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
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
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    @if($product->created_at > date("Y-m-d H:i:s",strtotime('-10 day')))
                                    <div class="product-label">
                                        <span>NEW</span>
                                    </div>
                                    @endif
                                    <button class="main-btn quick-view" id="{{ $product->id }}"><a href="#PreviewModal" data-toggle="modal"><i class="fa fa-search-plus"></i>view</a></button>
                                    <img src="{!! asset($product->icon_url) !!}" alt="">
                                </div>
                                <div class="product-body">
                                    <h4 class="product-price"><a href="/product/single?product_id={{ $product->id }}">{{ $product->name }}</a> </h4>
                                    

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
                        <li><span class="text-uppercase">Page:</span></li>
                        <li class="active">1</li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#"><i class="fa fa-caret-right"></i></a></li>
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

@endsection


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
</div>
<!--/ .modal -->

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