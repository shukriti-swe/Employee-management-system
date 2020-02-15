
@extends('admin.adminlayout.homepagedesign')
@section('content')
<div class="container">
     <h1>Update Salary report</h1> <br>
           
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
           
            <tr>
              <form action="{{route('update_save_salary_report',$data->id)}}" method="get">

              <td>{{$data->user_id}} <input type="hidden" name="user_id" value="{{$data->user_id}}" required=""> </td>
              <td>{{$data->name}} <input type="hidden" name="name" value="{{$data->name}}" required=""> </td>
              <td>{{$data->account_no}} <input type="hidden" name="user_account_no" value="{{$data->user_account_no}}" required=""> </td>
              <td><input type="number" name="salary_scale" value="{{$data->salary_scale}}" required=""> </td>
              <td><input type="number" name="days_of_month" value="{{$data->days_of_month}}"required=""> </td>
              <td><input type="number" name="attendance_of_the_month"value="{{$data->attendance_of_the_month}}" required=""> </td>

              <td><input type="text" name="author"value="{{$data->author}}" required=""> </td>

              <td><input type="month" name="month"value="{{$data->month}}" required=""> </td>

              <td><button class="btn btn-primary store_salary_report" type="submit">Update data</button></td>
              </form>
            </tr>
          
            
          </table>

          
        </div>
@endsection