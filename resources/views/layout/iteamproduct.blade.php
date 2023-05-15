<div class="product">
	<div class="thumb">
		<a class="image img-cover img-shine" href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}">
			<img src="data/product/{{$val->img}}" alt="{{$val->name}}" />
		</a>
	</div>
	<div class="infor">
		<h3 class="title"><a href="{{$val->category->slug}}/{{$val->slug}}.html" title="{{$val->name}}">{{$val->name}}</a></h3>
		<p class='address'>{{$val->address}}, {{$val->district->name}}, {{$val->district->city->name}}</p>
		@if($val->price)
		<p><button class='price'>Giá {{$val->price}}</button></p>
		@else
		<p><button class='price'>Giá Liên hệ</button></p>
		@endif
	</div>
</div>