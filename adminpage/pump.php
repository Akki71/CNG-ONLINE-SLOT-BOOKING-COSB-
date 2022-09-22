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
    <title>USER </title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>COSB</h1>
        </div>
       <ul>

            <li><img src="teacher2.png" alt="">&nbsp;<span>ADMIN PANEL</span> </li>
            <li class="active" ><a href="index.php" class="link"><img src="dashboard (2).png" alt="">&nbsp; <span>Dashboard</span> </li>
            <li><a href="userpage.php" class="link"><img src="reading-book (1).png" alt="">&nbsp;<span>USER</span> </li>
            
            <li><a href="pump.php" class="link"><img src="school.png" alt="" >&nbsp;<span>PUMPS</span> </li>
            <li><a href="message.php" class="link"><img src="school.png" alt="">&nbsp;<span>Message</span> </a></li>
            
            
        </ul>
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
                <div class="user">
                    
                    WELCOME ADMIN
            
                    
            
                </div>
            </div>
        </div>
        <div class="content">
            <div class="cards">
                <div class="card">
                    <div class="box">
                         <?php
        
            $server = "localhost";
            $user = "root";
            $pass = "";
            $database = "login_register";

            $conn = mysqli_connect($server, $user, $pass, $database);
            $query = "Select id from users order by id";
            $query_run= mysqli_query($conn,$query);
            $row=mysqli_num_rows($query_run);

            echo '<h1>'.$row. '</h1>'

?>

                       

                        <h3>USER</h3>
                    </div>
                    <div class="icon-case">
                        
                    </div>
                </div>
                
                <div class="card">
                    <div class="box">
                        <?php
        
            $server = "localhost";
            $user = "root";
            $pass = "";
            $database = "login_register";

            $conn = mysqli_connect($server, $user, $pass, $database);
            $query = "Select id from pump order by id";
            $query_run= mysqli_query($conn,$query);
            $row=mysqli_num_rows($query_run);

            echo '<h1>'.$row. '</h1>'

            ?>
                        <h3>REGISTER PUMPS</h3>
                    </div>
                    <div class="icon-case">
                   
                    </div>
                </div>
                <div class="card">
                    <div class="box">
                        <h1>2</h1>
                        <h3>ADMIN</h3>
                    </div>
                    <div class="icon-case">
                        
                    </div>
                </div>
            </div>
            
                <div class="new-students">
                    <div class="title">
                        <h2>REGISTER PUMPS </h2>
                        <a href="#" class="btn">View All</a>
                    </div>
                    <table>
                        <tr>
                            <th>ID</th>
                            <th>PUMP NAME</th>
                            <th>OWNER NAME</th>
                              <th> ADDRESS</th>
                                <th>EMAIL</th>
                                  <th>PHONE NO.</th>
                        </tr>
								
<?php
            $sql="Select * from pump";
            $server = "localhost";
$user = "root";
$pass = "";
$database = "login_register";

$conn = mysqli_connect($server, $user, $pass, $database);
            $result=mysqli_query($conn,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $name=$row['name'];
                     $o_name=$row['o_name'];
                     $address=$row['address'];
                     $email=$row['email'];
                     $phno=$row['phno'];
                     echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$o_name.'</td>
                        <td>'.$address.'</td>
                        <td>'.$email.'</td>
                        <td>'.$phno.'</td>
                        
                        </tr>';


                      
                }
            }

?>

            

							

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>

</html>