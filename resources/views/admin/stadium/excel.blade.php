<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kjora</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th class="fw-bold">Stadium Name</th>
                    <th class="fw-bold">Address</th>
                    <th class="fw-bold">Date</th>
                    <th class="fw-bold">Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stadium as $stadiums)
                <tr>
                    <th scope="row">{{$stadiums->name}}</th>
                    <td>{{$stadiums->address}}</td>
                    <td>{{$stadiums->date}}</td>
                    <td>{{ $stadiums->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
