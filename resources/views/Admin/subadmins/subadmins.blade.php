@extends('admin.layouts.layout')    
@section('content')
 <div class="content-wrapper">
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>{{trans('subadmins.manage_admins')}}</h1>
        </div>
        <div class="col-sm-6 breadcrumbR">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">{{trans('subadmins.home')}}</a></li>
            <li class="breadcrumb-item active">{{trans('subadmins.subadmins')}}</li>
          </ol>
        </div>
      </div>
    </div>
  </section>
  <section class="content">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">DataTable with default features</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <table id="subadmins" class="table table-bordered table-striped">
          <thead>  
          <tr>
            <td>name</td>
            <td>address</td>
            <td>type</td>
            <td>email</td>
            <td>phone</td>
            <td>image</td>
            <td>status</td>
          </tr>
          </thead>
          <tbody>
            @foreach ($subadmins as $subadmin)
          <tr>      
            <td>{{$subadmin->name}}</td>
            <td>{{$subadmin->address}}</td>
            <td>{{$subadmin->type}}</td>
            <td>{{$subadmin->email}}</td>
            <td>{{$subadmin->phone}}</td>
            <td>{{$subadmin->image}}</td>
            <td>{{$subadmin->status}}</td>
          </tr>
          @endforeach
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
  </section>

</div>
@endsection
 