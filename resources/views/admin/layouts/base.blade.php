<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Muvii | Admin @yield('title')</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href={{ asset("/plugins/fontawesome-free/css/all.min.css") }}>
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href={{ asset("/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css") }}>
  <!-- iCheck -->
  <link rel="stylesheet" href={{ asset("/plugins/icheck-bootstrap/icheck-bootstrap.min.css") }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset("/dist/css/adminlte.min.css") }}>
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href={{ asset("/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") }}>
  <!-- Daterange picker -->
  <link rel="stylesheet" href={{ asset("/plugins/daterangepicker/daterangepicker.css") }}>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{ asset('/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
  </div>

  {{-- navbar here --}}
  @include('admin.layouts.navbar')
  {{-- sidebar here --}}
  @include('admin.layouts.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">@yield('title')</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  {{-- footer here --}}
  @include('admin.layouts.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src={{ asset("/plugins/jquery/jquery.min.js") }}></script>
<!-- jQuery UI 1.11.4 -->
<script src={{ asset("/plugins/jquery-ui/jquery-ui.min.js") }}></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src={{ asset("/plugins/bootstrap/js/bootstrap.bundle.min.js") }}></script>
<!-- Select2 -->
<script src={{ asset("/plugins/select2/js/select2.full.min.js") }}></script>
<!-- daterangepicker -->
<script src={{ asset("/plugins/moment/moment.min.js") }}></script>
<script src={{ asset("/plugins/daterangepicker/daterangepicker.js") }}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{ asset("/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js") }}></script>
<!-- overlayScrollbars -->
<script src={{ asset("/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js") }}></script>
<!-- AdminLTE App -->
<script src={{ asset("/dist/js/adminlte.js") }}></script>

<!-- DataTables  & Plugins -->
<script src={{ asset("/plugins/datatables/jquery.dataTables.min.js") }}></script>
<script src={{ asset("/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js") }}></script>
<script src={{ asset("/plugins/datatables-responsive/js/dataTables.responsive.min.js") }}></script>
<script src={{ asset("/plugins/datatables-responsive/js/responsive.bootstrap4.min.js") }}></script>
<script src={{ asset("/plugins/datatables-buttons/js/dataTables.buttons.min.js") }}></script>
<script src={{ asset("/plugins/datatables-buttons/js/buttons.bootstrap4.min.js") }}></script>
<script src={{ asset("/plugins/jszip/jszip.min.js") }}></script>
<script src={{ asset("/plugins/pdfmake/pdfmake.min.js") }}></script>
<script src={{ asset("/plugins/pdfmake/vfs_fonts.js") }}></script>
<script src={{ asset("/plugins/datatables-buttons/js/buttons.html5.min.js") }}></script>
<script src={{ asset("/plugins/datatables-buttons/js/buttons.print.min.js") }}></script>
<script src={{ asset("/plugins/datatables-buttons/js/buttons.colVis.min.js") }}></script>

@yield('js')

</body>
</html>