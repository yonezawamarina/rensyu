<html>
	<head>
		<script src="https://www.gstatic.com/charts/loader.js"></script>
	</head>
	<title>
		お団子投票結果
	</title>
</head>
<body>
 
<div id="chart" style="height:500px;width:800px;"></div>
 
 
<script>
	google.charts.load('current', {packages: ['corechart']});
	google.charts.setOnLoadCallback(drawChart);
 
	function drawChart(){
 
		var data=google.visualization.arrayToDataTable([
			['dango name', 'number'],
 
				@php
					foreach($dangos as $dango){
						echo "['".$dango->dango."', ".$dango->number."],";
					}
				@endphp
		]);
 
		var options ={
			title: '好きなお団子統計',
			is3D: true,
		};
 
		var chart = new google.visualization.PieChart(document.getElementById('chart'));
 
		chart.draw(data, options);
	}
</script>	
</body>