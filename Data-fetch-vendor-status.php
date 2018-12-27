<?php
//include('sendmail.php');
include('login.php');
include('connection.php');

$email = $_SESSION['email'];
$status = "";
$bid= 0;
if(isset($_POST['Accepted'])) {
    
    
    $bid = $_GET['bid'];

    $status = $_POST['Accepted'];

    $qe = "select VID from vendor_details where EmailID='$email'";

    $rr =  mysqli_query($connection, $qe);

    if((mysqli_num_rows($rr) ==1 ) ){

        $re = mysqli_fetch_assoc($rr);

        $vid = $re['VID'];

        $query = "update booking set Status = '$status' where  BID = $bid";

        $result = mysqli_query($connection, $query);
    
    }

}

else if(isset($_POST['Rejected'])){
    
   
    $bid = $_GET['bid'];
    $status = $_POST['Rejected'];
    $qe = "select VID from vendor_details where EmailID='$email'";
    $rr =  mysqli_query($connection, $qe);
    if((mysqli_num_rows($rr) ==1 ) ){

        $re = mysqli_fetch_assoc($rr);
        $vid = $re['VID'];

        $query = "update booking set Status = '$status', Completion = '$status' where BID = $bid";
        $result = mysqli_query($connection, $query);
    }
    
    
}

// this is to send mail

//$q = "SELECT CEmail from details where BID=$bid";
//$r = mysqli_query($connection,$q);
//$em = mysqli_fetch_assoc($r);
//
//$email = $em['CEmail'];
//
//sendmail($email,$status);
header('location: Vendor-view.php');







?>
