<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>متجر متعدد التجار  | لوحة التحكم</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <script src="{{url('Admin/assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{url('Admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        @if(App::getLocale()=='ar')
          <!-- Font Awesome -->
          <link rel="stylesheet" href="{{url('Admin/assets/fontawesome/css/all.min.css')}}" rel="stylesheet">
          <!-- Ionicons -->
          <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
          <!-- Tempusdominus Bbootstrap 4 -->
          <link rel="stylesheet" href="{{url('admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
          <!-- iCheck -->
          <link rel="stylesheet" href="{{url('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
          <!-- JQVMap -->
          <link rel="stylesheet" href="{{url('admin/assets/plugins/jqvmap/jqvmap.min.css')}}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{url('admin/assets/dist/css/adminlte.min.css')}}">
          <!-- overlayScrollbars -->
          <link rel="stylesheet" href="{{url('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
          <!-- Daterange picker -->
          <link rel="stylesheet" href="{{url('admin/assets/plugins/daterangepicker/daterangepicker.css')}}">
          <!-- summernote -->
          <link rel="stylesheet" href="{{url('admin/assets/plugins/summernote/summernote-bs4.css')}}">
          <!-- Google Font: Source Sans Pro -->
          <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
          <!-- Custom style for RTL -->
          <link rel="stylesheet" href="{{url('admin/assets/css/bootstrap_rtl-v4.2.1/bootstrap.min.css')}}">
          <link rel="stylesheet" href="{{url('admin/assets/dist/css/custom.css')}}">
          <link rel="stylesheet" href="{{url('admin/assets/css/mycustomstyle.css')}}">
          @else
          <script src="{{url('Admin/assets/plugins/jquery/jquery.min.js')}}"></script>
          <!-- Bootstrap 4 -->
          <script src="{{url('Admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
            <!-- Font Awesome -->
            <link rel="stylesheet" href="{{url('Admin/assets/plugins/fontawesome-free/css/all.min.css')}}">
            <!-- Ionicons -->
            <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
            <!-- Tempusdominus Bbootstrap 4 -->
            <link rel="stylesheet" href="{{url('admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
            <!-- iCheck -->
            <link rel="stylesheet" href="{{url('admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
            <!-- JQVMap -->
            <link rel="stylesheet" href="{{url('admin/assets/plugins/jqvmap/jqvmap.min.css')}}">
            <!-- Theme style -->
            <link rel="stylesheet" href="{{url('admin/assets/dist/css/adminlte.min.css')}}">
            <!-- overlayScrollbars -->
            <link rel="stylesheet" href="{{url('admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
            <!-- Daterange picker -->
            <link rel="stylesheet" href="{{url('admin/assets/plugins/daterangepicker/daterangepicker.css')}}">
            <!-- summernote -->
            <link rel="stylesheet" href="{{url('admin/assets/plugins/summernote/summernote-bs4.css')}}">
            <!-- Google Font: Source Sans Pro -->
            <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
                   @endif
     
        </head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  @include('Admin\Layouts\header')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
@include('Admin\Layouts\sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
@include('Admin\Layouts\footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('admin/assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{url('admin/assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 rtl -->
<!-- <script src="https://cdn.rtlcss.com/bootstrap/v4.2.1/js/bootstrap.min.js"></script> -->
<script src="{{url('admin/assets/css/bootstrap-4.0.0-dist/js/bootstrap.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('admin/assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{url('admin/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- ChartJS -->
<script src="{{url('admin/assets/plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{url('admin/assets/plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{url('admin/assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{url('admin/assets/plugins/jqvmap/maps/jquery.vmap.world.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{url('admin/assets/plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{url('admin/assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{url('admin/assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{url('admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{url('admin/assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{url('admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('admin/assets/dist/js/adminlte.js')}}"></script>
<script src="{{url('admin/assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{url('admin/assets/dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('admin/assets/dist/js/demo.js')}}"></script>
<script src="{{url('admin/assets/dist/js/custom.js')}}"></script>
<script defer src="{{url('admin/assets/fontawesome/js/all.js')}}"></script>
</body>
</html>
