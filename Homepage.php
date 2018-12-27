<?php 

include('login.php');
include('connection.php');
global $r;
if(!(empty($_SESSION['email']))){
 $email=$_SESSION['email'] ;
 $query = "SELECT * FROM login WHERE EmailID='$email'";

$results = mysqli_query($connection, $query);
if (mysqli_num_rows($results) == 1) {
$r = mysqli_fetch_row($results); }

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



                                      .bg-3 { 
                                           padding-top: 250px;
                                        padding-bottom: 250px;
                                           font-family: 'Charmonman', cursive;
                                          font-weight: bolder;
                                           font-size:200px;
                                          background-color:#1abc9c; /* White */
                                          color: #fff;
                                      }
                                      .bg-4 { 
                                           padding-top: 250px;
                                        padding-bottom: 250px;
                                          background-color: gray; /* White */
                                          color: #fff;
                                      }
                                        .bg-5 { 
                                             padding-top: 10px;
                                        padding-bottom: 10px;
                                        background-color: #2f2f2f;
                                           font-family: 'Charmonman', cursive;
                                        color: #ffffff;

                                         font-size:5px ;
                                    }

                                        .container text-center {
                                            padding-top: 215px;
                                        padding-bottom: 215px;

                                        }
                                  
                                        #heading {
                                            font-family: 'Pacifico', cursive;
                                            font-size: 35px ;
                                        }

                                        .carousel-control.right, .carousel-control.left {
                                        background-image: none;
                                        color: #1abc9c;
                                    }

                                    .carousel-indicators li {
                                        border-color: #1abc9c;
                                    }

                                    .carousel-indicators li.active {
                                        background-color: #1abc9c;
                                    }

                                    .item h4 {
                                        font-size: 19px;
                                        line-height: 1.375em;
                                        font-weight: 400;
                                        font-style: italic;
                                        margin: 70px 0;
                                    }

                                    .item span {
                                        font-style: normal;
                                    }


                                        .carousel-inner .item 
                                    {
                                      height:650px; 
                                       background-size:cover;
                                       background-position: center center;
                                    }

                                    .carousel-caption h3 {
                                        color: #fff !important;
                                    }

                                        .btn-default {
                                            background-color: #1abc9c;
                                            color: #fff ;
                                            padding: 15px 32px;
                                            font-size: 16px ;

                                        }
                                        .btn-default:hover
                                        {
                                             background-color: #10f7c9;
                                             color: #fff ;
                                        }


                                        .para 
                                        {
                                            font-size: 20px ;

                                        }
    .para2{
         font-family: 'Cinzel', serif;
        font-size: 20px ;
        padding: 5px 5px ;
        width: 300px ;
        margin-left: 500px ;
        
        color: black ;
          background-color: whitesmoke ;
        text-decoration: none ;
        
    }
    .para2:hover{
          background-color: floralwhite ;
        color: white ;
         text-decoration: none ;
        
    }
    #section5 {
        
       font-family: 'Cinzel', serif;
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
                                             <li class="active"><a href="#myCarousel">Home</a></li> 
                                             <li><a href="#section4">About us </a></li> 
                                             <li><a href="#section5">Contact us</a></li>                                           
                                            
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

 <div id="myCarousel" class="carousel slide" data-ride="carousel">

                                          <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1"></li>
                                            <li data-target="#myCarousel" data-slide-to="2"></li>
                                            <li data-target="#myCarousel" data-slide-to="3"></li>
                                           
                                            <li data-target="#myCarousel" data-slide-to="5"></li>
                                            
                                          </ol>



            <div class="carousel-inner" role="listbox">
                                    <div class="item active" style="background-image: url(img/doctor2.jpg)">
                                    <div class="carousel-caption">
                                    <h3> Doctor</h3>
                                    <a href="Doctor.php" class="btn btn-default" role="button"> Book Now </a>
                                    </div> 
                                    </div> 


                                    <div class="item" style="background-image: url(img/teacher1.jpg)">
                                    <div class="carousel-caption">
                                    <h3>Teacher</h3>
                                    <a href="Teacher.php" class="btn btn-default" role="button"> Book Now </a>
                                    </div> 
                                    </div>


                                    <div class="item" style="background-image: url(img/plumber.jpg)">
                                    <div class="carousel-caption">
                                    <h3>Plumber</h3>
                                    <a href="Plumber.php" class="btn btn-default" role="button"> Book Now </a>
                                    </div> 
                                    </div>


                                    <div class="item" style="background-image: url(img/isp1.jpg)">
                                    <div class="carousel-caption">
                                     <h3> Internet Service Provider </h3>
                                     <a href="ISP.php" class="btn btn-default" role="button"> Book Now </a>
                                    </div> 
                                    </div> 

                                    
                                    <div class="item" style="background-image: url(img/beauty2.jpg)">
                                    <div class="carousel-caption">
                                    <h3> Beautician </h3>
                                    <a href="Beautician.php" class="btn btn-default" role="button"> Book Now </a>
                                    </div> 
                                    </div>

                                   

        </div>



                  
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                     <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>

</div>



                    <div id="section4" class="container-fluid bg-3 text-center">
                    <h3>About us </h3>
                    <p class="para">we provide a platform for small business to run their business online  </p>
                    </div>

                   <div id="section5" class="container-fluid bg-4 text-center">
                    <h3>Contact us </h3>

                      <p class="para">Contact us and we will get back to you within 24 hours.</p>
                      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, India</p>
                      <p><span class="glyphicon glyphicon-phone"></span> +00 88888888</p>
                      <p><span class="glyphicon glyphicon-envelope"></span> Bangalore_onlinePortal@yahoo.com</p>
                      <p class="para2"><a href="Message.php"> Drop Your Message </a></p>
                    </div>


                <footer class="container-fluid bg-5 text-center">
                  <p class="para"> Maintened by CMR Online Service Portal .. </p> 
                </footer>
    
    
</body>
</html>