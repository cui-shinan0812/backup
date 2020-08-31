<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!--  Product Details -->
            <div class="product product-details clearfix">

                <div class="col-md-8">
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
                                    <th class="text-left">{{ trans('index.deadline') }}:</th>
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

                            <button class="primary-btn add-to-cart"><a href="/product/single?product_id={{ $product->id }}">{{ trans('product.to_product_detail') }}</a>
                            </button>
                            <div class="pull-right">
                                <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                <button class="main-btn icon-btn"><i class="fa fa-share-alt"></i></button>
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