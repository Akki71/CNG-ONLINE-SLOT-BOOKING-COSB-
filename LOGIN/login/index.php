
<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: welcome.php");
    } else {
        echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css'>
    <link rel="stylesheet" href="./style.css">
    <link href="/assets/frontend/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/assets/frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/frontend/css/responsive.css">



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="login.css">

    <title>Login Form</title>
   
    
    
</head>



<body>





<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#00100a; "style="position: fixed; width: 100%;top: 0;">
  <a class="navbar-brand" style="color:#CCCCCC;" href="img/cng.jpg">COSB</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="file:///C:/xampp/htdocs/cng/cng.html">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="C:\xampp\htdocs\cng\about us.html">About us</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Our Services
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Emergency Helpline</a>
          
           <a class="dropdown-item" href="contactus.html">Customer Care Contact</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Nearest CNG Station</a>
        </div>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="C:\xampp\htdocs\cng\contact.html">Contact us</a>
      </li>
      <li class="nav-item">
         
        <a class="nav-link" href="http://localhost/cng/LOGIN/" style="background: linear-gradient(315deg, #00FF00 0%, #0bab64 74%);border-radius:20px;padding-left:17px;color: #fff;" >login</a>
       
        
          
      </li>
    </ul>
 
  </div>
</nav>









<div class="container">
        <form action="" method="POST" class="login-email">
            <p class="l
ogin-text" style="font-size: 2rem; font-weight: 800;">Login</p>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
               <a href="file:///C:/xampp/htdocs/cng/cng.html"> <button name="submit" class="btn" >Login</button></a>
            </div>
            <p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
        </form>
    </div>




              



</body>
</html>
