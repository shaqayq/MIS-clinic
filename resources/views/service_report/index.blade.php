@extends('layouts.app')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">گزارش درآمد</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">درآمد </a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div><!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
     <div class="card card-success card-outline">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="row">
    
     		<div class="col-lg-9">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>خدمات</th>
                  <th>تعداد مریض</th>
                  <th>درآمد</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($report as $r)
                  <tr>
                    <td>{{$r->per_name}}</td>
                    <td>{{$r->patient_number}}</td>
                    <td>{{$r->total}}</td>
                  </tr>
                  @endforeach
                </tbody>
              
              </table>
          </div>
          <div class="col-lg-3">
            <div class="info-box">
              <span class="info-box-icon bg-success elevation-1"><i class="fa  fa-dollar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">مجموعه درآمد روزانه</span>
                <span class="info-box-number">
                  {{$daily_report}}
                  <small>افغانی</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
             <div class="info-box">
              <span class="info-box-icon bg-warning elevation-1"><i class="fa  fa-dollar"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">مجموع درآمد ماهانه</span>
                <span class="info-box-number">
                  {{$monthly_report}}
                  <small>افغانی</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
             <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fa fa-cc-mastercard"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">مجموعه درآمد سالانه</span>
                <span class="info-box-number">
                  {{$year_report}}
                  <small>افغانی</small>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
        </div>
            </div>
            <!-- /.card-body -->
          </div>
           </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection