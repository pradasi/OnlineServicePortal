<?php
$errors =array() ;
include('Login.php');
include('connection.php');

if(empty($_SESSION['email'])){
    header('location: Loginpage.php');
}

$output='' ;
$count=0;
$row = 0;
$result=0 ;
$cat="Internet Service Provider" ;
global $ID;
 $query2="SELECT * FROM vendor_details where Category='$cat'" ;

if(isset($_GET['submit']))
{
              $searchq_name=$_GET['name'] ;
              $searchq_name=preg_replace("#[^0-9a-z]#i","",$searchq_name) ;
              $searchq_address=$_GET['location'] ;
              $searchq_address=preg_replace("#[^0-9a-z]#i","",$searchq_address) ;
              $ID=$_GET['id'] ;
             // $type=$_GET['type'] ;
              $rating=$_GET['rating'] ;
              
              

                       
            
           
            
                     
//           
    
    
    
       if(!empty($searchq_name)  && !empty($searchq_address) && !empty($rating))
             {
                 $query2 = "CALL getAll2('$searchq_name','$searchq_address',$rating,'$cat')";
             } 
    
     else if( $searchq_name){
               
                
            $query2 = "CALL getName('$searchq_name','$cat')";
            }
            else if( $searchq_address){
                
                $query2 = "CALL getLoc('$searchq_address','$cat')";
                
            } else if($rating){
                
            $query2 = "CALL getRating($rating,'$cat')";
            } 
            
    
}
             $result = mysqli_query($connection,$query2); 
             $count=mysqli_num_rows($result);
             
            
            

           if($count == 0){
             array_push($errors,"No Result Found ! ") ;
           }




 
   

?>




<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
            <title>Internet Service Provider </title>
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
                                   body {
                                            background-image: url(IMAGE/bc_isp2.jpg) ;
                                             background-size: 100% ;
                                       background-attachment: fixed ;
                                     }
    
    
                                    
    
    
                                table, td, th {    
                                    border: 1px solid white;
                                    text-align: left;
                                }

                                table {
                                    border-collapse: collapse;
                                    width: 100%;
                                }

                                th, td {
                                    padding: 15px;
                                    color: white ;
                                }
    
    
                                h3 {
                                     padding-bottom: 10px ;
                                    color: white ;
                                    text-align: center;
                                }
                                
                                
.block
{

    background: rgba(0,0,0,0.95);
    padding-bottom: 60px ;
     margin:100px 200px ;
    padding: 10px 40px ;
    height: 1000px ;
    border: 2px solid white ;
    border-radius: 7px ;
}
    
 .block input[type="text"],
    #select_catalog,
    .block input[type="submit"]
{
    
    border:1px solid black ;

    height:40px ;
    color:black;
    font-size:16px;
    border-radius: 5px ;
}   
    
.buttonize {
    text-decoration: none;
    color: black;
    background-color: gainsboro;
    padding: 10px 15px;
    border-radius: 11px;

  } 
.buttonize:hover
    {
        text-decoration: none;
        background-color: darkgray ;
        color: white;
    }
    
    
    #options
    {
        padding-bottom: 50px ;
    }
     .alert {
    padding: 10px;
        width: 99% ;
    background-color: #f44336;
    color: white;
        margin: 0 ;
        margin-top: 10px ;
    margin: 0px 0px 0px 0px ;
}

    .error {
   
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.7s;
    margin-top: 0px ;
}
.success {
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
    
    #heading2{
                        font-family: 'Pacifico', cursive;
                         font-size: 35px ;
                        text-decoration: underline ;
                        padding-bottom: 32px ;
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
                                             <li><a href="Homepage.php">Home</a></li> 
                                             <li><a href="Homepage.php">About us </a></li> 
                                             <li><a href="Homepage.php">Contact us</a></li>                                           
                                            
                                                            <li >  <?php
                                                          if(isset($_SESSION['email'])){

                                                         echo '<a  href="updating_PP_customer.php" >Profile page</a>'; } ?>

                                            </li>
                                            
                                 
                                <?php if(isset($_SESSION['email'])){ ?>
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Activity <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                          
                                          <li><a href="Customer-status-view.php">Status </a></li>
                                          <li><a href="all_review.php?id=0">All Review </a></li>
                                         
                                        </ul>
                                </li> <?php } ?>
                                                 
                                                 
                                            <li>
                                             <?php    
                                                     if(isset($_SESSION['email'])){
                                                       echo '<a  href="Logout.php" >Logout</a>';
                                                       }
                                                     else{
                                                        echo '<a href="LoginPage.php" >Login</a>';
                                                         
                                                         } 
                                             ?>
                                            </li>
                                               
                                             </ul>
                                        </div>
                                      </div>
                                </nav>
   <br><br> <br> <?php  include('errors.php') ; ?>
    
    
    <div class="block"> 
           
            <h3 id="heading2">Internet Service Provider </h3>
           <div id="options">
            <form action="ISP.php" method="get">
                   <input type="text" name="name"  placeholder="Name" >
                    <input type="text" name="location" placeholder="Location" >
                    <input type="hidden"  name="id" value="">
                    
                      <select name="rating" id="select_catalog">
                       <option value="0" >rating</option>  
                      <option value="1" >1</option>  
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4" >4</option>
                      <option value="5" >5</option>  
                     
                    </select>
                
                   
                       <input type="submit" name="submit" value="submit">
                       </form>
                  </div>      
                       
           <table>
  <tr>
      
    <th>Name</th>
    <th>Type</th>
    <th>Address</th>
    <th>Rating</th>
     <th>Book</th>  
  
  </tr>  
               
               
               <?php 
        

               if(($result) && ($count>0)){
               while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>" ;
                    
                    echo "<td>".$row['VName']."</td>" ;
                        echo "<td>".$row['Type']."</td>";
                        echo "<td>".$row['Address']."</td>";
                        echo "<td>".$row['Stars']."</td>";
                        echo "" ; 
                        echo "<td>" ;
                     
                        print '<center><a href="Profilepage.php?id='.$row['VID'].'" name="viewButton" class="buttonize">View Profile</a></center>';
                       echo "</td>" ;
                    echo"</tr>" ;
                }
               }
               else { }
              
             
  ?>
               
</table>
    
    </div>
    
    </body>
</html>

  