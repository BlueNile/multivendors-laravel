@extends('Admin\Layouts\layout')
@section('content')
<div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Sections</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Sections</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-12">
              <div class="card">
              <div class="card-header adjust-header">
           
                <h3 class="card-title">Sections</h3>
              <a @if(empty('id') href="{{url('admin/sections/addEdit/')}}" 
              @else href="{{url('admin/sections/addEdit/id')}}" 
              @endif ><i class="fas fa-plus bg-green-800"></i>
                  Add Section
                </a>

              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="sections" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>status</th>
                    <th>Created_at</th>
                    <th>actions</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($sections as $section)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$section->name}}</td>
                    <td> @if($section['status']==1)
                      <i class="fas fa-toggle-on bg-blue-700" status="active"></i>
                         @else
                         <i class="fas fa-toggle-off" status="inactive"></i></a>
                         @endif
                    </td>
                    <td>
                  <a style="color="#3effd3"" href="{{url('admin/sections/addEdit/'.$section->id)}}"><i class="fas fa-edit"></i></a>   |
                  <a href="javascript:void(0)" name="Section Page" title="Delete Section" record="section-page" recordid={{$section['id']}}> <i class="fas fa-trash"></i></a> |
                    <i class="fas fa-eye"></i>   
                    </td> 
                    <td>{{date("F j,Y,g:i a",strtotime($section->created_at));}}</td></tr>
@endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </section>
    <!-- /.content -->
  </div>
@endsection