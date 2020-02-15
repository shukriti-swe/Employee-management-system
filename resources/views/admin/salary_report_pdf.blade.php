<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
    h1{
        text-align: center;
        margin-left: px;
        }
    table {
        border-collapse: collapse;
        width: 100%;
        }

    th, td {
        text-align: left;
        padding: 8px;
        }

    tr:nth-child(even){background-color: #f2f2f2}

    th {
        background-color: gray;
        color: white;
         }
    </style>
</head>
<body>

<div class="container">
               <h1>Search month for - <span class="badge badge-primary">{{$search}} </span> </h1>
          <table class="table table-hover table-striped">
            <tr>
              <th>Employee id</th>
              <th>Name</th>
              <th>Account no</th>
              <th>Salary scale</th>
              <th>Days of month</th>
              <th>Attendance of the month</th>
              <th>Author</th>
              <th>For month</th>
              <th>Salary</th>
            </tr>
            @foreach($view_salary as $data)
            <tr>
              <td>{{$data->user_id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->user_account_no}}</td>
              <td>{{$data->salary_scale}}</td>
              <td>{{$data->days_of_month}}</td>
              <td>{{$data->attendance_of_the_month}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->month}}</td>
              <td>{{$data->total_salary}}</td>
               
            </tr>
            @endforeach
            
          </table>

          
        </div>
 

</body>
</html>