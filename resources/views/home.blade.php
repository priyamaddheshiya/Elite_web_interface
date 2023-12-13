@include('header')
<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">
@include('layouts.admin.sidebar')
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
         
            <!-- Begin Page Content -->
            <div class="container-fluid">
                @yield('content')
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
        @include('footer')
        @yield('script')
    </div>
    <!-- End of Content Wrapper -->
</div>
<!-- End of Page Wrapper -->