@extends('employee.employeelayout.homepagedesign')
@section('content')
   <div class="container">
 <h1>Search date for - <span class="badge badge-primary">{{$search}}</span> </h1>
          <table class="table table-hover table-striped">
            <tr>
              <th>Employee id</th>
              <th>Author</th>
              <th>Work name</th>
              <th>Date</th>
              <th>Status</th>
              <th>work_details</th>
            </tr>
            @foreach($daily_work as $data)
            <tr>
              <td>{{$data->user_id}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->status}}</td>
              <td>{{$data->work_details}}</td>
               
            </tr>
            @endforeach
            
          </table>
          <a href="{{ route('daily_work_pdf',$search)}}" class="btn btn-primary">Generate pdf</a>
   	
   </div>
@endsection   