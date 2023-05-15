@extends('layout.index')

@section('title')
<?php if ( $category['title'] == '' ) echo $category['name']; else echo $category['title']; ?>
@endsection
@section('description')
<?php echo $category['desc']; ?>
@endsection
@section('keywords')
<?php echo $category['key']; ?>
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
                    <li>{{$category->name}}</li>
                </ul>
            </div>
        </div><!-- .breadcrumb -->
    <div class="uk-container uk-container-center">
        <div class="uk-grid ">
            <div class="uk-width-large-3-4">
                <section class="artcatalogue">
                    <header class="panel-head">
                        <h1 class="heading-2"><span>{{$category->name}}</span></h1>
                    </header>
                    <section class="panel-body">
                        <ul class="uk-list list-article">
                            @foreach($news as $val)
                            <li>
                                <article style='padding: 0;' class="article uk-clearfix">
                                    <div class="thumb img-flash">
                                        <a class="image img-cover" href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html" title="{{$val->name}}"><img style='height: 100%;' src="data/news/280-175/{{$val->img}}" alt="{{$val->name}}"></a>
                                    </div>
                                    <div class="info">
                                        <h2 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}/{{$val->id}}.html" title="{{$val->name}}">{{$val->name}}</a></h2>
                                        <div class="meta">
                                            <i class="fa fa-user"></i> {{$val->user}}
                                            <i class="fa fa-clock-o"></i> {{$val->date}}
                                            <i class="fa fa-folder-open"></i> {{$val->category->name}}
                                            <i class="fa fa-eye"></i> {{$val->hits}}view
                                        </div>
                                        <div class="description lib-line-4">{{$val->detail}}</div>
                                    </div>
                                </article><!-- .article-1 -->
                            </li>
                            @endforeach
                        </ul><!-- .list-article -->
						{{ $news->links() }}
                    </section><!-- .panel-body -->
                </section>
            </div><!-- .uk-width-larg-3-4 -->
            @include('layout.sitebar')
        </div><!-- .uk-grid -->
    </div><!-- .uk-container -->
    
</div>

</section><!-- #body -->
@endsection