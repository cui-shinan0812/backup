@extends('layouts.template')

@section('jquery')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".quick-view").click(function() {
            $.get("/product/quickView?product_id=" + this.id,function(data,status){
				$("#quickView").html(data);
			});
        });

		$(".add-to-cart").click(function() {
			$.get("/inquiry?query=" + this.id,function(data,status){
				$("#inquiryView").html(data);
			});
		});

		$(".three-d-btn").click(function() {
			var myIframe = document.createElement('iframe');
            myIframe.src = $(this).val();
            document.body.appendChild(myIframe);
            myIframe.style.width = '100%';
            myIframe.style.height = '600px';
			$("#threeDView").html(myIframe);
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

		var lazyLoadInstance = new LazyLoad({
			elements_selector: ".lazy"
			// ... more custom settings?
		});
    });
</script>

<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
    }
  </script>


<style>

</style>

@endsection

@section('contents')

<!-- HOME -->
<div id="home">
	<!-- container -->
	<div class="container">
		<!-- home wrap -->
		<div class="home-wrap">
			<!-- home slick -->
			<div id="home-slick">
				<!-- banner -->
				<div class="banner banner-1">
					<img src="{!! asset('images/product/banner01-small.png') !!}" data-src="{!! asset('images/product/banner01.png') !!}" alt="" class="lazy">
					<div class="banner-caption text-center">
						
					</div>
				</div>
				<!-- /banner -->


				<!-- banner -->
				<div class="banner banner-1">
					<img src="{!! asset('images/product/banner03-small.png') !!}" data-src="{!! asset('images/product/banner03.png') !!}" alt="" class="lazy">
					<div class="banner-caption">
						
					</div>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="banner banner-1">
					<img src="{!! asset('images/product/banner04-small.png') !!}" data-src="{!! asset('images/product/banner04.png') !!}" alt="" class="lazy">
					<div class="banner-caption">
						
					</div>
				</div>
				<!-- /banner -->


			</div>
			<!-- /home slick -->
		</div>
		<!-- /home wrap -->
	</div>
	<!-- /container -->
	<!-- section -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="/events">
						<img data-src="{!! asset('images/event/seminar.png') !!}" src="{!! asset('images/event/seminar-small.png') !!}" alt="" class="lazy">
						
						<div><h2 style="text-align:center;margin-top:25px">{{ trans('index.seminar') }} </h2></div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-sm-6">
					<a class="banner banner-1" href="/events">
						<img data-src="{!! asset('images/event/sisatu.png') !!}" src="{!! asset('images/event/sisatu-small.png') !!}"  alt="" class="lazy">

						<div><h2 style="text-align:center;margin-top:25px">{{ trans('index.enterprise_visitation') }}</h2></div>
					</a>
				</div>
				<!-- /banner -->

				<!-- banner -->
				<div class="col-md-4 col-md-offset-0 col-sm-6 col-sm-offset-3">
					<a class="banner banner-1" href="/events">
						<img data-src="{!! asset('images/event/tennjikai.png') !!}" src="{!! asset('images/event/tennjikai-small.png') !!}" alt="" class="lazy">

						<div><h2 style="text-align:center;margin-top:25px">{{ trans('index.show_conference') }}</h2></div>
					</a>
				</div>
				<!-- /banner -->

			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /section -->
</div>
<!-- /HOME -->


