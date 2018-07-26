<?php
error_reporting(E_ALL && E_PARSE);

include("common.php");

unset($_SESSION['email']);
header("Location: login.php");
?>