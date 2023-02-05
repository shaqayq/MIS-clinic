@extends('layouts.app')
@section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">افزودن کاربر جدید</h1>
			</div>
			<!-- /.col -->
			<div class="col-sm-6">
				<ol class="breadcrumb float-sm-left">
					<li class="breadcrumb-item"><a href="#">کاربران</a>
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
			<form  method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
				@csrf
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>نام</label>
								<input name="name" type="text" class="form-control" placeholder="نام  را وارد کنید!">
								<b style="color: red">{{$errors->first('name')}}</b>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>تخلص</label>
								<input name="l_name" type="text" class="form-control" placeholder="تخلص را وارد کنید!">
								<b style="color: red">{{$errors->first('l_name')}}</b>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>ایمیل</label>
								<input  name="email" type="email" class="form-control" placeholder="ایمیل را وارد کنید!">
								<b style="color: red">{{$errors->first('email')}}</b>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label for="exampleInputPassword1">شماره تماس</label>
								<input name="phone" class="form-control"  placeholder="شماره تماس را وارد کنید!">
								<b style="color: red">{{$errors->first('phone')}}</b>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="form-group">
								<label>پسورد</label>
								<input name="password" type="password" class="form-control" placeholder="پسورد را وارد کنید!">
								<b style="color: red">{{$errors->first('password')}}</b>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="form-group">
								<label>تایید پسورد</label>
								<input type="password" name="password_confirmation" class="form-control" placeholder="پسورد تان را دوباره وارد کنید!">
								<b style="color: red">{{$errors->first('password_confirmation')}}</b>
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
							</div>
						</div>
					
						<div class="col-lg-6">
							<div class="form-group">
								<label>صلاحیت</label>
								<select class="form-control" style="width: 100%;" name="role">
									@foreach($role as $r)
									<option value="{{$r->E_name}}">{{$r->P_name}}</option>
									@endforeach
								</select>
							</div>
						  </div>	
						</div>		
						<div class="form-group">
						<button type="submit" class="btn btn-success">تایید</button>
					</div>
	</form>		
				</div>
				
			
		</div>
		<!-- /.container-fluid -->
</section>
@endsection