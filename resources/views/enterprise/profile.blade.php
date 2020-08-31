@extends('layouts.master')

@section('login_section')

@if (Route::has('login'))
    @auth
    <p class="login"><a href="login.html">{{ trans('index.home') }}</a></p>
    @else
    <p class="login"><a href="{{ route('login') }}">{{ trans('index.login') }}</a></p>

    @if (Route::has('register'))
        <p class="login"><a href="{{ route('register') }}">{{ __('Register') }}</a></p>
    @endif
    @endauth
@endif
@endsection