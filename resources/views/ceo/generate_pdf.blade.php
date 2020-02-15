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
    <h1> Date :{{$data->date}}</h1>
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
 

</body>
</html>