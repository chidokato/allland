@extends('admin.layout.index')

@section('comment') class="active" @endsection

@section('content')

<form action="admin/comment/edit/{{$data->id}}" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="{{csrf_token()}}" />

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            <button type="submit" class="btn btn-primary btn-sm"><i class='fa fa-save'></i> SAVE</button>
        </h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
@include('admin.errors.alerts')

<div class="row">
    <div class="col-lg-9">
        <div class="panel panel-default">
            <div class="panel-heading">
                comment
            </div>
            <div class="panel-body">
                <div class="row">
					<div class="col-md-4">
	                    <label>Name</label>
                        <input required value="{{$data->name}}" name='name' type="text" placeholder="Tên ..." class="form-control" />
	                </div>
					<div class="col-md-4">
	                    <label>Số đt</label>
                        <input value="{{$data->phone}}" name='phone' type="text" placeholder="phone ..." class="form-control" />
	                </div>
					<div class="col-md-12">
	                    <label>Comment</label>
                        <textarea rows='5' name="content" class="form-control">{{$data->content}}</textarea>
	                </div> 
					<div class="col-md-12">
	                    <label>Trả lời</label>
                        <textarea rows='5' name="reply" class="form-control">{{$data->reply}}</textarea>
	                </div>
	                
                  	
              	</div>
            </div>
        </div>
    </div>
</div>
</form>
@endsection
