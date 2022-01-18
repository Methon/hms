@extends('master')
@section('content')
<h1>Add Schedule</h1>

<hr>
<form method="post" action="{{route('doctor.schedule.add')}}">
  @csrf
          
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    
                    
                        <div class="form-group">
                            <label for="exampleInputEmail1">Doctor Name</label>
                            <input name="dname" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter name">
                            
                         </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Available Days</label>
                  <input name="available" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="available ">
                  
                </div>
                
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Start Time</label>
                                <div class="time-icon">
                                    <input name="stime" type="text" class="form-control" id="datetimepicker3">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>End Time</label>
                                <div class="time-icon">
                                    <input name="etime" type="text" class="form-control" id="datetimepicker4">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Message</label>
                        <input name="message" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter message">
                        
                     </div>
                    <div class="form-group">
                        <label class="display-block">Schedule Status</label>
                        <div class="form-check form-check-inline">
                            <input name="status" class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
                            <label class="form-check-label" for="product_active">
                            Active
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input name="status" class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
                            <label class="form-check-label" for="product_inactive">
                            Inactive
                            </label>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Schedule</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection