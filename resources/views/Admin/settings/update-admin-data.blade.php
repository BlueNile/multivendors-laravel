@extends('admin.layouts.layout')    
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
 <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{trans('update_admin_data.general')}}</h1>
        </div>
        <div class="col-sm-6 breadcrumbR">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{trans('update_admin_data.home')}}</a></li>
            <li class="breadcrumb-item active">{{trans('update_admin_data.update_admin_data')}}</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{trans('update_admin_data.update_admin_data')}}</h3>
            </div>
            <!-- /.card-header -->

            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show">
              {{trans('update_admin_data.succes_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('update_admin_data.close')}}">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if(Session::has('error_message'))
            <div class="alert alert-danger alert-dismissible fade show">
              {{trans('update_admin_data.error_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('update_admin_data.close')}}">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
              @foreach ($errors->all() as $error)
               <li>{{$error}}</li>   
               <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('update_admin_data.close')}}">
                <span aria-hidden="true">&times;</span>
            </button>
              @endforeach
               </div>
            @endif

            <!-- form start -->
            <form id="update_admin_data" action="{{url('admin/update-admin-data')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="admin_email">{{trans('update_admin_data.admin_email_address')}}</label>
                  <input type="email" class="form-control" id="admin_email" name="admin_email" value="{{Auth::guard('admin')->user()->email}}"  placeholder="{{trans('update_admin_data.admin_email_address_holder')}}" readonly>
                </div>
                <div class="form-group">
                  <label for="admin_type">{{trans('update_admin_data.admin_type')}}</label>
                  <input admin_type="text" class="form-control" id="admin_type" name="admin_type" value="{{Auth::guard('admin')->user()->type}}" placeholder="{{trans('update_admin_data.admin_type_holder')}}" readonly>
                </div>
                <div class="form-group">
                  
<form class="max-w-sm mx-auto">
  <label for="admin_phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">{{trans('update_admin_data.admin_phone')}}</label>
  <div class="relative">
      <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
          <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
              <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
          </svg>
      </div>
      <input type="text" id="admin_phone" name="admin_phone" value="{{Auth::guard('admin')->user()->phone}}"  aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="123-456-7890" required />
  </div>
  <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-gray-400">{{trans('update_admin_data.admin_phone_holder')}}</p>
</form>

                    <label for="admin_phone">{{trans('update_admin_data.admin_phone')}}</label>
                    <input type="number" class="form-control" id="admin_phone" name="admin_phone" value="{{Auth::guard('admin')->user()->phone}}" placeholder="{{trans('update_admin_data.admin_phone_holder')}}" >
                  </div>
                  @foreach(['en','ar'] as $locale)
                  @if(App::getLocale()==$locale)
                  <div class="form-group">
                      <label for="admin_{{$locale}}_name">{{trans('update_admin_data.admin_name')}}</label>
                      <input type="text" class="form-control" id="admin_{{$locale}}_name" name="admin_{{$locale}}_name" value="{{Auth::guard('admin')->user()->name}}" placeholder="{{trans('update_admin_data.admin_address_holder')}}" >
                    </div>
                  <div class="form-group">
                    <label for="admin_{{$locale}}_address">{{trans('update_admin_data.admin_address')}}</label>
                    <input type="text" class="form-control" id="admin_{{$locale}}_address" name="admin_{{$locale}}_address" value="{{Auth::guard('admin')->user()->address}}" placeholder="{{trans('update_admin_data.admin_address_holder')}}" >
                  </div>
                   @endif
                  @endforeach
                  <div class="form-group">
                    <label for="admin_current_password">{{trans('update_admin_data.admin_password')}}</label>
                    <input type="password" class="form-control" id="admin_current_password" name="admin_current_password" placeholder="{{trans('update_admin_data.current_Admin_password_holder')}}" required="">
                  </div>
                  <div class="form-group">
                    <label for="admin_image">{{trans('update_admin_data.admin_image')}}</label>
                    <input type="file" class="form-control" id="admin_image" name="admin_image">
                    @if(!empty(Auth::guard('admin')->user()->image))
                  <a href="{{url('admin/images/admin_photo/'.Auth::guard('admin')->user()->image)}}" target="_blank" >view image</a>
                  @endif
                  </div>

              <!-- /.card-body -->

              <div class="card-footer">
                <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">{{trans('update_admin_data.update_btn')}}</button>
             </div>
            </form>
          </div>
          <!-- /.card -->
        </div>
        <!--/.col (left) -->
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
 