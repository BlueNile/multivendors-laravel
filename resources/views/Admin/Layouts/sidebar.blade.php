<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('admin/dashboard')}}" class="brand-link">
      <img src="{{url('Admin/assets/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">متجر سوق مصر </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('Admin/assets/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::guard('admin')->user()->name}}</a><b>{{Auth::guard('admin')->user()->type}}</b>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li @if(Session::get('page')=='dashboard')  class="nav-item has-treeview menu-open" @else class="nav-item has-treeview" @endif>
            <a href="#"   @if(Session::get('page')=="dashboard") class="nav-link active" @else class="nav-link" @endif >
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/dashboard')}}" class="nav-link active">
                  <i class="fa-solid fa-gauge-high"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
          </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-sliders"></i>
              <p>{{trans('sidebar.settings')}} <i class="fas fa-angle-left right"></i></p>
            </a>
            <ul class="nav nav-treeview">
              
                <li class="nav-item">
                <a href="{{url('admin/update-admin-data')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{trans('sidebar.update_admin_data')}}</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="{{url('admin/update-admin-password')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  {{trans('sidebar.update_admin_password')}} </p>
                </a>
              </li>
            </ul>
          </li>
          <li  @if(Session::get('page')=="sections"||Session::get('page')=="addeditsection") class="nav-item has-treeview menu-open" @else class="nav-item has-treeview"@endif>
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>{{trans('sidebar.main_sections')}}<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            
            <ul @if(Session::get('page')=="sections"||Session::get('page')=="addeditsection") class="nav nav-treeview" @else class="nav nav-treeview" @endif>
              
                <li class="nav-item">
                <a href="{{url('admin/sections')}}"  @if(Session::get('page')=="sections"||Session::get('page')=="addeditsection") class="nav-link active" @else class="nav-link" @endif>
                  <i class="fa-solid fa-puzzle-piece"></i>
                  <p> {{trans('sidebar.main_sections')}}</p>
                </a>
              </li>
                 </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-user"></i>
              <p>Vendors <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-user"></i>
                  <p> Personal Details</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa-regular fa-credit-card"></i>
                  <p> Bank Details</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="#" class="nav-link active">
                  <i class="fa-solid fa-shop"></i>
                  <p>Business Details</p>
                </a>
              </li>
            </ul>
          </li>
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-people-line"></i>
              <p>
                {{trans('sidebar.manage_admins')}}
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/subadmins')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{trans('sidebar.subadmins')}}</p>
                </a>
              </li>
                <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{trans('sidebar.supervisors')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{trans('sidebar.vendors')}}</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> {{trans('sidebar.users')}}</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-tags"></i>
              <p>Coupons for Discounts<i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-tag"></i>
                  <p>Coupons</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="#" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Add Coupons </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fa-solid fa-truck"></i>
              <p>Courier <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              
                <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa-solid fa-truck"></i>
                  <p>Courier and Delivery</p>
                </a>
              </li>
              <li class="nav-item">
                 <a href="{{url('admin/update-admin-password')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  {{trans('sidebar.update_admin_password')}} </p>
                </a>
              </li>
            </ul>
          </li>
           </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
