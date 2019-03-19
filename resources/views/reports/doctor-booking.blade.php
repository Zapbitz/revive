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
                <th>Booking ID</th>
                <th>Client Name</th>
                <th>Date</th>
                <th>Time</th>
        </tr>
        </thead>
    
        <tbody>
            @php
              $i=1;  
            @endphp
       @foreach( $data['bookings'] as $booking )
            <tr>
                <td>{{$i++}}</td>
                <td>{{$booking->id}}</td>
                <td>{{$booking->user_details->name}}</td>
                <td>{{$booking->date}}</td>
                <td>{{$booking->time}}</td>
            </tr>
        @endforeach 
        </tbody>
    
    </table>
</body>
</html>