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
              <th>Id</th>
              <th>Name</th>
              <th>Month</th>
              <th>Author</th>
              <th>Description</th>
              <th>Cost</th>
              <th>Total Cost</th>

            </tr>
            @foreach($view_extra_bill as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->month}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->description}}</td>
              <td>{{$data->cost}}</td>
              <td>={{$total_salary=$total_salary+$data->cost}}</td>
            </tr>
            @endforeach
            
          </table>

          
        </div>
 

</body>
</html>