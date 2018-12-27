<?php
include('login.php');
include('connection.php');
$email = $_SESSION['email'];

if(isset($_POST['Completed'])){
    
    $id = $_GET['bid'];
    $status = $_POST['Completed'];
    $query = "update booking set Completion = '$status' where BID = $id";
    $result = mysqli_query($connection, $query);
    header('location: Vendor-status-view.php');
       
   }
    
    
    
    



?>
