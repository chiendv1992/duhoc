@include('backend.layout.header')
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    <header class="main-header">
       @include('backend.layout.logo')
       @include('backend.layout.navbar')
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    @include('backend.layout.left')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Bảng Điều Khiển
                <small>Du học</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">@yield('brecrum')</li>
            </ol>
        </section>
        <!-- Main content -->
        @yield('content')
    </div>
    <!-- /.content-wrapper -->

    @include('backend.layout.footer')


</body>
</html>
