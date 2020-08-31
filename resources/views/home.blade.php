@extends('layouts.template')

@section('jquery')

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

@endsection

@section('contents')
<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li class="active">{{ trans('index.account') }}</li>
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
                {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="billing-details">

                        <div class="section-title">
                            <h2 class="title">{{ trans('index.account') }}</h2>
                        </div>
                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">*{{ trans('index.name') }}:</div>
                            <div class="col-md-10"><input class="input" type="text" name="name" value="{{ $profile->name }}" placeholder="{{ trans('index.name') }}" style="background-color:Gainsboro" disabled></div>
                        
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">*{{ trans('index.email') }}:</div>
                            <div class="col-md-10"><input class="input" type="email" name="email" value="{{ $profile->email }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">{{ trans('index.location') }}:</div>
                            <div class="col-md-10"><input class="input" type="text" name="location" value="{{ $profile->location }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">{{ trans('index.city') }}:</div>
                            <div class="col-md-10"><input class="input" type="text" name="city" value="{{ $profile->city }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">{{ trans('index.country') }}:</div>
                            <div class="col-md-10"><input class="input" type="text" name="country" value="{{ $profile->country }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>


                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">{{ trans('index.zip_code') }}:</div>
                            <div class="col-md-10"><input class="input" type="text" name="zip_code" value="{{ $profile->zip_code }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">{{ trans('index.tel') }}:</div>
                            <div class="col-md-10"><input class="input" type="text" name="tel" value="{{ $profile->tel }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2" style="margin-top:10px;margin-right:-10px">Wechat:</div>
                            <div class="col-md-10"><input class="input" type="text" name="wechat_account" value="{{ $profile->wechat_account }}" placeholder="" style="background-color:Gainsboro" disabled></div>

                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12" style="margin-top:10px;margin-right:-10px"></div>
                        </div>


                        <div class="pull-right">
                            <button type="button" id="changeProfile" class="main-btn">{{ trans('index.change') }}</button>
                            <button type="submit" class="primary-btn">{{ trans('index.update') }}</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--
        <div class="row">
        <form action="/charge/update" method="POST" name="charge_update" id="charge_update">
            {{ csrf_field() }}
                <div class="col-md-6">
                    <div class="shiping-methods">
                        <div class="section-title">
                            <h3 class="title">{{ trans('index.bill_plan') }}</h3>
                        </div>
                        <div class="input-checkbox">
                            @if ($profile->vip_type == 'free')
                            <input type="radio" name="shipping" id="plan1" checked>
                            @else
                            <input type="radio" name="shipping" id="plan1">
                            @endif
                            <label for="shipping-1" style="color:green">{{ trans('enterprise.free_plan') }}</label>
                            <div class="caption">
                                <p>{{ trans('enterprise.free_plan_detail') }}
                                    <p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            @if ($profile->vip_type == 'standard')
                            <input type="radio" name="shipping" id="plan2" checked>
                            @else
                            <input type="radio" name="shipping" id="plan2">
                            @endif
                            <label for="shipping-1">{{ trans('enterprise.standard_plan') }}</label>
                            <div class="caption">
                                <p>{{ trans('enterprise.standard_plan_detail') }}<p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            @if ($profile->vip_type == 'enterprise')
                            <input type="radio" name="shipping" id="plan3" checked>
                            @else
                            <input type="radio" name="shipping" id="plan3">
                            @endif
                            <label for="shipping-2">{{ trans('enterprise.enterprise_plan') }}</label>
                            <div class="caption">
                                <p>{{ trans('enterprise.enterprise_plan_detail') }}<p>
                            </div>
                        </div>
                        <div class="input-checkbox">
                            @if ($profile->vip_type == 'partner')
                            <input type="radio" name="shipping" id="plan4" checked>
                            @else
                            <input type="radio" name="shipping" id="plan4">
                            @endif
                            <label for="shipping-2">{{ trans('enterprise.partner_plan') }}</label>
                            <div class="caption">
                                <p>{{ trans('enterprise.partner_plan_detail') }}<p>
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
                        <h4 class="title">{{ trans('index.enterprise_list') }}<button class="primary-btn"><a style="color:white;font-size:10px" href="/enterprise/new">{{ trans('index.add_extra') }}</a></button></h4>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>{{ trans('enterprise.enterprise_image') }}</th>
                                <th>{{ trans('enterprise.enterprise_name') }}</th>
                                <th>{{ trans('enterprise.presentation') }}</th>
                                <th>{{ trans('enterprise.enterprise_location') }}</th>
                                <th>{{ trans('index.contact') }}</th>                        
                                <th>{{ trans('enterprise.operation') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($enterprises as $enterprise)
                            <tr>                    
                                @if(!is_null($enterprise->icon_url))         
                                <td class="thumb"><img src="../{{ $enterprise->icon_url }}" alt=""></td>
                                @else
                                <td class="thumb"><img src="" alt=""></td>
                                @endif
                                <td class="details">
                                    <a href="/enterprise/products?enterprise_id={{ $enterprise->id }}">{{ $enterprise->name }}</a>
                                    <ul>
                                        <li><span></span></li>
                                        <li><span>{{ trans('enterprise.category') }}: {{ $enterprise->category }}</span></li>
                                    </ul>
                                </td>
                                <td >{{ $enterprise->ceo }}<br></td>
                                <td >{{ $enterprise->country }}・{{ $enterprise->city }}・{{ $enterprise->location }}<br></td>
                                <td >{{ $enterprise->tel }}<br></td>
                                <td ><button class="main-btn icon-btn"><a href="/enterprise/view?id={{ $enterprise->id }}">{{ trans('index.update') }}</a></button></td>                       
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /row -->
        @if(count($inquries) > 0)
        <div class="row">

            <div class="col-md-12">
                <div class="order-summary clearfix">
                    <div class="section-title">
                        <h4 class="title">{{ trans('index.inquiry_list') }}</h4>
                    </div>
                    <table class="shopping-cart-table table">
                        <thead>
                            <tr>
                                <th>{{ trans('event.inquiry_user_name') }}</th>
                                <th>{{ trans('event.inquiry_user_phone') }}</th>
                                <th>{{ trans('event.email') }}</th>
                                <th>{{ trans('event.title') }}</th>
                                <th>{{ trans('event.category') }}</th>
                                <th>{{ trans('event.content') }}</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inquries as $inquiry)
                            <tr>                    
                                <td >{{ $inquiry['user']->name }}<br></td>
                                <td >{{ $inquiry['user']->tel }}<br></td>
                                <td >{{ $inquiry['user']->email }}<br></td>
                                <td >{{ $inquiry['inquiry']->title }}<br></td>
                                <td >{{ $inquiry['inquiry']->category }}<br></td>
                                <td >{{ $inquiry['inquiry']->contents }}<br></td>                     
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /section -->


@endsection