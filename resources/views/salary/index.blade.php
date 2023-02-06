@extends('layouts.app')
@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>فعالیتهای مالی</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">داشبورد عمومی</a></li>
              <li class="breadcrumb-item active">فعالیتها</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      	<div>
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#salary" data-toggle="tab">معاشات</a></li>
                  <li class="nav-item"><a class="nav-link" href="#salaryHistory" data-toggle="tab">تاریخچه پرداخت معاشات</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                 
                   
                   
                    @include('salary.salaryPage')

                 	@include('salary.salaryPaymentHistory')
                 
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
      </div>
    </section>  
@endsection