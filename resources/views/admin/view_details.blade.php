
@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
    <h1>{{$data->date}}</h1>
    <table class="table">
        <tr>
            <th>user Id</th>
            <th>User name</th>
            <th>date</th>
            <th>Status</th>
         </tr>
        
            @foreach($username as $key => $value)
            

            <tr>
            <td>
                {{$value['id']}}
            </td>

            <td>
                {{$value['name']}}
            </td>
            <td>
                {{$data->date}}
            </td>
            <td>Present</td>
           
            </tr>
            
            @endforeach
        
    </table>
</div>
@endsection