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
     <h1>Employee List</h1> <br>
          <table class="table">
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Account_no</th>
              <th>Phone number</th>
              <th>Address</th>
              <th>Birthday</th>
              <th>Gender</th>
            </tr>
            @foreach($view_data as $data)
            <tr>
              <td>{{$data->id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->account_no}}</td>
              <td>{{$data->phone_number}}</td>
              <td>{{$data->address}}</td>
              <td>{{$data->birthday}}</td>
              <td>{{$data->gender}}</td>
               
            </tr>
            @endforeach
            
          </table>
          
        </div>
      
    </div>
   
  </div>
</div>
 

</body>
</html>