<?php
$errors=array() ;
$suc=array() ;
include('connection.php');
session_start(); 
 $email=$_SESSION['email'] ;
if(empty($_SESSION['email'])){
            echo "No user Found";
        } 

if(isset($_POST['uploadIMG'])){
    
    
    
    
 // Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
    
    echo $image;
  	

  	// image file directory
  	$target = "IMAGE/".basename($image);
    
    

    $query = "UPDATE vendor_details set image='$image' where EmailID = '$email'";
    
    
    $result = mysqli_query($connection,$query);
        
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) 
        {
  		
          array_push($suc,"Image Uploaded") ;    
  	    }else{
  		array_push($errors,"Failed to upload Image") ;
  	    }
    
   
        
}
if(isset($_POST['submit']))
{
    $name=$_POST['vendorname'] ;
    $type=$_POST['type'] ;
    $category=$_POST['category'] ;
    $phoneno=$_POST['phoneno'] ;
    
    $address=$_POST['address'] ;
    $description=$_POST['description'] ;
    
    
    $query = "UPDATE vendor_details set Vname='$name',Type='$type',Category='$category', Phone='$phoneno' , address='$address' , description='$description' WHERE EmailID='$email'" ;
   
    
    $result = mysqli_query($connection,$query) ; 
 
    if(!$result)
    {
        array_push($errors,"Failed to Upload Details ") ;
    }
    else {
         array_push($suc,"Successfully Updated ") ;
    }
    
    
}
else if(isset($_POST['submit2'])){
    $oldpassword=$_POST['oldpassword'] ;
    $oldpassword = md5($oldpassword);
    
    $newpass1=$_POST['newpass1'] ;
    $newpass1 = md5($newpass1);
    
     $newpass2=$_POST['newpass2'] ;
    $newpass2=md5($newpass2) ;
      
    
    
    
    $query = "SELECT * FROM login WHERE EmailID='$email' AND Password='$oldpassword'";
  	$results = mysqli_query($connection, $query);
  	if (mysqli_num_rows($results) == 1) 
 
        {
                if($newpass1 != $newpass2)
                {
                   
                     array_push($errors,"Enter the Same Password !") ;
                   
                    
                }
                else
                {
                   $query2 = "UPDATE login set Password='$newpass2' WHERE EmailID='$email'  " ;
                    $result2 = mysqli_query($connection, $query2);
                    if($result2){
                        array_push($suc,"Successfully Updated !") ;
                       
                    }
                }
                                  
        }
    else {
            array_push($erros,"enter the correct old password ") ; 
          
                                    
        }
    
    
    
    
}


?>
<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
            <title>HomePage</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
<style>    
                              .navbar {
                                        margin-bottom: 0;
                                        background-color:black ;
                                        z-index: 9999;
                                        border: 0;
                                        font-size: 15px !important;
                                        line-height: 1.42857143 !important;
                                        letter-spacing: 4px;
                                        border-radius: 0;
                                    }

                                    .navbar li a, .navbar .navbar-brand {
                                        color: #fff !important;

                                    }

                                    .navbar-nav li a:hover, .navbar-nav li.active a {
                                        color: #1abc9c !important;
                                        background-color: #fff !important;
                                    }

                                    .navbar-default .navbar-toggle {

                                        border-color: transparent;
                                        color: #fff !important;
                                    }
    
    
                                     #heading {
                                            font-family: 'Pacifico', cursive;
                                            font-size: 35px ;
                                        }
                                 
    
    
    
                                   
                               
                                 
    
    
  

    
      .alert {
          margin-top: 0 ;
    padding: 50px;
        width: 99% ;
    background-color: #f44336;
    color: white;
        margin: 0 ;
        margin-top: 0 ;
    margin: 0px 0px 0px 0px ;
}
    
 .alert2 {
    padding: 50px;
        width: 99% ;
    background-color: #4CAF50;    
    color: white;
        margin: 0 ;
        margin-top: 0 ;
    margin: 0px 0px 0px 0px ;
}
    .error {
    margin: 0 ;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.7s;
    margin: 0px 0px 0px 0px ;
}

.success {
 margin: 0 ;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.7s;
    margin: 0px 0px 0px 0px ;
}
                             
    .dropdown-menu{
   
        background-color: black ;
        color: #1abc9c ;
     
    }
                             
</style>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
                     <nav class="navbar navbar-inverse navbar-fixed-top">
                      <div class="container">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span> 
                                            </button>
                                             <a id="heading" class="navbar-brand">Online Service portal </a>
                                        </div>
                                        <div class="collapse navbar-collapse" id="myNavbar">
                                              <ul class="nav navbar-nav navbar-right">
                                             
                                            
                                                            <li >  <?php
                                                          if(isset($_SESSION['email'])){

                                                         echo '<a  href="updating_profile_page.php" >Profile page</a>'; } ?>

                                            </li>
                                             <li ><a href="Vendor-view.php">Requests</a></li>
                                             <li class="active"><a href="Vendor-status-view.php">Status</a></li>
                                             <li>
                                             <?php    
                                                     if(isset($_SESSION['email'])){
                                                       echo '<a  href="logout.php" >Logout</a>';
                                                       }
                                                     else{
                                                        echo '<a href="Login_page.php" >Login</a>';
                                                         
                                                         } 
                                             ?>
                                            </li>
                                             </ul>
                                        </div>
                                      </div>
                                </nav>
                                
    
    
    <br><br><br>
     <?php include('errors.php') ; ?>
    
<!--
         <div class="image">
        <img src="IMAGE/doctor1.jpg" width="300px" height="300px"></div>
-->
            
                
               
                              
                              
           
    


</body>
</html>