<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- section-title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">{{ trans('index.pickup_3d') }}</h2>
					<div class="pull-right">
						<div class="product-slick-dots-1 custom-dots"></div>
					</div>
				</div>
			</div>
			<!-- /section-title -->

			<!-- banner -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="banner banner-2">
					<img src="{!! asset('images/product/images.jpeg') !!}" alt="">
					<div class="banner-caption">
						
						<button class="primary-btn">{{ trans('index.advertisment') }}</button>
					</div>
				</div>
			</div>
			<!-- /banner -->

			<!-- Product Slick -->
			<div class="col-md-9 col-sm-6 col-xs-6">
				<div class="row">
					<div id="product-slick-1" class="product-slick">
						<!-- Product Single -->
						@foreach($pickup_3ds as $pickup_3d)
						<div class="product product-single">
							<div class="product-thumb">
								<div class="product-label">
									<span>{{ $pickup_3d->build_at }}</span>

								</div>
								<button class="main-btn quick-view"><a href="/product/single?product_id={{ $pickup_3d->id  }}"><i class="fa fa-search-plus"></i> 商品詳細へ</a></button>
								@if(!is_null($pickup_3d->icon_url))
								<img src="../{{ $pickup_3d->icon_url }}" alt="">
								@else
								<img src="" alt="">
								@endif
							</div>
							<div class="product-body">
								<h3 class="product-price">{{ $pickup_3d->name}} </h3>
								
								<h2 class="product-name"><a>{{ $pickup_3d->category}}</a></h2>
								<div class="product-btns">
									@if(!is_null($pickup_3d->three_d_url))
									<button class="primary-btn three-d-btn" value="{{ $pickup_3d->three_d_url }}"><a href="#threeDModal" data-toggle="modal">&nbsp&nbsp<i class="fa fa-share-alt"></i>&nbsp3D&nbsp&nbsp</a></button>
									@endif
									<button class="main-btn add-to-cart" id="{{ $pickup_3d->id }},product"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								</div>
							</div>
						</div>
						<!-- /Product Single -->
						@endforeach
						
					</div>
				</div>
			</div>
			<!-- /Product Slick -->
		</div>
		<!-- /row -->
		

		<!-- row -->
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">{{ trans('index.recommend_product') }}</h2>
					<div class="pull-right">
						<div class="product-slick-dots-2 custom-dots">
						</div>
					</div>
				</div>
			</div>
			<!-- section title -->

			
			<!-- Product Slick -->
			<div class="col-md-12 col-sm-6 col-xs-6">
				<div class="row">
					<div id="product-slick-1">
						@foreach($recommend_products as $recommend_product)
						<!-- Product Single -->
						
						<div class="product product-single">
							<div class="product-thumb">
								<button class="main-btn quick-view" id="{{ $recommend_product->id }}" ><a href="#PreviewModal" data-toggle="modal"><i class="fa fa-search-plus"></i> view</a></button>
								<img src="{{ $recommend_product->icon_url }}" alt="">
							</div>
							<div class="product-body">
								<h3 class="product-price"><a href="/product/single?product_id={{ $recommend_product->id }}">{{ $recommend_product->name }}</a></h3>
								
								
								<div class="product-btns">
									@if(!is_null($recommend_product->three_d_url))
									<button class="primary-btn three-d-btn" value="{{ $recommend_product->three_d_url }}"><a href="#threeDModal" data-toggle="modal">&nbsp&nbsp<i class="fa fa-share-alt"></i>&nbsp3D&nbsp&nbsp</a></button>
									@endif
									<button class="main-btn add-to-cart" id="{{ $recommend_product->id }},product"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
									<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								</div>
							</div>
						</div>
						<!-- /Product Single -->
						@endforeach
						<!-- Product Single -->				
					</div>
				</div>
			</div>
			<!-- /Product Slick -->

			
			
		</div>
		<!-- /row -->

		<!-- row -->
		<div class="row">
			
			@foreach($pickup_products as $pickup_product)
			<!-- Product Single -->
			<div class="col-md-3 col-sm-6 col-xs-6">
				<div class="product product-single product-hot">
					<div class="product-thumb">
						<div class="product-label">
							<span>{{ $pickup_product->category }}</span>
						</div>
						
						<button class="main-btn quick-view" id="{{ $pickup_product->id }}"><a href="#PreviewModal" data-toggle="modal"><i class="fa fa-search-plus"></i> view</a></button>
						<img src="{{ $pickup_product->icon_url }}" alt="">
					</div>
					<div class="product-body">
						<h3 class="product-price"><a href="/product/single?product_id={{ $pickup_product->id }}">{{ $pickup_product->name }}</a></h3>
						
						<div class="product-btns">
							@if(!is_null($pickup_product->three_d_url))
							<button class="primary-btn three-d-btn" value="{{ $pickup_product->three_d_url }}"><a href="#threeDModal" data-toggle="modal">&nbsp&nbsp<i class="fa fa-share-alt"></i>&nbsp3D</a>&nbsp&nbsp</button>
							@endif
							<button class="main-btn add-to-cart" id="{{ $pickup_product->id }},product"><a href="#InquiryModal" data-toggle="modal" >{{ trans('index.short_inquiry') }}</a></button>
							<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
	
						</div>
					</div>
				</div>
			</div>
			<!-- /Product Single -->
			@endforeach
			
			
		</div>
		<!-- /row -->
		@auth
		@if(count($favorite_list)>0)
		<div class="row">
			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h2 class="title">{{ trans('index.interest') }}</h2>
					<div class="pull-right">
						<div class="product-slick-dots-2 custom-dots">
						</div>
					</div>
				</div>
			</div>
			<!-- section title -->

			<div style="OVERFLOW-Y: hidden; OVERFLOW-X:scroll;width: 100%;">
				<table class="shopping-cart-table table">
                        <thead>
                            <tr>
								<th >
									<div style="width:300px">
										<div class="product product-single">
											<div class="product-thumb">
												<div class="product-label">
													<span>{{ $pickup_enterprise->city }}</span>

												</div>
												
												<img src="{!! asset($pickup_enterprise->icon_url) !!}" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">{{ $pickup_enterprise->name}} </h3>
												
												<h2 class="product-name"><a>{{ $pickup_enterprise->category}}</a></h2>
												<div class="product-btns">
													<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								
													<button class="primary-btn add-to-cart" id="{{ $pickup_enterprise->id }},enterprise"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
												</div>
											</div>
										</div>
									</div>
								</th >
								<th >
									<div style="width:300px">
										<div class="product product-single">
											<div class="product-thumb">
												<div class="product-label">
													<span>{{ $pickup_enterprise->city }}</span>

												</div>
												
												<img src="{!! asset($pickup_enterprise->icon_url) !!}" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">{{ $pickup_enterprise->name}} </h3>
												
												<h2 class="product-name"><a>{{ $pickup_enterprise->category}}</a></h2>
												<div class="product-btns">
													<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								
													<button class="primary-btn add-to-cart" id="{{ $pickup_enterprise->id }},enterprise"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
												</div>
											</div>
										</div>
									</div>
									</th >
								<th>
									<div style="width:300px">
										<div class="product product-single">
											<div class="product-thumb">
												<div class="product-label">
													<span>{{ $pickup_enterprise->city }}</span>

												</div>
												
												<img src="{!! asset($pickup_enterprise->icon_url) !!}" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">{{ $pickup_enterprise->name}} </h3>
												
												<h2 class="product-name"><a>{{ $pickup_enterprise->category}}</a></h2>
												<div class="product-btns">
													<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								
													<button class="primary-btn add-to-cart" id="{{ $pickup_enterprise->id }},enterprise"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
												</div>
											</div>
										</div>
									</div>
								</th>

								<th>
									<div style="width:300px">
										<div class="product product-single">
											<div class="product-thumb">
												<div class="product-label">
													<span>{{ $pickup_enterprise->city }}</span>

												</div>
												
												<img src="{!! asset($pickup_enterprise->icon_url) !!}" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">{{ $pickup_enterprise->name}} </h3>
												
												<h2 class="product-name"><a>{{ $pickup_enterprise->category}}</a></h2>
												<div class="product-btns">
													<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								
													<button class="primary-btn add-to-cart" id="{{ $pickup_enterprise->id }},enterprise"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
												</div>
											</div>
										</div>
									</div>
								</th>

								<th>
									<div style="width:300px">
										<div class="product product-single">
											<div class="product-thumb">
												<div class="product-label">
													<span>{{ $pickup_enterprise->city }}</span>

												</div>
												
												<img src="{!! asset($pickup_enterprise->icon_url) !!}" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-price">{{ $pickup_enterprise->name}} </h3>
												
												<h2 class="product-name"><a>{{ $pickup_enterprise->category}}</a></h2>
												<div class="product-btns">
													<button class="main-btn icon-btn"><i class="fa fa-heart"></i></button>
								
													<button class="primary-btn add-to-cart" id="{{ $pickup_enterprise->id }},enterprise"><a href="#InquiryModal" data-toggle="modal" > {{ trans('index.short_inquiry') }}</a></button>
												</div>
											</div>
										</div>
									</div>
								</th>

								
                            </tr>
                        </thead>
                        

                    </table>

			<div>
		</div>
		@endif

		
		@endauth
	</div>
	<!-- /container -->
