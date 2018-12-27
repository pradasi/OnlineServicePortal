<?php
include('connection.php') ;
$suc=array() ;
$errors=array() ;
if(isset($_POST['submit']))
{
   
   
   
   
   
    $name=$_POST['name'] ;
    $email_id=$_POST['EmailId'] ;
    $phone_no =$_POST['phno'] ;
    $message = $_POST['message'];
   
    
    
 
    
    $query = "INSERT INTO feedback (name,email,phone,message) VALUES('$name','$email_id',$phone_no,'$message')";
    $result = mysqli_query($connection,$query); 
    
    if(!$result){
      array_push($errors,"Failed to send the message") ;
    } 
    else {
        
        array_push($suc,"Successfully Updated ") ;
    }
    
    
    
}





?> 



<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
           
            <title>Contact Us</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <link href="pcifico/stylesheet.css">
            <link href="charmonmon/stylesheet.css">

            <link href="cinzel/stylesheet.css" rel="stylesheet">
            <link href="cookie/stylesheet.css" rel="stylesheet">
    
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
                                         margin-bottom: 0;
                                    }

                                    .navbar-nav li a:hover, .navbar-nav li.active a {
                                        color: #1abc9c !important;
                                        background-color: #fff !important;
                                         margin-bottom: 0;
                                    }

                                    .navbar-default .navbar-toggle {

                                        border-color: transparent;
                                        color: #fff !important;
                                         margin-bottom: 0;
                                    }
    
    
                                     #heading {
                                            font-family: 'Pacifico', cursive;
                                            font-size: 35px ;
                                          margin-bottom: 0;
                                        }
                                 
    
       .alert {
    padding: 25px;
        width: 99% ;
    background-color: #f44336;
    color: white;
        margin: 0 ;
        margin-top: 0 ;
    margin: 0px 0px 0px 0px ;
}
    
 .alert2 {
    padding: 25px;
        width: 99% ;
    background-color: #4CAF50;    
    color: white;
        margin: 0 ;
        margin-top: 0 ;
    margin: 0px 0px 0px 0px ;
}  
                                    
    .error {
        z-index: 10 ;
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
    z-index: 10 ;
 margin: 0 ;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 10px;
    cursor: pointer;
    transition: 0.7s;
    margin: 0px 0px 0px 0px ;
}  
                                   
                                 
    
    
   
    
  
    
 
     body, html{
                  height:100%;
                  margin:0;
                  font-size:16px;
                  font-family:"Lato", sans-serif;
                  font-weight:400;
                  line-height:1.8em;
                   background-color:#282e34;
                }
 

                  .pimg2, .pimg3{
                      
                    
                  position:relative;
                  opacity:0.70;
                  background-position:center;
                  background-size:cover;
                  background-repeat:no-repeat;

                  /*
                    fixed = parallax
                    scroll = normal
                  */
                  background-attachment:fixed;
                }
                
                


                .pimg2{
                     top: 0px ;
                  background-image:url('IMAGE/b_contactus.jpg');
                  height:750px;
                   
                }

                .pimg3{
                  background-image:url('IMAGE/background_img1.jpg');
                  height:500px;
                }
    .pimg2:hover, .pimg3:hover{
                  opacity:1;
                 
                }
        

                .section{
                
                  text-align:center;
                  padding:100px 150px;
                }

               
                .section-dark{
                  
                  background-color:#282e34;
                  color:#ddd;
                    font-family: 'Cinzel', serif;
                }
             .section-dark1{
                  padding:100px 20px ;
                  background-color:#282e34;
                  color:#ddd;
                }

                .ptext{
                  position:absolute;
                  top:50%;
                  width:100%;
                  text-align:center;
                  color:#000;
                  font-size:32px;
                  letter-spacing:14px;
                  text-transform:uppercase;
                    font-family: 'Cinzel', serif;
                }

                h3{
                    font-size:32px;
                     font-family: 'Pacifico', cursive;
                    text-align: center ;
                
                }
                .ptext .border{
                  background-color:#111;
                  color:#fff;
                  padding:20px;
                }

                .ptext .border.trans{
                     background: transparent ; 
                     
                }

               ::placeholder{
   margin-left: 0 ;
                   padding-left: 0px ;
                   
                }
                        .h_textarea input[type="text"]

                    {
                        border:none ;
                        border-bottom:1px solid white ;
                        background:transparent ;
                        height:40px ;
                        color:white;
                        font-size:16px;
                    }
                     .h_textarea
                    {
                        border-radius: 5px ;
                        color: black ;
                        height: 40px ;
                        width: 460px ;
                        padding: 5px 5px ;
                        border: none ;
                        margin: 0 ;
                    }

                    .r_textarea{

                        padding: 20px 20px ;
                        border-radius: 5px ;
                        color: black ;
                    }

                        #submit_button{
                            padding: 17px 25px ;
                             background-color:#1abc9c; 
                            border-radius: 5px ;
                            border: none ;

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
      <br><br>
       <?php include('errors.php') ; ?>        
     <div class="pimg2">
    <div class="ptext">
      <span class="border trans">
        Contact Us
      </span>
    </div>
  </div>

    
    
  <section class="section section-dark">
    <h2>Contact Us</h2>
   
             <p class="para">Contact us and we will get back to you within 24 hours.</p>
                      <p><span class="glyphicon glyphicon-map-marker"></span> Bangalore, India</p>
                      <p><span class="glyphicon glyphicon-phone"></span> +00 88888888</p>
                      <p><span class="glyphicon glyphicon-envelope"></span> Bangalore_onlinePortal@yahoo.com</p>
                  
    
  </section>

  <div class="pimg3">
    <div class="ptext">
      <span class="border trans">
        Write YOur Message Here
      </span>
    </div>
  </div>

    
  <section class="section section-dark1">
        
      <h3 >Drop Your Message Here</h3>
     <br><br><br>
      <div class="mapouter">
          
          <div class="gmap_canvas">
              
              <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=cmrit%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
              
              <a href="https://www.embedgooglemap.net"></a>
          </div>
      </div>
            <div class="right_block">
      
            
         <form action="Message.php" method="post"  >
            
           
            
             <input type="text" placeholder="Name " class="h_textarea" name="name" required> <br><br>
             <input type="text" placeholder="Email Id " class="h_textarea" name="EmailId" required> <br><br>
             <input type="number" placeholder="phone no " class="h_textarea" name="phno" required> <br><br>
             
             <textarea rows="5" cols="50" placeholder="Write your Message Here " class="r_textarea"  name="message" required></textarea><br><br>
   
            <input id="submit_button" type="submit" name="submit"><br>
    </form>
                           
      </div>         
          
          <style>
              
              .mapouter
              { text-align:right;
                height:500px;
                width:600px;
                   float: left;
                  margin-bottom: 80px ;
                  padding:0px 0px ;
                  margin-left: 0 ;
                
                  
              }
              .gmap_canvas 
              { overflow:hidden;
                background:none!important;
                height:500px;
                width:600px;
                  padding:0 ;
              }
             
        .right_block{
            color: white;
            width: 5% ;
            float: left;
        
            margin-left: 10% ;
          
            
        
        }
        
          
          
          </style>
    
    
 
                    
</section>                         
           
    


</body>
</html>
