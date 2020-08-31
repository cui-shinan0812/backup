<?php $__env->startSection('contents'); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><?php echo e(trans('index.home'), false); ?></a></li>
            <li class="active"><?php echo e(trans('enterprise.enterprise_list'), false); ?></li>
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
                        <li><span class="text-uppercase"><?php echo e(trans('enterprise.built_at'), false); ?>:</span></li>
                        <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($city, false); ?>"><?php echo e($city, false); ?></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

            


                <?php if(count($top_rated_enterprises) > 0): ?>
                <!-- aside widget -->
                <div class="aside">
                    <h3 class="aside-title">Top Rated Enterprise</h3>
                    <?php $__currentLoopData = $top_rated_enterprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $top_rated_enterprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- widget product -->
                    <div class="product product-widget">
                        <div class="product-thumb">
                        <?php if(!is_null($top_rated_enterprise->icon_url)): ?>
                                    <img id="icon" src="../<?php echo e($enterprise->icon_url, false); ?>" alt="">
                                    <?php else: ?>
                                    <img id="icon"  alt="">
                                    <?php endif; ?>
                        </div>
                        <div class="product-body">
                            <h2 class="product-name"><a href="#"><?php echo e($top_rated_enterprise->name, false); ?></a></h2>
                            <h3 class="product-price">$<?php echo e($top_rated_enterprise->location, false); ?></h3>
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
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                </div>
                <?php endif; ?>
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
                        <?php $__currentLoopData = $enterprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enterprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Product Single -->
                        <div class="col-md-4 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <div class="product-label">
                                        <span><?php echo e($enterprise->location, false); ?></span>

                                    </div>
                                    
                                    <?php if(!is_null($enterprise->icon_url)): ?>
                                    <img id="icon" src="../<?php echo e($enterprise->icon_url, false); ?>" alt="">
                                    <?php else: ?>
                                    <img id="icon"  alt="">
                                    <?php endif; ?>
                                </div>
                                <div class="product-body">
                                    <h3 class="product-price"><?php echo e($enterprise->category, false); ?> </h3>
       
                                    <h2 class="product-name"><a href="/enterprise/single?enterprise_id=<?php echo e($enterprise->id, false); ?>"><?php echo e($enterprise->name, false); ?></a></h2>
                                    <div class="product-btns">
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-exchange"></i></button>
                                        <button class="primary-btn add-to-cart"> <a href="#InquireModal" data-toggle="modal"><?php echo e(trans('index.short_inquiry'), false); ?></a> </button>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /Product Single -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                <h4><?php echo e(trans('index.unite_corporation'), false); ?></h4>
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
                                            <h5 class="title">お<?php echo e(trans('index.inquiry'), false); ?></h5>
                                        </div>
                                        <div class="form-group">
                                            <input class="input" type="text" name="title" placeholder="<?php echo e(trans('index.title'), false); ?>">
                                        </div>
                                        
                                        <div class="form-group">
                                            <textarea class="input" placeholder="<?php echo e(trans('index.content'), false); ?>" cols=27 ></textarea>
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
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="editAPI()"><?php echo e(trans('index.send'), false); ?></button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('index.cancel'), false); ?></button>
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!-- / .modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/list.blade.php ENDPATH**/ ?>