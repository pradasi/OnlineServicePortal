<?php 
$errors =array() ;
$suc =array() ;
include('connection.php');
  session_start();  
 if (isset($_POST['login'])) {
  $email =  $_POST['email'];
  $password =  $_POST['password'];

  if(!$email){
      echo "user name cannot be empty";
      
  }
  if(!$password){
      echo "user name cannot be empty";
      
  }
     
else{
    
  
  	$password = md5($password);
  	$query = "SELECT * FROM login WHERE EmailID='$email' AND Password='$password'";
  	$results = mysqli_query($connection, $query);
  	if (mysqli_num_rows($results) == 1) {
    
      $r = mysqli_fetch_row($results);
        
        if($r[2] == 'vendor'){
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in"; 
            array_push($suc,"You are now logged in") ; 
  	     header('location: Vendor-view.php');
            
        }if($r[2] == 'customer') {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
           array_push($suc,"You are now logged in") ; 
  	     header('location: Homepage.php');
        }
  	  
  	}else {
  		 array_push($errors,"Password didn't match!! Enter the same password") ;
  	}
  }
}

?>