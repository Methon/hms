
@extends('master')
@section('content')
    <h1>Doctors</h1>

    <hr>
    <a href="{{route('doctor.schedule.form')}}"><button type="button" class="btn btn-warning">Doctor Time Schedule</button> </a>
    <hr>
    <div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Doctor Name</th>
              <th scope="col">Available Days</th> 
                <th scope="col">Start Time</th>
                <th scope="col">End Time</th>
                <th scope="col">Message</th>
                <th scope="col">Schedule Status</th> 
                  
                
            </tr>
            </thead>
            <tbody>
                @foreach($schedulelist as $key=>$item)       
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$item->dname}}</td> 
                    <td>{{$item->available}}</td> 
                    <td>{{$item->stime}}</td> 
                    <td>{{$item->etime}}</td> 
                    <td>{{$item->message}}</td> 
                    <td>{{$item->status}}</td> 
                 

                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
@endsection