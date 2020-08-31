@extends('layouts.template')

@section('jquery')
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>

@endsection

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li><a href="/home">{{ trans('index.account') }}</a></li>
            <li><a href="/home">{{ trans('index.enterprise') }}</a></li>
            <li class="active">{{ trans('enterprise.product_list') }}</li>
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
            <form id="checkout-form" class="clearfix">
            <div class="col-md-12">
                    <div class="order-summary clearfix">
                        <div class="section-title">
                            <h4 class="title">{{ trans('enterprise.product_list') }}<button class="primary-btn"><a style="color:white;font-size:10px" href="/product/new?enterprise_id={{ $enterprise_id }}">{{ trans('index.add_extra') }}</a></button></h4>
                            
                        </div>
                        <table class="shopping-cart-table table">
                            <thead>
                                <tr>
                                    <th>{{  trans('enterprise.product_name')}}</th>
                                    <th></th>
                                    <th class="text-center">{{  trans('enterprise.reference_price')}}</th>
                                    <th class="text-center">{{  trans('product.deadline') }}</th>
                                    <th class="text-center">{{  trans('product.minimum_order_quantity') }}</th>
                                    <th class="text-center">{{  trans('product.built_at') }}</th>
                                    <th class="text-center">{{  trans('enterprise.operation') }}</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                <tr>
                                    @if(!is_null($product->icon_url))
                                    <td class="thumb"><img src="../{{  $product->icon_url  }}" alt=""></td>
                                    @else
                                    <td class="thumb"></td>
                                    @endif
                                    <td class="details">
                                        <a href="#">{{ $product->name }}</a>
                                        <ul>
                                            <li><span></span></li>
                                            <li><span>{{ $product->category }}</span></li>
                                        </ul>
                                    </td>
                                    @if(!is_null($product->price))
                                    <td class="price text-center">{{ explode(",",$product->price)[0] }}{{ explode(",",$product->price)[1] }}<br></td>
                                    @else
                                    <td class="price text-center">お{{ trans('index.inquiry') }}<br></td>
                                    @endif
                                    @if(!is_null($product->minimum_build_days))
                                    <td class="price text-center">{{ explode(",",$product->minimum_build_days)[0] }}{{ explode(",",$product->minimum_build_days)[1]}}<br></td>
                                    @else
                                    <td class="price text-center">お{{ trans('index.inquiry') }}<br></td>
                                    @endif
                                    <td class="total text-center">{{ $product->minimum_order_quantity }}pcs</td>
                                    <td class="total text-center">{{ $product->build_at }}</td>
                                    <td class="text-center"><button class="main-btn icon-btn"><a href="/product/single?product_id={{ $product->id }}">{{ trans('index.view') }}</a></button><button class="main-btn icon-btn"><a href="/product/view?product_id={{ $product->id }}">{{ trans('index.update') }}</a></button><button class="main-btn icon-btn"><a href="/product/delete?product_id={{ $product->id }}">{{ trans('index.delete') }}</a></button></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>

                </div>

            </form>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


@endsection