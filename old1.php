<?php
error_reporting(E_ALL && E_PARSE);

include("common.php");
session_start();

echo $_SESSION['username'];


$query=mysqli_query($conn,"select * from application");
$count=mysqli_num_rows($query);
	



?>
<script src="jquery.min.js"></script>
<script src="jquery.dataTables.min.js"></script>

<link href="jquery.dataTables.min.css" rel="stylesheet" type="text/css">
<script>
$(document).ready(function(){
	// alert("");
    $('#myTable').DataTable();
	
});
</script>
<table border="1" id="myTable">
<thead>
--<tr>
<td></td>
<td>FirstName</td>
<td>LastName</td>
<td>FathersName</td>
<td>MothersName</td>
<td>Religion</td>
<td>Caste</td>
<td>Gender</td>
<td>DateOfBirth</td>
<td>10th Percentage</td>
<td>12th Percentage</td>
<td>Cutoff</td>
<td>Group</td>
<td>Email</td>
<td>Course</td>
<td>Status</td>

</tr></thead>
<?php
$i=1;
	while($output=mysqli_fetch_assoc($query))
	{
		?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $output['firstname']; ?></td>
		<td><?php echo $output['lastname']; ?></td>
		<td><?php echo $output['fathersname']; ?></td>
				<td><?php echo $output['mothersname']; ?></td>
				<td><?php echo $output['religion']; ?></td>
				<td><?php echo $output['caste']; ?></td>
				<td><?php echo $output['gender']; ?></td>
				<td><?php echo $output['dob']; ?></td>
			<td><?php echo $output['tenthpercentage']; ?></td>
			<td><?php echo $output['twelthpercentage']; ?></td>
							<td><?php echo $output['cutoff']; ?></td>
                 			<td><?php echo $output['group1']; ?></td>
							<td><?php echo $output['email']; ?></td>
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

</table>
<a href="logout.php">logout</a>