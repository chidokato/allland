@if(count($section) > 0)
<div class="uk-slidenav-position slider" data-uk-slider="{autoplay: true, autoplayInterval: 2500}">
	<div class="uk-slider-container">
		<ul style='margin-bottom: 10px;' class="uk-slider uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-1 uk-grid-width-large-1-1 list-article" data-uk-grid-match="{target:'.title'}" >
			@foreach($section as $val)
				<li >
					<img style='margin-bottom: 0px !important;width: 100% !important;' src="{{$val->img}}" alt="{{$val->name}}" />
				</li>
			@endforeach
		</ul>
	</div>
</div>
@endif