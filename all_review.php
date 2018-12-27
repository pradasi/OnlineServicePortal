<?php 
include('Login.php') ;
include('connection.php');
global $r ;
global $ID;
global $id;
if(!(empty($_SESSION['email']))){

$email=$_SESSION['email'] ;

}



  	  
?>
<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="font/stylesheet.css" rel="stylesheet">
            <title>All Review</title>
             <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 
<style>
    
     body {
     
         background: url(IMAGE/bg29.jpg);
         background-size: 100% ;
          background-attachment:fixed;

        
       
    }
    
                                      .navbar {
                                        
                                        background-color:black ;
                                        z-index: 9999;
                                        border: 0;
                                        font-size: 15px !important;
                                        line-height: 1.42857143 !important;
                                        letter-spacing: 4px;
                                        border-radius: 0;
                                         margin-bottom: 5000px !important; 
                                         
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
  
    
    #mysidenav a {
        
         position: fixed;
         z-index: 1;
        left:-90px ;
        transition: 0.4s ;
        margin-top: 200px ;
        padding: 17px ;
        width:130px ;
        font-size: 20px ;
        color: white;
        border-radius: 0 5px 5px 0 ;
        text-decoration: none ;
    }
    #mysidenav a:hover{
        
        left: 0 ;
    }
    #Doctor{
        top: 20px ;
        background-color:#c400ff;
    }
     #Teacher{
        top: 80px ;
        background-color:#8000ff;
    }
      #Plumber{
        top: 140px ;
        background-color: #1400ff;
    }
    #ISP{
        top: 200px ;
        background-color:#1abc9c;;
    }
    #Beauty{
        top: 262px ;
        background-color: aqua;
    }
    .invisible{
         background: rgba(0,0,0,0.1);
        height: 250px ;
        
    }
  
    .commentBox{
            width: 900px;
            border: 3px solid white ;
            border-radius: 10px ;
            background: rgba(0,0,0,0.98);
          padding-bottom: 30px ;
        margin-left: 200px ;
    
            }
       
        .leftPanelImg img{
            border-radius: 100% ;
           margin-left: 20px ;
            
        }
    .leftPanelImg{
        float: left;
        
        
    }
        
        .rightPanel, .rightPanel p,.rightPanel hr{
            color: white;
            width: 75% ;
            float: left;
        
            margin-left: 10% ;
          
            
        
        }
        .clear
        {
            clear: both;
        }
    
    
    
    h3
    {
        text-align: center ;
        font-family: 'Pacifico', cursive;
        color: white;
       
        
        
    }
        
    }
    h4{
        
         font-size: 15px ;
        color: white;
        margin-left: 70px ;
    }
   
  
      
    .text2{
        font-size: 15px ;
    }
    #image2{
        margin-top: 10px ;
        margin-bottom: 20px ;
        margin-left: 40px ;
        width: 500px ;
        border-radius: 10px ;
         border: 1px solid white ;
    }
   
    
    .dropdown-menu{
   
        background-color: black ;
        color: #1abc9c ;
     
    }
      .head{
        font-weight: bold;
        font-family: 'Charmonman', cursive;
       font-size:30px ;
    }
    
      .h_textarea
    {
        border-radius: 5px ;
        color: black ;
         padding: 5px 5px ;
        font-weight: bold ;
        font-size:15px ;
    }
    .h_textarea1 {
        font-family:'Charmonman', cursive;
        font-weight:bolder ;
         border-radius: 5px ;
        color: black ;
         padding: 2px 5px ;
       width: 350px ;
        font-size:25px ;
    }
    
    .r_textarea{
        
        padding: 5px 5px ;
        border-radius: 5px ;
        color: black ;
        font-size:15px ;
    }
    #myheading{
        font-size: 25px ;
        text-decoration: underline ;
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
                                          <li><a href="all_review.php">All Review </a></li>
                                         
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

 
    
 <div id="mysidenav" class="mynav">
	<form action="all_review.php?id=0" method="GET">
    <a href="all_review.php?id=1" id="Doctor">Doctor  </a>
    <a href="all_review.php?id=2" id="Teacher">Teacher  </a> 
     <a href="all_review.php?id=3" id="Plumber">Plumber  </a>
     <a href="all_review.php?id=4" id="ISP">ISP  </a>
     <a href="all_review.php?id=5" id="Beauty">Beauticians </a>
	</form>
    </div>
