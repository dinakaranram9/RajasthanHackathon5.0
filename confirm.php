<?php
error_reporting(E_ALL && E_PARSE);

include("common.php");

$key = $_REQUEST['key'];
$status = $_REQUEST['status'];

if($key!="")
{
$query=mysqli_query($conn,"update application set status='".$status."' where email='$key'");
header("Location: dashboard1.php");
}
?>

























































































































































































































































































































































