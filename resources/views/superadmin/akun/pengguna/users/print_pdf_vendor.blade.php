<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Vendor</title>
    <!--CSS-->
    {{-- <link href="{{ url('assets/css/pdf.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            padding: 50px;
            margin: 0px;
            font-family: 'Montserrat', sans-serif;
        }
        .title {
            text-align: center;
            font-family: 'Times New Roman', Times, serif;
        }
        .title1{
            font-size: 30px;
            font-weight: bold;
            text-transform: uppercase;
        }
        .titipsini {
            font-size: 20px;
        }
    </style>
</head>
<body>

    <div class="title">
        <div class="title1">
            Data Vendor
        </div>
        <div class="titipsini">
            Titipsini.com
        </div>
    </div>
    <br>
        <table border="-1" cellpadding="10" cellspacing="0" align="center">
        <thead style="background-color: #175f41; color: white;">
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>No Telp</th>
                <th>Alamat</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($user as $data_vendor)
            <tr>
                <td class="text-center">{{ ++$no }}.</td>
                <td>{{ $data_vendor->name }}</td>
                <td>{{ $data_vendor->no_telp }}</td>
                <td>{{ $data_vendor->alamat }}</td>
                <td>{{ $data_vendor->email }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
