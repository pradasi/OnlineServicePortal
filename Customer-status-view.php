<?php 

include('login.php');
include('connection.php');

$email = $_SESSION['email'];

if(empty($_SESSION['email'])){
    header('location: Login_page.html');
}





$qe = "select CID from customer_details where EmailID='$email'";

$rr =  mysqli_query($connection, $qe);

if((mysqli_num_rows($rr) ==1 ) ){
    
$re = mysqli_fetch_assoc($rr);
$cid = $re['CID'];    
    
$query = "SELECT * FROM details where CID = $cid order by BID";

$result = mysqli_query($connection, $query);
    
}

?>


<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="pcifico/stylesheet.css">
            <link href="charmonmon/stylesheet.css">

            <link href="cinzel/stylesheet.css" rel="stylesheet">
            <link href="cookie/stylesheet.css" rel="stylesheet">
            <title>Customer Status View</title>
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
                                   
    
    
   
    
    p{
        margin-top: 80px;
        
        margin-bottom: 1px;
        font-family: fantasy;
        font-size: 20px;
    }
    
    .info{
        
        margin-top: 100px;
    }
    label{
        font-family: monospace;
        font-size: 50px;
    }
    
    table{
        margin-left: auto;
        margin-right: auto;
        width: 90%;
        border-collapse: collapse;
       
    }
    
      th{
                padding: 5px;
                color: white ; 
               font-weight: bolder ;
               font-family: 'Ubuntu', sans-serif;
               
          
    }
    td {
                padding: 5px;
                color: white;
                font-family: 'Ubuntu', sans-serif;
              
                text-align: left;
          
        }
    
    .tab1{
        font-family: 'Charmonman', cursive;
        font-weight: 800;
        font-size: 30px ;
        text-align: center;
        text-decoration: underline;
        padding-bottom: 20px ;
        
    }
    

     body{
        background-image: url(IMAGE/bac81.jpg); 
          background-size: 100% ;
          background-attachment:fixed;
         
        

    }
    #mybutton {
         background-color:#d06d35 ;
         color: white ;
         text-decoration: none;
    padding: 5px 15px;
    border-radius: 10px;
    
    }
    #mybutton_green{
        
         background-color:#4CAF50;
         color: white ;
         text-decoration: none;
        border: none ;
    padding: 5px 15px;
   
    
    }
     #mybutton_yellow{
        
         background-color:#ff9800;
         color: white ;
         border: none ;
         text-decoration: none;
    padding: 5px 18px;
  
    
    }
     #mybutton_red{
        
         background-color:#f44336;
         color: white ;
         border: none ;
         text-decoration: none;
    padding: 5px 15px;
  
    
    }
    
    #mybutton:hover{
        
        background-color:#A26C4D ;
         color: white ;
    }
    
      .tab{
        
        text-align: center;
        color:white;
       margin-left: auto ;
          margin-right: auto ;
           background: rgba(0,0,0,0.95);
          width: 90% ;
          font-size: 16px ;
          border-radius: 7px ;
          margin-top: 100px ;
          padding-top: 10px;
          padding-bottom: 80px ;
          border: 1px solid white ;
          margin-bottom: 30px ;
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
                                

                                
                                                                
    <div class="tab">
               
    <table border=2> 
  <p class="tab1" > Status of the services You Booked</p>  
    <tr>
        
        <th>Name</th>
        <th>Time Slot</th>
        <th>Date</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Service</th>
        
        <th> Review</th>
        
    </tr>
    <?php while ($obj = ( mysqli_fetch_array($result)) ){ ?> 
    <tr>
        
        <td><?= $obj['VName'] ?></td>
        <td>
            <?php if($obj['Time']==1 ) { echo "Morning slot"; }
                  else if($obj['Time']==2) { echo "Afternoon slot"  ; }
                  else { echo "Evening slot"  ; }
            ?>
        </td>
        <td><?= $obj['Date']?></td>
        <td><?= $obj['VPhone']?></td>
        <td><?= $obj['VEmail']?></td>
        <td><?= $obj['VAddress']?></td>
        <td>
            
            <?php if($obj['Status']=="Accepted") { ?>
                  <button type="submit" id="mybutton_green" disabled>Accepted</button>
            <?php } ?>
            <?php if($obj['Status']=="Pending") { ?>
                  <button type="submit" id="mybutton_yellow"  disabled>Pending</button>   
            <?php } ?>
            <?php if($obj['Status']=="Rejected") { ?>
                  <button type="submit" id="mybutton_red"  disabled>Rejected</button>   
            <?php } ?>
 
        </td>
        
        
        
        <td>
        <?php  if($obj['Review'] == 'Activated' ) {  ?>
            <form action="Review_page.php?vid=<?php echo $obj['VID']?>&bid=<?php echo $obj['BID']?>" method="get">
             <button type="submit" id="mybutton" formmethod="post" name="Review" value="Review">Review Activated</button>    </form>
            <?php } else { ?>
            
            <?php echo $obj['Review']; }  ?>
            
        
          </td>
          
    </tr>
    <?php } ?>
</table>                                                       
                                    
</div>                                                                                                                            
    </body>
</html>




