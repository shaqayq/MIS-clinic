@extends('layouts.app')
@section('content')
 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست مصارف</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">صلاحیت ها</a></li>
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
                  <th>تاریخ</th>
                  <th>مقدار</th>
                  <th>از بابت</th>
                  <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                @foreach($exp as $ex)
                <tr>
                  <td>{{$ex->date}}</td>
                  <td>{{$ex->cost}}</td>
                  <td>{{$ex->behalf}}</td><td>
                   <div style="display: flex">
                      <form action="{{ route('expend.destroy'  , ['id' => $ex->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                        <div class="btn-group btn-group-xs" >
                            <a href="{{ route('expend.edit', $ex->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                              </div>
                              <button  type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
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