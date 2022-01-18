@extends('master')
@section('content')
    <h1>Doctor details</h1>

    @if(session()->has('success'))
        <p class="alert alert-success">
            {{session()->get('success')}}
        </p>
    @endif
    
    <a href="{{route('doctor.registration.form')}}" class="btn btn-info">Doctor Registration </a>

   
    
    <hr>
    <div style="overflow-x: scroll;">
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">firstnname</th> 
                <th scope="col">last name</th>
                <th scope="col">username</th>
                <th scope="col">email</th>
                <th scope="col">password</th>
                <th scope="col">confirmpassword</th>
                <th scope="col">dob</th>
                <th scope="col">gender</th>
                <th scope="col">address</th>
                <th scope="col">country</th>
                <th scope="col">city</th>
                <th scope="col">phone</th>
                <th scope="col">avatar</th>
                <th scope="col">shortbiography</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
                {{--@dd($doctorlist)--}}
                @foreach($doctorlist as $key=>$item)       
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$item->fname}}</td> 
                    <td>{{$item->lname}}</td> 
                    <td>{{$item->username}}</td> 
                    <td>{{$item->email}}</td> 
                    <td>{{$item->password}}</td> 
                    <td>{{$item->confirmpassword}}</td> 
                    <td>{{$item->dob}}</td>
                    <td>{{$item->gender}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->country}}</td>
                    <td>{{$item->city}}</td>
                    <td>{{$item->phone}}</td>
                    <td><img src="{{url('/app/public/uploads',$item->avatar)}}" width="50px"></td>
                    <td>{{$item->shortbiography}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route('admin.doctor.view',$item->id)}}">View</a>
                        <a class="btn btn-danger" href="{{route('admin.doctor.delete',$item->id)}}">Delete</a>
                        <a class="btn btn-warning" href="{{route('admin.doctor.edit',$item->id)}}">Edit</a>


                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
                     
@endsection