<div class="invisible"></div>
 
  
  <?php 
    
	$id = isset($_GET['id']);
	if($id == 1){
		$query="SELECT * FROM review as r,details as d,customer_details c,vendor_details v where r.BID=d.BID and d.CID=c.CID and r.VID = v.VID and v.Category = 'Doctor' ";
		
	} else if($id == 2){
		$query="SELECT * FROM review as r,details as d,customer_details c,vendor_details v where r.BID=d.BID and d.CID=c.CID and r.VID = v.VID and v.Category = 'Teacher' ";
		
	} else if($id == 3){
		$query="SELECT * FROM review as r,details as d,customer_details c,vendor_details v where r.BID=d.BID and d.CID=c.CID and r.VID = v.VID and v.Category = 'Plumber' ";
		
	} else if($id == 4){
		$query="SELECT * FROM review as r,details as d,customer_details c,vendor_details v where r.BID=d.BID and d.CID=c.CID and r.VID = v.VID and v.Category = 'ISP' ";
		
	}  else if($id == 5){
		$query="SELECT * FROM review as r,details as d,customer_details c,vendor_details v where r.BID=d.BID and d.CID=c.CID and r.VID = v.VID and v.Category = 'Beautician' ";
		
	} else{
		$query="SELECT * FROM review as r,details as d,customer_details c where r.BID=d.BID and d.CID=c.CID";
		
	}
	
     //$query="SELECT * FROM review as r,details as d,customer_details c where r.BID=d.BID and d.CID=c.CID";
     $result2 = mysqli_query($connection, $query); 
    
    if(!$result2){
        echo "error";
    }
   

?>  
    
    
    
    
    
    
<?php while ($obj = ( mysqli_fetch_assoc($result2)) ){ ?>   
  
<div class="commentBox">
<h3 id="myheading">Reviews and Comment </h3><br><br>
      
<div class="mycomment">
       
        <div class="leftPanelImg"> <?php  echo "<img src='IMAGE/".$obj['Cimage']."'  width='100px' height='100px' >"; ?></div>
        <div class="rightPanel">
         
        <h4 class="head"><?= $obj['CName']?></h4>

<h4 ><?php $temp_stars = $obj['Star'];  for($i=1; $i<=5; $i++) {
                                                if ($temp_stars >= 1) { 
                                                echo '<img src="img/Star_full.png" width="20"/>';
                                                $temp_stars--; }
                                                else {
                                                   if ($temp_stars >= 0.5) 
                                                   { 
                                                     echo '<img src="img/Star_half_full.png" width="20"/>';
                                                     $temp_stars -= 0.5;
                                                   }
                                                   else { 
                                                      echo '<img src="img/Star_empty.png" width="20"/>';
                                                   }

                                                  } }  ?> 
            </h4>
          
        
 <br>       
<input type="text"  row="1" cols="175" readonly="readonly"  class="h_textarea1" name="hreview" value="vendor name : <?=$obj['VName']?>"><br><br>
 <textarea row="2" cols="73"  class="h_textarea" readonly="readonly" name="hreview" ><?=$obj['Heading']?></textarea><br><br>   
<textarea rows="10" cols="73"  class="r_textarea"  readonly="readonly" name="review" ><?=$obj['RReview']?></textarea><br><br>

          

             
             <?php if($obj['RImage']){
    
    echo "<img src='IMAGE/".$obj['RImage']."'  width='750px' height='250px' id='image2'>"; 
}
                                                      else { }
            ?>
            

            
            </div>
         <div class="clear"></div>
    </div>
    </div>
<?php }?>
     
  
    
</body>
</html>
