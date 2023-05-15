@extends('layout.index')

@section('title')
<?php if ( $category['title'] == '' ) echo $category['name']; else echo $category['title']; ?>
@endsection
@section('description')
<?php echo $category['description']; ?>
@endsection
@section('keywords')
<?php echo $category['keywords']; ?>
@endsection
@section('robots')
<?php if ( $category['robot'] == 0 ) echo "index, follow";  elseif ( $category['robot'] == 1 ) echo "noindex, nofollow"; ?>
@endsection
@section('url')
<?php echo asset('').$category['slug']; ?>
@endsection

@section('content')
@include('layout.header')

<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li class="uk-active"><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li >{{$category->name}}</li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
    <div class="uk-container uk-container-center">
        <div class="uk-grid ">
            <div class="uk-width-large-3-4">
                <section class="">
                    <header class="panel-head">
                        <h1 class="heading-2"><span>{{$category->name}}</span></h1>
                    </header>
                    <section class="panel-body">
                        <ul class="uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-2 list-product">
                            @foreach($product as $val)
                            <li>
                                @include('layout.iteamproduct')
                            </li>
                            @endforeach
                        </ul>
                    </section><!-- .panel-body -->
                    <footer class="panel-foot">
                        {{ $product->links() }}
                    </footer>
                </section><!-- .prdcatalogue -->
            </div><!-- .uk-width-larg-3-4 -->
            @include('layout.sitebar')
        </div><!-- .uk-grid -->
    </div><!-- .uk-container -->
</div>
</section><!-- #body -->

@endsection