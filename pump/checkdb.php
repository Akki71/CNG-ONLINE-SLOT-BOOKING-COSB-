<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$userid = $_GET['userid'];
$chkYesNo = $_GET['chkYesNo'];

$update = mysqli_query($con,"UPDATE book SET status='done' WHERE id=$userid");

?>