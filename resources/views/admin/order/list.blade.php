@extends('admin.layout.index')

@section('order') class="current-page" @endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                News
            </div>
            <div class="panel-body" id="data-cat">
                @if(count($order) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
                <table width="100%" id="dataTables-example" class="table table-striped table-bordered table-hover" >
                    <thead>
                        <tr>
							<th>Status</th>
							<th>Name</th>
							<th>IP</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Link</th>
							<th>Date</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($order as $val) 
						<tr class="img">
							<td class="text-center">
								<input id="newstatus" name="status" <?php if($val->status == 'true'){echo "checked";} ?> type="checkbox"  />
							</td>
							<td>{{$val->name}}</td>
							<td>{{$val->ip}}</td>
							<td>{{$val->phone}}</td>
							<td>{{$val->email}}</td>
							<td>{{$val->link}}</td>
							<td>{{date_format(date_create($val->date),"d/m/Y")}}</td> 
							<td  class="text-center">
								
								<a onClick="javascript:return window.confirm('Bạn muốn xóa sản phẩm này?');" href="admin/order/delete/{{$val->id}}">
									<i class="fa fa-trash-o"></i> xóa
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				@endif
            </div>
        </div>
    </div>
</div>




@endsection