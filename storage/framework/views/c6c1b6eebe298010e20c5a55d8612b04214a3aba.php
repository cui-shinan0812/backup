<?php $__env->startSection('jquery'); ?>

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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><?php echo e(trans('index.home'), false); ?></a></li>
            <li class="active"><?php echo e(trans('index.brief_introduction_corporation'), false); ?></li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->


<div class="section">
    <div class="container">
        <div class="row">
            <!-- section title -->
            <div class="col-md-12">
                <h2><?php echo e($enterprise->name, false); ?></h2>
            </div>
            <div class="col-md-12" style="margin-top:20px">

                <?php echo $__env->make('enterprise.basic', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                    <h4 class="title"><?php echo e(trans('index.image'), false); ?></h4>
                </div>
            </div>
            <!-- section title -->


            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">

                    <div class="product-body">
                        <?php if(is_null($enterprise->icon_url)): ?>
                        <img src="" alt="">
                        <?php else: ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($enterprise->icon_url), false); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">

                    <div class="product-body">
                        <?php if(is_null($enterprise->image_1_url)): ?>
                        <img src="" alt="">
                        <?php else: ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($enterprise->image_1_url), false); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

            <!-- Product Single -->
            <div class="col-md-3 col-sm-6 col-xs-6">
                <div class="product product-single">

                    <div class="product-body">
                        <?php if(is_null($enterprise->image_2_url)): ?>
                        <img src="" alt="">
                        <?php else: ?>
                        <img src="<?php echo e(Storage::disk('s3')->url($enterprise->image_2_url), false); ?>" alt="">
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- /Product Single -->

        </div>
        <!-- /row -->
        <div class="row">
        <div class="col-md-12">
                <div class="section-title">
                    <h4 class="title"><?php echo e(trans('product.introduction_video'), false); ?></h4>
                </div>
            </div>
            <!-- section title -->

            <!-- Product Single -->
            <div class="col-md-12">


                <?php if(!is_null($enterprise->video_url)): ?>
                                <iframe style='width:60%;max-width:800px;height:400px;'
                                    src="<?php echo e($enterprise->video_url, false); ?>">
                                    </iframe>
                                <?php else: ?>
                                <p><?php echo e(trans('product.not_uploaded'), false); ?></p>
                                <?php endif; ?>
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
                                    <img src="<?php echo asset($product->icon_url); ?>" alt="">
                                </div>
                                <div class="product-body">
                                    <h4 class="product-price"><a href="/product/single?product_id=<?php echo e($product->id, false); ?>"><?php echo e($product->name, false); ?></a> </h4>
                                    

                                    <div class="product-btns">
                                        <?php if(!is_null($product->three_d_url)): ?>
                                        <button class="primary-btn icon-btn three-d-btn"><a href="#threeDModal" data-toggle="modal"><i class="fa fa-share-alt"></i>3D</a></button>
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
</div>
<!--/ .modal -->

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
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/single.blade.php ENDPATH**/ ?>