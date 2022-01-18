@extends('master')


@section('content')


    
        <h1> <p class="text-primary">Doctor Profile</p>        </h1>

        <td><img src="{{url('/app/public/uploads',$item->avatar)}}" width="150px"></td>



        
        <p>Doctor  Name: {{$item->username}}</p>
        <p>Doctor Email: {{$item->email}}</p>
        <p>Doctor Date of Birth: {{$item->dob}}</p>
        <p>Doctor Address: {{$item->address}}</p>
        <p>Doctor Country Name: {{$item->country}}</p>
        <p>Doctor City Name: {{$item->city}}</p>
        <p>Doctor Phone Number: {{$item->phone}}</p>

        <p>Department Name: {{$item->shortbiography}}</p>
       


        
       


@endsection


