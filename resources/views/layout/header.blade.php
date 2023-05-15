@include('layout.function')
<header class="pc-header uk-visible-large">
  <div>
  <section class="lower" data-uk-sticky="{top: 0}">
    <div class="uk-container uk-container-center">
      <nav class="main-nav">
        <a class="logo" href="{{asset('')}}"> <img style="width: 140px;" src="data/themes/{{$head_logo->img}}"> </a>
        <ul class="uk-navbar-nav uk-clearfix main-menu">
          <li class='<?php if($activemenu == ''){echo 'active';} ?>'>
              <a  href="{{asset('')}}">Trang chủ</a>
          </li>
          @foreach($head_category as $item)
              @if($item['parent'] == 0)
                  <li class='<?php if($activemenu == $item->slug){echo 'active';} ?>' >
                      <a href="{{$item->slug}}">{{$item->name}}</a>
                      <?php $count = DB::table('tbl_category')->where('parent',$item->id)->count(); ?>
                      <?php if($count>0) { subcategory ($head_category,$item['id']); } ?>
                  </li>
              @endif
          @endforeach
			<li class='icon' style='margin-left: 35px; '>
				<a style="border-left: none;" target="_blank" href="{{$head_setting->facebook}}"><img alt='facebook' src='/public/upload/files/fb.png'></a>
			</li>
			<li class='icon'>
				<a style="border-left: none;" target="_blank" href="{{$head_setting->youtube}}"><img alt='facebook' src='/public/upload/files/youtube.png'></a>
			</li>
        </ul>
      </nav><!-- .main-nav -->    
    </div>
  </section><!-- .lower -->
  </div>
</header><!-- .header -->



<!-- MOBILE HEADER -->
<header class="mobile-header uk-hidden-large">
  <section class="upper" data-uk-sticky="{top: 0}">
    <a class="moblie-menu-btn skin-1" href="#offcanvas" class="offcanvas" data-uk-offcanvas="{target:'#offcanvas'}">
      <span>Menu</span>
    </a>
    <div class="logo">
      <a href="{{asset('')}}" title="{{$head_logo->name}}"><img src="data/themes/{{$head_logo->img}}" alt="{{$head_logo->name}}" /></a>
    </div>
    <a class="mobile-hotline" href="tel: {{$head_setting->hotline}}" title="Hotline">
      <span class="label">Hotline: </span>
      <span class="value">{{$head_setting->hotline}}</span>
    </a>
  </section><!-- .upper -->
 
</header><!-- .mobile-header -->