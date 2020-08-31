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
                        <h2 class="product-name"><?php echo e($product->name, false); ?></h2>
                        <table class="shopping-cart-table table table-borderless">
                            <thead>
                                <tr>
                                    <th class="text-left"><?php echo e(trans('product.price'), false); ?>:</th>
                                    <?php if(is_null($product->price)): ?>
                                    <th class="text-left"><?php echo e(trans('index.inquiry'), false); ?></th>
                                    <?php else: ?>
                                    <th class="text-left"><?php echo e(explode(",",$product->price)[0], false); ?><?php echo e(explode(",",$product->price)[1], false); ?></th>
                                    <?php endif; ?>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="text-left"><?php echo e(trans('index.deadline'), false); ?>:</th>
                                    <?php if(is_null($product->minimum_build_days)): ?>
                                    <th class="text-left"><?php echo e(trans('index.inquiry'), false); ?></th>
                                    <?php else: ?>
                                    <th class="text-left"> <?php echo e(explode(",",$product->minimum_build_days)[0], false); ?><?php echo e(explode(",",$product->minimum_build_days)[1], false); ?> </th>
                                    <?php endif; ?>
                                </tr>
                                <tr>
                                    <th class="text-left"><?php echo e(trans('product.minimum_order_quantity'), false); ?>:</th>
                                    <th class="text-left"><?php echo e($product->minimum_order_quantity, false); ?> pcs</th>
                                </tr>
                                <tr>
                                    <th class="text-left"><?php echo e(trans('product.built_at'), false); ?>:</th>
                                    <th class="text-left"><?php echo e($product->build_at, false); ?></th>
                                </tr>
                            </tbody>
                            <hr>
                        </table>
                        <div class="product-btns">

                            <button class="primary-btn add-to-cart"><a href="/product/single?product_id=<?php echo e($product->id, false); ?>"><?php echo e(trans('product.to_product_detail'), false); ?></a>
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
<!-- /section --><?php /**PATH /var/www/html/kusunoki/resources/views/product/preview.blade.php ENDPATH**/ ?>