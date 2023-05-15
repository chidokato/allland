<section class="consultants-section">
	<div class="uk-container uk-container-center">
		<div class="uk-grid uk-flex-middle">
			<div class="uk-width-large-1-2 uk-visible-large">
				<div class="title">Bạn cần tư vấn? Gọi cho chúng tôi ngay bây giờ!</div>
				<div class="hotline">Hỗ trợ 24/7: <a href="tel: {{$head_setting->hotline}} " title="{{$head_setting->hotline}}">{{$head_setting->hotline}} </a></div>
			</div>
			<div class="uk-width-large-1-2">
				<form  action="dang-ky" method="POST" class="uk-form form" onsubmit="return validateForm()">
					<label class="uk-width-1-1 input-label">
						<input type="hidden" name="_token" value="{{csrf_token()}}" />
						<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
						<input type="tel" name="phone" class="uk-width-1-1 input-text" placeholder="0988888888" id="phone" />
					</label>
					<button type="submit" class="btn-submit">Đăng ký</button>
				</form>
														
			</div>
		</div><!-- .uk-grid -->
	</div>
</section><!-- .consultants-section -->
<footer class="footer"><!-- FOOTER -->
	<div class="overlay3">
		<div class="uk-container uk-container-center">
			<section class="upper">
				<div class="uk-grid uk-grid-medium">
					<div class="uk-width-small-1-2 uk-width-large-1-4 uk-width-xlarge-1-4">
						<section class="panel">
							<section class="panel-body">
								<p style="text-align:center"><img src="data/themes/{{$head_logo_trang->img}}" alt="{{$head_logo_trang->name}}" itemprop="logo" /></p>	
							</section>
						</section><!-- .panel -->
					</div>

					<div class="uk-width-small-1-1 uk-width-large-2-4 uk-width-xlarge-2-4">
						<section class="panel ft-contact">
							<header class="panel-head">
								<!-- <h3 class="heading"><span>Thông tin liên hệ</span></h3> -->
							</header>
							<section class="panel-body">
								<ul class="uk-list list">
									<li style="font-size: 1.4rem;"><div style='color: #fff; font-size: 14pt;line-height: 28px;'><strong>{{$head_setting->name}}</strong></div></li>
									<li >Địa chỉ: {{$head_setting->address}} </li>
									<li >Hotline: <a href="tel: {{$head_setting->hotline}}" title="Hotline">{{$head_setting->hotline}}</a> @if($head_setting->hotline1) - <a href="tel: {{$head_setting->hotline1}}" title="Hotline">{{$head_setting->hotline1}}</a> @endif</li>
									<li >Địa chỉ email: <a href="mailto: {{$head_setting->email}}" title="Email">{{$head_setting->email}}</a></li>
									<li >Website: <a target="_blank" href="{{asset('')}}" title="Website">allland.com.vn</a></li>
								</ul>
							</section>
						</section><!-- .panel -->
					</div>
					
					<div class="uk-width-small-1-1 uk-width-large-1-4 uk-width-xlarge-1-4">
						<section class="panel ft-contact">
							<header class="panel-head">
								<!-- <h3 class="heading"><span>Thông tin liên hệ</span></h3> -->
							</header>
							<section class="panel-body">
								<ul class="uk-list list">
									<li >
										<a href="https://allland.com.vn/">All land</a> | 
										<a href="https://allland.com.vn/gioi-thieu" >Giới thiệu</a> | 
										<a href="https://allland.com.vn/lien-he" >Liên hệ</a> | 
										<a href="">Chính sách bảo mật</a> | 
										<a href="https://allland.com.vn/sitemap">Sitemap</a>
									</li>
									<li>
										<!-- <a href="//www.dmca.com/Protection/Status.aspx?ID=57cafdb0-8cfc-46d7-a844-672a5e14bb31" title="DMCA.com Protection Status" class="dmca-badge"> <img src ="https://images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=57cafdb0-8cfc-46d7-a844-672a5e14bb31"  alt="DMCA.com Protection Status" /></a>  <script src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script> -->
									</li>
									<li>
										
										<!-- <a href="https://www.copyscape.com/"><img src="https://banners.copyscape.com/img/copyscape-banner-blue-200x25.png" width="200" height="25" border="0" alt="Protected by Copyscape" title="Protected by Copyscape - Do not copy content from this page." /></a> -->
										
									</li>
									<li>
									<!-- <a href="http://online.gov.vn/Home/WebDetails/62546"><img style='width: 65%;' alt="thông báo bộ công thương" src="/public/upload/files/logoSaleNoti.png"/></a> -->
									</li>
									
								</ul>
							</section>
						</section><!-- .panel -->
					</div>
					

				</div><!-- .uk-grid -->
			</section><!-- .upper -->
		</div>
	</div>

	<!-- <section class="lower">
		<div class="uk-container uk-container-center"> 
			<div class="uk-flex uk-flex-middle uk-flex-space-between container">
				<div class="copyright">© 2017 by <a href="#" title="">Glee</a>. All rights reserved | Design by <span  onclick="return false;" title="HTVietNam">HTVietNam</span></div>
				<div class="ft-social uk-visible-large">
					<ul class="uk-list uk-clearfix">
						<li class="facebook"><a href="#" title="Facebook" target="_blank"><i class="fa fa-facebook"></i></a></li>
						<li class="google"><a href="#" title="Google Plus" target="_blank"><i class="fa fa-google-plus"></i></a></li>
						<li class="instagram"><a href="#" title="Instagram" target="_blank"><i class="fa fa-instagram"></i></a></li>
						<li class="twitter"><a href="#" title="Twitter" target="_blank"><i class="fa fa-twitter"></i></a></li>
						<li class="youtube"><a href="#" title="youtube" target="_blank"><i class="fa fa-youtube"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section><!-- .lower -->
