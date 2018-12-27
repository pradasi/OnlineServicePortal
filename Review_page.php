<?php 
include('Login.php') ;
global $r ;
if((empty($_SESSION['email']))){
  header('location: LoginPage.php');
 
}
else {
    
    $email=$_SESSION['email'] ;
 $BID = $_GET['bid'];
$VID = $_GET['vid'];    
}
  	  
?>
<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
            <title>Review Page</title>
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
    body{
        
        background-image: url("IMAGE/bg_review.jpg") ;
        background-size: cover ;
        background-attachment: fixed ;
    }
     .tab{
        
        text-align: center;
        color:white;
       margin-left: auto ;
          margin-right: auto ;
           background: rgba(0,0,0,0.8);
          width: 80% ;
          font-size: 16px ;
          border-radius: 7px ;
         margin-top: 150px ;
         margin-bottom: 100px ;
    }


    .tab1{
        padding-top: 20px ;
        font-family: 'Charmonman', cursive;
        font-weight: 800;
        font-size: 30px ;
        text-align: center;
        
        text-decoration:underline;
        
    }
    
    .star{
          color: goldenrod;
          font-size: 3.5rem;
          padding: 1 1rem; /* space out the stars */
        }
        .star::before{
          content: '\2606';    /* star outline */
          cursor: pointer;
        }
        .star.rated::before{
          /* the style for a selected star */
          content: '\2605';  /* filled star */
        }
        
        .stars{
            counter-reset: rateme 0;   
            font-size: 2.0rem;
            font-weight: 900;
        }
        .star.rated{
            counter-increment: rateme 1;
        }
        .stars::after{
            content: counter(rateme) '/5';
        }
   
    .review{
       text-align: center ;
        font-size: 20px ;
    }
    
input[type="submit"]
{
    border:none ;
   
    color:white;
    font-size: 16px ;
    background-color:#1abc9c ;
   
    padding: 20px 30px ;
    border-radius: 5px ;
    text-align: center ;
}
    
    input[type="number"]{
        color: black ;
        
    }   
input[type="submit"]:hover
{
   background-color:dodgerblue; 
    
}
    
    .h_textarea
    {
        border-radius: 5px ;
        color: black ;
         padding: 5px 5px ;
    }
    
    .r_textarea{
        
        padding: 20px 20px ;
        border-radius: 5px ;
        color: black ;
    }
    
 .fileUpload {
    position: relative;
     padding: 20px 100px ;
    margin: 10px;
}
.fileUpload input.upload {
    position: absolute;

   padding: 20px 30px ;
    font-size: 30px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
  
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
             
  <p class="tab1">Review Page </p>  
        <br>
    
   <p class="review"> Your rating </p>
    <div class="stars" data-rating="0">
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
        <span class="star">&nbsp;</span>
    </div>
    <p class="review"> Your Review </p><br>
        <form action="Review_page_PHP.php" method="post" enctype="multipart/form-data" >
            
            <input id="stars" type="number" name="stars" value="" hidden>
             <input type="number" name="BID" value="<?php echo($BID) ?>" hidden>
             <input type="number" name="VID" value="<?php echo($VID) ?>" hidden>
            
            
             <textarea row="10" cols="72" placeholder="Write a Heading for your Review here" class="h_textarea" name="hreview" value=" "></textarea><br><br>
             <textarea rows="10" cols="69" placeholder="Write your Review" class="r_textarea" name="review" value=" "></textarea><br><br>

            <p class="review"> Upload Images </p>
           <div class="fileUpload btn btn-primary">
            <span>Upload</span>
            <input type="file" class="upload" name ="image"/>
           </div>

              <br><br>      
            <input type="submit" name="submit"><br>
    </form>
                                                    
        <br><br>                            
</div>                 

 
    
    <script>
        
        
        document.addEventListener('DOMContentLoaded', function(){
            let stars = document.querySelectorAll('.star');
            stars.forEach(function(star){
                star.addEventListener('click', setRating); 
            });
            
            let rating = parseInt(document.querySelector('.stars').getAttribute('data-rating'));
            let target = stars[rating - 1];
            target.dispatchEvent(new MouseEvent('click'));
        });
        function setRating(ev){
            let span = ev.currentTarget;
            let stars = document.querySelectorAll('.star');
            let match = false;
            let num = 0;
            stars.forEach(function(star, index){
                if(match){
                    star.classList.remove('rated');
                }else{
                    star.classList.add('rated');
                }
                //are we currently looking at the span that was clicked
                if(star === span){
                    match = true;
                    num = index + 1;
                }
            });
            document.querySelector('.stars').setAttribute('data-rating', num);
            document.getElementById('stars').value = num;
        }
        
    </script>
                    


    
    
</body>
</html>
