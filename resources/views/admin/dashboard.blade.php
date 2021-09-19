@extends('admin.admin_master')
@section('main_contant')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-xl-4">
        <div class="card bg-soft-primary">
            <div>
                <div class="row">
                    <div class="col-7">
                        <div class="text-primary p-3">
                            <h5 class="text-primary">Welcome Back {{$user->username}} !</h5>
                            <p>Admin Dashboard</p>
                            
                        </div>
                    </div>
                    <div class="col-5 align-self-end">
                        <img src="assets\images\profile-img.png" alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-8">
        <div class="row">
            <div class="col-sm-4">
                <div class="card" style="background: linear-gradient(to bottom, #99e799 0%, #ebc1d6 100%); border-radius: 20px">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                    <i class="bx bx-user"></i>
                                </span>
                            </div>
                            @php
                            $t =0;
                            @endphp 
                             @foreach($teachers as $teacher)
                             @php
                             $t++
                             @endphp 
                                       @endforeach
                            <h5 class="font-size-14 mb-0">Total Teacher</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{$t}}<i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card" style="background: linear-gradient(to bottom, #d9eba8 0%, #ff99cc 100%); border-radius: 20px">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                    <i class="bx bx-user"></i>
                                </span>
                            </div>
                            @php
                            $o =0;
                            @endphp 
                             @foreach($oparetors as $oparetors)
                             @php
                             $o++
                             @endphp 
                                       @endforeach
                            <h5 class="font-size-14 mb-0">Total Oparetor</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{$o}}<i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-sm-4">
                <div class="card" style="background: linear-gradient(to bottom, #33ccff 0%, #dac1cd 100%); border-radius: 20px">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <div class="avatar-xs mr-3">
                                <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                                    <i class="bx bx-user"></i>
                                </span>
                            </div>
                            @php
                            $s =0;
                            @endphp 
                             @foreach($students as $student)
                             @php
                             $s++
                             @endphp 
                                       @endforeach
                            <h5 class="font-size-14 mb-0">Total Student</h5>
                        </div>
                        <div class="text-muted mt-4">
                            <h4>{{$s}}<i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="card" style="background: linear-gradient(to bottom, #d9e8ec 0%, hsl(278, 68%, 75%) 100%); border-radius: 20px">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-xs mr-3">
                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                            <i class="bx bx-user"></i>
                        </span>
                    </div>
                    @php
                            $sub =0;
                            @endphp 
                             @foreach($subjects as $subject)
                             @php
                             $sub++
                             @endphp 
                                       @endforeach
                    <h5 class="font-size-14 mb-0">Total Subject</h5>
                </div>
                <div class="text-muted mt-4">
                    <h4>{{$sub}}<i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4" >
        <div class="card" style="background: linear-gradient(to bottom, #9290e6 0%, #ff99cc 100%); border-radius: 20px">
            <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                    <div class="avatar-xs mr-3">
                        <span class="avatar-title rounded-circle bg-soft-primary text-primary font-size-18">
                            <i class="bx bx-user"></i>
                        </span>
                    </div>
                    @php
                    $c =0;
                    @endphp 
                     @foreach($courses as $course)
                     @php
                     $c++
                     @endphp 
                               @endforeach
                    <h5 class="font-size-14 mb-0">Total Section</h5>
                </div>
                <div class="text-muted mt-4">
                    <h4>{{$c}}<i class="mdi mdi-chevron-up ml-1 text-success"></i></h4>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="col-xl-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4">Users Analytics</h4>
                <div>
                    <div id="donut-chart" class="apex-charts"></div>
                </div>
                <div class="text-center text-muted">
                    <div class="row">
                        <div class="col-4">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-primary mr-1"></i>Teacher</p>
                                <h5>2,132</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-success mr-1"></i>Oparetor</p>
                                <h5>1,763</h5>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mt-4">
                                <p class="mb-2 text-truncate"><i class="mdi mdi-circle text-danger mr-1"></i>Student</p>
                                <h5>$ 973</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</div>
<!-- end row -->

@endsection