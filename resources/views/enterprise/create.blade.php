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

        $("#icon_input").change(function() {
            readICON(this, '#icon_url');
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
            <li class="active">{{ trans('enterprise.create_enterprise') }}</li>
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
                {{ csrf_field() }}

                <div class="col-md-10 ">
                    <div class="billing-details">

                        <div class="section-title">
                            <h3 class="title">{{ trans('enterprise.enterprise_detail') }}</h3>
                        </div>
                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.enterprise_name') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="name" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.zip_code') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="zip_code" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('index.location') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="location" placeholder="" required="required"></div>
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
                            <div class="col-md-10"><input class="input" type="tel" name="tel" placeholder=""></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">{{ trans('enterprise.phone') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="phone" placeholder=""></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.presentation_name') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="text" name="ceo" placeholder="" required="required"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.presentation_tel') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="tel" name="ceo_phone" placeholder="" required="required"></div>
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
                                    @foreach ($category as $c)
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
                            <div class="col-md-10"> <textarea class="input" name="comment" placeholder="{{ trans('enterprise.max_1000_characters') }}" style="height:100px;" required="required"></textarea></div>
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
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.scale') }}:</p>
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
                                <p style="text-align:center;margin-top:10px">{{ trans('enterprise.enterprise_video') }}:</p>
                            </div>
                            <div class="col-md-10"><input class="input" type="url" name="video_url" placeholder=""></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-12" style="margin-top:10px"></div>
                        </div>

                        <div class="form-group inline-block">
                            <div class="col-md-2">
                                <p style="text-align:center;margin-top:10px">*{{ trans('enterprise.enterprise_image') }}:</p>
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
                                <button type="submit" class="primary-btn">{{ trans('index.add') }}</button>
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




@endsection