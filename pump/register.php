<?php 

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['name'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$regno = $_POST['regno'];
	$oname = $_POST['oname'];
	$phno = $_POST['phno'];
	$address = $_POST['address'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM pump WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO pump (regno,name,o_name,address, email, password,phno)
					VALUES ('$regno','$name','$oname','$address', '$email', '$password','$phno')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.');window.location.href='\index.php'</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="style.css">

	<title>PUMP login Register</title>





    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link href="/assets/frontend/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/responsive.css">
    <link rel="stylesheet" type="text/css" href="login.css">



</head>
<body>






 <nav class="navbar navbar-expand-lg navbar-light " style="background-color:#00100a; position: absolute; top:0; width:100%">
      <a class="navbar-brand" style="color:#CCCCCC;" href="img/cng.jpg">COSB</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" style="color: white;"href="/cng/cng.html">Home <span class="sr-only">(current)</span></a>
        </li>
       
</ul>

</div>
</nav>









	<div class="container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">PUMP REGISTER</p>
			<div class="input-group">
				<input type="text" placeholder="Pump Name" name="name" value="<?php echo $name; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Pump Registration Number" name="regno" value="<?php echo $regno; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder=" Pump Owner Name" name="oname" value="<?php echo $oname; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Pump Address" name="address" value="<?php echo $address; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Contact Number" name="phno" value="<?php echo $phno; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
		</form>
	</div>
</body>
</html>