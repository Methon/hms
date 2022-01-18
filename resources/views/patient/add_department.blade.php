@extends('master')
@section('content')
<h1>Add Department</h1>
<hr>
<form method="post" action="{{route('manage.department.add')}}">
  @csrf

    <div class="form-group">
      <label for="exampleInputEmail1">departmentname</label>
      <input name="departmentname" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter name">
      
    </div>
    

    <div class="form-group">
        <label for="exampleInputEmail1">description</label>
        <input name="description" type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Enter name">
        
      </div>

      <div class="col-sm-6">
        <div class="form-group gender-select">
            <label class="gen-label">Department Status:</label>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input name="dstatus" type="radio" name="gender" class="form-check-input">active
                </label>
            </div>
            <div class="form-check-inline">
                <label class="form-check-label">
                    <input name="dstatus" type="radio" name="gender" class="form-check-input">inactive
                </label>
            </div>
        </div>
    </div>


    
    <button type="submit" class="btn btn-primary">Create Department</button>
  </form>
  @endsection