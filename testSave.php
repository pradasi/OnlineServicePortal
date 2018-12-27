<?php
include('login.php');
include('connection.php');
 $suc =array() ;
$errors=array() ; 
if (isset($_POST["submit"]))
{
    
    $cid = $_GET['cid'];
    $vid = $_GET['vid'];
  // Get the data
  $imageData=$_POST['im'];
 
  // Remove the headers (data:,) part.
  // A real application should use them according to needs such as to check image type
  $filteredData=substr($imageData, strpos($imageData, ",")+1);
 
  // Need to decode before saving since the data we received is already base64 encoded
  $unencodedData=base64_decode($filteredData);
 
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    
    for ($i = 0; $i < 10; $i++) {
        $randstring = $characters[rand(0, strlen($characters))];
    }
    
    
    $img = $randstring.".jpeg" ;
   
 
  // Save file. This example uses a hard coded filename for testing,
  // but a real application can specify filename in POST variable
    
  $fp = fopen( "IMAGE/".$img, 'wb' );
  fwrite( $fp, $unencodedData);
  fclose( $fp );
        
        if($vid == 0){
            
            $query = "UPDATE customer_details set CImage = '$img' WHERE CID = $cid";
            $result = mysqli_query($connection,$query);
            header('location:updating_PP_customer.php');
        } else if ($cid == 0){
            $query = "UPDATE vendor_details set image = '$img' WHERE VID = $vid";
            $result = mysqli_query($connection,$query);
            header('location:updating_profile_page.php');
        }
            
    
    
    
    
}
?>





