@extends('admin.admin_master')
@section('main_contant')

<!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->


                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-flex align-items-center justify-content-between">
                                    <h4 class="mb-0 font-size-18">Update subject</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                                            <li class="breadcrumb-item active">Update Subject</li>
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
                                        <form method="post" action="{{url('/subject/edit/'.$subject->id)}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="subject_name">Subject Name</label>
                                                        <input id="subject_name" name="subject_name" type="text" value="{{$subject->subject_name}}" class="form-control">
                                                        @if($errors->has('subject_name'))
                                                       <div style="color:red"> {{$errors->first('subject_name')}}</div>
                                                       @endif
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="subject_code">Subject Code</label>
                                                        <input id="father_name" name="subject_code" type="text" value="{{$subject->subject_code}}" class="form-control">
                                                        @if($errors->has('subject_code'))
                                                       <div style="color:red"> {{$errors->first('subject_code')}}</div>
                                                       @endif
                                                    </div>
                                                </div>
                                            </div>
        
                                            <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light">Update Subject</button>
                                        </form>
        
                                    </div>
                                </div>
                    
                </div>
                        </div>
                <!-- End Page-content -->
                @if(isset($success) && $success == true) 
                <script>
                 Swal.fire(
                     'success','Updated subject sucessfully done','success'
                 );
             
           </script>
                @endif 
 @endsection