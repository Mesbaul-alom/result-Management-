@extends('teacher/teacher_master');

@section('main_content')
  <!-- Modal -->
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
            <input type="hidden" value="{{$subject_id}}"  id="subject_id" >
           
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

<table border="1px" class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Student id</th>
        <th scope="col">Name</th>
        <th scope="col">Marks</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody id="datatable">
        @php
      $a = 1;
      @endphp 
        @foreach($studentdata as $data)
        <tr>
          <th scope="row">{{$a++}}</th>
          <td>{{$data->id}}</td>
          <td>{{$data->student_name}}</td>
          <td>{{$data->result}}</td>
          <td><button type="button"  data-toggle="modal" data-target="#resltview" class="btn btn-primary editmarks">Change Marks</button> </td>
        </tr>
      @endforeach
     
    </tbody>
  </table>
  
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

@endsection

