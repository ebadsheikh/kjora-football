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
                </tr>
            </thead>
            <tbody>
                @foreach($report_data as $reports)
                <tr>
                    <th scope="row">{{$reports->first_name}}</th>
                    <td>{{$reports->sur_name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
