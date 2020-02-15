
@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
              <script type="text/javascript">

function myFunction() {
  document.getElementById("primary").style.backgroundColor = "red";
}
          </script>
     <h1>Salary report</h1> <br>
           
            <table class="table">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Account no</th>
              <th>Salary scale</th>
              <th>Days of month</th>
              <th>Attendance of the month</th>
              <th>Author</th>
              <th>For month</th>
              <th>Action</th>
            </tr>
            @foreach($view_data as $data)
            <tr>
              <form action="{{route('store_salary_report')}}" method="get">

              <td>{{$data->id}} <input type="hidden" name="user_id" value="{{$data->id}}" required=""> </td>
              <td>{{$data->name}} <input type="hidden" name="name" value="{{$data->name}}" required=""> </td>
              <td>{{$data->account_no}} <input type="hidden" name="user_account_no" value="{{$data->account_no}}" required=""> </td>
              <td><input type="number" name="salary_scale" required=""> </td>
              <td><input type="number" name="days_of_month" required=""> </td>
              <td><input type="number" name="attendance_of_the_month" required=""> </td>
              <td><input type="text" name="author" required=""> </td>
              <td><input type="month" name="month" required=""> </td>
              <td><button class="btn btn-primary store_salary_report" type="submit" id="primary" onclick="myFunction()">Save</button></td>
              </form>
            </tr>
            @endforeach
            
          </table>

          
        </div>
@endsection