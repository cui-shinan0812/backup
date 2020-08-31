<?php $__env->startSection('jquery'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#enterprise_name").click(function() {
            alert('hello');
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

            <li><a href="/home"><?php echo e(trans('index.account'), false); ?></a></li>
            <li class="active"><?php echo e(trans('enterprise.create_enterprise'), false); ?></li>
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
            <form id="enterprise-form" class="clearfix" method="POST" action="/enterprise/create" enctype="multipart/form-data">
                <?php echo e(csrf_field(), false); ?>


                <div class="col-md-10 ">
                    <div class="billing-details">

                        <div class="section-title">
                            <h3 class="title"><?php echo e(trans('enterprise.enterprise_detail'), false); ?></h3>
                        </div>
                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.enterprise_name'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="name" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.zip_code'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="zip_code" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('index.location'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="location" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('index.country'), false); ?>:</p>
                            </div>
                            <div class="col-md-4">
                                <select class="input" name="country">
                                    <?php $__currentLoopData = $countries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($country, false); ?>"><?php echo e($country, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('index.city'), false); ?>:</p>
                            </div>
                            <div class="col-md-4">
                                <select class="input" name="city">
                                    <?php $__currentLoopData = $cities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($city, false); ?>"><?php echo e($city, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px"><?php echo e(trans('enterprise.tel'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="tel" placeholder=""></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px"><?php echo e(trans('enterprise.phone'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="phone" placeholder=""></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.presentation_name'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="ceo" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.presentation_tel'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="ceo_phone" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px"><?php echo e(trans('enterprise.category'), false); ?>:</p>
                            </div>
                            <div class="col-md-10">
                                <select class="input" name="category">
                                    <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($c, false); ?>"><?php echo e($c, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.enterprise_introduction'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"> <textarea class="input" name="comment" placeholder="<?php echo e(trans('enterprise.max_1000_characters'), false); ?>" style="height:100px;" required="required"></textarea></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.employees'), false); ?>:</p>
                            </div>
                            <div class="col-md-10">
                                <select class="input" name="employees">
                                    <option value="1~50人">1~50人</option>
                                    <option value="51~100人">51~100人</option>
                                    <option value="101~500人">101~500人</option>
                                    <option value="501人以上">501人以上</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>


                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.scale'), false); ?>:</p>
                            </div>
                            <div class="col-md-5"><input class="input" type="number" name="scale" placeholder="" required="required"></div>
                            <div class="col-md-5">
                                <select class="input" name="unit">
                                    <option value="万元">万元</option>
                                    <option value="万円">万円</option>
                                    <option value="million usd">million usd</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px"><?php echo e(trans('enterprise.enterprise_video'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="url" name="video_url" placeholder=""></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.enterprise_image'), false); ?>:</p>
                            </div>
                            <div class="col-md-10">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="icon_input" name="icon_url" required="required" form="enterprise-form" />
                                    <hr>
                                    <img style="max-width:150px;max-height:150px" id="icon_url" src="" alt="">
                                </a>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group">
                            <div class="pull-right">
                                <button type="submit" class="primary-btn"><?php echo e(trans('index.add'), false); ?></button>
                            </div>
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




<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/create.blade.php ENDPATH**/ ?>