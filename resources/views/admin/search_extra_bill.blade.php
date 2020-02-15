@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
 

           <h1>Search date for - <span class="badge badge-primary">{{$search}}</span> </h1>
          <table class="table table-hover table-striped">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Month</th>
              <th>Author</th>
              <th>Description</th>
              <th>Cost</th>
              <th>Total Cost</th>
            </tr>
            @foreach($view_extra_bill as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->month}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->description}}</td>
              <td>{{$data->cost}}</td>
              <td>{{$total_salary=$total_salary+$data->cost}}</td>
            </tr>
            @endforeach
            
          </table>
          <a href="{{route('extra_bill_pdf',$search)}}" class="btn btn-primary">Generate pdf</a>
        </div>
      

@endsection  