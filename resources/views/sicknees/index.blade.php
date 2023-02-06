@extends('layouts.app')
@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">لیست بیماری ها</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-left">
              <li class="breadcrumb-item"><a href="#">بیماری ها</a></li>
              <li class="breadcrumb-item active">داشبورد ورژن 2</li>
            </ol>
          </div><!-- /.col -->
        </div>
        <a href="{{route('sicknees.create')}}"><button class="btn btn-success"><i class=" fa fa-plus-square"></i>افزودن بیماری</button></a>
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
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>نام</th>
                  <th>نام لاتین</th>
                  <th>فیس</th>
                  <th>تنظیمات</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($sicknees as $sick)
                  <tr>
                    <td>{{$sick->per_name}}</td>
                    <td>{{$sick->eng_name}}</td>
                    <td>{{$sick->price}}</td>
                    <td>
                      <div style="display: flex">
                      <form action="{{ route('sicknees.destroy'  , ['id' => $sick->id]) }}" method="post">
                                {{ method_field('delete') }}
                                {{ csrf_field() }}
                        <div class="btn-group btn-group-xs" >
                            <a href="{{ route('sicknees.edit', $sick->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
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