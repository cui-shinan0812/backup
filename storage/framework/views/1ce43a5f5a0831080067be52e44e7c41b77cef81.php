<header>
     <script data-ad-client="ca-pub-1207425085335448" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- top Header -->
    <div id="top-header">
        <div class="container">
            <div class="pull-right">
                <ul class="header-top-links">

                    <li class="dropdown default-dropdown">
                        <?php if( Session::get('applocale') == 'zh-CN' ): ?>
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo e(trans('index.chinese'), false); ?> <i class="fa fa-caret-down"></i></a>
                        <?php else: ?>
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true"><?php echo e(trans('index.japanese'), false); ?> <i class="fa fa-caret-down"></i></a>
                        <?php endif; ?>
                        
                        <ul class="custom-menu">
                            <li><a href="/setLocale/zh-CN"><?php echo e(trans('index.chinese'), false); ?> (CN)</a></li>
                            <li><a href="/setLocale/ja"><?php echo e(trans('index.japanese'), false); ?> (JP)</a></li>
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
                        <img src="<?php echo asset('images/main/logo.png'); ?>" alt="">
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
                                <strong class="text-uppercase">  <?php echo e(trans('index.welcome'), false); ?> <i class="fa fa-caret-down"></i></strong>
                            </div>
                            <a class="text-uppercase"><script>document.write(new Date().getFullYear());</script>/<script> var month = new Date().getMonth() + 1; document.write(month);</script>/<script>document.write(new Date().getDate());</script> </a>
                            <ul class="custom-menu">
                            <?php if(Route::has('login')): ?>
 
                                    <?php if(auth()->guard()->check()): ?>
                                        <li><a href="/home"><i class="fa fa-user-o"></i> <?php echo e(trans('index.account'), false); ?></a></li>
                                        <li><a href="/logout"><i class="fa fa-check"></i> <?php echo e(trans('index.logout'), false); ?></a></li>
                                    <?php else: ?>
                                        <li><a href="<?php echo e(route('login'), false); ?>"><i class="fa fa-unlock-alt"></i> &nbsp&nbsp<?php echo e(trans('index.login'), false); ?></a></li>
                                    

                                        <?php if(Route::has('register')): ?>
                                        <li><a href="<?php echo e(route('register'), false); ?>"><i class="fa fa-user-plus"></i> <?php echo e(trans('index.account_registration'), false); ?></a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>
                            <?php endif; ?>
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
<?php /**PATH /var/www/html/kusunoki/resources/views/layouts/header.blade.php ENDPATH**/ ?>