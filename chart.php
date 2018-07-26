
<?php

error_reporting(E_ALL && E_PARSE);

include("common.php");
session_start();


$query=mysqli_query($conn,"SELECT `course`,count(`sno`) as cnt from application where status='confirm' group by `course` ");
$count=mysqli_num_rows($query);
$a="";
$b="";
while($out=mysqli_fetch_assoc($query))
{
	$a.="'".$out['course']."',";
	$b.=$out['cnt'].",";
	
}

	
?>

<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Members Count</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<style type="text/css">
${demo.css}
		</style>
		<script type="text/javascript">
$(function () {
    $('#container').highcharts({
        chart: {
            type: 'column'
        },
        title: {
            text: 'Students Count'
        },
        subtitle: {
            text: ''
        },
        xAxis: {
            categories: [<?php echo $a;?>]
        },
        yAxis: {
            title: {
                text: 'No of seat'
            },
            labels: {
                formatter: function () {
                    return this.value + '';
                }
            }
        },
        tooltip: {
            crosshairs: true,
            shared: true
        },
        plotOptions: {
            spline: {
                marker: {
                    radius: 4,
                    lineColor: '#666666',
                    lineWidth: 1
                }
            }
        },
        series: [{
            name: 'count',
            marker: {
                symbol: 'square'
            },
            data: [<?php echo $b;?>]

        }]
    });
});
		</script>
	</head>
	<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

<div id="container" style="width: 510px; height: 400px; margin: 0 auto"></div>
<a href="dashboard1.php"> Return to Table page </a>
	</body>
</html>