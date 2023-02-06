@extends('layouts.app')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            @if(Session::has('title'))
            <h1 class="m-0 text-dark">لیست مراجعین {{Session::get('title')}}</h1>
            @endif
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">مراجعین </a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
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
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>نام</th>
                  <th>ولد</th>
                  <th>تخلص</th>
                  <th>سن</th>
                  <th>وظیفه</th>
                  <th>جنسیت</th>
                  <th>تاریخ</th>
                  <th>تشخیص بیماری</th>
                  <th>جزییات</th>
                  <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                 
                @foreach($info as $p)
                <tr>
                  <td>{{$p->name}}</td>
                  <td>{{$p->f_name}}</td>
                  <td>{{$p->l_name}}</td>
                  <td>{{$p->age}}</td>
                  <td>{{$p->job}}</td>
                  <td>{{$p->sex}}</td>
                  <td>{{$p->date}}</td>
                  <td><center><a href="{{route('p_detail.edit',['id'=>$p->id])}}" class="btn btn-warning btn-sm"><i class="fa fa-stethoscope"></i></a>
                    </center>
                  </td>
                  <td><center><a href="{{route('p_detail.show',['id'=>$p->id])}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i></a>
                  </center> 
                   </td>
                  <td>
                    <div style="display: flex;">
                      <form  method="post" action="{{route('patient.destroy',['id'=>$p->id])}}">
                        {{method_field('delete')}}
                        {{csrf_field()}}
                        <div class="btn-group btn-group-xs ">
                          <a href="{{route('patient.edit',['id'=>$p->id])}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                        </div>
                        <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                      </form>
                        
                    </div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              
              </table>
            </div>
            <!-- /.card-body -->
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection