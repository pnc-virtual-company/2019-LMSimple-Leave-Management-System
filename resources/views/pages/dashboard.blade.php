@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html>
<head> 
	<title>My leave request</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="https://cdn.zingchart.com/zingchart.min.js"></script>
  <script>
    zingchart.MODULESDIR = "https://cdn.zingchart.com/modules/";
    ZC.LICENSE = ["569d52cefae586f634c54f86dc99e6a9", "ee6b7db5b51705a13dc2339db3edaf6d"];
  </script>
	<script src="https://static.anychart.com/js/8.0.1/anychart-core.min.js"></script>
	<script src="https://static.anychart.com/js/8.0.1/anychart-pie.min.js"></script>
<script type="text/javascript" src="{{asset('js/script.js')}}"></script>
</head>
<body>
<h2 class="text-center">DASHBOARD</h2>
<div class="container mt-4">
	<div class="row">
		<div class="col col-md-4 mt-5">
			<div class="table table-bordered">
				<p>Accept Requests <b>11</b></p>
				<p>Reject Requests <b>2</b></p>
				<p>Submitted Requests <b>5</b><i class="material-icons text-danger">report_problem</i></p>
			</div>
		</div>
		<div class="col col-md-4">
			<div id="Mycontainer"></div>
		</div>
		<div class="col col-md-4">
			<div id='myChart'></div>
		</div>
	</div>
	<table class="table table-bordered table-striped">
		<tr>
			<th>ID</th>
			<th>Start Date</th>
			<th>End Date</th>
			<th>Duration (Days)</th>
			<th>Type</th>
			<th>Status</th>
		</tr>
		<tr>
			<td>1014</td>
			<td>10/06/2019 (morning)</td>
			<td>15/06/2019 (afternoon)</td>
			<td>6</td>
			<td>Vacation</td>
			<td>Planed</td>
		</tr>
		<tr>
			<td>1012</td>
			<td>01/06/2018 (morning)</td>
			<td>02/06/2018 (morning)</td>
			<td>1.5</td>
			<td>Training</td>
			<td>Requested</td>
		</tr>
		<tr>
			<td>1011</td>
			<td>01/08/2018 (morning)</td>
			<td>02/08/2018 (afternoon)</td>
			<td>2</td>
			<td>Sick Leave</td>
			<td>Rejected</td>
		</tr>
		<tr>
			<td>1002</td>
			<td>11/11/2018 (afternoon)</td>
			<td>11/11/2018 (afternoon)</td>
			<td>0.5</td>
			<td>Training</td>
			<td>Canceled</td>
		</tr>
		<tr>
			<td>1000</td>
			<td>01/10/2018 (morning)</td>
			<td>02/10/2018 (afternoon)</td>
			<td>2</td>
			<td>Vacation</td>
			<td>Accepted</td>
		</tr>
	</table>
</div>
</body>
<script type="text/javascript">
	var myConfig = {
      type: "bar",
      plotarea: {
        adjustLayout: true
      },
      scaleX: {
        label: {
          text: "Here is a category scale"
        },
        labels: ["Jan", "Feb"]
      },
      series: [{
        values: [20, 40]
      }, {
        values: [5, 30]
      }]
    };

    zingchart.render({
      id: 'myChart',
      data: myConfig,
      height: "100%",
      width: "100%"
    });
</script>


</html>
@endsection   