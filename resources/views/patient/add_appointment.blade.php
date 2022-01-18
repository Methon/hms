@extends('master')
@section('content')
<hr>
<form method="post" action="{{route('manage.appointment.add')}}">
  @csrf
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <h4 class="page-title">Add Appointment</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Appointment ID</label>
                                <input name="appointment" class="form-control" type="text" value="APT-0001" readonly="">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Name</label>
                                <input name="patientname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Department Name</label>
                                <input name="department" class="form-control" type="text">
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Doctor Name</label>
                                <input name="doctorname" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <div class="cal-icon">
                                    <input name="date" type="text" class="form-control datetimepicker">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Time</label>
                                <div class="time-icon">
                                    <input name="time" type="text" class="form-control" id="datetimepicker3">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Email</label>
                                <input name="pemail" class="form-control" type="email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Patient Phone Number</label>
                                <input name="pphone" class="form-control" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <input name="message" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter name">
                        
                      </div>
                    
                      <div class="col-sm-6">
                        <div class="form-group gender-select">
                            <label class="gen-label">Appointment Status:</label>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input name="status" type="radio" name="gender" class="form-check-input">active
                                </label>
                            </div>
                            <div class="form-check-inline">
                                <label class="form-check-label">
                                    <input name="status" type="radio" name="gender" class="form-check-input">inactive
                                </label>
                            </div>
                        </div>
                    </div>
                
                
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Appointment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endsection