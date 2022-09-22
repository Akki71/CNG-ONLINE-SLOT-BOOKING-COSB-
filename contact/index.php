<?php include 'sendemail.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  
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








    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
      <div class="contact-info" color="#fff">
        <div><i class="fas fa-map-marker-alt"></i>NASHIK, MAHARTASHTRA, INDIA</div>
        <div><i class="fas fa-envelope"></i>cosbhelp@email.com</div>
        <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
        <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
         <div class = "social-links" color="#fff">
          <a href = "#" class = "fab fa-facebook-f"></a>
          <a href = "#" class = "fab fa-twitter"></a>
          <a href = "#" class = "fab fa-instagram"></a>
          <a href = "#" class = "fab fa-linkedin"></a>
          <a href = "#" class = "fab fa-youtube"></a>
        </div>
      </div>

      <div class="contact-form">
        <h2>Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>



    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>

  </body>
</html>