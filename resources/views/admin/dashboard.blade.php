@extends('admin.layout.index')

@section('dashboard') class="active" @endsection

@section('content')

<div class="row">
  <div class="col-lg-12">
      <h1 class="page-header">Dashboard</h1>
  </div>
</div>
<!-- /.row -->
<div class="row">
    
    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <a style="color:#fff" href="admin/category/list"> 
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ count($category) }}</div>
                            <div>Category ! </div>
                        </div>
                    </a>
                </div>
            </div>
            <a href="admin/category/add">
                <div class="panel-footer">
                    <span class="pull-left">add category</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <a style="color:#fff" href="admin/product/list"> 
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ count($product) }}</div>
                            <div>Product ! </div>
                        </div>
                    </a>
                </div>
            </div>
            <a href="admin/product/add">
                <div class="panel-footer">
                    <span class="pull-left">add product</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <a style="color:#fff" href="admin/news/list"> 
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ count($news) }}</div>
                            <div>News ! </div>
                        </div>
                    </a>
                </div>
            </div>
            <a href="admin/news/add">
                <div class="panel-footer">
                    <span class="pull-left">add news</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <a style="color:#fff" href="admin/user/list"> 
                        <div class="col-xs-3">
                            <i class="fa fa-tasks fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge">{{ count($user) }}</div>
                            <div>User ! </div>
                        </div>
                    </a>
                </div>
            </div>
            <a href="admin/user/add">
                <div class="panel-footer">
                    <span class="pull-left">add user</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    
</div>
<!-- /.row -->
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
					<form>
						<input type='date' name='date1' />
						<input type='date' name='date2' />
						<input type='submit' />
					</form>
<?php
  
$period = new DatePeriod(
	new DateTime('2019-09-06'),
	new DateInterval('P1D'),
	new DateTime('2019-09-12')
);
$thuBay = 0;
$chuNhat = 0;
foreach ($period as $key => $value) {
	$timestamp = strtotime($value->format('Y-m-d'));	
	$day = date('l', $timestamp);
	if($day == 'Saturday')
		$thuBay++;
	if($day == 'Sunday')
		$chuNhat++;
}
echo $thuBay;
echo $chuNhat;
  

?>

					</div>
                    <div class="col-lg-8">
                        <div id="morris-bar-chart"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
