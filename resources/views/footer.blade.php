<!-- Page Footer-->
<footer class="section page-footer page-footer-default bg-primary-dark context-dark">
	<div class="footer-top">
		<div class="shell shell-fluid">
			<div class="range range-xl-condensed range-60 range-justify">
				<div class="cell-sm-6 cell-lg-2 cell-xl-2 cell-xl-preffix-1">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">{{trans('content.about')}}</h5>
						@if(LaravelLocalization::getCurrentLocale() == 'ru')
							<p>{{$about_text->short_desc}}</p>
						@elseif(LaravelLocalization::getCurrentLocale() == 'en')
							<p>{{$about_text->short_desc_en}}</p>
						@else
							<p>{{$about_text->short_desc_ua}}</p>
						@endif
					</div>
				</div>
				<!-- Contacts-->
				<div class="cell-sm-6 cell-lg-3 cell-xl-2">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">{{trans('content.our_contacts')}}</h5>
						<ul class="list-lg">
							<li>
								<div class="unit unit-horizontal unit-spacing-xxs">
									<div class="unit__left"><span class="icon icon-xs icon-white mdi mdi-map-marker"></span></div>
									<div class="unit__body">
										<a class="link-default" href="{{route('contact')}}#map_contact">{{trans('content.address')}}</a>
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
						<h5 class="decorative-title">{{trans('content.featured_sections')}}</h5>
						<ul class="list-marked list-marked-1">
							<li><a href="{{route('products')}}">{{trans('content.production')}}</a></li>
							<li><a href="{{route('contact')}}">{{trans('content.contacts')}}</a></li>
							<li><a href="{{route('about')}}">{{trans('content.about')}}</a></li>
						</ul>
					</div>
				</div>
				<!-- Form-->
				<div class="cell-sm-6 cell-lg-4 cell-xl-3 cell-xl-postfix-1">
					<div class="decorative decorative-md">
						<h5 class="decorative-title">{{trans('content.change_language')}}</h5>
						<ul class="list-marked list-marked-1">
						@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
							<li class="{{(LaravelLocalization::getCurrentLocale() == $localeCode)?'active':''}}">
								<a rel="alternate"
									hreflang="{{ $localeCode }}"
									href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
									{{ mb_strtoupper($localeCode) }}
								</a>
							</li>
						@endforeach
						</ul>
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