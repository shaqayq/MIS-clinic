@extends('layouts.app')
@section('content')
  
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">جزییات معالجه بیمار</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">تشخیصیه</a></li>
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
	<form method="post" action="{{route('p_detail.update',$sick->id)}}" enctype="multipart/form-data">
		  @csrf
		  {{ method_field('PATCH') }}
		<div class="card-body">
			<div class="row">
			<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputEmail1">نام بیمار</label>
				<input type="name" name="p_name" class="form-control" id="p_name" disabled="" value="{{$patient->name}}">
				
			</div>
		</div>
		<div class="col-lg-5">
			<div class="form-group">
				<label for="exampleInputPassword1">تخلص بیمار</label>
				<input type="l_name"  name="e_name" class="form-control" id="role" value="{{$patient->l_name}}" disabled="">
			</div>
		</div>
		</div>
		<div class="row">
			<div class="col-lg-5">
			<label>بیماری</label>
			<input type="l_name"  name="sick" class="form-control" value="{{$sick->per_name}}" disabled="">
			
			</div>
			<div class="col-lg-5">
			<label>نتیجه</label>
			<select class="form-control" style="width: 100%;" name="result" id="result" onchange="showTextBox()">
				@if($sick->result == 'continu')
				<option value="continu">معالجه در دوره بعدی</option>
				@endif
				
				<option value="end">اتمام</option>
				<option value="continu">ادامه در جلسه بعدی</option>
			</select>
			</div>
		</div>
		<div class="row">
			@if($sick->result == 'continu')
			<div class="col-lg-5" id="last_date">
			<div class="form-group">
				<label for="exampleInputEmail1">تاریخ ملاقات بعدی</label>
				<input type="date" name="date"  class="form-control" value="{{$sick->next_date}}">
			</div>
		</div>
				
				@endif
			 <div class="col-lg-5" id="next_date" style="visibility: hidden;">
            	<div class="form-group">
				<label for="exampleInputEmail1">تاریخ مراجعه بعدی</label>
				<input type="date" name="date" class="form-control">
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
	   </div><!-- /.container-fluid -->
    </section>
  <script>
    	
    function showTextBox(){
    	x=result.value;
    	if(x=="continu"){
    	    	document.getElementById('next_date').style.visibility='visible';
    	    	document.getElementById('last_date').style.visibility='hidden';
    	    }
    	 else{
    	 	document.getElementById('last_date').style.visibility='hidden';
    	 }
    }
    </script>
@endsection