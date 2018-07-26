<?php
error_reporting(E_ALL && E_PARSE);

include("common.php");

unset($_SESSION['session_id']);
header("Location: admin.php");
?>