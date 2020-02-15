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
        width: 98%;
        }

    th, td {
        text-align: left;
        padding: 4px;
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
              <th>Month</th>
              <th>Product name</th>
              <th>Equipment recieve date</th>
              <th>Equipment quantity</th>
              <th>Time duration</th>
              <th>Product quantity</th>
              <th>Delivery date</th>
              <th>Description</th>
            </tr>
            @foreach($monthly_closing_report as $data)
            <tr>
              <td>{{$data->user_id}}</td>
              <td>{{$data->author}}</td>
              <td>{{$data->month}}</td>
              <td>{{$data->product_name}}</td>
              <td>{{$data->equipment_recieve_date}}</td>
              <td>{{$data->equipment_quantity}}</td>
              <td>{{$data->time_duration}}</td>
              <td>{{$data->product_quantity}}</td>
              <td>{{$data->delivery_date}}</td>
              <td>{{$data->description}}</td>
               
            </tr>
            @endforeach
            
          </table>

          
        </div>
 

</body>
</html>