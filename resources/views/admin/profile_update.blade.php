@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
	 <div>
        <h1><b>Update your data</b> </h1>
         
			<table class="table6">
				 
				<tr>
				<th class="table7th">
			<form action="{{route('adminprofile_save',$data->id)}} " method="post">
           @csrf	 
			<label> Name :</label><br>
			<input type="text" name="name"  required="" value="{{$data->name}}"><br><br>

			 <label>Phone Number :</label><br>
			<input type="number" name="phone_number" required=""value="{{$data->phone_number}}"><br><br>
            
            <label>Address :</label><br>
			<input type="text" name="address" placeholder="   Enter Your Password"required=""value="{{$data->address}}"><br><br>

			<label>Gender :</label><br>
			<input type="text" name="gender" required=""value="{{$data->gender}}"><br><br>

			 <label>Account No :</label><br>
			<input type="number" name="account_no" required=""value="{{$data->account_no}}"><br><br>
     
            <label>Birth date :</label><br>
			<input type="text" name="birthday" required=""value="{{$data->birthday}}"><br><br>
			<input type="hidden" name="email" required=""value="{{$data->email}}">
			<input type="hidden" name="password" required=""value="{{$data->password}}">
			 
            <input type="submit" value="Save"><br><br>
			</form>
			  </th>
			</tr>

			</table>
		
        </div>
      
    </div>
   
  </div>
</div>
 	 
    <div>
	
</div>
@endsection