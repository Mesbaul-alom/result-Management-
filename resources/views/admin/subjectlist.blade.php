@extends('admin.admin_master')
@section('main_contant')
<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Users List</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Contacts</a></li>
                                            <li class="breadcrumb-item active">Users List</li>
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
                                                        <th scope="col" style="width: 70px;">Serial</th>
                                                        <th scope="col">Subject Name</th>
                                                        <th scope="col">Subject Code</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                @php
                                                $s =1;
                                                @endphp
                                                @foreach($subjects as $subject)
                                                
                                                <tbody>
                                                    <tr>
                                                         <td>
                                                            <div class="avatar-xs">
                                                                <span class="avatar-title rounded-circle">
                                                                {{$s++}}
                                                                </span>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <h5 class="font-size-14 mb-1"><a href="#" class="text-dark">{{$subject->subject_name}}</a></h5>
                                                            
                                                        </td>
                                                        <td>{{$subject->subject_code}}</td>
                                                        <td>
                                                            <ul class="list-inline font-size-20 contact-links mb-0">
                                                                <li class="list-inline-item px-2">
                                                                    <a href="{{url('/subject/edit/'.$subject->id)}}" data-toggle="tooltip" data-placement="top" title="Edit"><i class="bx bx-edit"></i></a>
                                                                </li>
                                                                <li class="list-inline-item px-2">
                                                                    <a href="/subject/delete/{{$subject->id}}" data-toggle="tooltip" data-placement="top" title="Delete"><i class="bx bx-trash"></i></a>
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
                     'Deleted','Subject Delete','success'
                 );
             
           </script>
                @endif 
@endsection

           
