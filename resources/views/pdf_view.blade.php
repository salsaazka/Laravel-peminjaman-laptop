<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
       table, th, td {
  border: 1px solid;
}
    </style>
</head>
<body>
    <table>
        <thead>
        <tr>
            <th><h6>NIS</h6></th>
            <th><h6>Name</h6></th>
            <th><h6>Region</h6></th>
            <th><h6>Purposes</h6></th>
            <th><h6>Ket</h6></th>
            <th><h6>Date</h6></th>
            <th><h6>Teacher</h6></th>
            <th><h6>Return Date</h6></th>
        </tr>
    </thead>
    <tbody >
        @foreach ($borrows as $borrow )
        <tr>
            <td>{{ $borrow['nis'] }}</td>
            <td>{{ $borrow['name'] }}</td>
            <td>{{ $borrow['region'] }}</td>
            <td>{{ $borrow ['purposes']}}</td>
            <td>{{ $borrow['ket'] }}</td>
            <td>{{ \Carbon\Carbon::parse ($borrow['date'])->format('j F, Y') }}</td>
            <td>{{ $borrow['teacher'] }}</td>
            <td> <p class="text-muted"><span class="date">{{ 
            is_null($borrow['done_time']) ? '-' : \Carbon\Carbon::parse($borrow['done_time'])->format('j F, Y') 
            }}</span></p></td>
        </tr>
        @endforeach
     <tbody>  
    </table>
</body>
</html>