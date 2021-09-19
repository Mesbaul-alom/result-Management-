@extends('admin.admin_master')
@section('main_contant')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->


                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Add Section</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Add Section</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="{{url('/add/section')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <select name="subject" class="form-control">
                                                            <option selected="">Subject</option>
                                                      
                                                            @foreach($subject as $data)
                                                            <option value={{$data->id}}  >{{$data->subject_name}}</option>
                                                              @endforeach
                                                      
                                                          </select>
                                                        @if($errors->has('subject_name'))
                                                       <div style="color:red"> {{$errors->first('subject_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="teacher" class="form-control">
                                                            <option selected="">Teacher</option>
                                                             @foreach($teachers as $teacher)
                                                            <option value={{$teacher->id}}>{{$teacher->first_name}}</option>
                                                              @endforeach
                                                          </select>
                                                        @if($errors->has('teacher_name'))
                                                       <div style="color:red"> {{$errors->first('teacher_name')}}</div>
                                                       @endif
                                                    </div>
                                                    {{-- <div class="form-group">
                                                        <select name="student" class="form-control">
                                                            <option selected="">Student</option>
                                                             @foreach($students as $student)
                                                            <option value={{$student->id}}>{{$student->student_name}}</option>
                                                              @endforeach
                                                          </select>
                                                        @if($errors->has('student_name'))
                                                       <div style="color:red"> {{$errors->first('student_name')}}</div>
                                                       @endif
                                                    </div> --}}
                                                </div>
                                            </div>
                                            <h5 style="color: red">{{$error}}</h5>
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Add Section</button>
                                            
                                        </form>
        
                                    </div>
                                </div>
                    
                </div>
                        </div>
                         <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <form method="post" action="{{url('/assign/student')}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <select name="subject" class="form-control">
                                                            <option selected="">Subject</option>
                                                      
                                                            @foreach($subject as $data)
                                                            <option value={{$data->id}}  >{{$data->subject_name}}</option>
                                                              @endforeach
                                                      
                                                          </select>
                                                        @if($errors->has('subject_name'))
                                                       <div style="color:red"> {{$errors->first('subject_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <select name="student" class="form-control">
                                                            <option selected="">Student</option>
                                                             @foreach($students as $student)
                                                            <option value={{$student->id}}>{{$student->student_name}}</option>
                                                              @endforeach
                                                          </select>
                                                        @if($errors->has('student_name'))
                                                       <div style="color:red"> {{$errors->first('student_name')}}</div>
                                                       @endif
                                                    </div>
                                                </div>
                                            </div>
                                             
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Assign Student</button>
                                         
                                        </form>
        
                                    </div>
                                </div>
                    
                </div>
                        </div>
                <!-- End Page-content -->
                @if(isset($success) && $success == true) 
                <script>
                 Swal.fire(
                     'success','Add Section sucessfully done','success'
                 );
             
           </script>
                @endif 
 @endsection