<?php $__env->startSection('jquery'); ?>

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
            console.log($(this).val());

            var myIframe = document.createElement('iframe');
            myIframe.src = $(this).val();
            document.body.appendChild(myIframe);
            myIframe.style.width = '100%';
            myIframe.style.height = '600px';
			$("#threeDView").html(myIframe);
		});

        
    });
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><?php echo e(trans('index.home'), false); ?></a></li>
            <li class="active"><?php echo e(trans('index.recommend_product'), false); ?></li>
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
                <!-- store top filter -->
                <div class="section-title">
                        <h3 id="enterprise_name" class="title"><?php echo e(trans('index.recommend_product'), false); ?><?php echo e(trans('index.a_report'), false); ?></h3>
                    </div>
                <div class="store-filter clearfix">

                    <div class="pull-right">
                    
                        <ul class="store-pages">
                            <li><?php echo e($products->links(), false); ?></li>
                            
                        </ul>
                    </div>
                        
                </div>
                <!-- /store top filter -->
                
                <!-- STORE -->
                <div id="store">
                    <!-- row -->
                   
                    <div class="row">
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <!-- Product Single -->
                        <div class="col-md-3 col-sm-6 col-xs-6">
                            <div class="product product-single">
                                <div class="product-thumb">
                                    <?php if($product->created_at > date("Y-m-d H:i:s",strtotime('-10 day'))): ?>
                                    <div class="product-label">
                                        <span>NEW</span>
                                    </div>
                                    <?php endif; ?>
                                    <button class="main-btn quick-view" id="<?php echo e($product->id, false); ?>"><a href="#PreviewModal" data-toggle="modal"><i class="fa fa-search-plus"></i>view</a></button>
                                    <img style="height:300px" src="<?php echo asset($product->icon_url); ?>"  alt="">
                                </div>
                                <div class="product-body">
                                    <h5 class="product-price"><a href="/product/single?product_id=<?php echo e($product->id, false); ?>"><?php echo e($product->name, false); ?></a> </h5>
                                    

                                    <div class="product-btns">
                                        <?php if(!is_null($product->three_d_url)): ?>
                                        <button class="primary-btn icon-btn three-d-btn" value="<?php echo e($product->three_d_url, false); ?>"><a href="#threeDModal" data-toggle="modal"><i class="fa fa-share-alt"></i>3D</a></button>
                                        <?php endif; ?>
                                        <button class="main-btn add-to-cart" id="<?php echo e($product->id, false); ?>,product"><a href="#InquiryModal" data-toggle="modal"> <?php echo e(trans('index.short_inquiry'), false); ?></a></button>
                                        <button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
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
                            <li><?php echo e($products->links(), false); ?></li>
                            
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

<?php $__env->stopSection(); ?>

<div id="PreviewModal" class="modal fade">
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
                    <div class="container" id="quickView">

                        
                    </div>
                    <!-- /container -->
                </div>
                <!-- /section -->
            </div>
            <div class="modal-footer">
				<!-- modal footer -->
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('index.close'), false); ?></button>
                
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
				<button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('index.close'), false); ?></button>
                
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
                <h4><?php echo e(trans('index.unite_corporation'), false); ?></h4>
            </div>

            <div class="modal-body" id="inquireArea">
                <!-- container -->
                <div class="container" id="inquiryView">


                </div>
                <!-- /container -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('index.close'), false); ?></button>
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div>
<!--/ .modal -->
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/product/recommend.blade.php ENDPATH**/ ?>