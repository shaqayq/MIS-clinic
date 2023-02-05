@extends('layouts.app')
@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">ویرایش کارمند</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-left">
					<li class="breadcrumb-item"><a href="#">کارمند</a>
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
			<form  method="post" action="{{route('employee.update',$emp->id)}}" enctype="multipart/form-data">
				@csrf
				{{method_field('PATCH')}}
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>نام</label>
								<input name="name" type="text" class="form-control" placeholder="نام  را وارد کنید!" value="{{$emp->e_name}}">
								<b style="color: red">{{$errors->first('name')}}</b>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>تخلص</label>
								<input name="l_name" type="text" class="form-control" placeholder="تخلص را وارد کنید!" value="{{$emp->last_name}}">
								<b style="color: red">{{$errors->first('l_name')}}</b>
							</div>
						</div>
					</div>
				  
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>ایمیل</label>
								<input  name="email" type="email" class="form-control" placeholder="ایمیل را وارد کنید!" value="{{$emp->email}}">
								<b style="color: red">{{$errors->first('email')}}</b>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputPassword1">شماره تماس</label>
								<input name="phone" class="form-control"  placeholder="شماره تماس را وارد کنید!" value="{{$emp->e_phone}}">
								<b style="color: red">{{$errors->first('phone')}}</b>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>وظیفه</label>
								<select class="form-control" style="width: 100%;" name="job">
									@foreach($job as $j)
									<option value="{{$j->id}}">{{$j->Pr_name}}</option>
									@endforeach
								</select>
								<b style="color: red">{{$errors->first('job')}}</b>
							</div>
						</div>
					</div>
				</div>
			
				<!-- /.card-body -->
				<center>
				<div class="card-footer">
					<button type="submit" class="btn btn-success"><i class="fa fa-save">ذخیره</i>
					</button>
					<a href="#">
						<button class="btn btn-danger"><i class="fa fa-remove">انصراف</i>
						</button>
					</a>
				</div>
			    </center>
			</form>
		</div>
		<!-- /.container-fluid -->
</section>
@endsection