<?php
$errors=array() ;
$suc =array() ;
include('connection.php');
if(isset($_POST['submit']))
{
    $name=$_POST['fname'] ;
    $email=$_POST['email'] ;
    $password=$_POST['password'] ;
    $password2=$_POST['password2'] ;
    $address=$_POST['address'] ;
    $phoneno=$_POST['phno'] ;
    
    
    if($password != $password2 ){
   
          array_push($errors,"Password didn't match!! Enter the same password") ;
        
    }
    if(!($name &&  $email && $address && $phoneno && $password && $password2 )){
          array_push($errors,"Fields cannot be empty!!") ;
    }
    else
    {
        $query = "INSERT INTO customer_details(CName,EmailID,Address,Phone) VALUES('$name','$email', '$address', $phoneno)";
   
    
        $result = mysqli_query($connection,$query) ; 
       
        if($result){
            $password = md5($password);
            $q = "insert into login values ('$email','$password','customer')";
        
                    $res = mysqli_query($connection,$q);
        
                  
                        if($res){
                            header('location: LoginPage.php');
                        }
            
        }
        
    }
        
    
    
    
}


?> 