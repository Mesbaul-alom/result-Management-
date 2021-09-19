@extends('teacher/teacher_master');

@section('main_content')
<div class="modal fade" id="resltview" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="studentname"></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">

          <div class="form-group mx-sm-1 mb-1">

            <input type="hidden"  id="dd" >
            <input type="hidden" value="{{$subject->id}}"  id="subject_id" >

            <input type="text" class="form-control" id="marks" placeholder="Marks">
          </div>
          <button id="marksb"    data-dismiss="modal" class="btn btn-primary mb-2">Submit Marks</button>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
      <!-- Grid row -->
      <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

      <div class="row">
      <div class="col-md-5 col-xl-4">
      <div class="card bg-c-blue order-card">
      <div class="card-block">
          <h6 class="m-b-20">Faculty Name</h6>

          <p class="m-b-0">{{$subject->teacher[0]->first_name}}</p>
      </div>
      </div>
      </div>

      <div class="col-md-5 col-xl-4">
      <div class="card bg-c-green order-card">
      <div class="card-block">
          <h6 class="m-b-20">Subject Name</h6>
          <h2 class="text-right"></h2>
          <p class="m-b-0">{{$subject->subject_name}}</p>
      </div>
      </div>
      </div>

      <div class="col-md-5 col-xl-4">
      <div class="card bg-c-yellow order-card">
      <div class="card-block">
          <h6 class="m-b-20">Tottal Student</h6>

          <p class="m-b-0">{{count($subject->student)}}</p>
      </div>
      </div>
      </div>


      </div>

<div class="card-body">





        <!--MDB Tables-->


                    <!-- Grid row -->
                    <!--Table-->
                    <table class="table table-striped">
                        <!--Table head-->
                        <thead >
                            <tr>
                                <th>#</th>
                                <th>Student Id</th>
                                <th>Student Name</th>
                                <th>Marks</th>
                                <th>Status</th>
                                <th>Submit Marks</th>
                            </tr>
                        </thead >
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                          @foreach($subject->student as $student)
                            <tr>
                                <th ><div class="avatar-xs">
                                    <span class="avatar-title rounded-circle">
                                1
                                    </span>
                                </div>
                            </th>
                                <td>{{$student->id}}</td>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->pivot->marks}}</td>
                                <td><span class="badge bg-success">Active</span></td>
                                <td><button type="button"  data-toggle="modal" data-target="#resltview" class="btn btn-primary editmarks">Change Marks</button> </td>
                            </tr>
                           @endforeach
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->






  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
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




                    var data={student_id:student_id,Subject_id:Subject_id,marks:marks}
                    var url="/submitmarks";
                    axios.post(url,data)
                    .then(function (response) {


                        console.log(response.data);

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

@endsection