</div>
<!-- /section -->

<div id="threeDModal" class="modal fade">
    <!-- class modal and fade -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal header -->
                <h4>3D View</h4>
            </div>
            <div class="modal-body" id="threeDView">
                
            </div>
            <div class="modal-footer">
				<!-- modal footer -->
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.close') }}</button>
                
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!--/ .modal -->

<div id="PreviewModal" class="modal fade">
    <!-- class modal and fade -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal header -->
                <h4>{{ trans('index.unite_corporation') }}</h4>
            </div>
            <div class="modal-body" id="inquireArea">
                <!-- section -->
                <div class="section">
                    <!-- container -->
                    <div class="container" id="quickView">

                        
                    </div>
                    <!-- /container -->
                </div>
                <!-- /section -->
            </div>
            <div class="modal-footer">
				<!-- modal footer -->
				<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.close') }}</button>
                
            </div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!--/ .modal -->

<div id="InquiryModal" class="modal fade">
    <!-- class modal and fade -->
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <!-- modal header -->
                <h4>{{ trans('index.unite_corporation') }}</h4>
			</div>
			
				<div class="modal-body" id="inquireArea">
					<!-- container -->
					<div class="container" id="inquiryView">

							
					</div>
					<!-- /container -->
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('index.close') }}</button>
				</div>

        </div> <!-- / .modal-content -->

    </div> <!-- / .modal-dialog -->
</div><!--/ .modal -->


@endsection


@section('script')



@show

