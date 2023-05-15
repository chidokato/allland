<!DOCTYPE HTML>
<html lang="vi-VN">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<base href="{{asset('')}}">
<!-- seo -->
<title>@yield('title')</title>
<meta name="description" content="@yield('description')"/>
<meta name="keywords" content="@yield('keywords')" />
<meta name="news_keywords" content="@yield('keywords')" />
<meta name="robots" content="@yield('robots')"/>
<meta name="author" content="Mai Việt Land"/>
<link rel="shortcut icon" href="data/themes/{{$head_setting->img}}" />
<link rel="canonical" href="@yield('url')"/>
<link rel="alternate" href="{{asset('')}}" hreflang="vi-vn" />
<!-- and seo -->
<!-- og -->
<meta property="og:locale" content="vi_VN">
<meta property="og:title" itemprop="title" content="@yield('title')">
<meta property="og:type" content="article">
<meta property="article:author" content="https://www.facebook.com/profile.php?id=100036334062760">
<meta property='article:publisher' content='https://www.facebook.com/profile.php?id=100036334062760'>
<meta property="og:description" itemprop="description" content="@yield('description')">
<meta property="og:url" itemprop="url" content="@yield('url')">
<meta property="og:site_name" content="{{$head_setting->name}}">
<meta property="og:image" itemprop="image" content="@yield('img')">
<meta property="og:image:alt" content="@yield('title')">
<meta property="fb:app_id" content="1056060257782954">
<!-- and og -->
<!-- GEO -->
<meta name="DC.title" content="Côngng Ty Cổ Phần Địa Ốc Mai Việt" />
<meta name="geo.region" content="VN-HN" />
<meta name="geo.placename" content="H&agrave; Nội" />
<meta name="geo.position" content="21.019988;105.790948" />
<meta name="ICBM" content="21.019988, 105.790948" />
<!-- GEO -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<!-- css -->
<link href="frontend/templates/acore/core.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/fonts/font-awesome-4.4.0/css/font-awesome.min.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/uikit/css/uikit.modify.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/library/css/reset.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/library/css/library.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/uikit/css/components/slideshow.min.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/plugins/lightslider-master/dist/css/lightslider.min.css" rel="stylesheet" />
<link href="frontend/templates/frontend/resources/style.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />
<script src="frontend/templates/frontend/resources/library/js/jquery.js"></script>
<script src="frontend/templates/frontend/resources/uikit/js/uikit.min.js"></script>

<!-- and css -->

@yield('css')

{!! $head_setting->codeheader !!}

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
	$(document).ready(function() {
  $("a[href*='#']:not([href='#])").click(function() {
    let target = $(this).attr("href");
    $('html,body').stop().animate({
      scrollTop: $(target).offset().top
    }, 500);
    event.preventDefault();
  });
});
</script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T7GPDCV');</script>
<!-- End Google Tag Manager -->
<meta name="google-site-verification" content="J-2hetlOHEyce6cZtOjVrL6hD2k6h7J-mDAx9W4eGOA" />

@include('layout.facebook')

<script language="javascript">
	function validateForm()
	{
		var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
		var mobile = $('#phone').val();
		if(mobile !==''){
			if (vnf_regex.test(mobile) == false) 
			{
				alert('Số điện thoại của bạn không đúng định dạng!');
				return false;
			}else{
				return true;
			}
		}else{
			alert('Bạn chưa điền số điện thoại!');
			return false;
		}
	}
	function validateForm1()
	{
		var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
		var mobile = $('#phone1').val();
		if(mobile !==''){
			if (vnf_regex.test(mobile) == false) 
			{
				alert('Số điện thoại của bạn không đúng định dạng!');
				return false;
			}else{
				return true;
			}
		}else{
			alert('Bạn chưa điền số điện thoại!');
			return false;
		}
	}
</script>

</head>
<body class="common-home">

@yield('content')
  
@include('layout.footer')
@include('layout.popup')


{!! $head_setting->codebody !!}

@yield('script')



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7GPDCV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->




</body>
</html>