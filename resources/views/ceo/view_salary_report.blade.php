@extends('ceo.ceolayout.homepagedesign')
@section('content')
<div class="card2">
     <div >
     <form action="{{route('search_salary_date')}}" method="get"><br><br><br>
     <input type="month" name="search" required="">
     <button class="btn btn-danger" type="submit" id="primary">Search month</button>
   </form>
  </div>

    <table class="table">
    	<tr>
    		<th>id</th>
    		<th>User Id</th>
    		<th>Name</th>
    		<th>Month</th>
            <th>Action</th>

    	</tr>
    		@foreach($view_salary as $data)
	<tr>
		
		<td>{{$data->id}}</td>
		<td>{{$data->user_id}}</td>
		<td>{{$data->name}}</td>
        <td>{{$data->month}}</td>

		<td><a class="btn btn-danger"href="{{route('delete_salary_report',$data->id) }}">Delete</a></td>
		 

   	
    </tr>
     @endforeach
    </table>
</div>
@endsection