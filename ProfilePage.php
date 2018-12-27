<?php 
include('Login.php');
include('connection.php');

global $ID;

$ID = $_GET['id'];
$query="SELECT * FROM vendor_details where vendor_details.VID=$ID";
$result = mysqli_query($connection, $query); 
?>

















<!DOCTYPE html>
<html lang="">
<head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Charmonman" rel="stylesheet">
            <title>Profile Page</title>
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
                                            background-image: url(IMAGE/bac81.jpg) ;
                                       background-attachment: fixed ;
                                       background-size: cover ;
                                             
                                     }
    
    
    
                                    .block {
                                              background: rgba(0,0,0,0.95);
                                              margin-top: 200px ;
                                              margin-left: 200px ;
                                              border:3px solid white ;
                                              padding-top: 20px ;
                                              padding-right: 40px ;
                                              padding-left: 40px ;
                                              padding-bottom: 20px;
                                             margin-bottom: 100px;
                                             height: 800px ;
                                             width: 1000px ;
                                        border-radius: 15px ;
                                           
                                           
                                    }
                                 #review 
                                    {
                                        
                                            background: rgba(0,0,0,0.9);
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
        background-color: darkgoldenrod ;
        color: white;
    }
    .mybox {
        height: 800px ;
    }
.commentBox{
            width: 900px;
            border: 3px solid white ;
            border-radius: 10px ;
            background: rgba(0,0,0,0.98);
          padding-bottom: 30px ;
    
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
    .text2{
        color: white;
       
    }
    
      .alert {
    padding: 10px;
        width: 99% ;
    background-color: #f44336;
    color: white;
        margin: 0 ;
        margin-top: 0 ;
    margin: 0px 0px 0px 0px ;
}
    
 .alert2 {
    padding: 10px;
        width: 99% ;
    background-color: #4CAF50;
    color: white;
        margin: 0 ;
        margin-top: 0 ;
    margin: 0px 0px 0px 0px ;
}
    .error {
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
  color: #3c763d; 
  background: #dff0d8; 
  border: 1px solid #3c763d;
  margin-bottom: 20px;
}
    
    #heading2{
                        font-family: 'Pacifico', cursive;
                         font-size: 35px ;
                        
                        padding-bottom: 32px ;
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
    
    
<!--
         <div class="image">
        <img src="IMAGE/doctor1.jpg" width="300px" height="300px"></div>
-->
            
                
                <?php
                if($result){
                     while($row= (mysqli_fetch_assoc($result))) {
                   ?>
                      <div class="block">
                        <h3 id="heading2">Profile Page</h3>  
                      <div id='image'>
                     <?php    echo "<img src='IMAGE/".$row['image']."'  width='300px' height='300px' >"; ?>
                       </div>
                          
                          <div class="desc">
                       <?php  
                            echo "<br>" ;
                            echo " <p>Name:</p>" ;
                            echo "<p>".$row['VName']."</p>" ;
                            echo "<br><br>";
                            echo " <p>Category :</p>" ;
                            echo "<p>".$row['Category']."</p>" ;
                            echo "<br><br>" ;
                            echo "<p>Type: </p>" ;
                            echo "<p>".$row['Type']."</p>";
                            echo "<br><br>" ;
                            echo "<p>Phone number: </p>" ;
                            echo "<p>".$row['Phone']."</p>";
                            echo "<br><br>" ;

                            echo "<p>Email ID: </p>" ;
                            echo "<p>".$row['EmailID']."</p>";
                            echo "<br><br>" ;
                            echo "<p>Address: </p>" ;
                            echo "<p>".$row['Address']."</p>";
                            echo "<br><br>" ;

                            echo "<p>Rating: </p>" ;
                            //secho "<p>".$row['Stars']."</p>"."<br>";
                         $temp_stars =$row['Stars'] ;//finding the average rating 
                         
                         
                         
                         for($i=1; $i<=5; $i++) { // simple for loop

                        if ($temp_stars >= 1) { 
                                    // it going to check if your average rating is greater than equal to 1 or not if it is then it give you full star.
                                  echo '<img src="img/Star_full.png" width="20"/>';
                                  $temp_stars--; //after getting full star it decremnt the value and contiune the loop.
                        }
                        else {
                                  if ($temp_stars >= 0.5) 
                                          { // if user select 3.5 rating, so in above condition at last it remain 0.5 rating will get left. then it came to this condition and give you the half star.
                                           echo '<img src="img/Star_half_full.png" width="20"/>';
                                            $temp_stars -= 0.5;
                                          }
                                  else { // at last but not the least when value gets zero then it return empty star.
                                    echo '<img src="img/Star_empty.png" width="20"/>';
                                  }

                            }
                         
                         }
                        
                         
                            echo "<br><br>" ; 
                            echo "<div class='desc1'>" ;
                            echo "<p>Description: </p>" ;
                            echo "<p>".$row['Description']."</p>";
                            echo "<br><br>" ;                        
                    
                         
                         
                         
             
           
                    
                     }
                   
                }
                   ?>
                              
                              
            <form action="Booking.php?id=<?php echo $ID; ?>" method="get">        
                     <select name="time" id="select_catalog" >  
                              <option value="1" >Morning slot</option>  
                              <option value="2">Afternoon slot </option>
                              <option value="3">Evenning slot </option>
                               </select> 
                <br>
                <br>
            <input type="text" name="date" placeholder="yyyy/mm/dd">
            
                <br>
                <br>
                
            <button type="submit" formmethod="post" class="buttonize" name="book" value="book">BOOK NOW</button>
                
             </form>
                              
            </div>
            
    
    </div>
<div class="mybox"></div>
<?php 
    
     $query="SELECT * FROM review as r,details as d,customer_details c where r.BID=d.BID and d.VID=$ID and d.CID=c.CID";
     $result2 = mysqli_query($connection, $query); 
    
    if(!$result2){
        echo "error";
    }

?>
 
    
    
 <?php while ($obj = ( mysqli_fetch_assoc($result2)) ){ ?>   
  
<div class="commentBox">
<h3 id="myheading">Reviews and Comment </h3><br><br>
      
<div class="mycomment">
       
        <div class="leftPanelImg"> <?php  echo "<img src='IMAGE/".$obj['image']."'  width='100px' height='100px' >"; ?></div>
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
<textarea row="2" cols="73"  class="h_textarea" name="hreview" value="<?=$obj['Heading']?>" ><?=$obj['Heading']?></textarea><br><br>
<textarea rows="10" cols="73"  class="r_textarea" name="review" value="<?=$obj['RReview']?>" ><?=$obj['RReview']?></textarea><br><br>

          

             
              <?php if($obj['RImage']){
    
    echo "<img src='IMAGE/".$obj['RImage']."'  width='550px' height='250px' id='image2'>"; 
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
