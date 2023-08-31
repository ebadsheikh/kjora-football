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
                    <th>First Name</th>
                    <th>Sur Name</th>
                    <th>Position Name</th>
                    <th>Membership Type</th>
                    <th>Phone</th>
                    <th>Gender</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach($verify_data as $verify)
                <tr>
                    <td>{{$verify->first_name}}</td>
                    <td>{{$verify->sur_name}}</td>
                    <td>{{$verify->position['name']}}</td>
                    <td>{{ $verify->membership_type }}</td>
                    <td>{{ $verify->phone }}</td>
                    <td>{{ $verify->gender }}</td>
                    <td>{{ $verify->status }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
