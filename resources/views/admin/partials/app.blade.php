<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>@yield('title') - Personal Portfolio Kamil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="MilFolio - Personal Portfolio Kamil">
        <meta name="author" content="Kamil"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset("admin/assets/images/favicon.ico")}}">

        <!-- App css -->
        <link href="{{asset("admin/assets/css/app.min.css")}}" rel="stylesheet" type="text/css" id="app-style" />

        <!-- Icons -->
        <link href="{{asset("admin/assets/css/icons.min.css")}}" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body data-menu-color="dark" data-sidebar="default">

        <!-- Begin page -->
        <div id="app-layout">


            <!-- Topbar Start -->
            @include('admin.partials.topbar')
            <!-- end Topbar -->

            <!-- Left Sidebar Start -->
            @include('admin.partials.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
        
            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-xxl"> 
                        @yield('content')
                    </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                @include('admin.partials.footer')
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Vendor -->
        @include('admin.partials.common-scripts')
        
    </body>

</html>