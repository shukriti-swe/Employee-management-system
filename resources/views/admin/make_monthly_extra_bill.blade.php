@extends('admin.adminlayout.homepagedesign')
@section('content')
   <div class="container">

		<form action="{{route('extra_bill_save')}}" method="get">
			<table class="table">
				<tr>
				<th>

			 <label>Bill Name:</label><br>
			<input type="text" name="name" placeholder="   Enter Student Name"required=""><br><br>
            
            <label>Bill Cost:</label><br>
			<input type="number" name="cost" placeholder="   Enter bill name"required=""><br><br>

			<label>Month:</label><br>
			<input type="month" name="month" required=""><br><br>
			<label>Author:</label><br>
			<input type="text" name="author" placeholder="  Enter author name"required=""><br><br>
			<label>Description:</label><br>
			<input type="text-area" name="description" placeholder="  Enter description"required=""><br><br>
             <button type="submit" class="btn btn-primary">Save bills</button><br><br>
			
			  </th>
			</tr>
			</table>
		</form>

   </div>
@endsection