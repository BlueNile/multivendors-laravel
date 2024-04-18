
@extends('admin.layouts.auth')
    @section('title')
    <title>تسجيل حساب جديد</title>
    @endsection
    
@section('content')
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b >سوق </b>مصر</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">انشاء حساب جديد</p>

      <form action="../../index.html" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="الاسم بالكامل">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="البريد الالكترونى">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="اعادة كتابة كلمة المرور">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
         
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">تسجيل</button>
          </div>
          <div class="col-8">
            <div class="icheck-primary">            
              <label for="agreeTerms">
              أنا أوافق على  <a href="#">البنود</a>
              </label>
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
            </div>
          </div>
          <!-- /.col -->
        </div>
      </form>

        <a href="{{url('admin/login')}}" class="text-center">بالفعل عندى حساب</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->
</body>
@section('content')

