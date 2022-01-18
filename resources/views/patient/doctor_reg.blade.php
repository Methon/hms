
@extends('master')
@section('content')
<h1>Doctor Registration list</h1>
<hr>
<hr>
<form method="post" action="{{route('doctor.registration.store')}}" enctype="multipart/form-data">
  @csrf
    <div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Doctor</h4>
                <form method="POST" action="{{route('doctor.registration.form')}}">
                    @csrf
                  
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>First Name <span class="text-danger">*</span></label>
                                <input name="fname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Last Name</label>
                                <input name="lname" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Username <span class="text-danger">*</span></label>
                                <input name="username" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Email <span class="text-danger">*</span></label>
                                <input name="email" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input name="confirmpassword" class="form-control" type="password">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Date of Birth</label>
                                <div class="cal-icon">
                                    <input name="dob" type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group gender-select">
                                <label class="gen-label">Gender:</label>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input name="gender" type="radio" name="gender" class="form-check-input">Male
                                    </label>
                                </div>
                                <div class="form-check-inline">
                                    <label class="form-check-label">
                                        <input name="gender" type="radio" name="gender" class="form-check-input">Female
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address" type="text" class="form-control ">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>country</label>
                                        <input name="country" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    <div class="form-group">
                                        <label>city</label>
                                        <input name="city" type="text" class="form-control">
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-6 col-lg-3">
                                    
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Phone </label>
                                <input name="phone" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Avatar</label>
                                
                    
                                <div class="profile-upload">
                                    <div class="upload-img">
                                        <img alt="" src="assets/img/user.jpg">
                                    </div>
                                    <div class="upload-input">
                                        <input name="avatar" type="file" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Short Biography</label>
                        <textarea   name="shortbiography"
                        class="form-control" rows="3" cols="30"></textarea>
                    </div>
                    
                   
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Doctor</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>    
@endsection