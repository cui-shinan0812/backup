<?php $__env->startSection('jquery'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#priceInquireInput").click(function() {
            if($("#priceInquireInput").is(':checked'))
            {
                $('#priceInput').hide();
                $('#priceInput').val('');
                $('#priceUnitSelect').hide();
            }   
            else
            {
                $('#priceInput').show();
                $('#priceUnitSelect').show();
            }
                
        });

        $("#daysInquireCheckbox").click(function() {
            if($("#daysInquireCheckbox").is(':checked'))
            {
                $('#daysInquireInput').hide();
                $('#daysInquireInput').val('');
                $('#daysInquireSelect').hide();
            }   
            else
            {
                $('#daysInquireInput').show();
                $('#daysInquireSelect').show();
            }
                
        });

        function readICON(input, id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $(id).attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#icon_input").change(function() {
            readICON(this, '#icon_url');
        });

        $("#image_1_input").change(function() {
            readICON(this, '#image_1_url');
        });

        $("#image_2_input").change(function() {
            readICON(this, '#image_2_url');
        });

        $("#image_3_input").change(function() {
            readICON(this, '#image_3_url');
        });

        $("#image_4_input").change(function() {
            readICON(this, '#image_4_url');
        });

        $("#image_5_input").change(function() {
            readICON(this, '#image_5_url');
        });

        $("#image_6_input").change(function() {
            readICON(this, '#image_6_url');
        });

        $("#image_7_input").change(function() {
            readICON(this, '#image_7_url');
        });

        $("#image_8_input").change(function() {
            readICON(this, '#image_8_url');
        });

        $("#image_9_input").change(function() {
            readICON(this, '#image_9_url');
        });

        $("#image_10_input").change(function() {
            readICON(this, '#image_10_url');
        });

        $("#image_11_input").change(function() {
            readICON(this, '#image_11_url');
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
            <li><a href="/home">アカウント</a></li>
            <li><a href="/enterprise/products?enterprise_id=<?php echo e($product->enterprise_id, false); ?>"><?php echo e(trans('product.product_list'), false); ?></a></li>
            <li class="active"><?php echo e(trans('product.product_information_update'), false); ?></li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <form id="product-form" class="clearfix" method="POST" action="/product/update" enctype="multipart/form-data">
        <?php echo e(csrf_field(), false); ?>    
            <!-- row -->
            <div class="row">
                <input name="enterprise_id" value="<?php echo e($product->enterprise_id, false); ?> " style="display:none" />
                <input name="product_id" value="<?php echo e($product->id, false); ?> " style="display:none" />
                <div class="col-md-6">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 class="title"><?php echo e(trans('product.product_basic_information'), false); ?></h5>
                        </div>
   
                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.product_name'), false); ?>:</div>
                            <div class="col-md-9"><input class="input" type="text" name="name" value="<?php echo e($product->name, false); ?>" required="required"></div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.category'), false); ?>:</div>
                            <div class="col-md-9">
                                <select class="input" name="category">
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c, false); ?>"><?php echo e($c, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.unit_price'), false); ?>:</div>
                            <?php if(is_null($product->price)): ?>
                            <div class="col-md-3"><p style="margin-top:10px;margin-right:-10px"><input type="checkbox" value="" id="priceInquireInput" checked><?php echo e(trans('index.short_inquiry'), false); ?></p></div>
                            <div class="col-md-3" ><input class="input" type="number" name="price" placeholder="" id="priceInput" style="display:none"></div>
                            <div class="col-md-3">
                                <select class="input" name="price_unit" id="priceUnitSelect" style="display:none">
                                    <?php $__currentLoopData = $price_unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pn, false); ?>"><?php echo e($pn, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <?php else: ?>
                            <div class="col-md-3"><p style="margin-top:10px;margin-right:-10px"><input type="checkbox" value="" id="priceInquireInput"><?php echo e(trans('index.short_inquiry'), false); ?></p></div>
                            <div class="col-md-3"><input class="input"  type="number" name="price" id="priceInput" value="<?php echo e(explode(',',$product->price)[0], false); ?>"></div>
                            <div class="col-md-3">
                                <select class="input" name="price_unit"  id="priceUnitSelect">
                                    <option value="<?php echo e(explode(',',$product->price)[1], false); ?>"><?php echo e(explode(",",$product->price)[1], false); ?></option>
                                    <?php $__currentLoopData = $price_unit; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pn): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($pn, false); ?>"><?php echo e($pn, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.minimum_order_quantity'), false); ?>:</div>
                            <div class="col-md-9"><input class="input"  type="number" name="minimum_order_quantity" value="<?php echo e($product->minimum_order_quantity, false); ?>" required="required"></div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.deadline'), false); ?>:</div>
                            <?php if(is_null($product->minimum_build_days)): ?>
                            <div class="col-md-3"><p style="margin-top:10px;margin-right:-10px"><input type="checkbox" value="" id="daysInquireCheckbox" checked>お<?php echo e(trans('index.inquiry'), false); ?></p></div>
                            <div class="col-md-3"><input class="input"  type="number" name="minimum_build_days" id="daysInquireInput" style="display:none"></div>
                            <div class="col-md-3">
                                <select class="input" name="order_interval" id="daysInquireSelect" style="display:none">
                                    <?php $__currentLoopData = $order_interval; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($oi, false); ?>"><?php echo e($oi, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
    
                            <?php else: ?>
                            <div class="col-md-3"><p style="margin-top:10px;margin-right:-10px"><input type="checkbox" value="" id="daysInquireCheckbox"><?php echo e(trans('index.short_inquiry'), false); ?></p></div>
                            <div class="col-md-3"><input class="input"  type="number" name="minimum_build_days" id="daysInquireInput" value="<?php echo e(explode(',',$product->minimum_build_days)[0], false); ?>" ></div>
                            <div class="col-md-3">
                                <select class="input" name="order_interval" id="daysInquireSelect">
                                    <option value="<?php echo e(explode(',',$product->minimum_build_days)[1], false); ?>"><?php echo e(explode(",",$product->minimum_build_days)[1], false); ?></option>
                                    <?php $__currentLoopData = $order_interval; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $oi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($oi, false); ?>"><?php echo e($oi, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <?php endif; ?>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.built_at'), false); ?>:</div>
                            
                            <div class="col-md-9"><input class="input" type="text" name="build_at" value="<?php echo e($product->build_at, false); ?>" required="required"></div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>
               </div>
                </div>
                <div class="col-md-6">
                    <div class="billing-details">
                        <div class="section-title">
                            <h5 class="title"> &nbsp&nbsp </h5>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">3D URL:</div>
                            <div class="col-md-9"><input class="input" type="text" name="three_d_url" value="<?php echo e($product->three_d_url, false); ?>"></div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('product.video'), false); ?>URL:</div>
                            <div class="col-md-9"><input class="input" type="text" name="video_url" value="<?php echo e($product->video_url, false); ?>"></div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('product.product_introduction'), false); ?>:</div>
                            <div class="col-md-9">
                                <textarea class="input" name="comment" style="height:135px;" required="required"><?php echo e($product->comment, false); ?></textarea>
                            </div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-3" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('index.other'), false); ?>:</div>
                            <div class="col-md-9"><input class="input" type="text" name="other"  value="<?php echo e($product->other, false); ?>"></div>
                        
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- /row -->

            <!-- row -->
            <div class="row">
                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title">*<?php echo e(trans('index.icon'), false); ?></h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="icon_input" name="icon_url" form="product-form" />
                                    <hr>
                                    <img id="icon_url" src="../<?php echo e($product->icon_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>①</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_1_input" name="image_1_url" form="product-form" />
                                    <hr>
                                    <img id="image_1_url" src="../<?php echo e($product->image_1_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>②</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_2_input" name="image_2_url" form="product-form" />
                                    <hr>
                                    <img id="image_2_url" src="../<?php echo e($product->image_2_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>③</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_3_input" name="image_3_url" form="product-form" />
                                    <hr>
                                    <img id="image_3_url" src="../<?php echo e($product->image_3_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>
            </div>
                <!-- row -->
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>④</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_4_input" name="image_4_url" form="product-form" />
                                    <hr>
                                    <img id="image_4_url" src="../<?php echo e($product->image_4_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>⑤</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_5_input" name="image_5_url" form="product-form" />
                                    <hr>
                                    <img id="image_5_url" src="../<?php echo e($product->image_5_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>⑥</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_6_input" name="image_6_url" form="product-form" />
                                    <hr>
                                    <img id="image_6_url" src="../<?php echo e($product->image_6_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>⑦</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_7_input" name="image_7_url" form="product-form" />
                                    <hr>
                                    <img id="image_7_url" src="../<?php echo e($product->image_7_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>
            </div>
                <!-- row -->
            <hr>
            <div class="row">
                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>⑧</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_8_input" name="image_8_url" form="product-form" />
                                    <hr>
                                    <img id="image_8_url" src="../<?php echo e($product->image_8_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>⑨</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_9_input" name="image_9_url" form="product-form" />
                                    <hr>
                                    <img id="image_9_url" src="../<?php echo e($product->image_9_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>⑩</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_10_input" name="image_10_url" form="product-form" />
                                    <hr>
                                    <img id="image_10_url" src="../<?php echo e($product->image_10_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-3">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>①①</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_11_put" name="image_11_url" form="product-form" />
                                    <hr>
                                    <img id="image_11_url" src="../<?php echo e($product->image_11_url, false); ?>" alt="">
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>
                
            </div>
            <div class="col-md-3">
                <button type="submit" class="primary-btn"><?php echo e(trans('index.update'), false); ?></button>
            </div>

            
        </form>
    </div>
    <!-- /container -->
</div>
<!-- /section -->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/product/update.blade.php ENDPATH**/ ?>