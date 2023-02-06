@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">ثبت مصارف</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">مصارف</a></li>
              <li class="breadcrumb-item active">فعالیتهای مالی</li>
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
	<form method="post" action="{{route('expend.update',$exp->id)}}" enctype="multipart/form-data">
		  @csrf
		  {{method_field('PATCH')}}
		<div class="card-body">
			<div class="row">
				<div class="col-lg-5">
					<div class="form-group">
						<label>تاریخ:</label>
						<input type="date" class="form-control" name="date" value="{{$exp->date}}" />
						<b style="color: red">{{$errors->first('date')}}</b>
					</div>
				</div>
				<div class="col-lg-5">
					<div class="form-group">
						<label for="exampleInputEmail1">مقدار:</label>
						<input type="text" name="cost" class="form-control"  value="{{$exp->cost}}">
						<b style="color: red">{{$errors->first('cost')}}</b>
					</div>
				</div>
		    </div>
		    <div class="row">
				<div class="col-lg-10">
					<div class="form-group">
						<label>از بابت:</label>
						<textarea name="behalf" class="form-control">{{$exp->behalf}}</textarea>
						<b style="color: red">{{$errors->first('behalf')}}</b>
					</div>
				</div>
		    </div>
		    <div class="form-group">
						<button type="submit" class="btn btn-success">تایید</button>
					</div>
	</form>
	     </div>
		
	</form>
	   </div><!-- /.container-fluid -->
    </section>
@endsection