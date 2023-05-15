@extends('layout.index')

@section('title')
CÔNG TY CỔ PHẦN ĐỊA ỐC MAI VIỆT - INFO
@endsection
@section('description')
CÔNG TY CỔ PHẦN ĐỊA ỐC MAI VIỆT - INFO
@endsection
@section('keywords')

@endsection
@section('robots')
noindex, nofollow
@endsection
@section('url')
https://maivietland.vn/gioi-thieu
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
                <div class="uk-width-large-1-1">
                    <img style='width: 100%;' alt='giới thiệu mai việt land' src='/public/upload/files/gioi-thieu/1.jpg'>
					<img style='width: 100%;' alt='giới thiệu mai việt land' src='/public/upload/files/gioi-thieu/2.jpg'>
					<img style='width: 100%;' alt='giới thiệu mai việt land' src='/public/upload/files/gioi-thieu/3.jpg'>
					<img style='width: 100%;' alt='giới thiệu mai việt land' src='/public/upload/files/gioi-thieu/4.jpg'>
                </div><!-- .uk-width-larg-3-4 -->
            </div><!-- .uk-grid -->
        </div><!-- .uk-container -->
    </div>
</section><!-- #body -->



@endsection
