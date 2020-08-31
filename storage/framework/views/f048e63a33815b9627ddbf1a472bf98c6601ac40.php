<h4><?php echo e(trans('index.brief_introduction_corporation'), false); ?></h4>
<table class="shopping-cart-table table">
    <thead>
        <tr>
            <th class="text-left"><?php echo e(trans('enterprise.enterprise_name'), false); ?>:</th>
            <th class="text-left"><a href="/enterprise/single?enterprise_id=<?php echo e($enterprise->id, false); ?>"><?php echo e($enterprise->name, false); ?></a></th>
            <th class="text-left"><?php echo e(trans('enterprise.presentation'), false); ?>:</th>
            <th class="text-left"><?php echo e($enterprise->ceo, false); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="text-left"><?php echo e(trans('enterprise.zip_code'), false); ?>:</th>
            <th class="text-left"><?php echo e($enterprise->zip_code, false); ?></th>
            <th class="text-left"><?php echo e(trans('enterprise.category'), false); ?>:</th>
            <th class="text-left"><?php echo e($enterprise->category, false); ?></th>
        </tr>
        <tr>
            <th class="text-left"><?php echo e(trans('enterprise.employees'), false); ?>:</th>
            <th class="text-left"><?php echo e($enterprise->employees, false); ?></th>
            <th class="text-left"><?php echo e(trans('enterprise.scale'), false); ?>:</th>
            <th class="text-left"><?php echo e(explode(",",$enterprise->scale)[0], false); ?><?php echo e(explode(",",$enterprise->scale)[1], false); ?></th>
        </tr>

        <tr>
            <th class="text-left"><?php echo e(trans('index.country'), false); ?>・<?php echo e(trans('index.city'), false); ?>:</th>
            <th class="text-left"><?php echo e($enterprise->country, false); ?>・<?php echo e($enterprise->city, false); ?></th>
            <th class="text-left"><?php echo e(trans('index.location'), false); ?>:</th>
            <th class="text-left"><?php echo e($enterprise->location, false); ?></th>
        </tr>   
    </tbody>
    <hr>
</table>

<h4><?php echo e(trans('enterprise.enterprise_introduction'), false); ?></h4>
<p><?php echo e($enterprise->comment, false); ?></p><?php /**PATH /var/www/html/kusunoki/resources/views/enterprise/basic.blade.php ENDPATH**/ ?>