@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
       
          <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست وظایف </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">وظایف </a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div>
          <a href="{{route('job.create')}}"><button class="btn btn-success"><i class=" fa fa-plus-square nav-icon"></i>افزودن وظیفه جدید</button></a><!-- /.col -->
        </div>    
      
   </div>
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
                  <th>وظیفه</th>
                  <th>تنظیمات</th>

                </tr>
                </thead>
                 <tbody>
                @foreach($job as $j)
                <tr>
                <td>{{$j->Pr_name}}</td>
                <td>{{$j->En_name}}</td>
                <td>
                   <div style="display: flex">
                      <form action="{{ route('job.destroy'  , ['id' => $j->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                        <div class="btn-group btn-group-xs" >
                            <a href="{{ route('job.edit', $j->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                              </div>
                              <button  type="submit" class="btn btn-sm btn-danger" data-type="auto-close"><i class="fa fa-trash"></i></button>
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