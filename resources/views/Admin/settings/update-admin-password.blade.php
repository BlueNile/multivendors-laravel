@extends('admin.layouts.layout')    
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">



  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{trans('update_admin_password.general')}}</h1>
        </div>
        <div class="col-sm-6 breadcrumbR">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{trans('update_admin_password.home')}}</a></li>
            <li class="breadcrumb-item active">{{trans('update_admin_password.update_admin_password')}}</li>
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
              <h3 class="card-title">{{trans('update_admin_password.update_admin_password')}}</h3>
            </div>
            <!-- /.card-header -->

            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show">
              {{trans('update_admin_password.succes_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('update_admin_password.close')}}">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if(Session::has('error_message'))
            <div class="alert alert-danger alert-dismissible fade show">
              {{trans('update_admin_password.error_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('update_admin_password.close')}}">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
              @foreach ($errors->all() as $error)
               <li>{{$error}}</li>   
               <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('update_admin_password.close')}}">
                <span aria-hidden="true">&times;</span>
            </button>
              @endforeach
               </div>
            @endif

            <!-- form start -->
            <form id="update_admin_password" action="{{url('admin/update-admin-password')}}" method="post">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="admin_email">{{trans('update_admin_password.admin_email_address')}}</label>
                  <input type="text" class="form-control" id="admin_email" name="admin_email" value="{{Auth::guard('admin')->user()->email}}"  placeholder="{{trans('update_admin_password.admin_email_address_holder')}}" readonly>
                </div>
                <div class="form-group">
                  <label for="admin_type">{{trans('update_admin_password.admin_type')}}</label>
                  <input admin_type="text" class="form-control" id="admin_type" name="admin_type" value="{{Auth::guard('admin')->user()->type}}" placeholder="{{trans('update_admin_password.admin_type_holder')}}" readonly>
                </div>
                <div class="form-group">
                  <label for="admin_current_password">{{trans('update_admin_password.current_admin_password')}}</label>
                  <input type="admin_current_password" class="form-control" id="admin_current_password" name="admin_current_password" placeholder="{{trans('update_admin_password.current_Admin_password_holder')}}" required="">
                </div>
                <div class="form-group">
                  <label for="new_admin_password">{{trans('update_admin_password.new_admin_password')}}</label>
                  <input type="password" class="form-control" id="new_admin_password" name="new_admin_password" placeholder="{{trans('update_admin_password.new_admin_password_holder')}}" required="">
                </div>
                <div class="form-group">
                  <label for="confirm_admin_password">{{trans('update_admin_password.confirm_admin_password')}}</label>
                  <input type="password" class="form-control" id="confirm_admin_password" name="confirm_admin_password" placeholder="{{trans('update_admin_password.confirm_admin_password_holder')}}" required="" >
                </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">{{trans('update_admin_password.update_btn')}}</button>
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
 