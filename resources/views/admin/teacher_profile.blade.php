@extends('admin.admin_master')
@section('main_contant')

      <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Profile</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">teacher</a></li>
                                            <li class="breadcrumb-item active">Profile</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-soft-primary">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome to profile !</h5>
                                                    <p>{{$teacher->first_name}}</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="{{asset('assets\images\profile-img.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="{{('/profile_img/'.$teacher->image)}}" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">teacher</h5>
                                                @if($teacher->is_active =='1')
                                                <p class="text-muted mb-0 text-truncate">Active</p>
                                                @else
                                                <p class="text-muted mb-0 text-truncate">Suspend</p>
                                                @endif
                                            </div>

                                            <div class="col-sm-8">
                                                <div class="pt-4">
                                                   
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <h5 class="font-size-15">Department:{{$teacher->department}}</h5>
                                                            <p class="text-muted mb-0">Email:{{$teacher->email}}</p>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <a href="/teacher/edit/{{$teacher->id}}" class="btn btn-primary waves-effect waves-light btn-sm">Edit Profile <i class="mdi mdi-arrow-right ml-1"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end card -->

                                
                            </div>         
                            
                            <div class="col-xl-8">
                                <div class="card">
                                <div class="card-body">
                                        <h4 class="card-title mb-4">Personal Information</h4>
                                        <div class="table-responsive">
                                            <table class="table table-nowrap mb-0">
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Full Name:</th>
                                                        <td>{{$teacher->first_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Father Name:</th>
                                                        <td>{{$teacher->father_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mother Name:</th>
                                                        <td>{{$teacher->mother_name}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Mobile :</th>
                                                        <td>{{$teacher->phone}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">E-mail :</th>
                                                        <td>{{$teacher->email}}</td>
                                                    </tr>
                                                     <tr>
                                                        <th scope="row">Nid:</th>
                                                        <td>{{$teacher->nid}}</td>
                                                    </tr>
                                        
                                                    <tr>
                                                        <th scope="row">Date of birth:</th>
                                                        <td>{{$teacher->dob}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row"> Present Address :</th>
                                                        <td>{{$teacher->present_address}}</td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">Parmanent Address :</th>
                                                        <td>{{$teacher->permanent_address}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                        </div>
</div>
                        <!-- end row -->

                    @endsection

