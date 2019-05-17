<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aplikasi Parkir</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/morris.js/morris.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <link rel="stylesheet" href="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <link rel="stylesheet" href="{{url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">
  
  @section('css')
  @show
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    @include('layouts.header')

    @include('layouts.user.sidekendaraan')
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>

<script src="{{url('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<script src="{{url('assets/bower_components/jquery-ui/jquery-ui.min.js')}}"></script>
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="{{url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<script src="{{url('assets/bower_components/raphael/raphael.min.js')}}"></script>
<script src="{{url('assets/bower_components/morris.js/morris.min.js')}}"></script>
<script src="{{url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
<script src="{{url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
<script src="{{url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
<script src="{{url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js')}}"></script>
<script src="{{url('assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
<script src="{{url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}"></script>
<script src="{{url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<script src="{{url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<script src="{{url('assets/dist/js/adminlte.min.js')}}"></script>
<script src="{{url('assets/dist/js/pages/dashboard.js')}}"></script>
<script src="{{url('assets/dist/js/demo.js')}}"></script>
<script src="{{ url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>

  @section('js')
 
  @show
</body>
</html>
