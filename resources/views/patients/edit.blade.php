@extends('layouts.app') @section('content')
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0 text-dark">ویرایش مراجع</h1>
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
			<form  method="post" action="{{route('patient.update',$patient->id)}}" enctype="multipart/form-data">
				@csrf
				 {{ method_field('PATCH') }}
				
				<div class="card-body">
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">نام</label>
								<input name="name" type="text" class="form-control"  value="{{$patient->name}}">
								<b style="color: red">{{$errors->first('name')}}</b>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">نام پدر</label>
								<input name="f_name" class="form-control" type="text" value="{{$patient->f_name}}">
								<b style="color: red">{{$errors->first('f_name')}}</b>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">تخلص</label>
								<input name="l_name" class="form-control" type="text" value="{{$patient->L_name}}">
								<b style="color: red">{{$errors->first('l_name')}}</b>
							</div>
						</div>
						
					</div>
		
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label for="exampleInputEmail1">سن</label>
								<input type="text" class="form-control" name="age" value="{{$patient->age}}">
								<b style="color: red">{{$errors->first('age')}}</b>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>جنسیت</label>
								<select class="form-control" style="width: 100%;" name="sex">
									<option value="مرد">مرد</option>
									<option value="زن">زن</option>
								</select>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="form-group">
								<label>وظیفه</label>
								<input name="job" type="text" class="form-control" value="{{$patient->job}}">
								<b style="color: red">{{$errors->first('job')}}</b>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4">
							<div class="form-group">
								<label>تاریخ مراجعه</label>
								<div class="input-group">
									<div class="input-group-prepend"> 
										<span class="input-group-text">
					                        <i class="fa fa-calendar"></i>
					                     </span>
									</div>
									<input type="date" class="form-control" name="date" value="{{$patient->date}}" />
									<b style="color: red">{{$errors->first('date')}}</b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
				<!-- /.card-body -->
				<center>
				<div class="card-footer">
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>ذخیره
					</button>
					<a href="#">
						<button class="btn btn-danger"><i class="fa fa-remove"></i>انصراف
						</button>
					</a>
				</div>
			    </center>
			</form>
		</div>
		<!-- /.container-fluid -->
</section>
@endsection