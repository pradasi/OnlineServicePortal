<?php
include('login.php');
global $cid;
global $vid;

$cid = $_GET['cid'];
$vid= $_GET['vid'];



?>
<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link href="font/stylesheet.css" rel="stylesheet">
            <title>Image Upload</title>
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
                                  
    
    
                                    .block {
                                              background: rgba(0,0,0,0.5);
                                              margin-top: 200px ;
                                              margin-left: 200px ;
                                
                                              padding-top: 20px ;
                                              padding-right: 40px ;
                                              padding-left: 40px ;
                                              padding-bottom: 20px;
                                             margin-bottom: 100px;
                                             height: 750px ;
                                             width: 1000px ;
                                        border-radius: 15px ;
                                           
                                           
                                    }
                                 #review 
                                    {
                                        
                                            background: rgba(0,0,0,0.5);
                                              margin:0 200px ;
                                              padding: 0 40px ;
                                              margin-top: 0;
                                              
                                             background-color: purple;
                                             height: 200px ;
                                             width: 1000px ;
        
                                     }
    
                                 
    
    
    #image {
        padding-left: 250px ;
        padding-top: 30px ;
        margin-right: 10px ;
        display: inline-block;
        position: absolute;
        left: 0;
        
        }       
    .desc {
            display: inline-block;
             position: absolute;
             border: none ;
            right: 0;
            width: 55%;
           height: 100% ;
        padding-left: 50px ;
        padding-top: 35px ;
    }    

    p {
        color: white ;
        display: inline ;
    }  
    
    
    .buttonize
    { text-decoration: none;
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
   .space
    {
        display: inline ;
    }
    
    .desc1
    {
        display: inline-block;
             position: absolute;
             border: none ;
           
            width: 70%;
           height: 100% ;
        
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
        background-color: brown;
        color: white;
    }

    h3
    {
        text-align: center ;
        font-family: 'Pacifico', cursive;
        color: white;
       
        
        
    }
    .text2{
        color: white;
       
    }
    
 
                             
    .dropdown-menu{
   
        background-color: black ;
        color: #1abc9c ;
     
    }
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.9);
  max-width: 550px;
  margin: auto;
  text-align: center;
  font-family: arial;
        background-color: white ;
        border-radius: 10px ;
}



.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
    #heading2{
          font-family: 'Charmonman', cursive;
         font-weight: bolder ;
       color: white ;
    }
    #canvas{
        margin-left: 0px ;
       
    }
    #video{
        border-radius: 10px ;
    }
    body{
        
        background-image: url(IMAGE/img_upload2929.png) ;
         background-size: 100% ;
        background-attachment: fixed ; 
        
       
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
    
    
    
    <br><br><br>
     
     <h2 id="heading2" style="text-align:center">Upload Your Image here </h2>
<br>
        <div class="card">
            <br><br>
            <video id="video" width="400" height="300" autoplay></video>
            <br><br><br>
            <button id="snap">Snap Photo</button>
            <br><br><br><br>
            <canvas id="canvas" width="400" height="300"  ></canvas> 
         
        <form action="testSave.php?cid=<?php echo $cid;?>&vid=<?php echo $vid;?>" method="get">
            <input type="hidden" name="im" id="im" value="">
            <br><br><br><br>
            <p><button type="submit" name="submit" formmethod="post">Upload</button></p>
        </form> 
        </div>
          <br><br><br>
          
                               
</body>
</html>



<script>
    
   
    
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        //video.src = window.URL.createObjectURL(stream);
        video.srcObject = stream;
        video.play();
    });
}

// Elements for taking the snapshot
var canvas = document.getElementById('canvas');
var context = canvas.getContext('2d');
var video = document.getElementById('video');

// Trigger photo take
document.getElementById("snap").addEventListener("click",function() {
 context.drawImage(video, 0, 0, 400, 300);
  
    
var img = canvas.toDataURL("image/jpeg");
document.getElementById("im").value=img;
   
}); 
      
    
</script>


