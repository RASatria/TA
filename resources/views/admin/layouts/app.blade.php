
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from pepdev.com/template/apez/admin/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 10:30:43 GMT -->
<head>
    @include('admin.includes.head')
</head>
<body>

    <div class="loader-wrapper">
        <div class="loader spinner-3">
            <div class="bg-primary"></div>
        </div>
    </div>
    
    <!-- <div class="wrapper">
        <!-- Main Container -->
        <div id="main-wrapper" class="menu-fixed page-hdr-fixed">
            <!-- Menu Wrapper -->
            <div class="menu-wrapper">
                <div class="menu">
                    <!-- Menu Container -->
                    @include('admin.includes.sidebar')
                </div>
            </div>
            <!-- Page header -->
            <div class="page-hdr">
               @include('admin.includes.header')
            </div>
            <!-- Main Page Wrapper -->
            <div class="page-wrapper">
               @yield('content')
            </div>
            <!-- Page Footer -->
            <div class="page-ftr">
                @include('admin.includes.footer')
            </div>
        </div>
    </div>

    
    <!-- Include js files -->
    <!-- Vendor Plugin -->
    <script type="text/javascript" src="{{ asset('admin/plugin/vendor.min.js') }}"></script>
    <!-- Raphael Plugin -->
    <script type="text/javascript" src="{{ asset('admin/plugin/raphael/raphael-min.js') }}"></script>
    <!-- Morris Plugin -->
    <script type="text/javascript" src="{{ asset('admin/plugin/morris/morris.min.js') }}"></script>
    <!-- Sparkline Plugin -->
    <script type="text/javascript" src="{{ asset('admin/plugin/sparkline/jquery.sparkline.min.js') }}"></script>
    <!-- Custom Script Plugin -->
    <script type="text/javascript" src="{{ asset('admin/dist/js/custom.js') }}"></script>
    <!-- Custom demo Script for Dashbaord -->
    <script type="text/javascript" src="{{ asset('admin/dist/js/demo/dashboard.js') }}"></script>

    <script type="text/javascript" src="{{ asset('admin/plugin/datatable/datatables.min.js') }}"></script>
    <!-- Custom Script Plugin -->

    <script type="text/javascript" src="{{ asset('admin/dist/js/demo/datatable.js') }}"></script>
</body>

<!-- Mirrored from pepdev.com/template/apez/admin/dashboard-ecommerce.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 May 2019 10:31:46 GMT -->
</html>