<?php 
include('Login.php');
include('connection.php'); 
 $email=$_SESSION['email'] ;
$query = "SELECT * FROM customer_details WHERE EmailID='$email'" ;
$result = mysqli_query($connection,$query); 
//$row = mysqli_fetch_assoc($result);
//$cid = $row['CID'];
?>
<!DOCTYPE html>
<html lang="">
<head>
      <title>Profile Page</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="font/stylesheet.css" rel="stylesheet">
      <link rel="stylesheet" href="updating_profile_styles.css">
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
    
        
        img{

            border-radius: 100% ;
            width: 200px ;
            height: 200px;
            border: 1px solid #ddd; /* Gray border */
            /* Rounded border */
            padding: 5px; 
        }
        
        #imgbutton{
           background-color: #1abc9c;/* Green */
    border: none;
    color: white;
    padding: 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 14px 12px;
    float: left;
         margin-left: 60px ;     
                
        border-radius: 5px ;
        }
        
        #imgbutton:hover{
    color: #09715c;/* Green */
    
           
            
        }
        #mybutton {
            background-color:#0b9f81;  
            
        }
.fileUpload {
          background-color: #0b9f81 ;
    position: relative;
     padding: 20px 50px ;
    margin: 10px;
    border: none ;
}

.fileUpload:hover {
          background-color: #0b7963 ;
    position: relative;
     padding: 20px 50px ;
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
        #imgb{
            background-color: #1abc9c ;
            padding: 15px 10px ;
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
                                </nav><br><br><br><br>
    
    

<body>
    
    
    
    
    
    
    
<div class="myblock">   
<div class="container bootstrap snippet">
    
    <div class="row">
<div class="col-sm-3">
<div class="text-center">

<?php
    $query = "SELECT * FROM customer_details WHERE EmailID='$email'" ;
    $result2 = mysqli_query($connection,$query) ; 
    if(!$result2)
    {
        echo("QUERY FAILED") ;
    }
    while($row2 = (mysqli_fetch_assoc($result2))) { 
            echo "<img src='IMAGE/".$row2['Cimage']."' >";   ?>
    <h6>Upload a different photo </h6>
    <form action="updating_PP_customer_PHP.php" method="post" enctype="multipart/form-data" >
        
        <div class="fileUpload btn btn-primary">
            <span>Choose File</span>
            <input type="file" class="upload"  name="image" id="image">
           </div>
   
         <button type="submit" name="uploadIMG" id ="imgbutton"> Upload Images</button><br><br><br><br><br><br>
         <a id="imgb" href="demo.php?cid=<?php echo $row2['CID'];?>&vid=0">Click to take image </a>
    </form>
      <?php } ?> 

        
</div><br><br><br><br>
</div>
    	<div class="col-sm-9">
            <ul  class="nav nav-tabs">
                <li id="mynav" class="active"><a data-toggle="tab" href="#home">Home</a></li>
                <li id="mynav"><a data-toggle="tab" href="#CHANGE_INFO">Change Details</a></li>
                <li id="mynav"><a data-toggle="tab" href="#change_password">Change Password</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
             <br><br>
                <?php while($obj = (mysqli_fetch_assoc($result))) { ?>
    
                
                  <form class="form" action="##" method="post" >
                      <div class="col-xs-6">
                      <div class="form-group">
                          
                         
                              <h4>Name</h4>
                              <input type="text" class="form-control" name="vendorname" value="<?=$obj['CName']?>" readonly="readonly">
                          
                      </div>
                     
                    
          
                      <div class="form-group">
                          
                             <h4>Phone no</h4>
                              <input type="text" class="form-control" name="mobile" value="<?=$obj['Phone']?>"  readonly="readonly">
                          
                      </div>
                      <div class="form-group">
                          
                          
                              <h4>Email</h4>
                            <input type="email" class="form-control" name="email" value="<?=$obj['EmailID']?>"  readonly="readonly">
                          
                      </div>
                      <div class="form-group">
                          
                         
                              <h4>Address</h4>
                              <input type="text" class="form-control" name="address" value="<?=$obj['Address']?>"  placeholder="Address" readonly="readonly">
                          
                      </div>
                      
                      </div> 
                     
                      <?php } ?>
              	</form>
              
              
              
             </div><!--/tab-pane-->
             <div class="tab-pane" id="CHANGE_INFO">
                  <form class="form" action="updating_PP_customer_PHP.php" method="post" >
                   <div class="col-xs-6">   
                         <div class="form-group">
                          
                              <h4>Name</h4>
                              <input type="text" class="form-control" name="name" placeholder="enter your name" >
                        
                      </div>
                    
          
                     
                      <div class="form-group">
                          
                             <h4>Phone no</h4>
                              <input type="text" class="form-control" name="phoneno" placeholder="enter mobile number" >
                          
                      </div>
                     
                      <div class="form-group">
                          
                          
                            <h4>Address</h4>
                              <input type="text" class="form-control" name="address" placeholder="Address" >
                          
                      </div>
                    
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button id ="mybutton" class="btn btn-lg btn-success pull-right" type="submit" name="submit"><i ></i> Save</button>
                               	
                            </div>
                      </div>
                      </div>
                      
              	</form>
               
             </div><!--/tab-pane-->
             <div class="tab-pane" id="change_password" >
                  
              	<div class="form-group">
                    <form class="form" action="updating_PP_customer_PHP.php" method="post" >       
                          <div class="col-xs-6">
                              <h4>Password</h4>
                              <input type="password" class="form-control" name="oldpassword" placeholder="password" placeholder="Enter old password" >
                              <h4>New Password</h4>
                              <input type="password" class="form-control" name="newpass1" placeholder="new password" placeholder="Enter old password" >
                              <h4>Re-enter Password</h4>
                              <input type="password" class="form-control" name="newpass2" placeholder="Re-password" placeholder="Re-enter the password" >
                              <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success pull-right"  id ="mybutton" type="submit" name="submit2"><i></i> Save</button>
                               	
                            </div>
                      </div>
                              
                          </div>
                    
                    
                    
                    
                    </form>
                      </div>
              </div>
               
              </div><!--/tab-pane-->
          </div><!--/tab-content-->

        </div><!--/col-9-->
   
    </div>  
    </div> 
</body>   
</html>

 
                                                      