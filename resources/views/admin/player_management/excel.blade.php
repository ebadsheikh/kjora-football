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
                    <th scope="col">First Name</th>
                    <th scope="col">Sur Name</th>
                    <th scope="col">Position Name</th>
                    <th scope="col">Membership Type</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Gender</th>
                </tr>
            </thead>
            <tbody>
                @foreach($player_data as $players)
                <tr>
                    <th scope="row">{{$players->first_name}}</th>
                    <td>{{$players->sur_name}}</td>
                    <td>{{$players->position['name']}}</td>
                    <td>{{ $players->membership_type }}</td>
                    <td>{{ $players->phone }}</td>
                    <td>{{ $players->gender }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
