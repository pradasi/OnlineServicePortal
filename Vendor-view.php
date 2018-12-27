<?php 
    global $id;
    include('login.php');
    include('connection.php');
    $email = $_SESSION['email'];

    if(empty($_SESSION['email'])){
        header('location: Loginpage.php');
    }





    $qe = "select VID from vendor_details where EmailID='$email'";

    $rr =  mysqli_query($connection, $qe);

    if((mysqli_num_rows($rr) ==1 ) ){

    $re = mysqli_fetch_assoc($rr);
    $id = $re['VID'];    
    $query = "SELECT * FROM details where Status='Pending' and VID = $id";

    $result = mysqli_query($connection, $query);
    
    }

?>


<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Charmonman:700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            <title>Request</title>
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
                                   
    
    
   
/*
  .block
{

    background: rgba(0,0,0,0.5);
    padding-bottom: 60px ;
     margin:200px 200px ;
    padding: 20px 40px ;
    height: 1000px ;
}
*/
    
    
    p{
        margin-top: 80px;
        
        margin-bottom: 1px;
        font-family: 'Ubuntu', sans-serif;
        font-size: 20px;
    }
    
    .info{
        
        margin-top: 100px;
    }
    label{
        font-family: monospace;
        font-size: 50px;
    }
    
    .tab{
        
        text-align: center;
        color:black;
        font-size: 20px;
    }
    
    
    table{
        margin-left: auto;
        margin-right: auto;
        width: 90%;
        border-collapse: collapse;
       
    }
    
      th{
                padding: 15px;
                color: black ; 
               font-weight: bolder ;
               font-family: 'Ubuntu', sans-serif;
               
          
    }
    td {
                padding: 15px;
                color: black ;
                font-family: 'Ubuntu', sans-serif;
              
             
          
        }
    
    .tab1{
        font-family: 'Charmonman', cursive;
        font-weight: 800;
        font-size: 35px ;
        text-align: center;
        
    }
    

     body{
        background-image: url(background/bg_service2.jpg); 
         background-size: cover;
       

    }
    #mybutton {
         background-color:#6a201c ;
         color: white ;
         text-decoration: none;
    padding: 10px 25px;
    border-radius: 10px;
    
    }
    #mybutton:hover{
        
        background-color:#34100E ;
         color: white ;
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
                                             
                                            
                                                            <li>  <?php
                                                          if(isset($_SESSION['email'])){

                                                         echo '<a  href="updating_profile_page.php" >Profile page</a>'; } ?>

                                            </li>
                                             <li class="active"><a href="Vendor-view.php">Requests</a></li>
                                             <li><a href="Vendor-status-view.php">Status</a></li>
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
              
    <table border=2> 
 
  <p class="tab1" >People Who Need Your Service</p> <br><br> 
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Time Slot</th>
        <th>Date</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Action</th>
        
    </tr>
    <?php while ($obj = ( mysqli_fetch_array($result)) ){ ?> 
    <tr>
        <td> <?= $obj['CID'] ?> </td>
        <td><?= $obj['CName'] ?></td>
        <td><?= $obj['Time']?></td>
        <td><?= $obj['Date']?></td>
        <td><?= $obj['CPhone']?></td>
        <td><?= $obj['CEmail']?></td>
        <td><?= $obj['CAddress']?></td> 
        <td>
        
            <form action="Data-fetch-vendor-status.php?bid=<?php echo $obj['BID'] ?>" method="get">
             <button id="mybutton" type="submit" formmethod="post" name="Accepted" value="Accepted">Accept</button> 
            <button  id ="mybutton" type="submit" formmethod="post" name="Rejected"  value="Rejected">Reject</button>  </form>
            

            
        
          </td>
          
    </tr>
            
    <?php } ?>
</table> 
    <br><br><br><br>
                                    
   
          
    </body>
</html>




