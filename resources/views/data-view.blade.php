<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> UBX Assignment Upload and View Data to MySQL Database</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5 text-center">
        <h2 class="mb-4">
            UBX Assignment Upload and View Data to MySQL Database
        </h2>
        <br><br>
        <table class="table table-striped table-bordered dispaly" style="width:100%">
                        <thead>
                          <tr>                        
                            <th>Cargo no:</th>
                            <th>Cargo type:</th>
                            <th>Cargo size:</th>
                            <th>Weight (Kg):</th>
                            <th>Remarks:</th>
                            <th>Wharfage (USD):</th>
                            <th>Penalty (Days):</th>
                            <th>Storage (USD):</th>
                            <th>Electricity (USD)</th>
                            <th>Destuffing (USD):</th>
                            <th>Lifting (USD):</th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                          <tr>
                            <td>{{ $item->Cargo_no}}</td>
                            <td>{{ $item->Cargo_type}}</td>
                            <td>{{ $item->Cargo_size}}</td>
                            <td>{{ $item->Weight}}</td>
                            <td>{{ $item->Remarks}}</td>
                            <td>{{ $item->Wharfage}}</td>
                            <td>{{ $item->Penalty}}</td>
                            <td>{{ $item->Storage}}</td>
                            <td>{{ $item->Electricity}}</td>
                            <td>{{ $item->Destuffing }}</td>
                            <td>{{ $item->Lifting}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
    </div>
</body>
</html>


