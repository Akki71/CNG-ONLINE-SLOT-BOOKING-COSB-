<?php
session_start();
// include_once '../connection/server.php';
include_once '../assets/conn/dbconnect.php';
if(!isset($_SESSION['id']))
{
header("Location: ../cng.html");
}
$res=mysqli_query($con,"SELECT * FROM users WHERE id=".$_SESSION['id']);
$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!-- update -->
<?php
if (isset($_POST['submit'])) {
//variables
$username = $_POST['username'];
$email = $_POST['email'];
$contact = $_POST['contact'];

// mysqli_query("UPDATE blogEntry SET content = $udcontent, title = $udtitle WHERE id = $id");
$res=mysqli_query($con,"UPDATE users SET username='$username', email='$email', contact='$contact' WHERE id=".$_SESSION['id']);
// $userRow=mysqli_fetch_array($res);
header( 'Location: profile.php' ) ;
}
?>
<!-- <?php
$male="";
$female="";
if ($userRow['Gender']=='male') {
$male = "checked";
}elseif ($userRow['Gender']=='female') {
$female = "checked";
}
$single="";
$married="";
$separated="";
$divorced="";
$widowed="";
if ($userRow['MaritialStatus']=='single') {
$single = "checked";
}elseif ($userRow['MaritialStatus']=='married') {
$married = "checked";
}elseif ($userRow['MaritialStatus']=='separated') {
$separated = "checked";
}elseif ($userRow['MaritialStatus']=='divorced') {
$divorced = "checked";
}elseif ($userRow['MaritialStatus']=='widowed') {
$widowed = "checked";
}
?> -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Profile</title>
		<!-- Bootstrap -->
		<link href="assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="assets/css/default/style.css" rel="stylesheet">
		<!-- <link href="assets/css/default/style1.css" rel="stylesheet"> -->
		<link href="assets/css/default/blocks.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker.css" rel="stylesheet">
		<link href="assets/css/date/bootstrap-datepicker3.css" rel="stylesheet">
		<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
		<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
		<!--Font Awesome (added because you use icons in your prepend/append)-->
		<link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />
		<!-- <link href="assets/css/material.css" rel="stylesheet"> -->
	</head>
	<body>
		
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
					<a class="navbar-brand" href="../cng.html" style="color:#777777;">COSB</a>
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
									<h5> <strong><?php echo $userRow['email']; ?>  </strong></h5>
									
									<hr />
									<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Update Profile</button>
								</div>
							</div>
						</div>
						
						<div class="col-md-9 col-sm-9  user-wrapper">
							<div class="description">
								<h3> <?php echo $userRow['username']; ?> </h3>
								<hr />
								
								<div class="panel panel-default">
									<div class="panel-body">
										
										
										<table class="table table-user-information" align="center">
											<tbody>
												
												<tr>
													<td>User Id</td>
													<td><?php echo $userRow['id']; ?></td>
												</tr>
												<!-- <tr>
													<td>PatientMaritialStatus</td>
													<td><?php echo $userRow['patientMaritialStatus']; ?></td>
												</tr> -->
												<tr>
													<td>User Name</td>
													<td><?php echo $userRow['username']; ?></td>
												</tr>
												<tr>
													<td>Email</td>
													<td><?php echo $userRow['email']; ?></td>
												</tr>
												<tr>
													<td>Contact</td>
													<td><?php echo $userRow['contact']; ?>
													</td>
												</tr>
												
											</tbody>
										</table>
									</div>
								</div>
								
							</div>
							
						</div>
					</div>
					<!-- USER PROFILE ROW END-->
					<!-- end -->
					<div class="col-md-4">
						
						<!-- Large modal -->
						
						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title" id="myModalLabel">Update Profile</h4>
									</div>
									<div class="modal-body">
										<!-- form start -->
										<form action="<?php $_PHP_SELF ?>" method="post" >
											<table class="table table-user-information">
												<tbody>
													<tr>
														<td>ID:</td>
														<td><?php echo $userRow['id']; ?></td>
													</tr>
													<tr>
														<td>User Name:</td>
														<td><input type="text" class="form-control" name="username" value="<?php echo $userRow['username']; ?>"  /></td>
													</tr>
													
													<!-- radio button -->
													<!-- <tr>
														<td>Maritial Status:</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="single" <?php echo $single; ?>>Single</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="married" <?php echo $married; ?>>Married</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="separated" <?php echo $separated; ?>>Separated</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="divorced" <?php echo $divorced; ?>>Divorced</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientMaritialStatus" value="widowed" <?php echo $widowed; ?>>Widowed</label>
															</div>
														</td>
													</tr> -->
													<!-- radio button end -->
													<!-- <tr>
														<td>DOB</td>
														<!-- <td><input type="text" class="form-control" name="patientDOB" value="<?php echo $userRow['patientDOB']; ?>"  /></td>
														<td>
															<div class="form-group ">
																
																<div class="input-group">
																	<div class="input-group-addon">
																		<i class="fa fa-calendar">
																		</i>
																	</div>
																	<input class="form-control" id="patientDOB" name="patientDOB" placeholder="MM/DD/YYYY" type="text" value="<?php echo $userRow['patientDOB']; ?>"/>
																</div>
															</div>
														</td>
														
													</tr> -->
													<!-- radio button -->
													<!-- <tr>
														<td>Gender</td>
														<td>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="male" <?php echo $male; ?>>Male</label>
															</div>
															<div class="radio">
																<label><input type="radio" name="patientGender" value="female" <?php echo $female; ?>>Female</label>
															</div>
														</td>
													</tr> -->
													<!-- radio button end -->
													
													<tr>
														<td>Contact</td>
														<td><input type="text" class="form-control" name="contact" value="<?php echo $userRow['contact']; ?>"  /></td>
													</tr>
													<tr>
														<td>Email</td>
														<td><input type="text" class="form-control" name="email" value="<?php echo $userRow['email']; ?>"  /></td>
													</tr>
													
														<td>
															<input type="submit" name="submit" class="btn btn-info" value="Update Info"></td>
														</tr>
													</tbody>
													
												</table>
												
												
												
											</form>
											<!-- form end -->
										</div>
										
									</div>
								</div>
							</div>
							<br /><br/>
						</div>
						
					</div>
					<!-- ROW END -->
				</section>
				<!-- SECTION END -->
			</div>
			<!-- CONATINER END -->
			<script src="assets/js/jquery.js"></script>
			<script src="assets/js/bootstrap.min.js"></script>
			
			<script type="text/javascript">
														$(function () {
														$('#patientDOB').datetimepicker();
														});
														</script>
		</body>
	</html>