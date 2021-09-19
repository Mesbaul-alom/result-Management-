  <!--


<style>
    table,td {
     
      padding: 20px;
    }
   
    </style>

<table>

 
     
<tr>
 / 
    <td>
    <div class="card" style="width: 18rem;">
    
        <div class="card-body">
          <h5 class="card-title"></h5>  
          <p class="card-text"></p> 
          <a href="../teacher/Studentrecord/" class="btn btn-primary">Assign Result</a>
        </div>
      </div>
      

    </td> 


         
</tr>


  



</table>







  




 


@extends('/teacher/teacher_master');

@section('main_content')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">TAKEN COURSES</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Oparetors</a></li>
                                            <li class="breadcrumb-item active">Oparetor List</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            @foreach($subjectdata->subject as $data)
                            <div class="col-xl-3 col-lg-6">
                              <div class="card l-bg-blue-dark">
                                  <div class="card-statistic-3 p-4">
                                     
                                      <div class="mb-4">
                                        
                                          <h2 class="d-flex align-items-center mb-0">
                                            {{$data->subject_name}}
                                          </h2>
                                      </div>
                                      <div class="row align-items-center mb-2 d-flex">
                                          <div class="col-8">
                                            <h5 class="card-title mb-0">{{$data->subject_code}}</h5>
                                          </div>
                                          <div class="col-4 text-right">
                                            <a href="../teacher/Studentrecord/{{$data->id}}" class="btn btn-success">Assign Result</a>
                                          </div>
                                      </div>
                                      <h6 class="d-flex align-items-center mb-0">
                                        Student capacity
                                      </h6>
                                      <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                          <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                      </div>
                                  </div>
                              </div>
                            </div>
                            @endforeach
                        </div>
                        <!-- end row -->   
                        
                        
                        <script src="{{asset('assets\libs\apexcharts\apexcharts.min.js')}}"></script>
        <!-- Saas dashboard init -->
        <script src="{{asset('assets\js\pages\saas-dashboard.init.js')}}"></script>

        <script src="{{asset('assets\js\app.js')}}"></script>
        
@endsection


