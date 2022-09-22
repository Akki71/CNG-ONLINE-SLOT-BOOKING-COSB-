<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$appid = $_POST['id'];
// echo $appid;

$delete = mysqli_query($con,"DELETE FROM book WHERE id=$appid");
// if(isset($delete)) {
//    echo "YES";
// } else {
//    echo "NO";
// }



?>

