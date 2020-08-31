@extends('layouts.template')


@section('jquery')
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

@endsection

@section('contents')


<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>
            <li><a href="/home">{{ trans('index.account') }}</a></li>
            <li class="active">{{ trans('enterprise.corporation_info_update') }}</li>
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
            <input name="id" value="{{ $enterprise->id }} " style="display:none" />
            <div class="row">

                {{ csrf_field() }}
                <div class="section-title">
                            <h5 id="enterprise_name" class="title">基本情報</h5>
                        </div>
                <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.enterprise_name') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="name" value="{{ $enterprise->name }}" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.zip_code') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="zip_code" value="{{ $enterprise->zip_code }}" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.enterprise_location') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="location" value="{{ $enterprise->location }}" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('index.country') }}:</p>
                            </div>
                            <div class="col-md-4">
                                <select class="input" name="country">
                                    <option value="{{ $enterprise->country }}">{{ $enterprise->country }}</option>
                                    @foreach ($countries as $country)
                                    <option value="{{ $country }}">{{ $country }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('index.city') }}:</p>
                            </div>
                            <div class="col-md-4">
                                <select class="input" name="city">
                                    <option value="{{ $enterprise->city }}">{{ $enterprise->city }}</option>
                                    @foreach ($cities as $city)
                                    <option value="{{ $city }}">{{ $city }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">{{ trans('enterprise.tel') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="tel" value="{{ $enterprise->tel }}"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">{{ trans('enterprise.phone') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="phone" value="{{ $enterprise->phone }}"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.presentation_name') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="ceo" value="{{ $enterprise->ceo }}" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.presentation_tel') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="ceo_phone" value="{{ $enterprise->ceo_phone }}" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">{{ trans('enterprise.category') }}:</p>
                            </div>
                            <div class="col-md-10">
                                <select class="input" name="category">
                                    <option>{{ $enterprise->category }}</option>
                                    @foreach($category as $c)
                                    <option value="{{ $c }}">{{ $c }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.enterprise_introduction') }}:</p>
                            </div>
                            <div class="col-md-10"> <textarea class="input" name="comment"  style="height:100px;" required="required">{{ $enterprise->comment }}</textarea></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.employees') }}:</p>
                            </div>
                            <div class="col-md-10">
                                <select class="input" name="employees">
                                    <option value="{{ $enterprise->employees }}">{{ $enterprise->employees }}</option>
                                    @foreach($employees as $employee)
                                    <option value="{{ $employee }}">{{ $employee }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>


                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.scale') }}:</p>
                            </div>
                            <div class="col-md-5"><input class="input" type="number" name="scale" value="{{ $captital_count }}" required="required"></div>
                            <div class="col-md-5">
                                <select class="input" name="unit">
                                    <option>{{ explode(",",$enterprise->scale)[1]}}</option>
                                    @foreach($captital_scale as $s)
                                    <option value="{{ $s }}">{{ $s }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">{{ trans('enterprise.enterprise_video') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="url" name="video_url" value="{{ $enterprise->video_url }}"></div>
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
                            <h5 id="enterprise_name" class="title">*{{ trans('enterprise.enterprise_image') }}</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="icon_url" name="icon_url" form="enterprise-form" />
                                    <hr>
                                    @if(!is_null($enterprise->icon_url))
                                    <img id="icon" src="../{{ $enterprise->icon_url }}" alt="">
                                    @else
                                    <img id="icon"  alt="">
                                    @endif
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title">{{ trans('index.image') }}①</h5>
                        </div>

                        <div class="form-group">

                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_1_input" name="image_1_input" form="enterprise-form"/>
                                    <hr>
                                    @if(!is_null($enterprise->image_1_url))
                                    <img id="image_1_url" src="../{{ $enterprise->image_1_url }}" alt="">
                                    @else
                                    <img id="image_1_url"  alt="">
                                    @endif
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="billing-details">

                        <div class="section-title">
                            <h5 id="enterprise_name" class="title">{{ trans('index.image') }}②</h5>
                        </div>

                        <div class="form-group">
                            <!-- banner -->
                            <div class="form-group">
                                <a class="banner banner-1" href="#">
                                    <input type='file' id="image_2_input" name="image_2_input" form="enterprise-form" />
                                    <hr>
                                    @if(!is_null($enterprise->image_2_url))
                                    <img id="image_2_url" src="../{{ $enterprise->image_2_url }}" alt="">
                                    @else
                                    <img id="image_2_url"  alt="">
                                    @endif
                                </a>
                            </div>
                            <!-- /banner -->
                        </div>

                    </div>
                </div>

                <hr>
                <div class="pull-right">
                    <button type="submit" class="primary-btn">{{ trans('index.update') }}</button>
                </div>
            </div>
        </form>

    </div>
    <!-- /container -->
</div>
<!-- /section -->



@endsection