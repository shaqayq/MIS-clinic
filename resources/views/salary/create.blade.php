@extends('layouts.app')
 @section('content')
 <script type="text/javascript">
  
 	function findLoan(){
 		var total=document.getElementById('total').value;
 		var cash=document.getElementById('cash').value;
 		document.getElementById('loan').value=total-cash;
 	}


 </script>

<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">پرداخت معاش</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-left">
					<li class="breadcrumb-item"><a>مراجعین</a>
					</li>
					<li class="breadcrumb-item active">داشبورد ورژن 2</li>
				</ol>
			</div>
			<!-- /.col -->
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<!-- /.content-header -->
<section class="content">
	<div class="container-fluid">
		<div class="card card-success card-outline">
			<!-- /.card-header -->
			<!-- form start -->
			<form  method="post" action="{{route('salary.store')}}" enctype="multipart/form-data">
				@csrf
				<input name="id" value="{{$emp->id}}" hidden="hidden">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">نام</label>
								<input name="name" type="text" class="form-control" value="{{$emp->e_name}}" disabled="">

							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">تخلص:</label>
								<input name="l_name" class="form-control" type="text" value="{{$emp->last_name}}" disabled="">
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">معاش تعیین شده:</label>
								<input type="text" class="form-control" name="total" id="total">
								<b style="color: red">{{$errors->first('total')}}</b>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>تاریخ:</label>
								<input type="date" class="form-control" name="date" />
								<b style="color: red">{{$errors->first('date')}}</b>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>پرداخت:</label>
								<input type="text" class="form-control" name="cash" placeholder="مقدار پرداخت شده معاش را وارد نمایید" id="cash">
								<b style="color: red">{{$errors->first('cash')}}</b>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>باقی:</label>
								<input  name="loan" class="form-control" placeholder="مقدار باقی مانده معاش را وارد نمایید" onclick="findLoan();" id="loan">
								<b style="color: red">{{$errors->first('loan')}}</b>
							</div>
						</div>
					</div>
				</div>
				    <div class="form-group">
						<button type="submit" class="btn btn-success">تایید</button>
					</div>
			</div>

			
		</div>
		<!-- /.container-fluid -->
</section>
 <script>
 	  jQuery(document).ready(function() {
 	  	 jQuery('#datepicker').datepicker();
            jQuery('#datepicker-autoclose').datepicker({
                autoclose: true,
                todayHighlight: true
            });
 	  }
 </script>
@endsection