<?php
error_reporting(E_ALL && E_PARSE);

include("common.php");
session_start();

echo $_SESSION['username'];


$query=mysqli_query($conn,"select * from application");
$count=mysqli_num_rows($query);
	



?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Dashboard1</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  
      <link rel="stylesheet" href="css/style 2.css">

  
</head>

<body>
  <section>
  <!--for demo wrap-->
  <h1>Submitted Application Details</h1>
  <div class="tbl-header" >
    <table  cellpadding="0" cellspacing="10" border="0">
      <thead>
        --<tr>
<td>Sl.no</td>
<td>FirstName</td>
<td>LastName</td>

<td>Religion</td>
<td>Caste</td>
<td>Gender</td>
<td>DateOfBirth</td>
<td>10th Percentage</td>
<td>12th Percentage</td>
<td>Cutoff</td>
<td>Group</td>

<td>Course</td>
<td>Status</td>

</tr
      </thead>
    </table>
  </div>
  <div class="tbl-content">
    <table id="testTable" cellpadding="0" cellspacing="10" border="0" rules="groups" frame="hsides"  class="table table-striped">
      <tbody>
<?php
$i=1;
	while($output=mysqli_fetch_assoc($query))
	{
		?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $output['firstname']; ?></td>
		<td><?php echo $output['lastname']; ?></td>
		
				<td><?php echo $output['religion']; ?></td>
				<td><?php echo $output['caste']; ?></td>
				<td><?php echo $output['gender']; ?></td>
				<td><?php echo $output['dob']; ?></td>
			<td><?php echo $output['tenthpercentage']; ?></td>
			<td><?php echo $output['twelthpercentage']; ?></td>
							<td><?php echo $output['cutoff']; ?></td>
                 			<td><?php echo $output['group1']; ?></td>
							
							<td><?php echo $output['course']; ?></td>
<td>
<?php
if($output['status']=="")
{
	?>
<a href="confirm.php?key=<?php echo $output['email'];?>&status=confirm">Confirm</a> | <a href="confirm.php?key=<?php echo $output['email'];?>&status=rejected">Not Confirm</a>
<?php
}
else
{
	
echo $output['status'];
}
?>

</td>


		</tr>
		<?php
		$i++;
		
	}
	?>

      </tbody>
    </table>
  </div>
</section>


<!-- follow me template -->
<div class="made-with-love">
 <h1> <a href="logout.php">logout</a><br><br></h1>
  <h1> <a href="chart.php">Members Count Chart</a></h1>
  <h1> <a href="php_csv_export.php">Export To Excel File</a></h1>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
	


</body>
</html>
