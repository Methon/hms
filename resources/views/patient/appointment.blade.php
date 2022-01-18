@extends('master')
@section('content')
    <h1>Appointments</h1>

    <hr>
    <a href="{{route('manage.appointment.add')}}"><button type="button" class="btn btn-warning">Add Appointments</button> </a>

    <hr>
    <div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Appointment Id</th>
              <th scope="col">Patient Name</th> 
                <th scope="col">Department</th>
                <th scope="col">Doctor Name</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th> 
                  <th scope="col">Patient Email</th>
                  <th scope="col">Patient Phone Number</th>
                  <th scope="col">Message</th>
              <th scope="col">Appointment Status</th> 
                  
                
            </tr>
            </thead>
            <tbody>
                @foreach($appointmentlist as $key=>$item)       
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$item->appointment}}</td> 
                    <td>{{$item->patientname}}</td> 
                    <td>{{$item->department}}</td> 
                    <td>{{$item->doctorname}}</td> 
                    <td>{{$item->date}}</td> 
                    <td>{{$item->time}}</td> 
                    <td>{{$item->pemail}}</td> 
                    <td>{{$item->pphone}}</td> 
                    <td>{{$item->message}}</td> 
                    <td>{{$item->status}}</td> 

                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
@endsection



