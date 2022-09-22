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
    <title>PUMP </title>
</head>

<body>
    <div class="side-menu">
        <div class="brand-name">
            <h1>COSB</h1>
        </div>
      
    </div>
    <div class="container">
        <div class="header">
            <div class="nav">
                
                <div class="user">
                    
                    NASHIK
            
                    
            
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
                            
                              <th> ADDRESS</th>
                            
                                  <th>PHONE NO.</th>
                        </tr>
								
<?php
            $sql="  SELECT* FROM pump WHERE address='nashik' ";
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
                     
                     $address=$row['address'];
                     
                     $phno=$row['phno'];
                     echo ' <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        
                        <td>'.$address.'</td>
                        
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