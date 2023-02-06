 <div class="sidebar" style="direction: ltr">
      <div style="direction: rtl">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="{{asset('style/dist/img/1.jpg')}}" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">{{Auth::user()->name}}</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="{{route('home.index')}}" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                  داشبورد                 
                </p>
              </a>
            </li>
              @if(auth()->user()->role == 'Admin')
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-icon fa fa-thumb-tack"></i>
                <p>
                صلاحیت ها 
                 <i class="right fa fa-angle-left"></i>           
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('role.index')}}" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>لیست صلاحیت ها</p>
                  </a>
                </li>
              </ul>
            </li>
             <li class="nav-item">
              <a href="{{route('job.index')}}" class="nav-link">
                <i class="nav-icon fa fa-suitcase"></i>
                <p>وظایف </p>       
              </a>             
            </li>
          
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-icon fa fa-user"></i>
                <p>کاربران
                 <i class="right fa fa-angle-left"></i> 
                  </p>       
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('user.create')}}" class="nav-link">
                    <i class="fa  fa-user-plus nav-icon"></i>
                    <p>ایجاد کاربر جدید</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('user.index')}}" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>لیست کاربران</p>
                  </a>
                </li>
              </ul>
            </li>
          
            <li class="nav-item">
              <a class="nav-link">
                <i class="nav-icon fa fa-user-md"></i>
                <p>کارمندان
                 <i class="right fa fa-angle-left"></i> 
                  </p>       
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('employee.create')}}" class="nav-link">
                    <i class="fa  fa-user-plus nav-icon"></i>
                    <p>ایجاد کارمند جدید</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('employee.index')}}" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>لیست کارمندان</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-money"></i>
                <p>
                فعالیتهای مالی             
                <i class="right fa fa-angle-left"></i> 
                  </p>       
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('expend.create')}}" class="nav-link">
                    <i class="fa  fa-credit-card-alt nav-icon"></i>
                    <p>مصارف</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('salary.index')}}" class="nav-link">
                    <i class="fa fa-dollar nav-icon"></i>
                    <p>معاشات</p>
                  </a>
                </li>
              </ul>
            </li>
             <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-bar-chart"></i>
                <p>
                گزارشات             
                <i class="right fa fa-angle-left"></i> 
                  </p>       
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('service_report.index')}}" class="nav-link">
                    <i class="fa fa-dollar nav-icon"></i>
                    <p>درآمد</p>
                  </a>
                </li>
                  <li class="nav-item">
                  <a href="{{route('expend.index')}}" class="nav-link">
                    <i class="fa  fa-shopping-cart nav-icon"></i>
                    <p>مصارف</p>
                  </a>
                </li>
               
              </ul>
            </li>
             <li class="nav-item">
              <a href="{{route('sicknees.index')}}" class="nav-link">
                <i class="nav-icon fa fa-  fa-heartbeat"></i>
                <p>بیماری ها </p>       
              </a>             
            </li>
              @endif
                           <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa  fa-wheelchair"></i>
                <p>
                 مراجعین              
                <i class="right fa fa-angle-left"></i> 
                  </p>       
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{route('patient.create')}}" class="nav-link">
                    <i class="fa  fa-user-plus nav-icon"></i>
                    <p>افزودن مراجع جدید</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{route('patient.index')}}" class="nav-link">
                    <i class="fa fa-list nav-icon"></i>
                    <p>لیست مراجعین</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{route('setting.index')}}" class="nav-link">
                <i class="nav-icon fa fa-gear"></i>
                <p>
                تنظیمات            
                </p>
              </a>
            </li>
             


           
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
    </div>