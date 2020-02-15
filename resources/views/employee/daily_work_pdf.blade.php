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
 <h1>Search date for - <span class="badge badge-primary">{{$search}}</span> </h1>
          <table class="table table-hover table-striped">
            <tr>
              <th>Employee id</th>
              <th>Author</th>
              <th>Work name</th>
              <th>Date</th>
              <th>Status</th>
              <th>work_details</th>
            </tr>
            @foreach($daily_work as $data)
            <tr>
              <td>{{$data->user_id}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->date}}</td>
              <td>{{$data->status}}</td>
              <td>{{$data->work_details}}</td>
               
            </tr>
            @endforeach
            
          </table>

          
        </div>
 

</body>
</html>