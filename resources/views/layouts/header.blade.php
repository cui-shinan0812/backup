<header>
     <script data-ad-client="ca-pub-1207425085335448" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-right">
                <ul class="header-top-links">

                    <li class="dropdown default-dropdown">
                        @if( Session::get('applocale') == 'zh-CN' )
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ trans('index.chinese') }} <i class="fa fa-caret-down"></i></a>
                        @else
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">{{ trans('index.japanese') }} <i class="fa fa-caret-down"></i></a>
                        @endif
                        
                        <ul class="custom-menu">
                            <li><a href="/setLocale/zh-CN">{{ trans('index.chinese') }} (CN)</a></li>
                            <li><a href="/setLocale/ja">{{ trans('index.japanese') }} (JP)</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- /top Header -->

    <!-- header -->
    <div id="header">
        <div class="container">
            <div class="pull-left">
                <!-- Logo -->
                <div class="header-logo">
                    <a class="logo" href="/">
                        <img src="{!! asset('images/main/logo.png') !!}" alt="">
                    </a>
                </div>

                


                <!-- /Logo -->

                <!-- Search 
					<div class="header-search">
						<form>
							<input class="input search-input" type="text" placeholder="Enter your keyword">
							<select class="input search-categories">
								<option value="0">All Categories</option>
								<option value="1">Category 01</option>
								<option value="1">Category 02</option>
							</select>
							<button class="search-btn"><i class="fa fa-search"></i></button>
						</form>
					</div>
					/Search -->
                

            </div>
            <div class="pull-right">
                    <ul class="header-btns">
                        <!-- Account -->
                        <li class="header-account dropdown default-dropdown">
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-user-o"></i>
                                </div>
                                <strong class="text-uppercase">  {{ trans('index.welcome') }} <i class="fa fa-caret-down"></i></strong>
                            </div>
                            <a class="text-uppercase"><script>document.write(new Date().getFullYear());</script>/<script> var month = new Date().getMonth() + 1; document.write(month);</script>/<script>document.write(new Date().getDate());</script> </a>
                            <ul class="custom-menu">
                            @if (Route::has('login'))
 
                                    @auth
                                        <li><a href="/home"><i class="fa fa-user-o"></i> {{ trans('index.account') }}</a></li>
                                        <li><a href="/logout"><i class="fa fa-check"></i> {{ trans('index.logout') }}</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}"><i class="fa fa-unlock-alt"></i> &nbsp&nbsp{{ trans('index.login') }}</a></li>
                                    

                                        @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}"><i class="fa fa-user-plus"></i> {{ trans('index.account_registration') }}</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                                <!-- <li><a href="#"><i class="fa fa-user-o"></i> 我的账户</a></li>
                                <li><a href="#"><i class="fa fa-check"></i> 登出</a></li>
                                <li><a href="#"><i class="fa fa-unlock-alt"></i> 登录</a></li>
                                <li><a href="#"><i class="fa fa-user-plus"></i> 创建账号</a></li> -->
                            </ul>
                        </li>
                        <!-- /Account -->
                </div>
            <!-- header -->
        </div>
        <!-- container -->
        
</header>
<!-- /HEADER -->
