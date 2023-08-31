<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kjora</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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
<h2>dfsg fd gddg</h2>
<canvas id="myChart" style="width:100%;max-width:600px"></canvas>
<script>
    var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
    var yValues = [55, 49, 44, 24, 15];
    var barColors = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];

    new Chart("myChart", {
      type: "doughnut",
      data: {
        labels: xValues,
        datasets: [{
          backgroundColor: barColors,
          data: yValues
        }]
      },
      options: {
        title: {
          display: true,
          text: "World Wide Wine Production 2018"
        }
      }
    });
    </script>


</body>
</html>
