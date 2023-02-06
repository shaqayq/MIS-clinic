@extends('layouts.app')
@section('content')
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>جزییات</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">خانه</a></li>
              <li class="breadcrumb-item active">جزییات</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i></i>{{$emp->e_name}} {{$emp->last_name}}
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">

                <div class="col-sm-4 invoice-col">
                 <label>ایمیل:</label>
                  {{$emp->email}}
                </div>
 				
 				<div class="col-sm-4 invoice-col">
                   <label>شماره تماس:</label>
                  {{$emp->e_phone}}
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>تاریخ</th>
                      <th>مجموع</th>
                      <th>پرداخت</th>
                      <th>باقی</th>
                      <th>قیمت کل</th>
                    </tr>
                    </thead>
                    <tbody>
                 	@foreach($detail as $d)
                 	<tr>
                 		<td>{{$d->date}}</td>
                 		<td>{{$d->total}}</td>
                 		<td>{{$d->cash}}</td>
                 		<td>{{$d->loan}}</td>
                 		  <td>
		                   <div style="display: flex">
		                      <form action="#" method="post">
		                                {{ method_field('delete') }}
		                                {{ csrf_field() }}
		                        <div class="btn-group btn-group-xs" >
		                            <a href="{{route('salary.edit',$d->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
		                              </div>
		                              <button  type="submit" class="btn btn-sm btn-danger" disabled=""><i class="fa fa-trash"></i></button>
		                      </form>
			                 </div>

			              </td>

                 	</tr>
                 	@endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

            
              <!-- /.row -->

          
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

@endsection