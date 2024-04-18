
@extends('admin.layouts.layout')    
@section('content')
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

 <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{trans('add_admin_data.general')}}</h1>
        </div>
        <div class="col-sm-6 breadcrumbR">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{trans('add_admin_data.home')}}</a></li>
            <li class="breadcrumb-item active">{{trans('add_admin_data.add_admin_data')}}</li>
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
              <h3 class="card-title">{{trans('update_admin_data.add_admin_data')}}</h3>
            </div>
            <!-- /.card-header -->

            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show">
            {{Session::get('success_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="اغلاق">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if(Session::has('error_message'))
            <div class="alert alert-danger alert-dismissible fade show">
            {{Session::get('error_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="اغلاق">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
              @foreach ($errors->all() as $error)
               <li>{{$error}}</li>   
               <button type="submit" class="close" data-dismiss="alert" aria-label="اغلاق">
                <span aria-hidden="true">&times;</span>
            </button>
              @endforeach
               </div>
            @endif
         
  
            <form class="card-body" action={{url("admin/add-new-admin")}} method="post">
            @csrf
            <ul class="nav nav-tabs">
              <li class="nav-item">
                  <a class="nav-link bg-aqua-active" href="#" id="english-link">EN</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" id="arabic-link">ar</a>
              </li>
           </ul>
           <div id="english-form">
            <div class="form-group">
              <label class="required" for="en_title">{{ trans('cruds.article.fields.name') }} (EN)</label>
              <input class="form-control {{ $errors->has('en_name') ? 'is-invalid' : '' }}" type="text" name="en_name" id="en_name" value="{{ old('en_name', '') }}" required>
              @if($errors->has('en_name'))
                  <div class="invalid-feedback">
                      {{ $errors->first('en_name') }}
                  </div>
              @endif
              <span class="help-block">{{ trans('cruds.article.fields.title_helper') }}</span>
          </div>
          <div class="form-group">
              <label for="en_full_text">{{ trans('cruds.article.fields.address') }} (EN)</label>
              <textarea class="form-control {{ $errors->has('en_address') ? 'is-invalid' : '' }}" name="en_address" id="en_address">{{ old('en_address') }}</textarea>
              @if($errors->has('en_address'))
                  <div class="invalid-feedback">
                      {{ $errors->first('en_address') }}
                  </div>
              @endif
              <span class="help-block">{{ trans('cruds.article.fields.address_helper') }}</span>
          </div>
          <div class="form-group">
            <label class="required" for="en_type">{{ trans('cruds.article.fields.type') }} (EN)</label>
            <input class="form-control {{ $errors->has('en_type') ? 'is-invalid' : '' }}" type="text" name="en_type" id="en_type" value="{{ old('en_type', '') }}" required>
            @if($errors->has('en_type'))
                <div class="invalid-feedback">
                    {{ $errors->first('en_type') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.type_helper') }}</span>
          </div>
           </div>
    
        <div id="arabic-form">
            <div class="form-group">
              <label class="required" for="title">{{ trans('cruds.article.fields.name') }} (ar)</label>
              <input class="form-control {{ $errors->has('ar_name') ? 'is-invalid' : '' }}" type="text" name="ar_name" id="ar_name" value="{{ old('ar_name', '') }}" required>
              @if($errors->has('ar_name'))
                  <div class="invalid-feedback">
                      {{ $errors->first('ar_name') }}
                  </div>
              @endif
              <span class="help-block">{{ trans('cruds.article.fields.name_helper') }}</span>
          </div>
          <div class="form-group">
              <label for="ar_full_text">{{ trans('cruds.article.fields.address') }} (ar)</label>
              <textarea class="form-control {{ $errors->has('ar_address') ? 'is-invalid' : '' }}" name="ar_address" id="es_address">{{ old('es_address') }}</textarea>
              @if($errors->has('es_address'))
                  <div class="invalid-feedback">
                      {{ $errors->first('ar_address') }}
                  </div>
              @endif
              <span class="help-block">{{ trans('cruds.article.fields.address_helper') }}</span>
              
          </div>
          <div class="form-group">
            <label class="required" for="title">{{ trans('cruds.article.fields.type') }} (ar)</label>
            <input class="form-control {{ $errors->has('ar_type') ? 'is-invalid' : '' }}" type="text" name="ar_type" id="ar_type" value="{{ old('ar_type', '') }}" required>
            @if($errors->has('ar_type'))
                <div class="invalid-feedback">
                    {{ $errors->first('ar_type') }}
                </div>
            @endif
            <span class="help-block">{{ trans('cruds.article.fields.type_helper') }}</span>
        </div>
          </div>       
          <div id="general">
            <div class="form-group">
              <label for="admin_phone">{{trans('add_admin_data.admin_phone')}}</label>
              <input type="number" class="form-control" id="admin_phone" name="admin_phone" placeholder="{{trans('add_admin_data.admin_phone_holder')}}" >
            </div>
            <div class="form-group">
              <label for="admin_address">{{trans('add_admin_data.admin_email_address')}}</label>
              <input type="email" class="form-control" id="email_address" name="admin_email_address" placeholder="{{trans('add_admin_data.admin_address_holder')}}" >
            </div>
            <div class="form-group">
              <label for="admin_password">{{trans('add_admin_data.admin_password')}}</label>
              <input type="admin_password" class="form-control" id="admin_password" name="admin_password" placeholder="{{trans('add_admin_data.current_Admin_password_holder')}}" required="">
            </div>
            <div class="form-group">
              <label for="admin_image">{{trans('add_admin_data.admin_image')}}</label>
              <input type="file" class="form-control" id="admin_image" name="admin_image" placeholder="{{trans('add_admin_data.admin_image_holder')}}" >
            </div>
          </div>
         <button  type="submit">add admin</button>
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
 