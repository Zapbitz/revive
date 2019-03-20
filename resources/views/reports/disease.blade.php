<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
        <tr>
                <th>Sl.No.</th>
                <th>Disease Name</th>
                <th>Client Name</th>
                <th>Doctor Name</th>
                <th>Medicine</th>
        </tr>
        </thead>
    
        <tbody>
            @php
              $i=1;  
            @endphp

            <tr>
                <td>{{ $i++ }}</td>
                <td>{{ $disease->name }}</td>
                <td>{{$disease->clientDetails->name}}</td>
                <td>{{$disease->doctorDetails->name}}</td>
                <td>
                    @foreach ($disease->medicineDetails as $medicine )
                        <p>{{$medicine->name}}</p>
                    @endforeach
                </td>
            </tr>
        </tbody>
    
    </table>
</body>
</html>