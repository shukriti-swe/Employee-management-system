@extends('ceo.ceolayout.homepagedesign')
@section('content')
   <div class="container">
   			<form action="{{route('equipment_update_save',$data->id)}}" method="get">
			<table class="table">
				<tr>
				<th>

            <label>User id:</label><br>
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"><p>{{ Auth::user()->id }}</p>

			<label>Author:</label><br>
			<input type="hidden" name="author" value="{{ Auth::user()->name }}"  ><p>{{ Auth::user()->name }}</p>

			 <label>Date:</label><br>
			<input type="date" name="date" required="" value="{{$data->date}}"><br><br>
            
            <label>Name:</label><br>
			<input type="text" name="name" placeholder="   Enter work name"required="" value="{{$data->name}}"><br><br>

			<label>Quantity:</label><br>
			<input type="number" name="quantity" required=""value="{{$data->quantity}}"><br><br>

			<label>Price:</label><br>
			<input type="number" name="price" placeholder=" Enter description" value="{{$data->price}}"><br><br>

			<label>Status:</label><br>
			<input type="text-area" name="status"  value="{{$data->status}}"><br><br>

             <button type="submit" class="btn btn-primary">Save report</button><br><br>
			
			  </th>
			</tr>
			</table>
		</form>
   	
   </div>
@endsection