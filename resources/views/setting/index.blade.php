@extends('layouts.app')
@section('content')
 <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>پروفایل</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">داشبورد</a></li>
              <li class="breadcrumb-item active">پروفایل کاربری</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   <section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<!-- Profile Image -->
				<div class="card card-success card-outline">
					<div class="card-body box-profile">
						<div class="row">
							<div class="col-lg-6">
								<form method="post" action="{{route('setting.update',Auth::user()->id)}}" enctype="multipart/data-form">
									@csrf
									{{method_field('PATCH')}}
									<div>
									<label>ایمیل کاربری</label>
										<input type="text" name="email" class="form-control" placeholder="ایمیل کاربری تان را وارد کنید!" value="{{Auth::user()->email}}">
											<b style="color: red">{{$errors->first('email')}}</b>
									</div>
									<div>
										<label>پسورد</label>
										<input type="password" name="password" class="form-control" placeholder="رمز عبور جدید را وارد کنید!">
										<b style="color: red">{{$errors->first('password')}}</b>
									</div>
									<div>
										<label>تایید پسورد</label>
										<input type="password" name="password_confirmation" class="form-control" placeholder="رمز عبور را دوباره وارد نمایید!">
										<b style="color: red">
										{{$errors->first('password')}}</b>
									</div>
										<div class="card-footer">
										 <button class="btn btn-success btn-block" type="submite"><i class="fa fa-save"></i> تایید</button></div>


								</form>
									

									
								
							</div>
							<div class="col-lg-6">
								<div class="text-center">
									<img class="profile-user-img img-fluid img-circle" src="{{asset('style/dist/img/1.jpg')}}" alt="User profile picture" style="height: 300px;width: 300px">
								</div>
								<h3 class="profile-username text-center">{{Auth::user()->name}} <b></b> {{Auth::user()->L_name}}</h3>

								
							</div>
						</div>
					</div>
					<!-- /.card-body -->
				</div>
			</div>
		</div>
</section>
    <!-- /.content -->
@endsection