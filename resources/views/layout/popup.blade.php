<div class="hotline-phone-ring-wrap">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
		<a href="tel:0961.38.38.11" class="pps-btn-img">
			<img src="/public/upload/files/icon-call-nh.png" alt="Gọi điện thoại" width="50">
		</a>
		</div>
	</div>
	<div class="hotline-bar">
		<a href="tel:0961383811">
			<span class="text-hotline">{{$head_setting->hotline}}</span>
		</a>
	</div>
</div>

<div class="hotline-phone-ring-wrap form fancybox-hidden" id="myBtn">
	<div class="hotline-phone-ring">
		<div class="hotline-phone-ring-circle"></div>
		<div class="hotline-phone-ring-circle-fill"></div>
		<div class="hotline-phone-ring-img-circle">
			<img src="/public/upload/files/email-icon.png" alt="đăng ký" width="50">
		</div>
	</div>
</div>

<div id="myModal" class='pubup'>
	<h3>TẢI XUỐNG BỘ TÀI LIỆU DỰ ÁN</h3>
	<p>Tài liệu gửi quý khách gồm có: Mặt bằng, bảng giá, ưu đãi, chính sách bán hàng ...</p>
	@if(count($errors) > 0)
		@foreach($errors->all() as $err)
			<div class="alert">
				<button type="button" class="close" data-dismiss="alert">×</button>
				<strong>{{$err}} !</strong>
			</div>
		@endforeach
	@endif
	<form class='form-dang-ky' action="dang-ky" method="POST" enctype="multipart/form-data" >
		<input type="hidden" name="_token" value="{{csrf_token()}}" />
		<input type="hidden" name="link" value="<?php echo 'http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>" />
		<p><input type="text" placeholder="Họ và tên" class="" name="name"></p>
		<p><input required type="tel" placeholder="Số điện thoại (*)" class="" name="phone" id="phone"><p>
		<p><input type="email" placeholder="Địa chỉ email" class="" name="email"><p>
		<p><button style='background-color: #2e6034;color: #fff;padding: 10px 20px;border: none;border-radius: 5px;' type="submit"><i class='fa fa-download' aria-hidden='true'></i> TẢI XUỐNG </button></p>
	</form>
	<a id="myclose" style="display: inline;"></a>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$("#myclose").click(function(){
		$("#myModal").toggleClass("fancybox-hidden");
		$("#myBtn").toggleClass("fancybox-hidden");
	});
	$("#myBtn").click(function(){
		$("#myModal").toggleClass("fancybox-hidden");
		$("#myBtn").toggleClass("fancybox-hidden");
	});
});
</script>

<style type="text/css">
.pubup{
	position: fixed;
    text-align: center;
    margin: 0 auto;
	z-index: 999999;
    background-color: #e78a23;
    padding: 20px 20px 5px;
	-webkit-animation-name: example;  /* Safari 4.0 - 8.0 */
    -webkit-animation-duration: 3s;  /* Safari 4.0 - 8.0 */    
    -webkit-animation-fill-mode: forwards; /* Safari 4.0 - 8.0 */
    animation-name: example;
    animation-duration: 2s;    
    animation-fill-mode: forwards;
	width: 450px;box-shadow: 0px 0px 10px 2px;
}

@-webkit-keyframes example {
    from {right: -500px; bottom:40px}
    to {right: 50px;bottom:40px}
}

@keyframes example {
    from {right: -500px; bottom:40px}
    to {right: 50px;bottom:40px}
}
.pubup input[type='text'], .pubup input[type='tel'], .pubup input[type='email']{
	padding: 5px 10px;width: 100%;
}
.pubup input[type='submit']{
	background-color: #e78a23;
	color: #fff;
	font-weight: bold;
	padding: 0px 22px;
	border-radius: 5px;
	margin: 0;
	padding: 5px 25px;
	cursor: pointer;
}
.pubup h3{
	color: #fff;
    margin: 0px 0px 10px 0px;
}
.pubup p{
	color: #fff;
}

#myclose {
    position: absolute;
    top: -15px;
    right: -15px;
    width: 30px;
    height: 30px;
    background: url(/public/upload/files/fancybox.png) -40px 0;
    cursor: pointer;
    z-index: 111103;
    display: none;
}
.fancybox-hidden{
	display: none;
}
@media only screen and (max-width: 600px) {
    .pubup{
		z-index: 9999999;
		width: 80%;
	}
	@-webkit-keyframes example {
		from {right: -500px; bottom:25vh}
		to {right: 9%;bottom:25vh}
	}
	@keyframes example {
		from {right: -500px; bottom:25vh}
		to {right: 9%;bottom:25vh}
	}
	.trang{
		width: 100%;
		height: 100vh;
		background-color: #ffffffc2;
		position: fixed;
		z-index: 999999;
	}
}
</style>