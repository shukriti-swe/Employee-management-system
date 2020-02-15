@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">


          <h1>Employee List</h1> <br>
          <table class="table table-hover table-striped">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Account_no</th>
              <th>Phone number</th>
              <th>Address</th>
              <th>Birthday</th>
              <th>Gender</th>
            </tr>
            @foreach($view_data as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->account_no}}</td>
              <td>{{$data->phone_number}}</td>
              <td>{{$data->address}}</td>
              <td>{{$data->birthday}}</td>
              <td>{{$data->gender}}</td>
               
            </tr>
            @endforeach
            
          </table>
          <a href="{{route('employee_list_pdf')}}" class="btn btn-primary">Generate pdf</a>
        </div>
      

@endsection  