<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prescription</title>
    <style>
    .text-center
    {
        text-align: center !important;
    }
    </style>
</head>
<body>
    <table width="100%">
        <tr>
            <td><h1 class="text-center">Revive</h1></td>
        </tr>
    </table>
    <table width="100%">
        <tr>
            <td><b>Patiant Name:</b> {{$prescription->clientDetails->name}}</td>
            <td align="right"><b>Patiant Age:</b> {{$prescription->clientDetails->age}}</td>
        </tr>
        <tr>
            <td><b>Patiant Date:</b> {{$prescription->date}}</td>
        </tr>
    </table>
    <hr>
    <table width="100%">
            <tr>
                <td align="center"><b>Disease Name:</b> {{$prescription->diseaseDetails->name}}</td>
            </tr>
    </table>
    <br>
    <table width="100%">
            @foreach ($medicines as $medicine)
                 <tr>
                    <td><b>Medicine Name:</b> {{ $medicine->medicine_name }}</td>
                </tr>
                <tr>
                    <td><b>Medicine Type:</b> {{ $medicine->medicine_type }}</td>
                </tr>
                <tr>
                    <td><b>Dose:</b> {{ $medicine->dose }}</td>
                </tr>
                <tr>
                    <td>
                        <br>
                    </td>
                </tr>
            @endforeach 
    </table>
    <hr>
    <table>
        <tr>
            <td><p>This priscription is written by Doctor Name : <b>{{$prescription->doctorDetails->name}}</b></p></td>
        </tr>
    </table>
</body>
</html>