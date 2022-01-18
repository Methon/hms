@extends('master')
@section('content')
    <h1>Departments</h1>

    <hr>
    <a href="{{route('manage.department.add')}}"><button class="btn btn-success">Add Department</button></a>
    <hr>
    <div>
        <table class="table table-light" style="width: 100%">
            <thead>
            <tr>
                <th scope="col">ID</th>
              <th scope="col">Department Name</th> 
                <th scope="col">Description</th>
                <th scope="col">Department Status</th>
                
            </tr>
            </thead>
            <tbody>
                @foreach($departmentlist as $key=>$item)       
                <tr>
                    <th>{{$key+1}}</th>
                    <td>{{$item->departmentname}}</td> 
                    <td>{{$item->description}}</td> 
                    <td>{{$item->dstatus}}</td> 
                   
                </tr>
                @endforeach
            </tbody>
        </table>
    </div> 
@endsection

