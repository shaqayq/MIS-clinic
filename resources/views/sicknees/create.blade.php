@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ایجاد بیناری جدید</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">بیماری</a></li>
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
	<form method="post" action="{{route('sicknees.store')}}" enctype="multipart/form-data">
		  @csrf
		<div class="card-body">
			<div class="row">
				<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputEmail1">نام به فارسی</label>
				<input name="pr_name" type="text" class="form-control" placeholder="نام بیماری را به فارسی وارد کنید..">
				<b style="color: red">{{$errors->first('pr_name')}}</b>
			</div>
		</div>
		<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputPassword1">نام به لاتین</label>
				<input name="en_name" class="form-control" type="text" placeholder="نام بیماری را به لاتین وارد کنید..">
				<b style="color: red">{{$errors->first('en_name')}}</b>
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputPassword1">فیس</label>
				<input name="price" class="form-control" type="number" placeholder="فیس بیماری را وارد کنید..">
			</div>
			<b style="color: red">{{$errors->first('price')}}</b>
		</div>
		</div>
	</div>
		<!-- /.card-body -->
		<center>
				<div class="card-footer">
					<button type="submit" class="btn btn-success"><i class="fa fa-save"></i>ذخیره
					</button>
					<a href="{{route('sicknees.index')}}">
						<button class="btn btn-danger"><i class="fa fa-remove"></i>انصراف
						</button>
					</a>
				</div>
			    </center>
	</form>
	   </div><!-- /.container-fluid -->
    </section>
@endsection