@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست صلاحیت ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">صلاحیت ها</a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
        @if(auth()->user()->role == 'Admin')
         <a href="{{route('role.create')}}"><button class="btn btn-success"><i class="fa fa-plus"></i></button></a>
         @endif
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
                  <th>صلاحیت</th>
                  <th>تنظیمات</th>

                </tr>
                </thead>
                <tbody>
                @foreach($roles as $r)
                <tr>
                <td>{{$r->P_name}}</td>
                <td>{{$r->E_name}}</td>
                <td>
                   <div style="display: flex">
                      <form action="{{ route('role.destroy'  , ['id' => $r->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                        <div class="btn-group btn-group-xs" >
                            <a href="{{ route('role.edit', $r->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
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
            <!-- /.card-body -->
          </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  

@endsection