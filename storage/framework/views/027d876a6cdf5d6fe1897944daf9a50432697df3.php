<?php $__env->startSection('jquery'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('contents'); ?>

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/"><?php echo e(trans('index.home'), false); ?></a></li>
            <li class="active"><?php echo e(trans('index.recommend_enterprise'), false); ?></li>
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
                        <h3 id="enterprise_name" class="title"><?php echo e(trans('enterprise.recommend_enterprise_view'), false); ?></h3>
                    </div>
                <!-- store top filter -->
                <div class="store-filter clearfix">

                    <div class="pull-right">

                        <ul class="store-pages">
                            <li><?php echo e($enterprises->links(), false); ?></li>
                            
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
                                <?php $__currentLoopData = $sets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $set): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>

                                    <td class="details">
                                        <a href="/enterprise/single?enterprise_id=<?php echo e($set['enterprise']->id, false); ?>">
                                            <h3><?php echo e($set['enterprise']->name, false); ?></h3>
                                        </a>
                                        <ul>
                                            <li><span>
                                                    <h5>業界：<?php echo e($set['enterprise']->category, false); ?></h5>
                                                </span></li>
                                            <li><span>
                                                    <h5>国家/地区：<?php echo e($set['enterprise']->country, false); ?>・<?php echo e($set['enterprise']->city, false); ?></h5>
                                                </span></li>
                                           
                                            <li><span><button class="primary-btn" id="<?php echo e($set['enterprise']->id, false); ?>,enterprise"><a href="#InquiryModal" data-toggle="modal"> <?php echo e(trans('index.short_inquiry'), false); ?></a></button><a href="/enterprise/single?enterprise_id=<?php echo e($set['enterprise']->id, false); ?>#store "> 製品一覧へ</a></span></li>

                                        </ul>
                                    </td>

                                    <?php $__currentLoopData = $set['products']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td>
                                        <ul>
                                            <li><img style="height:150px;width:120px" src="<?php echo asset($product->icon_url); ?>" alt=""></li>
                                            <li><?php echo e($product->name, false); ?></li>
                                        </ul>
                                    </td>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <li><?php echo e($enterprises->links(), false); ?></li>
                            
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
                                            <h5 class="title"><?php echo e(trans('index.short_inquiry'), false); ?></h5>
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
                <button type="button" class="btn btn-success" data-dismiss="modal" onclick="editAPI()"><?php echo e(trans('index.send'), false); ?></button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo e(trans('index.cancel'), false); ?></button>
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!-- / .modal -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/recommend.blade.php ENDPATH**/ ?>