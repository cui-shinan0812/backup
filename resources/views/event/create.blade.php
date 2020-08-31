@extends('layouts.template')

@section('contents')

<!-- BREADCRUMB -->
<div id="breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="/">{{ trans('index.home') }}</a></li>

            <li><a href="/home">{{ trans('index.account') }}</a></li>
            <li class="active">{{ trans('index.create_event') }}</li>
        </ul>
    </div>
</div>
<!-- /BREADCRUMB -->



@endsection


