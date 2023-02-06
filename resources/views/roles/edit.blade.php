@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ایجاد صلاحیت جدید</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">صلاحیت ها</a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
      <div class="container-fluid">
 <div class="card card-success card-outline">
	
	<!-- /.card-header -->
	<!-- form start -->
	<form method="post" action="{{route('role.update',$role->id)}}" enctype="multipart/form-data">
		  @csrf
		  {{ method_field('PATCH') }}
		<div class="card-body">
			<div class="row">
				<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputEmail1">نام صلاحیت</label>
				<input value="{{$role->P_name}}" name="p_name" class="form-control" id="p_name" placeholder="نام صلاحیت را وارد کنید!">
			</div>
		</div>
		<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputPassword1">نام صلاحیت به انگلیسی</label>
				<input value="{{$role->E_name}}"  name="e_name" class="form-control" id="role" placeholder="رول را به انگلیسی وارد کنید!" disabled="true">
			</div>
		</div>
		</div>
		          <div class="form-group">
						<button type="submit" class="btn btn-success">تایید</button>
					</div>
	</form>
	</div>
	              
	   </div><!-- /.container-fluid -->
    </section>
@endsection