</footer><!--.footer -->




<div id="offcanvas" class="uk-offcanvas offcanvas">
	<div class="uk-offcanvas-bar">
		<form class="uk-search" action="" data-uk-search="{}">
		    <input class="uk-search-field" type="search" name="keyword" placeholder="Tìm kiếm...">
        </form>
		<ul class="l1 uk-nav uk-nav-offcanvas uk-nav uk-nav-parent-icon" data-uk-nav>
			<li>
				<a href="{{asset('')}}">Trang chủ</a>
			</li>
			@foreach($head_category as $item)
				@if($item['parent'] == 0)
					<li>
						<a href="{{$item->slug}}">{{$item->name}}</a>
						<?php $count = DB::table('tbl_category')->where('parent',$item->id)->count(); ?>
						<?php if($count>0) { subcategory ($head_category,$item['id']); } ?>
					</li>
				@endif
			@endforeach
		</ul>
	</div>
</div><!-- #offcanvas -->	

<script src="frontend/templates/frontend/resources/uikit/js/components/slider.min.js"></script>
<script src="frontend/templates/frontend/resources/uikit/js/components/slideshow.min.js"></script>
<script src="frontend/templates/frontend/resources/uikit/js/components/sticky.min.js"></script>
<script src="frontend/templates/frontend/resources/uikit/js/components/accordion.min.js"></script>
<script src="frontend/templates/frontend/resources/uikit/js/components/lightbox.min.js"></script>
<script src="frontend/templates/frontend/resources/plugins/Readmore/readmore.min.js"></script>
<script src="frontend/templates/frontend/resources/plugins/lightslider-master/dist/js/lightslider.min.js"></script>
<script src="frontend/templates/frontend/resources/function.js"></script>
<script src="frontend/templates/frontend/resources/library/js/library.js"></script>
<script src="frontend/templates/acore/function.js" type="text/javascript"></script>

<div id="modal-cart" class="uk-modal">
	<div class="uk-modal-dialog" style="width:768px;">
		<a class="uk-modal-close uk-close"></a>
		<div class="cart-content">
		
		</div>
	</div>
</div>

<div id="modal-alert" class="uk-modal">
	<div class="uk-modal-dialog uk-modal-dialog-small">
	   <a class="uk-modal-close uk-close"></a>
		<div class="alert-content"></div>
	</div>
</div>

