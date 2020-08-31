<?php $__env->startSection('jquery'); ?>
<script>
    var msg = '<?php echo e(Session::get('alert'), false); ?>';
    var exist = '<?php echo e(Session::has('alert'), false); ?>';
    if(exist){
      alert(msg);
    }
  </script>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><?php echo e(trans('index.home'), false); ?></a></li>
            <li><a href="/home"><?php echo e(trans('index.account'), false); ?></a></li>
            <li><a href="/home"><?php echo e(trans('index.enterprise'), false); ?></a></li>
            <li class="active"><?php echo e(trans('enterprise.product_list'), false); ?></li>
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
                            <h4 class="title"><?php echo e(trans('enterprise.product_list'), false); ?><button class="primary-btn"><a style="color:white;font-size:10px" href="/product/new?enterprise_id=<?php echo e($enterprise_id, false); ?>"><?php echo e(trans('index.add_extra'), false); ?></a></button></h4>
                            
                        </div>
                        <table class="shopping-cart-table table">
                            <thead>
                                <tr>
                                    <th><?php echo e(trans('enterprise.product_name'), false); ?></th>
                                    <th></th>
                                    <th class="text-center"><?php echo e(trans('enterprise.reference_price'), false); ?></th>
                                    <th class="text-center"><?php echo e(trans('product.deadline'), false); ?></th>
                                    <th class="text-center"><?php echo e(trans('product.minimum_order_quantity'), false); ?></th>
                                    <th class="text-center"><?php echo e(trans('product.built_at'), false); ?></th>
                                    <th class="text-center"><?php echo e(trans('enterprise.operation'), false); ?></th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <?php if(!is_null($product->icon_url)): ?>
                                    <td class="thumb"><img src="../<?php echo e($product->icon_url, false); ?>" alt=""></td>
                                    <?php else: ?>
                                    <td class="thumb"></td>
                                    <?php endif; ?>
                                    <td class="details">
                                        <a href="#"><?php echo e($product->name, false); ?></a>
                                        <ul>
                                            <li><span></span></li>
                                            <li><span><?php echo e($product->category, false); ?></span></li>
                                        </ul>
                                    </td>
                                    <?php if(!is_null($product->price)): ?>
                                    <td class="price text-center"><?php echo e(explode(",",$product->price)[0], false); ?><?php echo e(explode(",",$product->price)[1], false); ?><br></td>
                                    <?php else: ?>
                                    <td class="price text-center">お<?php echo e(trans('index.inquiry'), false); ?><br></td>
                                    <?php endif; ?>
                                    <?php if(!is_null($product->minimum_build_days)): ?>
                                    <td class="price text-center"><?php echo e(explode(",",$product->minimum_build_days)[0], false); ?><?php echo e(explode(",",$product->minimum_build_days)[1], false); ?><br></td>
                                    <?php else: ?>
                                    <td class="price text-center">お<?php echo e(trans('index.inquiry'), false); ?><br></td>
                                    <?php endif; ?>
                                    <td class="total text-center"><?php echo e($product->minimum_order_quantity, false); ?>pcs</td>
                                    <td class="total text-center"><?php echo e($product->build_at, false); ?></td>
                                    <td class="text-center"><button class="main-btn icon-btn"><a href="/product/single?product_id=<?php echo e($product->id, false); ?>"><?php echo e(trans('index.view'), false); ?></a></button><button class="main-btn icon-btn"><a href="/product/view?product_id=<?php echo e($product->id, false); ?>"><?php echo e(trans('index.update'), false); ?></a></button><button class="main-btn icon-btn"><a href="/product/delete?product_id=<?php echo e($product->id, false); ?>"><?php echo e(trans('index.delete'), false); ?></a></button></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/products.blade.php ENDPATH**/ ?>