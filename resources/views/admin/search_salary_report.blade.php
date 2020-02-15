@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
 

           <h1>Search date for - <span class="badge badge-primary">{{$search}}</span> </h1>
          <table class="table table-hover table-striped">
            <tr>
              <th>Employee id</th>
              <th>Name</th>
              <th>Account no</th>
              <th>Salary scale</th>
              <th>Days of month</th>
              <th>Attendance of the month</th>
              <th>Author</th>
              <th>For month</th>
              <th>salary</th>
            </tr>
            @foreach($view_salary as $data)
            <tr>
              <td>{{$data->user_id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->user_account_no}}</td>
              <td>{{$data->salary_scale}}</td>
              <td>{{$data->days_of_month}}</td>
              <td>{{$data->attendance_of_the_month}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->month}}</td>
              <td>{{$data->total_salary}}</td>
               
            </tr>
            @endforeach
            
          </table>
          <a href="{{route('salary_pdf',$search)}}" class="btn btn-primary">Generate pdf</a>
        </div>
      

@endsection  