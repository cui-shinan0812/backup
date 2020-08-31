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

        $("#icon_url").change(function() {
            readICON(this, '#icon');
        });

        $("#image_1_input").change(function() {
            readICON(this, '#image_1_url');
        });

        $("#image_2_input").change(function() {
            readICON(this, '#image_2_url');
        });

        $("#preview_input").change(function() {
            readICON(this, '#preview_url');
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
            <li class="active"><?php echo e(trans('enterprise.corporation_info_update'), false); ?></li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->

<!-- section -->
<div class="section">
    <!-- container -->
    <div class="container">
        <form id="enterprise-form" class="clearfix" method="POST" action="/enterprise/update" enctype="multipart/form-data">
            <!-- row -->
            <input name="id" value="<?php echo e($enterprise->id, false); ?> " style="display:none" />
            <div class="row">

                <?php echo e(csrf_field(), false); ?>

                <div class="section-title">
                            <h5 id="enterprise_name" class="title">基本情報</h5>
                        </div>
                <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.enterprise_name'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="name" value="<?php echo e($enterprise->name, false); ?>" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.zip_code'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="zip_code" value="<?php echo e($enterprise->zip_code, false); ?>" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.enterprise_location'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="location" value="<?php echo e($enterprise->location, false); ?>" required="required"></div>
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
                                    <option value="<?php echo e($enterprise->country, false); ?>"><?php echo e($enterprise->country, false); ?></option>
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
                                    <option value="<?php echo e($enterprise->city, false); ?>"><?php echo e($enterprise->city, false); ?></option>
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
                            <div class="col-md-10"><input class="input" type="tel" name="tel" value="<?php echo e($enterprise->tel, false); ?>"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px"><?php echo e(trans('enterprise.phone'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="phone" value="<?php echo e($enterprise->phone, false); ?>"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.presentation_name'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="ceo" value="<?php echo e($enterprise->ceo, false); ?>" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*<?php echo e(trans('enterprise.presentation_tel'), false); ?>:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="ceo_phone" value="<?php echo e($enterprise->ceo_phone, false); ?>" required="required"></div>
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
                                    <option><?php echo e($enterprise->category, false); ?></option>
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
                            <div class="col-md-10"> <textarea class="input" name="comment"  style="height:100px;" required="required"><?php echo e($enterprise->comment, false); ?></textarea></div>
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
                                    <option value="<?php echo e($enterprise->employees, false); ?>"><?php echo e($enterprise->employees, false); ?></option>
                                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($employee, false); ?>"><?php echo e($employee, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <div class="col-md-5"><input class="input" type="number" name="scale" value="<?php echo e($captital_count, false); ?>" required="required"></div>
                            <div class="col-md-5">
                                <select class="input" name="unit">
                                    <option><?php echo e(explode(",",$enterprise->scale)[1], false); ?></option>
                                    <?php $__currentLoopData = $captital_scale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($s, false); ?>"><?php echo e($s, false); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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
                            <div class="col-md-10"><input class="input" type="url" name="video_url" value="<?php echo e($enterprise->video_url, false); ?>"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

            </div>
            <!-- /row -->
            <!-- row -->
            <div class="row">


                <div class="col-md-4">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title">*<?php echo e(trans('enterprise.enterprise_image'), false); ?></h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="icon_url" name="icon_url" form="enterprise-form" />
                                    <hr>
                                    <?php if(!is_null($enterprise->icon_url)): ?>
                                    <img id="icon" src="../<?php echo e($enterprise->icon_url, false); ?>" alt="">
                                    <?php else: ?>
                                    <img id="icon"  alt="">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>①</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_1_input" name="image_1_input" form="enterprise-form"/>
                                    <hr>
                                    <?php if(!is_null($enterprise->image_1_url)): ?>
                                    <img id="image_1_url" src="../<?php echo e($enterprise->image_1_url, false); ?>" alt="">
                                    <?php else: ?>
                                    <img id="image_1_url"  alt="">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title"><?php echo e(trans('index.image'), false); ?>②</h5>
                        </div>

                        <div class="form-group">
                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_2_input" name="image_2_input" form="enterprise-form" />
                                    <hr>
                                    <?php if(!is_null($enterprise->image_2_url)): ?>
                                    <img id="image_2_url" src="../<?php echo e($enterprise->image_2_url, false); ?>" alt="">
                                    <?php else: ?>
                                    <img id="image_2_url"  alt="">
                                    <?php endif; ?>
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <hr>
                <div class="pull-right">
                    <button type="submit" class="primary-btn"><?php echo e(trans('index.update'), false); ?></button>
                </div>
            </div>
        </form>

    </div>
    <!-- /container -->
</div>
<!-- /section -->



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/update.blade.php ENDPATH**/ ?>