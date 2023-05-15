@extends('admin.layout.index')

@section('product') class="active" @endsection

@section('content')
<?php use App\product_images; ?>
<form action="admin/product/addsection/{{$product->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<div class="row">
	<div class="col-md-4 col-sm-4 col-xs-4">
		<div class="panel panel-default">
			<div class="panel-heading">
                Thêm Section
            </div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-6">
						<label>Section</label>
						<select name='section' class="form-control">
							<option value='section1'><?php if($product->tab1){echo $product->tab1;}else{echo 'section1';} ?></option>
							<option value='section2'><?php if($product->tab2){echo $product->tab2;}else{echo 'section2';} ?></option>
							<option value='section3'><?php if($product->tab3){echo $product->tab3;}else{echo 'section3';} ?></option>
							<option value='section4'><?php if($product->tab4){echo $product->tab4;}else{echo 'section4';} ?></option>
							<option value='section5'><?php if($product->tab5){echo $product->tab5;}else{echo 'section5';} ?></option>
							<option value='section6'><?php if($product->tab6){echo $product->tab6;}else{echo 'section6';} ?></option>
							<option value='banner'>Banner</option>
						</select>
					</div>
					<div class="col-md-6">
						<label>Option</label>
						<select name='note' class="form-control">
							<option value='option'>Slider 1 ảnh</option>
							<option value='option 1'>Slider 2 ảnh</option>
							<option value='option 2'>Danh sách ảnh</option>
						</select>
					</div>
					<div class="col-md-6">
						<label>Images</label>
						<input style='width: 80%;float: left;' class="form-control" type="text" name="img" id="image">
						<button style='float: left;width: 20%;' onclick="BrowseServer();" class="btn" type="button">Go!</button>
					</div>
					<div class="col-md-12">
						<label>Name</label>
						<input required class="form-control" type="text" name="name" /> 
					</div>
					<div class="col-md-12">
						<label>Content</label>
						<textarea rows='5' class="form-control ckeditor" name="content"> </textarea>
					</div>
				</div>
			</div>
		</div>
	</div>
	<style>
	.col-md-2{position: relative;}
	.sua, .xoa{
		position: absolute;
		cursor: pointer;
		 background-color: #2f4356;
		padding: 3px;
		color: #fff;
		top: 5px;
	}
	.sua:hover, .xoa:hover{
		color: red;
	}
	.sua{
		left: 5px;   
	}
	.xoa{
		right: 5px;
	}
	</style>
	<div class="col-md-8 col-sm-8 col-xs-8">
		
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$product->tab1}}
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'section1')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p>
							<a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$product->tab2}}
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'section2')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p>
							<a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$product->tab3}}
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'section3')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p>
							<a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$product->tab4}}
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'section4')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p><a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$product->tab5}}
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'section5')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p>
							<a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
	
		<div class="panel panel-default">
			<div class="panel-heading">
				{{$product->tab6}}
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'section6')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p>
							<a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				Banner
            </div>
			<div class="panel-body" style='padding-top: 0px;'>
				<div class="row">
					@foreach($imadetail as $val)
						@if($val->section == 'banner')
						<div class="col-md-2" style='padding: 5px;'>
							<img style='width: 100%;height: 90px;object-fit: cover;' src='{{$val->img}}'>
							<p>{{$val->note}}</p>
							<a href='admin/product/delsection/{{$product->id}}/{{$val->id}}' class='xoa'>Xóa</a>
						</div>
						@endif
	               	@endforeach
              	</div>
			</div>
		</div>
	</div>
</div>
</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        
        var fieldHTML = '<div class="form-group add-img"> <a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="admin_asset/dist/img/remove-icon.png"></a> <input type="file" name="imgdetail[]" /> </div>';
        var x = 1;
        $('.add_button').click(function(){
            $('.form-wrapper').append(fieldHTML);
        });

        @for ($i = 1; $i < 8; $i++)
        var fieldHTML{{$i}} = '<div class="col-md-4 form-group add-img"> <a href="javascript:void(0);" class="remove_button" title="Remove field"><img src="admin_asset/dist/img/remove-icon.png"></a> <input type="file" name="imgdetail{{$i}}[]" /> </div>';
        var x = 1;
        $('.add_button{{$i}}').click(function(){
            $('.form-wrapper{{$i}}').append(fieldHTML{{$i}});
        });
        @endfor

        $(document).on('click', '.remove_button', function(e){ 
            e.preventDefault();
            $(this).parent('.form-group').remove();
            x--;
        });

        $(document).on('click', '#del', function(e){ 
            e.preventDefault();
            $(this).parent('.detail-img').remove();
            x--;
        });


    });
</script>

@endsection

