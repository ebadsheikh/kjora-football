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
                    <th scope="col">Invite From</th>
                    <th scope="col">Invite To</th>
                    <th scope="col">Position Name</th>
                    <th scope="col">Invitation Fee</th>
                </tr>
            </thead>
            <tbody>
                @foreach($invite_data as $invites)
                <tr>
                    <td>{{ $invites['inviteFrom'][0]['user']['user_name'] }}</td>
                    <td>{{ $invites['inviteTo'][0]['user']['user_name'] }}</td>
                    <td>{{ $invites['inviteTo'][0]['position']['name'] }}</td>
                    <td>{{ $invites->invitation_fee }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
