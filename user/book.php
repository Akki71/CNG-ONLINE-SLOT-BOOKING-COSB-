<?php
session_start();
include_once '../assets/conn/dbconnect.php';
$session= $_SESSION['id'];
// $appid=null;
// $appdate=null;
if (isset($_GET['scheduleDate']) && isset($_GET['appid'])) {
	$appdate =$_GET['scheduleDate'];
	$appid = $_GET['appid'];
}
// on b.id = a.id
$res = mysqli_query($con,"SELECT a.*, b.* FROM schedule a INNER JOIN users b
WHERE a.scheduleDate='$appdate' AND scheduleId=$appid AND b.id=$session");
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);


	
//INSERT
if (isset($_POST['book'])) {
$userId = mysqli_real_escape_string($con,$userRow['id']);
$scheduleid = mysqli_real_escape_string($con,$appid);
$carNo = mysqli_real_escape_string($con,$_POST['carNo']);
$quantity = mysqli_real_escape_string($con,$_POST['quantity']);
$avail = "notavail";


$query = "INSERT INTO book (  userId , scheduleId , carNo , Quantity  )
VALUES ( '$userId', '$scheduleid', '$carNo', '$quantity') ";

//update table appointment schedule
$sql = "UPDATE schedule SET bookAvail = '$avail' WHERE scheduleId = $scheduleid" ;
$scheduleres=mysqli_query($con,$sql);
if ($scheduleres) {
	$btn= "disable";
} 


$result = mysqli_query($con,$query);
// echo $result;
if( $result )
{
?>
<script type="text/javascript">
alert('Booked successfully.');
</script>
<?php
header("Location: slotlist.php");
}
else
{
	echo mysqli_error($con);
?>
<script type="text/javascript">
alert('Slot booking fail. Please try again.');
</script>
<?php
header("Location: user/user.php");
}
//dapat dari generator end
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		
		<title>Book Slot</title>
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<link href="assets/css/default/blocks.css" rcel="stylesheet">


		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

	</head>
	<body>
		<!-- navigation -->
		<nav class="navbar navbar-default " role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="../cng.html" style="color:#777777;>COSB</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $userRow['username']; ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li>
									<a href="profile.php?id=<?php echo $userRow['id']; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
								</li>
								<li>
									<a href="slotlist.php?id=<?php echo $userRow['id']; ?>"><i class="glyphicon glyphicon-file"></i> Booked Slot</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
								</li>
							</ul>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<ul class="nav navbar-nav">
							<li><a href="user.php">Home</a></li>
							<!-- <li><a href="profile.php?id=<?php echo $userRow['id']; ?>" >Profile</a></li> -->
							<li><a href="slotlist.php?id=<?php echo $userRow['id']; ?>">Booked Slot</a></li>
						</ul>
					</ul>
					
					
				</div>
			</div>
		</nav>
		<!-- navigation -->

		<div class="container">
			<section style="padding-bottom: 50px; padding-top: 50px;">
				<div class="row">
					<!-- start -->
					<!-- USER PROFILE ROW STARTS-->
					<div class="row">
						<div class="col-md-3 col-sm-3">
							
							<div class="user-wrapper">
								<img src="../img/CNG2.jpg" class="img-responsive" />
								<div class="description">
									<h4><?php echo $userRow['username']; ?> </h4>
									<h5> <strong> <?php echo $userRow['email']; ?> </strong></h5>
									
									<hr />
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								
								
								<div class="panel panel-default">
									<div class="panel-body">
										
										
										<form class="form" role="form" method="POST" accept-charset="UTF-8">
											<div class="panel panel-default">
												<div class="panel-heading">User Information</div>
												<div class="panel-body">
													
													User Name: <?php echo $userRow['username'] ?> <br>
													Email : <?php echo $userRow['email'] ?><br>
													Contact Number: <?php echo $userRow['contact'] ?><br>
													
												</div>
											</div>
											<div class="panel panel-default">
												<div class="panel-heading">Slot Booking Information</div>
												<div class="panel-body">
													Day: <?php echo $userRow['scheduleDay'] ?><br>
													Date: <?php echo $userRow['scheduleDate'] ?><br>
													Time: <?php echo $userRow['startTime'] ?> - <?php echo $userRow['endTime'] ?><br>
												</div>
											</div>
											
											<div class="form-group">
												<label for="recipient-name" class="control-label">CarNo:</label>
												<input type="text" class="form-control" name="carNo" required>
											</div>
											<div class="form-group">
												<label for="message-text" class="control-label">Quantity:</label>
												<textarea class="form-control" name="quantity" ></textarea>
											</div>
											<div class="form-group">
												<input type="submit" name="book" id="submit" class="btn btn-primary" value="book">
											</div>
										</form>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
				</body>
			</html>