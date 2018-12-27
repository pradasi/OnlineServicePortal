<?php

include('Login.php');
include('connection.php');
if(isset($_POST['submit']))
{
   
  //  $rating=$_POST['rating'] ;
    $hreview=$_POST['hreview'] ;
    $review=$_POST['review'] ;
    $image = $_FILES['image']['name'];
    $stars = $_POST['stars'];
    $BID = $_POST['BID'] ;
    $VID = $_POST['VID'];
    
    
  	// image file directory
  	$target = "IMAGE/".basename($image);
    
    $query = "INSERT INTO review VALUES($BID,$VID,$stars,'$hreview','$review','$image')";
    $result = mysqli_query($connection,$query); 
    
    if(!$result){
        echo "not okay";
    }
    
    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
        {
  		
          array_push($suc,"Image Uploaded") ;    
  	    }else{
  		array_push($errors,"Failed to upload Image") ;
  	    }
    
    
    
   
    
  
        header('location: Customer-status-view.php');
   
    
    
}





?> 