@extends('admin.layouts.layout')    
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

-->
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
                <button type="submit" class="btn btn-primary">{{trans('update_admin_data.update_btn')}}</button>
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
 