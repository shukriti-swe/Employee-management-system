
@extends('ceo.ceolayout.search_for_attendance')
@section('content')
<div class="card2">
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
		<a class="btn btn-danger" href="{{route('generate_pdf',$data->id)}}">Generate pdf</a>
        <a class="btn btn-danger"href="{{route('delete_attendance',$data->id)}}">Delete</a></td>
		 

   	
    </tr>
     @endforeach
    </table>
</div>
@endsection