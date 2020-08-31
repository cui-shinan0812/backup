<h4>{{ trans('index.brief_introduction_corporation') }}</h4>
<table class="shopping-cart-table table">
    <thead>
        <tr>
            <th class="text-left">{{ trans('enterprise.enterprise_name') }}:</th>
            <th class="text-left"><a href="/enterprise/single?enterprise_id={{ $enterprise->id }}">{{ $enterprise->name}}</a></th>
            <th class="text-left">{{ trans('enterprise.presentation') }}:</th>
            <th class="text-left">{{ $enterprise->ceo}}</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th class="text-left">{{ trans('enterprise.zip_code') }}:</th>
            <th class="text-left">{{ $enterprise->zip_code}}</th>
            <th class="text-left">{{ trans('enterprise.category') }}:</th>
            <th class="text-left">{{ $enterprise->category}}</th>
        </tr>
        <tr>
            <th class="text-left">{{ trans('enterprise.employees') }}:</th>
            <th class="text-left">{{ $enterprise->employees}}</th>
            <th class="text-left">{{ trans('enterprise.scale') }}:</th>
            <th class="text-left">{{ explode(",",$enterprise->scale)[0]}}{{ explode(",",$enterprise->scale)[1]}}</th>
        </tr>

        <tr>
            <th class="text-left">{{ trans('index.country') }}・{{ trans('index.city') }}:</th>
            <th class="text-left">{{ $enterprise->country }}・{{ $enterprise->city }}</th>
            <th class="text-left">{{ trans('index.location') }}:</th>
            <th class="text-left">{{ $enterprise->location}}</th>
        </tr>   
    </tbody>
    <hr>
</table>

<h4>{{ trans('enterprise.enterprise_introduction') }}</h4>
<p>{{ $enterprise->comment }}</p>