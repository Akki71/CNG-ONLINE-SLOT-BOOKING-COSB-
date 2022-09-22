<?php
session_start();
include_once '../assets/conn/dbconnect.php';
if (isset($_GET['appid'])) {
$appid=$_GET['appid'];
}
$res=mysqli_query($con, "SELECT a.*, b.*,c.* FROM users a
JOIN book b
On a.id = b.userId
JOIN schedule c
On b.scheduleId=c.scheduleId
WHERE b.id  =".$appid);

$userRow=mysqli_fetch_array($res,MYSQLI_ASSOC);
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Invoice</title>
        
        <link rel="stylesheet" type="text/css" href="assets/css/invoice.css">
    </head>
    <body>
        <div class="invoice-box">
            <table cellpadding="0" cellspacing="0">
                <tr class="top">
                    <td colspan="2">
                        <table>
                            <tr>
                                <td class="title">
                                    <img src="../img/86398852.jpg" style="width:100%; max-width:300px;">
                                </td>
                                
                                <td>
                                    Invoice #: <?php echo $userRow['id'];?><br>
                                    Created: <?php echo date("d-m-Y");?><br>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                <tr class="information">
                    <td colspan="2">
                        <table>
                            <tr>
                                <!-- <td>
                                    <?php echo $userRow['Address'];?>
                                </td> -->
                                
                                <td><?php echo $userRow['userId'];?><br>
                                    <?php echo $userRow['username'];?> <br>
                                    <?php echo $userRow['email'];?><br>
                                    <?php echo $userRow['contact'];?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                
                
                
                <tr class="heading">
                    <td>
                        Slot Details
                    </td>
                    
                    <td>
                        #
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Slot Booking ID
                    </td>
                    
                    <td>
                       <?php echo $appid;?>
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Schedule ID
                    </td>
                    
                    <td>
                        <?php echo $userRow['scheduleId'];?>
                    </td>
                </tr>

                <tr class="item">
                    <td>
                         Booked Slot Day
                    </td>
                    
                    <td>
                        <?php echo $userRow['scheduleDay'];?>
                    </td>
                </tr>
                

                 <tr class="item">
                    <td>
                        Booked Slot Date
                    </td>
                    
                    <td>
                        <?php echo $userRow['scheduleDate'];?>
                    </td>
                </tr>

                 <tr class="item">
                    <td>
                        Booked Slot Time
                    </td>
                    
                    <td>
                        <?php echo $userRow['startTime'];?> untill <?php echo $userRow['endTime'];?>
                    </td>
                </tr>

                 <tr class="item">
                    <td>
                        Car No.
                    </td>
                    
                    <td>
                        <?php echo $userRow['carNo'];?> 
                    </td>
                </tr>
                
                <tr class="item">
                    <td>
                        Approx Quantity
                    </td>
                    
                    <td>
                        <?php echo $userRow['Quantity'];?> 
                    </td>
                </tr>
                
                
                
            </table>
        </div>
        <div class="print">
        <button onclick="myFunction()">Print this page</button>
</div>
<script>
function myFunction() {
    window.print();
}
</script>
    </body>
</html>