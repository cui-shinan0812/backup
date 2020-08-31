@extends('layouts.template')

@section('jquery')

@endsection

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li class="active">{{ trans('index.recommend_enterprise')}}</li>
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
            <div id="aside" class="col-md-2">
                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Filter by:</h3>
                    <ul class="filter-list">

                    </ul>

                </div>
                <!-- /aside widget -->


            </div>
            <!-- /ASIDE -->

            <!-- MAIN -->
            <div id="main" class="col-md-10">
                 <div class="section-title">
                        <h3 id="enterprise_name" class="title">{{ trans('enterprise.recommend_enterprise_view') }}</h3>
                    </div>
                <!-- store top filter -->
                <div class="store-filter clearfix">

                    <div class="pull-right">

                        <ul class="store-pages">
                            <li>{{ $enterprises->links() }}</li>
                            
                        </ul>
                    </div>
                </div>
                <!-- /store top filter -->

                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                   

                    <div class="row">

                        <table class="shopping-cart-table table">
                            <thead>
                                <tr>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sets as $set)
                                <tr>

                                    <td class="details">
                                        <a href="/enterprise/single?enterprise_id={{ $set['enterprise']->id }}">
                                            <h3>{{ $set['enterprise']->name }}</h3>
                                        </a>
                                        <ul>
                                            <li><span>
                                                    <h5>業界：{{ $set['enterprise']->category }}</h5>
                                                </span></li>
                                            <li><span>
                                                    <h5>国家/地区：{{ $set['enterprise']->country }}・{{ $set['enterprise']->city }}</h5>
                                                </span></li>
                                           
                                            <li><span><button class="primary-btn" id="{{ $set['enterprise']->id }},enterprise"><a href="#InquiryModal" data-toggle="modal"> {{ trans('index.short_inquiry') }}</a></button><a href="/enterprise/single?enterprise_id={{ $set['enterprise']->id }}#store "> 製品一覧へ</a></span></li>

                                        </ul>
                                    </td>

                                    @foreach($set['products'] as $product)
                                    <td>
                                        <ul>
                                            <li><img style="height:150px;width:120px" src="{!! asset($product->icon_url) !!}" alt=""></li>
                                            <li>{{ $product->name }}</li>
                                        </ul>
                                    </td>
                                    @endforeach

                                </tr>
                                @endforeach
                            </tbody>
                        </table>



                    </div>

                    <!-- /row -->
                </div>
                <!-- /STORE -->

                <!-- store bottom filter -->
                <div class="store-filter clearfix">

                    <div class="pull-right">

                        <ul class="store-pages">
                            <li>{{ $enterprises->links() }}</li>
                            
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
                                            <h5 class="title">{{ trans('index.short_inquiry') }}</h5>
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="title" placeholder="タイトル">
                                        </div>

                                        <div class="form-group">
                                            <textarea class="input" placeholder="内容" cols=27></textarea>
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