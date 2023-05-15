@extends('layout.index')

@section('title')
Cảm ơn bạn đã đăng ký tư vấn dự án !
@endsection
@section('description')
Cảm ơn bạn đã đăng ký tư vấn dự án !
@endsection
@section('keywords')

@endsection
@section('robots')
noindex, nofollow
@endsection
@section('url')
<?php echo asset('').'dang-ky'; ?>
@endsection

@section('content')
@include('layout.header')
<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="uk-active"><a href="lien-he" title="Liên hệ">Liên hệ</a></li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
        <div class="uk-container uk-container-center">
            <div class="uk-grid ">
                <div class="uk-width-large-2-4">
                    <article class="article detail-content">
                        <h1 style='text-align: center;'>Cảm ơn quý khách đã đăng ký nhận thông tin !</h1>
						<p style='text-align: center;'>Chúng tôi sẽ liên hệ với quý khách hàng trong thời gian sớm nhất !</p>
                    </article><!-- .article -->
                    
                </div><!-- .uk-width-larg-3-4 -->
                <div class="uk-width-large-2-4">
					<iframe style='width: 100%;' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5266.983083486075!2d105.78811344351132!3d21.01990011594843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab340adf661d%3A0x2a7f8077e770d451!2zQ8O0bmcgVHkgQ-G7lSBQaOG6p24gxJDhu4thIOG7kGMgTWFpIFZp4buHdA!5e0!3m2!1svi!2s!4v1562666860275!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div><!-- .uk-grid -->
        </div><!-- .uk-container -->
    </div>
</section><!-- #body -->
<br>

@endsection
