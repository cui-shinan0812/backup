
<!-- FOOTER -->
<footer id="footer" class="section section-grey">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<!-- footer logo -->
						<div class="footer-logo">
							<a class="logo" href="#">
								<img src="<?php echo asset('images/main/logo_footer.png'); ?>" alt="">
							</a>
						</div>
						<!-- /footer logo -->

						
						<!-- footer social -->
						<ul class="footer-social">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
						</ul>
						<!-- /footer social -->
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h4 class="footer-header"><?php echo e(trans('index.custom_center'), false); ?></h4>
						<ul class="list-links">
							<li><a href="#"><?php echo e(trans('index.help_center'), false); ?></a></li>
							<li><a href="/contact"><?php echo e(trans('index.inquiry'), false); ?></a></li>
							<li><a href="#"><?php echo e(trans('index.policy'), false); ?> & <?php echo e(trans('index.rule'), false); ?></a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<div class="clearfix visible-sm visible-xs"></div>

				<!-- footer widget -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h4 class="footer-header"><?php echo e(trans('index.custom_service'), false); ?></h4>
						<ul class="list-links">
							<li><a href="#"><?php echo e(trans('index.brief_introduction_corporation'), false); ?></a></li>
							<li><a href="/japanoem">FAQ</a></li>
						</ul>
					</div>
				</div>
				<!-- /footer widget -->

				<!-- footer subscribe -->
				<div class="col-md-3 col-sm-6 col-xs-6">
					<div class="footer">
						<h4 class="footer-header"><?php echo e(trans('index.news'), false); ?></h4>
						<p><?php echo e(trans('index.receiver_news_by_register_email'), false); ?></p>
						<form action="/news/registerEmail" method="POST">
						<?php echo e(csrf_field(), false); ?> 
							<div class="form-group">
								<input type="email" name="email" class="form-control" placeholder="<?php echo e(trans('index.input_email'), false); ?>">
							</div>
							<button class="btn btn-success"><?php echo e(trans('index.register'), false); ?></button>
						</form>
					</div>
				</div>
				<!-- /footer subscribe -->
			</div>
			<!-- /row -->
			<hr>
			<!-- row -->
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<!-- footer copyright -->
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made by <a href="https://kusunoki.tx" target="_blank">Kusunoki</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
					<!-- /footer copyright -->
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER --><?php /**PATH /var/www/html/kusunoki/resources/views/layouts/footer.blade.php ENDPATH**/ ?>