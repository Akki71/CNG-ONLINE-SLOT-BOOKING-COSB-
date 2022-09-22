<?php
use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'cosbhelp@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'nxhbocyqzwjjtofg'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('cosbhelp@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Thank You for contacting us';
    $mail->Body = "Dear $name,<br> Your message got us<br> Thank you for contacting us. Your satisfaction is important to our org.<br>From COSB<br>cosbhelp@gmail.com";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';

$server = "localhost";
$user = "root";
$pass = "";
$database = "adminloginpage";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}


      $sql = "INSERT INTO message1(name,email,message)
          VALUES ('$name', '$email', '$message')";
      $result = mysqli_query($conn, $sql);
      if ($result) {
       
        $name = "";
        $email = "";
        $mesaage = "";
      } else {
        echo "<script>alert('Woops! Something Wrong Went.')</script>";
      }
           
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
