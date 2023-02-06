<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>کلینک دندان مجید متین </title>
  <link rel="shortcut icon"  href="{{asset('style/img/logo-light.png')}}">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('style/plugins/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('style/dist/css/adminlte.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('style/plugins/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('style/plugins/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('style/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!-- bootstrap rtl -->
  <link rel="stylesheet" href="{{asset('style/dist/css/bootstrap-rtl.min.css')}}">
  <!-- template rtl version -->
  <link rel="stylesheet" href="{{asset('style/dist/css/custom-style.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('style/plugins/datatables/dataTables.bootstrap4.css')}}">
  <!-- template sweetAlert-->
  <link rel="stylesheet" href="{{asset('style/dist/sweetalert2/sweetalert2.min.css')}}">
  <!------icheck button---->
  <link rel="stylesheet" href="{{asset('style/plugins/iCheck/all.css')}}">
  <!-------flaticon -------->
   <link rel="stylesheet" href="{{asset('style/dist/css/flaticon.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-success navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">خانه</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">تماس</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="جستجو" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
    
      <!-- Authentication Links -->
       @guest
       @if (Route::has('register'))
              <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
              </li>
          @endif
        @else
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown"  href="{{ route('logout') }}" 
         onclick="event.preventDefault();
         document.getElementById('logout-form').submit();" >
           <i class="fa fa-power-off"></i>
           خروج از سیستم
            </a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
      </li>
      @endguest
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-success elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link bg-success">
      <img src="{{asset('style/img/logo-light.png')}}"  class="brand-image img-circle elevation-3"
           style="opacity: .5">
      <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>


    <!-- Sidebar -->
     @include('layouts.sidebar')
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  
    <!-- /.content -->
    @yield('content')
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>CopyLeft &copy; 2018 <a href="http://github.com/hesammousavi/">Darwazi</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-light">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="{{asset('style/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('style/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')}}"></script>
<script src="{{asset('style/plugins/morris/morris.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('style/plugins/sparkline/jquery.sparkline.min.js')}}"></script>
<!-- jvectormap -->
<script src="{{asset('style/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{asset('style/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('style/plugins/knob/jquery.knob.js')}}"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="{{asset('style/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('style/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('style/plugins/datatables/dataTables.bootstrap4.js')}}"></script>
<!-- Slimscroll -->
<script src="{{asset('style/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('style/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('style/dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('style/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('style/dist/js/demo.js')}}"></script>
<!-- sweetAlert -->
<script src="{{asset('style/dist/sweetalert2/sweetalert2.min.js')}}"></script>
<script src="{{asset('style/dist/js/ui-notifications.js')}}"></script>
<!------icheck button---->
<script src="{{asset('style/plugins/iCheck/icheck.min.js')}}"></script>


<!-- page script -->
 <script>
        $(document).ready(function() {
            $('#example').DataTable( {
                "language": {
                    "lengthMenu": "نمایش _MENU_ رکورد",
                    "zeroRecords": "متاسقانه هیچ رکوردی پیدا نشد",
                    "info": "نمایش صفحه _PAGE_ از _PAGES_",
                    "infoEmpty": "هیچ رکورد قابل دسترس نیست",
                    "Search":         "جستجو:",
                    "infoFiltered": "(فیلتر شده از _MAX_ رکورد)",
                    "oPaginate": {
                        "sFirst":    "ابتدا",
                        "sLast":     "انتها",
                        "sNext":     "بعدی",
                        "sPrevious": "قبلی"
                    },
                    search: "جستجو: ",
                    "oAria": {
                        "sSortAscending":  ": فعال سازی نمایش به صورت صعودی",
                        "sSortDescending": ": فعال سازی نمایش به صورت نزولی"
                    }

                },


            } );
        } );
    </script>
  <script>
 $(document).ready(function(){  
  @if(Session::has('msg'))
    swal({
        
           title: '{{Session::get("msg")}}',
            type: 'success',
            confirmButtonClass: 'btn btn-success btn-md',
            buttonsStyling: false
          });
      }); 

 @endif
 @if(Session::has('wlc'))
    swal({
        
           title: '{{Session::get("wlc")}}',
           text:"گزارشات کاری امروز را چک کنید!",
            type: 'success',
            confirmButtonClass: 'btn btn-success btn-md',
            buttonsStyling: false
          });
      }); 

 @endif
</script>
<script>
  $(function(){
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
        checkboxClass: 'icheckbox_flat-green',
        radioClass   : 'iradio_flat-green'
      })
    })
</script>
 
</body>
</html>
