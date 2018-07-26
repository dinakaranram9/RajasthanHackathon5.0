<?php

include("common.php");
$filename = "application.csv";
$fp = fopen('php://output', 'w');



header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);
fputcsv($fp, $header);

$query = "select * from application";
$result = mysqli_query($conn,$query);
while($row = mysqli_fetch_row($result)) {
	fputcsv($fp, $row);
}
exit;
?>