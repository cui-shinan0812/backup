<!-- container -->
<div class="container">
    <!-- row -->
    <div class="row">

            <div class="col-md-8">
                <div class="section-title">
                    <h5 class="title"><?php echo e(trans('index.inquiry'), false); ?></h5>
                </div>
                <form id="inquire-form" action="/sendInquiry" method="POST">
                    <?php echo e(csrf_field(), false); ?>

                    <input name="query" value="<?php echo e($query, false); ?>" style="display:none">
                    <div class="form-group inline-block">
                        <div class="col-md-2" style="margin-top:10px">
                            <h5>*カテゴリ</h5>
                        </div>
                        <div class="col-md-10">
                            <select class="input" name="category" style="margin-bottom:10px" form="inquire-form">
                                <?php $__currentLoopData = $inquire_categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $inquire_category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($inquire_category, false); ?>"><?php echo e($inquire_category, false); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group inline-block">
                        <div class="col-md-2" style="margin-top:10px">
                            <h5>*タイトル</h5>
                        </div>
                        <div class="col-md-10">
                            <input class="input" type="text" name="title" style="margin-bottom:10px" required="required" form="inquire-form">
                        </div>
                    </div>

                    <div class="form-group">
                        <textarea class="input" name="contents" placeholder="内容:最大１０００文字" style="height:150px" form="inquire-form" required="required"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">送信</button>
                    </div>
                </form>
            </div>

    </div>
    <!-- /row -->

</div>
<!-- /container --><?php /**PATH /var/www/html/kusunoki/resources/views/common/inquiry.blade.php ENDPATH**/ ?>