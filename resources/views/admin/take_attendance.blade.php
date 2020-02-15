@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">

<form action="{{route('attendance_store')}}" method="get"><br>
 

	<table class="table">
      <div class="card card2">
        <label><b>Date:</b> </label>
		<input type="date" class="attenddate" name="date" required=""><br>

		<label><b>Author Name :</b> </label>
		<input type="text" name="author" class="attendauthor"placeholder="Enter Author Name" required=""><br>

	    <label><b>Status :</b> </label>
		<select name="status" class="attendstatus" required=""><br>
            <option value="">None</option>
            <option value="open">Open</option>
            <option value="close">Close</option>
        </select><br>

      </div>
		
	<tr>
		<th>Id:</th>
        <th>Name:</th>
        <th>Attended:</th>
    </tr>

	
	@foreach($view_data as $data)
	<tr>
		<td>{{$data->id}}</td>
		<td>{{$data->name}}</td>
		<td><input type="checkbox" name="user_id[]" value="{{$data->id}}"></td>
 		
   	
    </tr>
     @endforeach
     <tr>
     
     	<td>
     		<input type="submit" class="btn btn-primary">
     	</td>
     </tr>
  </table>
</form>
 
 
</div>
@endsection
 