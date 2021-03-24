<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Test Tupv" name="description">
    <meta content="Test Tupv" name="author">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('admin-asset\images\favicon.ico') }}">

    <!-- Table datatable css -->
    <link href="{{ asset('admin-asset\libs\datatables\dataTables.bootstrap4.min.css') }}" rel="stylesheet"
        type="text/css">
    <!-- Custom box css -->
    <link href="{{ asset('admin-asset\libs\custombox\custombox.min.css') }}" rel="stylesheet">

    <!-- Bootstrap select plugins -->
    <link href="{{ asset('admin-asset\libs\bootstrap-select\bootstrap-select.min.css') }}" rel="stylesheet"
        type="text/css">

    <!-- c3 plugin css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('admin-asset\libs\c3\c3.min.css') }}">

    <!-- App css -->
    <link href="{{ asset('admin-asset\css\bootstrap.min.css') }}" rel="stylesheet" type="text/css"
        id="bootstrap-stylesheet">
    <link href="{{ asset('admin-asset\css\icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin-asset\css\app.min.css') }}" rel="stylesheet" type="text/css" id="app-stylesheet">

    @section('link')

    @show
</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        <!-- Topbar Start -->
        @include('admin.layouts.topbar')
        <!-- end Topbar -->

        <!-- ========== Left Sidebar Start ========== -->
        <div class="left-side-menu">
            @include('admin.layouts.sidebar')
        </div>
        <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="content-page">
            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    @yield('content')
                </div>
                <!-- end container-fluid -->

            </div>
            <!-- end content -->



            <!-- Footer Start -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            2021 &copy; Design by <a href="javascript:void(0);">Pham Van Tu</a>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- end Footer -->

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    <!-- Vendor js -->
    <script src="{{ asset('admin-asset\js\vendor.min.js') }}"></script>

    <!-- Bootstrap select plugin -->
    <script src="{{ asset('admin-asset\libs\bootstrap-select\bootstrap-select.min.js') }}"></script>

    <!-- plugins -->
    <script src="{{ asset('admin-asset\libs\c3\c3.min.js') }}"></script>
    <script src="{{ asset('admin-asset\libs\d3\d3.min.js') }}"></script>

    <!-- dashboard init -->
    <script src="{{ asset('admin-asset\js\pages\dashboard.init.js') }}"></script>

    <!-- Modal-Effect -->
    <script src="{{ asset('admin-asset\libs\custombox\custombox.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('admin-asset\js\app.min.js') }}"></script>
    <script>
        $.fn.dataTable.ext.errMode = 'none';

    </script>

    <!-- Datatable plugin js -->
    <script src="{{ asset('admin-asset\libs\datatables\jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin-asset\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('admin-asset\libs\datatables\dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin-asset\libs\datatables\responsive.bootstrap4.min.js') }}"></script>
    @section('js')

    @show
</body>

</html>
