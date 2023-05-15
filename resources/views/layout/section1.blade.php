@if(count($section1) > 0)
<div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 2000}">
	<div class="uk-slider-container">
		<ul style='margin-bottom: 0px;' class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 list-article" data-uk-grid-match="{target:'.title'}" >
			@foreach($section1 as $val)
				<li >
					<img style='margin-bottom: 0px !important;' src="{{$val->img}}" alt="{{$val->name}}" />
				</li>
			@endforeach
		</ul>
	</div>
</div>
@endif