@extends('employee.employeelayout.homepagedesign')
@section('content')
   <div class="container">
   			<form action="{{route('monthly_closing_report_save')}}" method="get">
			<table class="table">
				<tr>
				<th>

            <label>User id:</label><br>
			<input type="hidden" name="user_id" value="{{ Auth::user()->id }}"><p>{{ Auth::user()->id }}</p>

			<label>Author:</label><br>
			<input type="hidden" name="author" value="{{ Auth::user()->name }}"  ><p>{{ Auth::user()->name }}</p>

			 <label>Month:</label><br>
			<input type="month" name="month" required=""><br><br>
            
            <label>Product name:</label><br>
			<input type="text" name="product_name" placeholder="   Enter work name"required=""><br><br>

			<label>Equipment recieve data:</label><br>
			<input type="date" name="equipment_recieve_date" required=""><br><br>

			<label>Equipment quantity:</label><br>
			<input type="number" name="equipment_quantity" placeholder=" Enter description"required=""><br><br>

			<label>Time duration:</label><br>
			<input type="number" name="time_duration" required=""><br><br>

			<label>Product quantity:</label><br>
			<input type="number" name="product_quantity" required=""><br><br>

			<label>Delivery date:</label><br>
			<input type="date" name="delivery_date" required=""><br><br>

			<label>Description:</label><br>
			<input type="text-area" name="description" required=""><br><br>

             <button type="submit" class="btn btn-primary">Save report</button><br><br>
			
			  </th>
			</tr>
			</table>
		</form>
   	
   </div>
@endsection