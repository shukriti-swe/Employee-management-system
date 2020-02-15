@extends('employee.employeelayout.homepagedesign')
@section('content')
   <div class="container">
 <h1>Search date for - <span class="badge badge-primary">{{$search}}</span> </h1>
          <table class="table table-hover table-striped">
            <tr>
              <th>Employee id</th>
              <th>Author</th>
              <th>Date</th>
              <th>Equipment name</th>
              <th>quantity</th>
              <th>price</th>
              <th>Status</th>
            </tr>
            @foreach($equipment as $data)
            <tr>
              <td>{{$data->user_id}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->quantity}}</td>
              <td>{{$data->price}}</td>
              <td>{{$data->status}}</td>
               
            </tr>
            @endforeach
            
          </table>
          <a href="{{ route('equipment_pdf',$search)}}" class="btn btn-primary">Generate pdf</a>
   	
   </div>
@endsection   