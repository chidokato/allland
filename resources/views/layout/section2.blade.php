@if(count($section2) > 0)
<div class="" >
	<div class="uk-container">
		<ul style='margin-bottom: 0px;' class=" uk-grid lib-grid-20 uk-grid-width-1-1 uk-grid-width-medium-1-2 uk-grid-width-large-1-2 list-article" >
			@foreach($section2 as $val)
				<li>
					<div class='section-iteam'>
						<a class="image img-cover" href="{{$val->img}}" title="" data-uk-lightbox="{group:'gallerys'}">
							<img src="{{$val->img}}" alt="{{$val->name}}" />
						</a>
						<p>{{$val->name}}</p>
						<p>{{$val->content}}</p>
					</div>
				</li>
			@endforeach
		</ul>
	</div>
</div>
@endif