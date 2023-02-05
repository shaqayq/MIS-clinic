@extends('layouts.app')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست کارمندان</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">کارمندان</a></li>
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
                  <th>تخلص</th>
                  <th>ایمیل</th>
                  <th>شماره تماس</th>
                  <th>وظیفه</th>
                  <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                      @foreach($emp as $e)
                        <tr>
                        <td>{{$e->e_name}}</td>
                        <td>{{$e->last_name}}</td>
                        <td>{{$e->email}}</td>
                        <td>{{$e->e_phone}}</td>
                        <td>{{$e->job}}</td>
                        <td>
                          <div style="display: flex">
                            <form action="{{route('employee.destroy' ,['id '=>$e->id])}}" method="post">
                              {{method_field('delete')}}
                              @csrf
                              <div class="btn-group btn-group-xs">
                                <a href="{{route('employee.edit',$e->id)}}" class="btn btn-sm btn-primary"> <i class="fa fa-edit" ></i></a>
                              </div>
                              <a href=""><button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button></a>
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
            <!-- /.card-body -->
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection