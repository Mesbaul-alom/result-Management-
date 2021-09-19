<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>Result Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets\images\favicon.ico">
         <!-- select2 css -->
         <link href="{{asset('\libs\select2\css\select2.min.css')}}" rel="stylesheet" type="text/css">

         <!-- bootstrap-datepicker css -->
         <link href="{{asset('assets\libs\bootstrap-datepicker\css\bootstrap-datepicker.min.css')}}" rel="stylesheet">
 
         <!-- DataTables -->
         <link href="{{asset('assets\libs\datatables.net-bs4\css\dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
 
         <!-- Responsive datatable examples -->
         <link href="{{asset('assets\libs\datatables.net-responsive-bs4\css\responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Bootstrap Css -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{asset('assets\css\app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">
        {{-- <script src="sweetalert2.min.js"></script> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.js"></script>

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

           <!-- header part start -->
           @include('admin.body.admin_header')
         <!-- header part end -->
            
        <!-- header part start -->
        @include('admin.body.admin_sidebar')
         <!-- header part end -->

          
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                     <!-- Main Content -->
               @yield('main_contant')
             <!-- end main content -->
                       

                      <!-- footer part start -->
                      @include('admin.body.admin_footer')
                      <!-- footer part end -->
                      </div> 
             </div>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets\libs\jquery\jquery.min.js')}}"></script>
        <script src="{{asset('assets\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{asset('assets\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{asset('assets\libs\node-waves\waves.min.js')}}"></script>
        <!-- select2 -->
        <script src="{{asset('assets\libs\select2\js\select2.min.js')}}"></script>
       <!-- bootstrap-datepicker js -->
       <script src="{{asset('assets\libs\bootstrap-datepicker\js\bootstrap-datepicker.min.js')}}"></script>

       <!-- Required datatable js -->
       <script src="{{asset('assets\libs\datatables.net\js\jquery.dataTables.min.js')}}"></script>
       <script src="{{asset('assets\libs\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>

        <!-- Responsive examples -->
       <script src="{{asset('assets\libs\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
       <script src="{{asset('assets\libs\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>
        <!-- apexcharts -->
        <script src="{{asset('assets\libs\apexcharts\apexcharts.min.js')}}"></script>
        <!-- Saas dashboard init -->
        <script src="{{asset('assets\js\pages\saas-dashboard.init.js')}}"></script>

        <script src="{{asset('assets\js\app.js')}}"></script>
      
    </body>
</html>
