@extends('ceo.ceolayout.homepagedesign')
@section('content')

<div class="container">

	<h1>{{$data->name}} profile</h1>
     
     <table class ="table5">
  <tr>
    <th class="picth"><img class="pic" src="{{asset('/image/'.'download.png')}}" alt="demo"></th>
     <th class="forid"><h3>ID : {{$data->id}}</h3> <h3>Email : {{$data->email}}</h3></th>
    <th ></th>
  </tr>
  <tr>
  	<td class="fortd" colspan="3">
  		<table class="table6">
  			<tr class="tr6">
  				<th class="fixincenter">Name :</th>
  				<th >{{$data->name}}</th>
  			</tr>
  			<tr class="tr6">
  				<td class="fixincenter"><b>Phone number :</b></td>
  				<td><b>{{$data->phone_number}}</b></td>
  			</tr>
  			  <tr class="tr6">
  				<td class="fixincenter"><b>Address :</b></td>
  				<td><b>{{$data->address}}</b></td>
  			</tr>
  			 <tr class="tr6">
  				<td class="fixincenter"><b>Gender :</b></td>
  				<td><b>{{$data->gender}}</b></td>
  			</tr>
  			 <tr class="tr6">
  				<td class="fixincenter"><b>Account No :</b></td>
  				<td><b>{{$data->account_no}}</b></td>
  			</tr>
  			 <tr class="tr6">
  				<td class="fixincenter"><b>Birthday :</b></td>
  				<td><b>{{$data->birthday}}</b></td>
  			</tr>
  			</tr>
  			 <tr class="tr6">
  				<td class="fixincenter"><b>Create date :</b></td>
  				<td><b>{{$data->created_at}}</b></td>
  			</tr>
  		</table>
  		<a href="{{route('profile_update',$data->id)}}" class="btn btn-danger">Edit profile</a>
  	</td>

  </tr>
 
</table>

</div>

@endsection
 