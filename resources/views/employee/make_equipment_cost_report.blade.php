@extends('employee.employeelayout.homepagedesign')
@section('content')
   <div class="container">
   			<form action="{{route('equipment_report_save')}}" method="get">
			<table class="table">
				<tr>
				<th>

            <label>User id:</label><br>
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"><p>{{ Auth::user()->id }}</p>

			<label>Author:</label><br>
			<input type="hidden" name="author" value="{{ Auth::user()->name }}"  ><p>{{ Auth::user()->name }}</p>

			 <label>Date:</label><br>
			<input type="date" name="date" required=""><br><br>
            
            <label>Name:</label><br>
			<input type="text" name="name" placeholder="   Enter work name"required=""><br><br>

			<label>Quantity:</label><br>
			<input type="number" name="quantity" required=""><br><br>

			<label>Price:</label><br>
			<input type="number" name="price" placeholder=" Enter description"required=""><br><br>

			<label>Status:</label><br>
			<input type="text-area" name="status" required=""><br><br>

             <button type="submit" class="btn btn-primary">Save report</button><br><br>
			
			  </th>
			</tr>
			</table>
		</form>
   	
   </div>
@endsection