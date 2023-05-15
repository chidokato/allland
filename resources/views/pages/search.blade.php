@extends('layout.index')

@section('title')
	Tìm kiếm dự án
@endsection

@section('content')
@include('layout.header')

<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li class="uk-active"><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li>Tìm kiếm</li>
                </ul>
            </div>
        </div>
    <div class="uk-container uk-container-center">
        <div class="uk-grid ">
            <div class="uk-width-large-3-4">
                <section class="">
                    <header class="panel-head">
                        <h1 class="heading-2"><span>Tìm kiếm: {{$key}}</span></h1>
                    </header>
                    <section class="panel-body">
                        <ul class="uk-grid lib-grid-20 uk-grid-width-1-2 uk-grid-width-medium-1-2 list-product">
                            @foreach($product as $val)
                            <li>
                                @include('layout.iteamproduct')
                            </li>
                            @endforeach
                        </ul>
                    </section>
                </section>
            </div>
            @include('layout.sitebar')
        </div>
    </div>
</div>
</section>
@endsection
