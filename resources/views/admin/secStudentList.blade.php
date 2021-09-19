<!doctype html>
<html lang="en">

    <head>
        
        <meta charset="utf-8">
        <title>Orders | Skote - Responsive Bootstrap 4 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{('assets\images\favicon.ico')}}">

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

    </head>
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

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-flex align-items-center justify-content-between">
                            <h4 class="mb-0 font-size-18">Assign Student</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{$subject->subject_name}}</a></li>
                                    <li class="breadcrumb-item active"> Assign Students</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <!-- Nav tabs -->
                                <ul class="nav nav-tabs nav-tabs-custom" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-toggle="tab" href="#all-order" role="tab">
                                         Teacher:   {{$subject->teacher[0]->first_name}}
                                        </a>
                                    </li>
                                   
                                </ul>

                                <!-- Tab panes -->
                                <div class="tab-content p-3">
                                    <div class="tab-pane active" id="all-order" role="tabpanel">
                                    
                                        <div class="table-responsive mt-5">
                                            <table class="table table-hover datatable dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">Id</th>
                                                        <th scope="col">Student Name</th>
                                                        <th scope="col">Result</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                    
                                                </thead>

                                                <tbody>
                                                    @foreach ($subject->student as $student)
                                                        
                                                   
                                                    <tr>
                                                        <td>{{$student->id}}</td>

                                                        <td>{{$student->student_name}}</td>
                                                
                                                        <td>{{$student->pivot->marks}}</td>

                                                <td>
                                                            <a href="/student/delete/{{$student->id}}" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bx bx-trash"></i></a>
                                                        
                                                            <a href="/student/profile/{{$student->id}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
                
            </div> <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    </div>
               <!-- footer part start -->
               @include('admin.body.admin_footer')
               <!-- footer part end -->
               </div> 
      </div>
     </div>
     <!-- end main content-->

 </div>
 <!-- END layout-wrapper -->

 
    <body data-sidebar="dark">

     

           


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets\libs\jquery\jquery.min.js')}}"></script>
        <script src="{{asset('assets\libs\bootstrap\js\bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets\libs\metismenu\metisMenu.min.js')}}"></script>
        <script src="{{asset('assets\libs\simplebar\simplebar.min.js')}}"></script>
        <script src="{{asset('assets\libs\select2\js\select2.min.js')}}"></script>
        <!-- bootstrap-datepicker js -->
        <script src="{{asset('assets\libs\bootstrap-datepicker\js\bootstrap-datepicker.min.js')}}"></script>

        <!-- Required datatable js -->
        <script src="{{asset('assets\libs\datatables.net\js\jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables.net-bs4\js\dataTables.bootstrap4.min.js')}}"></script>
        
        <!-- Responsive examples -->
        <script src="{{asset('assets\libs\datatables.net-responsive\js\dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets\libs\datatables.net-responsive-bs4\js\responsive.bootstrap4.min.js')}}"></script>

        <!-- init js -->
        <script src="{{asset('assets\js\pages\crypto-orders.init.js')}}"></script>

        <script src="{{asset('assets\js\app.js')}}"></script>

    </body>
</html>
