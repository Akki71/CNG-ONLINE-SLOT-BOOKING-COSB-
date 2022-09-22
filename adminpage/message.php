

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
       
        <div class="content-2">
            <div class="recent-payments">
                <div class="title">
                    <h2>Messages</h2>
                    
                </div>




                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>EMAIL</th>
                        <th>MESSAGE</th>
                        <th>DATE TIME</th>
                    </tr>




                    <?php

                    $sql="Select * from message1 order by id DESC";
                   
                    $conn = mysqli_connect("localhost", "root", "", "adminloginpage");
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        while($row=mysqli_fetch_assoc($result)){
                            $id=$row['id'];
                            $name=$row['name'];
                            $email=$row['email'];
                            $message=$row['message'];
                            $datetime=$row['datetime'];
                            echo ' <tr>
                            <th scope="row">'.$id.'</th>
                            <td>'.$name.'</td>
                            <td>'.$email.'</td>
                            <td>'.$message.'</td>
                            <td>'.$datetime.'</td>
                            </tr>';



                        }
                    }

                    ?>
   
                </table>
            </div>
</div>
</div>
        </div>
    </div></div>
</div>
</body>

</html>