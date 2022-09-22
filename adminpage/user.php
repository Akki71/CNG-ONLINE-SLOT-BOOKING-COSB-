<?php
   include 'config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>USER</title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>COSB</h1>
        </div>
        <ul>
            <li><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><img src="reading-book (1).png" alt="">&nbsp;<span>USER</span> </li>
            <li><img src="teacher2.png" alt="">&nbsp;<span>ADMIN</span> </li>
            <li><img src="school.png" alt="">&nbsp;<span>PETROL PUMPS</span> </li>
          
            <li><img src="help-web-button.png" alt="">&nbsp; <span>Help</span></li>
            <li><img src="settings.png" alt="">&nbsp;<span>Settings</span> </li>
        </ul>
    </div>

    <div class="content-2">
                <div class="recent-payments">
                    <div class="title">
                        <h2>USER DETAILS</h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <div>

                        <table>
                        <tr>
                            <th>Name</th>
                            <th>EMAIL</th>
                            
                        </tr>




<?php
            $sql="Select * from users";
            $server = "localhost";
$user = "root";
$pass = "";
$database = "login_register";

$conn = mysqli_connect($server, $user, $pass, $database);
            $result=mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $username=$row['username'];
                     $email=$row['email'];
                     echo ' <tr>
                        <th scope="row">'.$username.'</th>
                        <td>'.$email.'</td>
                        <td><a href="#" class="btn">DELETE</a></td></tr>';


                      
                }
            }

?>

            
                    </div>
                    </table>

                    </body>

</html>