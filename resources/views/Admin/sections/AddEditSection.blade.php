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
            <li class="breadcrumb-item"><a href="#">{{trans('sections.home')}}</a></li>
            <li class="breadcrumb-item active">@if($title=="Add_new_Section"){{trans('sections.Add_new_Section')}} @else {{trans('sections.Edit_new_Section')}} @endif</li>
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
              <h3 class="card-title">@if($title=="Add_new_Section"){{trans('sections.Add_new_Section')}} @else {{trans('sections.Edit_new_Section')}} @endif</h3>
            </div>
            <!-- /.card-header -->

            @if(Session::has('success_message'))
            <div class="alert alert-success alert-dismissible fade show">
              {{trans('sections.succes_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('sections.close')}}">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if(Session::has('error_message'))
            <div class="alert alert-danger alert-dismissible fade show">
              {{trans('sections.error_message')}}
            <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('sections.close')}}">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            @endif
            @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show">
              @foreach ($errors->all() as $error)
               <li>{{$error}}</li>   
               <button type="submit" class="close" data-dismiss="alert" aria-label="{{trans('sections.close')}}">
                <span aria-hidden="true">&times;</span>
            </button>
              @endforeach
               </div>
            @endif

<!-- form start -->
<form id="sections-data" @if(empty($section['id']) action="{{url('admin/sections/addEdit/')}}" @else action="{{url('sections/addEdit/'.$section->id)}}" @endif method="post">
  @csrf
  <div class="card-body">
    <div class="form-group">
      <label for="section_name">{{trans('sections.section_name')}}</label>
      <input type="text" class="w-64 p-1 m-2 rounded-md border-gray-500 bg-slate-400" 
      id="section_name" name="section_name" placeholder="Enter Section name"@if(!empty($section['name'])) value="{{$section['name']}}" @endif />
    </div>
  
  <div class="card-footer">
    <button type="submit" class="btn btn-primary ">@if($title=="Add_new_Section"){{trans('sections.Add_new_Section')}} @else {{trans('sections.Edit_new_Section')}} @endif</button>
  </div>
</div>
</form>
        <!--/.col (left) -->
        </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
@endsection
 