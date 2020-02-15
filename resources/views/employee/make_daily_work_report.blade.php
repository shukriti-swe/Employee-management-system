@extends('employee.employeelayout.homepagedesign')
@section('content')
   <div class="container">
   			<form action="{{route('daily_work_report_save')}}" method="get">
			<table class="table">
				<tr>
				<th>

            <label>User id:</label><br>
			<input type="number" name="user_id" value="{{ Auth::user()->id }}"><br><br>

			<label>Author:</label><br>
			<input type="text" name="author" value="{{ Auth::user()->name }}"  ><br><br>

			 <label>Date:</label><br>
			<input type="date" name="date" required=""><br><br>
            
            <label>Name:</label><br>
			<input type="text" name="name" placeholder="   Enter work name"required=""><br><br>

			<label>Status:</label><br>
			<input type="text" name="status" required=""><br><br>

			<label>Work details:</label><br>
			<input type="text-area" name="work_details" placeholder=" Enter description"required=""><br><br>
             <button type="submit" class="btn btn-primary">Save report</button><br><br>
			
			  </th>
			</tr>
			</table>
		</form>
   	
   </div>
@endsection