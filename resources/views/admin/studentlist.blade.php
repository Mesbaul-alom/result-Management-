@extends('admin.admin_master')
@section('main_contant')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Student  List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Students</a></li>
                                            <li class="breadcrumb-item active">Students List</li>
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
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap table-hover">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th scope="col" style="width: 70px;">Roll</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>
                                                        <th scope="col">Department</th>
                                                        <th scope="col">Institution</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                @foreach($students as $student)
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle">
                                                                {{$student->roll_number}}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$student->student_name}}</a></h5>
                                                            
                                                        </td>
                                                        <td>{{$student->email}}</td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="badge badge-soft-primary font-size-11 m-1">{{$student->department}}</a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                        {{$student->institute_name}}
                                                        </td>
                                                        <td>
                                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                                <li class="list-inline-item px-2">
                                                                    <a href="/student/edit/{{$student->id}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-edit"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="/student/delete/{{$student->id}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bx bx-trash"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="/student/profile/{{$student->id}}" data-toggle="tooltip" data-placement="top" title="Profile"><i class="bx bx-user-circle"></i></a>
                                                                </li>
                                                            </ul>
                                                        </td>
                                                    </tr>
                                                   
                                                </tbody>
                                                @endforeach
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    
                </div>
                <!-- End Page-content -->
                @if(isset($success) && $success == true) 
                <script>
                 Swal.fire(
                     'Deleted','Student Delete','success'
                 );
             
           </script>
                @endif 
@endsection

           
