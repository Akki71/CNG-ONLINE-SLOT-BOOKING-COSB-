<?php
session_start();

if(!isset($_SESSION['id']))
{
 header("Location: user.php");
}
else if(isset($_SESSION['id'])!="")
{
 header("Location: ../cng.html");
}

if(isset($_GET['logout']))
{
 session_destroy();
 unset($_SESSION['id']);
  unset($_SESSION['username']);
 header("Location: ../cng.html");
}
?>