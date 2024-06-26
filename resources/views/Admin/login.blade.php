@extends('admin.layouts.auth')
  @section('title')
  <title>تسجيل دخول</title>
  @endsection
 @section('content')
<body class="hold-transition login-page">

  <div class="login-box">
    <div class="login-logo">
      <a href="../../index2.html"><b>سوق </b>مصر</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
      <div class="card-body login-card-body">
        <p class="login-box-msg">تسجيل دخول</p>
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
        <form action="{{url('admin/login')}}" method="post">
        @csrf
          <div class="input-group mb-3">
            <input type="text" id="email" name="email" @if(isset($_COOKIE["email"])) value="{{$_COOKIE["email"]}}" @endif class="form-control" placeholder="البريد الالكترونى" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="text" id="password" name="password" @if(isset($_COOKIE['password'])) value="{{$_COOKIE["password"]}}" @endif class="form-control" placeholder="كلمة المرور" >
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-8">
              <div class="icheck-primary">
                <label for="remember"> تذكرنى </label>
                <input type="checkbox" id="remember" name="remember" 
                @if(isset($_COOKIE["email"])) checked="" 
                @endif>   
              </div>
            </div>
            <!-- /.col -->
            <div class="col-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">دخول</button>
            </div>
            <!-- /.col -->
          </div>
        </form>
              
         <p class="mb-1">
          <a href="#">لقد نسيت كلمة السر</a>
        </p>
        <p class="mb-0">
          <a href="{{url('admin/register')}}" class="text-center">تسجيل حساب جديد</a>
        </p>
      </div>
      <!-- /.login-card-body -->
    </div>
  </div>
  <!-- /.login-box -->
  

</body>
@endsection

