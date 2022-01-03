<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data</title>
</head>
<body>
    <table border="2px" style="padding: 5px, text-align:center" width="100%" >
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>City</th>
        </tr>
        @foreach ($students as $stu)
        <tr>
            <td>{{$stu->id}}</td>
            <td> {{$stu->name}}</td>
            <td> {{$stu->email}}</td>
            <td> {{$stu->city}}</td>
        </tr>
        
            @endforeach

    </table>
  
  
</body>
</html>