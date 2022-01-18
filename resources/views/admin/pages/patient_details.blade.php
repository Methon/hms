@extends('master')
@section('content')
    <h1>Patients</h1>
    <hr>
    <a href="{{route('patient.registration.form')}}"><button class="btn btn-primary">Patients registration</button></a>
    <hr>
    <div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">ID</th>
              <th scope="col">firstnname</th> 
                <th scope="col">last name</th>
                <th scope="col">birthday</th>
                <th scope="col">gender</th>
                <th scope="col">email</th>
                <th scope="col">phone number</th>
                <th scope="col">address</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patientLists as $key=>$patientList)
            <tr>
                <th>{{$key+1}}</th>
                <td>{{$patientList->fname}}</td> 
                <td>{{$patientList->lname}}</td> 
                <td>{{$patientList->birthday}}</td> 
                <td>{{$patientList->gender}}</td> 
                <td>{{$patientList->email}}</td> 
                <td>{{$patientList->pnumber}}</td> 
                <td>{{$patientList->address}}</td>
            </tr>   
        @endforeach
            </tbody>
        </table>
    </div>
@endsection




