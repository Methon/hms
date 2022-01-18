@extends('master')
@section('content')
    <h1>Admin Panel</h1>
    <hr>
    <a href="{{url('/create/patient')}}"><button class="btn btn-primary">Admit Patient</button></a>
    <a href="{{route('manage.patient.details')}}"><button class="btn btn-success ">VIew all Admitted Patient</button></a>
    <a href="" class="btn btn-success">View All Registered Doctors</a>
@endsection