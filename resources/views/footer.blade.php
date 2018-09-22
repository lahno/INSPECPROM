<!-- Page Footer-->
<footer class="section page-footer page-footer-default bg-primary-dark context-dark">
	<div class="footer-top">
		<div class="shell shell-fluid">
			<div class="range range-xl-condensed range-60 range-justify">
				<div class="cell-sm-6 cell-lg-2 cell-xl-2 cell-xl-preffix-1">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">О нас</h5>
						<p>{{$about_text->short_desc}}</p>
					</div>
				</div>
				<!-- Contacts-->
				<div class="cell-sm-6 cell-lg-3 cell-xl-2">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">Наши контакты</h5>
						<ul class="list-lg">
							<li>
								<div class="unit unit-horizontal unit-spacing-xxs">
									<div class="unit__left"><span class="icon icon-xs icon-white mdi mdi-map-marker"></span></div>
									<div class="unit__body">
										<a class="link-default" href="{{route('contact')}}#map_contact">{{Config::get('contacts.address')}}</a>
									</div>
								</div>
							</li>
							<li>
								<div class="unit unit-horizontal unit-spacing-xxs unit-middle">
									<div class="unit__left"><span class="icon icon-xs icon-white mdi mdi-email-outline"></span></div>
									<div class="unit__body">
										<a class="link-default" href="mailto:{{Config::get('contacts.email')}}">{{Config::get('contacts.email')}}</a>
									</div>
								</div>
							</li>
							<li>
								<div class="unit unit-horizontal unit-spacing-xxs unit-middle">
									<div class="unit__left"><span class="icon icon-xs icon-white mdi mdi-phone"></span></div>
									<div class="unit__body">
										<a class="link-default" href="callto:{{Config::get('contacts.phone')}}">{{Config::get('contacts.phone')}}</a>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
				<!-- Links-->
				<div class="cell-sm-6 cell-lg-3 cell-xl-2">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">Популярные разделы</h5>
						<ul class="list-marked list-marked-1">
							<li><a href="{{route('products')}}">Продукция</a></li>
							<li><a href="{{route('contact')}}">Контакты</a></li>
							<li><a href="{{route('about')}}">О нас</a></li>
						</ul>
					</div>
				</div>
				<!-- Form-->
				<div class="cell-sm-6 cell-lg-4 cell-xl-3 cell-xl-postfix-1">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">Рассылка</h5>
						<p>Subscribe to our newsletter to receive updates on our company's products, news, and special offers.</p>
						<!-- RD Mailform-->
						<form class="rd-mailform rd-mailform-inline rd-mailform-small text-left" data-form-output="form-output-global" data-form-type="forms" method="post" action="bat/rd-mailform.php" novalidate="novalidate">
							<div class="form-wrap">
								<label class="form-label rd-input-label" for="inline-email-1">Enter your e-mail</label>
								<input class="form-input form-control-has-validation form-control-last-child" id="inline-email-1" type="email" name="email" data-constraints="@Email @Required"><span class="form-validation"></span>
							</div>
							<button class="button button-sm button-secondary" type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	{{--<div class="footer-bottom text-center text-sm-left">
		<div class="shell shell-fluid">
			<div class="range range-xl-condensed range-15 range-justify">
				<div class="cell-sm-6 cell-xl-5 cell-xl-preffix-1">
					<p class="small">© <span id="copyright-year">2018</span>All Rights Reserved <a class="link-default" href="terms-of-use.html">Terms of Use</a> and <a class="link-default" href="privacy-policy.html">Privacy Policy</a>
					</p>
				</div>
				<div class="cell-sm-6 cell-xl-5 cell-xl-postfix-1 text-sm-right">
					<ul class="list-inline-sm inline-block">
						<li><a class="icon icon-xxs link-default fa fa-facebook" href="#"></a></li>
						<li><a class="icon icon-xxs link-default fa fa-twitter" href="#"></a></li>
						<li><a class="icon icon-xxs link-default fa fa-pinterest" href="#"></a></li>
						<li><a class="icon icon-xxs link-default fa fa-vimeo" href="#"></a></li>
						<li><a class="icon icon-xxs link-default fa fa-google" href="#"></a></li>
						<li><a class="icon icon-xxs link-default fa fa-rss" href="#"></a>
							<!-- {%FOOTER_LINK}-->
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>--}}
</footer>