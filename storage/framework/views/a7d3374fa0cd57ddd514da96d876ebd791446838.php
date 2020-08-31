<?php $__env->startSection('jquery'); ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#changeProfile").click(function() {
            $(".input").prop('disabled', false).css('background-color', '#FFFFEE');
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
            <li class="active"><?php echo e(trans('index.account'), false); ?></li>
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

            <form action="/profile/update" method="POST" name="profile_update" id="profile_update">
                <?php echo e(csrf_field(), false); ?>

                <div class="col-md-6">
                    <div class="billing-details">

                        <div class="section-title">
                            <h2 class="title"><?php echo e(trans('index.account'), false); ?></h2>
                        </div>
                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('index.name'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="text" name="name" value="<?php echo e($profile->name, false); ?>" placeholder="<?php echo e(trans('index.name'), false); ?>" style="background-color:Gainsboro" disabled></div>
                        
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">*<?php echo e(trans('index.email'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="email" name="email" value="<?php echo e($profile->email, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('index.location'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="text" name="location" value="<?php echo e($profile->location, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('index.city'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="text" name="city" value="<?php echo e($profile->city, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('index.country'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="text" name="country" value="<?php echo e($profile->country, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>


                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('index.zip_code'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="text" name="zip_code" value="<?php echo e($profile->zip_code, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px"><?php echo e(trans('index.tel'), false); ?>:</div>
                            <div class="col-md-10"><input class="input" type="text" name="tel" value="<?php echo e($profile->tel, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">Wechat:</div>
                            <div class="col-md-10"><input class="input" type="text" name="wechat_account" value="<?php echo e($profile->wechat_account, false); ?>" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>


                        <div class="pull-right">
                            <button type="button" id="changeProfile" class="main-btn"><?php echo e(trans('index.change'), false); ?></button>
                            <button type="submit" class="primary-btn"><?php echo e(trans('index.update'), false); ?></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--
        <div class="row">
        <form action="/charge/update" method="POST" name="charge_update" id="charge_update">
            <?php echo e(csrf_field(), false); ?>

                <div class="col-md-6">
                    <div class="shiping-methods">
                        <div class="section-title">
                            <h3 class="title"><?php echo e(trans('index.bill_plan'), false); ?></h3>
                        </div>
                        <div class="input-checkbox">
                            <?php if($profile->vip_type == 'free'): ?>
                            <input type="radio" name="shipping" id="plan1" checked>
                            <?php else: ?>
                            <input type="radio" name="shipping" id="plan1">
                            <?php endif; ?>
                            <label for="shipping-1" style="color:green"><?php echo e(trans('enterprise.free_plan'), false); ?></label>
                            <div class="caption">
                                <p><?php echo e(trans('enterprise.free_plan_detail'), false); ?>

                                    <p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <?php if($profile->vip_type == 'standard'): ?>
                            <input type="radio" name="shipping" id="plan2" checked>
                            <?php else: ?>
                            <input type="radio" name="shipping" id="plan2">
                            <?php endif; ?>
                            <label for="shipping-1"><?php echo e(trans('enterprise.standard_plan'), false); ?></label>
                            <div class="caption">
                                <p><?php echo e(trans('enterprise.standard_plan_detail'), false); ?><p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <?php if($profile->vip_type == 'enterprise'): ?>
                            <input type="radio" name="shipping" id="plan3" checked>
                            <?php else: ?>
                            <input type="radio" name="shipping" id="plan3">
                            <?php endif; ?>
                            <label for="shipping-2"><?php echo e(trans('enterprise.enterprise_plan'), false); ?></label>
                            <div class="caption">
                                <p><?php echo e(trans('enterprise.enterprise_plan_detail'), false); ?><p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            <?php if($profile->vip_type == 'partner'): ?>
                            <input type="radio" name="shipping" id="plan4" checked>
                            <?php else: ?>
                            <input type="radio" name="shipping" id="plan4">
                            <?php endif; ?>
                            <label for="shipping-2"><?php echo e(trans('enterprise.partner_plan'), false); ?></label>
                            <div class="caption">
                                <p><?php echo e(trans('enterprise.partner_plan_detail'), false); ?><p>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </form>
        </div>
-->
        <div class="row">

            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 class="title"><?php echo e(trans('index.enterprise_list'), false); ?><button class="primary-btn"><a style="color:white;font-size:10px" href="/enterprise/new"><?php echo e(trans('index.add_extra'), false); ?></a></button></h4>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('enterprise.enterprise_image'), false); ?></th>
                                <th><?php echo e(trans('enterprise.enterprise_name'), false); ?></th>
                                <th><?php echo e(trans('enterprise.presentation'), false); ?></th>
                                <th><?php echo e(trans('enterprise.enterprise_location'), false); ?></th>
                                <th><?php echo e(trans('index.contact'), false); ?></th>                        
                                <th><?php echo e(trans('enterprise.operation'), false); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $enterprises; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $enterprise): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>                    
                                <?php if(!is_null($enterprise->icon_url)): ?>         
                                <td class="thumb"><img src="../<?php echo e($enterprise->icon_url, false); ?>" alt=""></td>
                                <?php else: ?>
                                <td class="thumb"><img src="" alt=""></td>
                                <?php endif; ?>
                                <td class="details">
                                    <a href="/enterprise/products?enterprise_id=<?php echo e($enterprise->id, false); ?>"><?php echo e($enterprise->name, false); ?></a>
                                    <ul>
                                        <li><span></span></li>
                                        <li><span><?php echo e(trans('enterprise.category'), false); ?>: <?php echo e($enterprise->category, false); ?></span></li>
                                    </ul>
                                </td>
                                <td ><?php echo e($enterprise->ceo, false); ?><br></td>
                                <td ><?php echo e($enterprise->country, false); ?>・<?php echo e($enterprise->city, false); ?>・<?php echo e($enterprise->location, false); ?><br></td>
                                <td ><?php echo e($enterprise->tel, false); ?><br></td>
                                <td ><button class="main-btn icon-btn"><a href="/enterprise/view?id=<?php echo e($enterprise->id, false); ?>"><?php echo e(trans('index.update'), false); ?></a></button></td>                       
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /row -->
        <?php if(count($inquries) > 0): ?>
        <div class="row">

            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 class="title"><?php echo e(trans('index.inquiry_list'), false); ?></h4>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th><?php echo e(trans('event.inquiry_user_name'), false); ?></th>
                                <th><?php echo e(trans('event.inquiry_user_phone'), false); ?></th>
                                <th><?php echo e(trans('event.email'), false); ?></th>
                                <th><?php echo e(trans('event.title'), false); ?></th>
                                <th><?php echo e(trans('event.category'), false); ?></th>
                                <th><?php echo e(trans('event.content'), false); ?></th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $inquries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>                    
                                <td ><?php echo e($inquiry['user']->name, false); ?><br></td>
                                <td ><?php echo e($inquiry['user']->tel, false); ?><br></td>
                                <td ><?php echo e($inquiry['user']->email, false); ?><br></td>
                                <td ><?php echo e($inquiry['inquiry']->title, false); ?><br></td>
                                <td ><?php echo e($inquiry['inquiry']->category, false); ?><br></td>
                                <td ><?php echo e($inquiry['inquiry']->contents, false); ?><br></td>                     
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/kusunoki/resources/views/home.blade.php ENDPATH**/ ?>