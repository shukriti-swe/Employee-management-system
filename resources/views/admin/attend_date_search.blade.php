@extends('admin.adminlayout.search_for_show_attendance')
@section('content')
<div class="card2">
   <h1>Search date for - <span class="badge badge-primary">{{$search}}</span> </h1>

    <table class="table">
      <tr>
        <th>id</th>
        <th>Status</th>
        <th>date</th>
        <th>Author</th>
            <th>Action</th>

      </tr>
        @foreach($view_attend as $data)
  <tr>
    
    <td>{{$data->id}}</td>
    <td>{{$data->status}}</td>
    <td>{{$data->date}}</td>
        <td>{{$data->author}}</td>

    <td><a class="btn btn-danger" href="{{route('view_details',$data->id)}}">view details</a>
    <a class="btn btn-danger" href="{{route('generate_pdf',$data->id)}}">Generate pdf</a></td>
     

    
    </tr>
     @endforeach
    </table>
</div>
@endsection