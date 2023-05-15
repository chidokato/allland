@extends('admin.layout.index')

@section('comment') class="active" @endsection

@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <a href="admin/comment/add"><button type="button" class="btn btn-primary btn-sm"><i class='fa fa-plus'></i> ADD</button></a>
        </h1>
    </div>
</div>
@include('admin.errors.alerts')
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                comment
            </div>
            <div class="panel-body">
                @if(count($comment) == 0)
                    <h2 style="color:red">The list is empty !!</h2>
                @else
                <table width="100%" class="table table-striped table-bordered table-hover" >
                    <thead>
                        <tr>
							<th>Name</th>
							<th>Phone</th>
							<th>Date</th>
							<th>Link</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>
						@foreach($comment as $val)
						<tr class="img">
							<td>{{$val->name}}</td>
							<td>{{$val->phone}}</td>
							<td>{{$val->date}}</td>
							<td><a href='{{$val->link}}'>Link</a></td>
							<td  class="text-center">
								<a href="admin/comment/edit/{{$val->id}}">
									<i class="fa fa-pencil"></i> Trả lời
								</a> |
								<a onClick="javascript:return window.confirm('Bạn muốn xóa sản phẩm này?');" href="admin/comment/delete/{{$val->id}}">
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
