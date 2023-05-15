@extends('layout.index')

@section('title')
Sitemap website maivietland.vn
@endsection
@section('description')
Sitemap website maivietland.vn
@endsection
@section('keywords')
Sitemap website maivietland.vn
@endsection
@section('robots')
index, follow
@endsection
@section('url')
<?php echo asset('').'sitemap'; ?>
@endsection

@section('content')
@include('layout.header')
<section id="body">
    <div id="product-page" class="page-body">
        <div class="breadcrumb">
            <div class="uk-container uk-container-center">
                <ul class="uk-breadcrumb">
                    <li><a href="{{asset('')}}" title="Trang chủ"><i class="fa fa-home"></i> Trang chủ</a></li>
                    <li class="uk-active"><a href="sitemap" title="Liên hệ">Sitemap</a></li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
        <div class="uk-container uk-container-center">
            <div class="uk-grid ">
                <div class="uk-width-large-1-1">
                    <div class="sitemap">
                        <ul>
							<li><a href='{{asset('')}}'>Trang chủ</a>
								<ul>
									@foreach($category as $cat)
										@if($cat->sort_by == 1)
										<li><a href='{{$cat->slug}}'>{{$cat->name}}</a>
											<ul>
												@foreach($cat->product as $pro)
												<li><a href='{{$cat->slug}}/{{$pro->slug}}.html'>{{$pro->name}}</a></li>
												@endforeach
											</ul>
										</li>
										@endif
										@if($cat->sort_by == 2)
										<li><a href='{{$cat->slug}}'>{{$cat->name}}</a>
											<ul>
												@foreach($cat->news as $new)
												<li><a href='{{$cat->slug}}/{{$new->slug}}/{{$new->id}}.html'>{{$new->name}}</a></li>
												@endforeach
											</ul>
										</li>
										@endif
										@if($cat->sort_by == 3)
										<li><a href='{{$cat->slug}}'>{{$cat->name}}</a></li>
										@endif
									@endforeach
								</ul>
							</li>
                        </ul>
                    </div>
					<style>
						.sitemap ul>li>ul{padding-left: 50px;border-left: 1px solid #ddd;}
						.sitemap ul>li{padding: 5px 0px;}
					</style>
                </div><!-- .uk-width-larg-3-4 -->
                
            </div><!-- .uk-grid -->
        </div><!-- .uk-container -->
    </div>
</section><!-- #body -->
<br>

@endsection
