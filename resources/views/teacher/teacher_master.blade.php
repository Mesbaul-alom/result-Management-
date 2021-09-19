<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <title>Result Management System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="Themesbrand" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href={{asset('assets\images\favicon.ico')}}>

        <!-- Bootstrap Css -->
        <link href="{{asset('assets\css\bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{asset('assets\css\icons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\cards.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('assets\css\subjects.css')}}" rel="stylesheet" type="text/css">
        
     
        <!-- App Css-->
        <link href="{{asset('assets\css\app.min.css')}}" id="app-style" rel="stylesheet" type="text/css">

        
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

           <!-- header part start -->
           @include('teacher.body.teacher_header')
         <!-- header part end -->
            
        <!-- header part start -->
        @include('teacher.body.teacher_sidebar')
         <!-- header part end -->

          
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">
                <div class="page-content">
                    <div class="container-fluid">
                     <!-- Main Content -->
               @yield('main_content')
             <!-- end main content -->
                       

                      <!-- footer part start -->
                      @include('teacher.body.teacher_footer')
                      <!-- footer part end -->
                
                
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

        <script>

    /*function fetchdata(ID){
     
     
      $.ajax({
        type: "get",
        url: `/teacher/result/${ID}`,
        dataType: "json",
        success: function (response) {

          console.log(response.student);
          
          // $.each(response.student, function (key,item) { 
             
          //       $('tbody').append(`<tr>
          //       <td>${item.id}</td>
          //       <td>${item.name}</td>
          //       <td>${item.result}</td>
                
          //       </tr>`
          //                      );
               
          // });
          
        }
      });


    }*/

    $(document).ready( function(){
    
    $('.editmarks').on('click',function(){
    
    
    $('#resltview').modal('show');
   
    $tr= $(this).closest('tr');

    var data= $tr.children("td").map(function(){

           return $(this).text();

    }).get();

   

    $('#marks').val(data[2]);
    $('#dd').val(data[0]);
   
    $('#studentname').text("Submit Marks for: "+data[1]);
    
     
   
    
    
   })

   $('#marksb').on('click',function(){
    
    var student_id = $("#dd").val();
    var Subject_id = $("#subject_id").val();
    var marks = $("#marks").val();

    //alert(Subject_id);

    
    var data={student_id:student_id,Subject_id:Subject_id,marks:marks}
    var url="/submitmarks";
    axios.post(url,data)
  .then(function (response) {
   
   
  //alert(response.data);
  location.reload();
  //location.reload();
  })
  .catch(function (error) {
    console.log(error.response.data);
  });
    
  

  //$('#marksb').modal('hide');

  
    
   })

 

   
    
    
    })


 




    
    
    
    </script>

<script src="{{asset('assets/js/core/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/core/popper.min.js')}}"></script>
<script src="{{asset('assets/js/core/bootstrap-material-design.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>

        <!-- apexcharts -->
        <script src="{{asset('assets\libs\apexcharts\apexcharts.min.js')}}"></script>
        <!-- Saas dashboard init -->
        <script src="{{asset('assets\js\pages\saas-dashboard.init.js')}}"></script>

        <script src="{{asset('assets\js\app.js')}}"></script>

    </body>
</html>
