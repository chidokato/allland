@extends('layout.index')

@section('title')
<?php if ( $datas['title'] == '' ) echo $datas['name']; else echo $datas['title']; ?>
@endsection
@section('description')
<?php echo $datas['desc']; ?>
@endsection
@section('keywords')
<?php echo $datas['key']; ?>
@endsection
@section('robots')
<?php if ( $datas['robot'] == 0 ) echo "index, follow";  elseif ( $datas['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$datas->category['slug'].'/'.$datas['slug'].'/'.$datas['id'].'.html'; ?>
@endsection
@section('img')
<?php echo asset('').'data/news/280-175/'.$datas['img']; ?>
@endsection

@section('content')
@include('layout.header')
<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li class="uk-active"><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="uk-active"><a href="{{asset('')}}{{$datas->category->slug}}" title="Trang chủ">{{$datas->category->name}}</a></li>
                    <li>{{$datas->name}}</li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
        <div class="uk-container uk-container-center">
            <div class="uk-grid ">
                <div class="uk-width-large-3-4">
                    <section class="artcatalogue">
                        <header class="panel-head">
                            <h1 class="heading-new">{{$datas->name}}</h1>
                        </header>
                        <section class="panel-body">
                            <div class='detail-content' style='padding: 10px 0px;'>
                                {!!$datas->content!!}
								<div id='tag'>
									<a href='{{$datas->category->slug}}/{{$datas->slug}}/{{$datas->id}}.html'>{{$datas->name}}</a> | 
									<a href='{{$datas->category->slug}}'>{{$datas->category->name}}</a>
								</div>
                            </div>
							@include('layout.comment')
                        </section><!-- .panel-body -->
                    </section>
                </div><!-- .uk-width-larg-3-4 -->
                @include('layout.sitebar')
            </div><!-- .uk-grid -->
        </div><!-- .uk-container -->
    </div>
</section><!-- #body -->
@endsection