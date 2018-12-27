<?php
$suc =array() ;
 $errors =array() ;
include('connection.php');
if(isset($_POST['register'])){
    $name = $_POST['username'];
    $emailID = $_POST['email'];
    $phone = (int)$_POST['phone'];
    $category = $_POST['Category'];
    $type = $_POST['Type'];
    $address = $_POST['state'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    
//    echo $category;
   

   
    if($password != $password2 ){
        array_push($errors,"Password didn't match!! Enter the same password") ;
    
        
    }
    
    if(!($name &&  $emailID  && $address && $password && $password2 && $category && $type )){
       
        array_push($errors,"Fields cannot be empty!!");
    }else{
        
//            echo "before query";
        
            $query = "INSERT INTO vendor_details(VName,EmailID,Phone,Category,Type,Address) VALUES ('$name', '$emailID', $phone, '$category', '$type','$address')";


            $result = mysqli_query($connection,$query);
//           echo "after query";
    
           
            if($result){
            
                    $password = md5($password);
        
                    $q = "insert into login values ('$emailID','$password','vendor')";
        
                    $res = mysqli_query($connection,$q);
        
                    
                    
                        if($res){
                            header('location: LoginPage.php');
                        }
            
                } 
        
        
        
        
        
    }

}
?>