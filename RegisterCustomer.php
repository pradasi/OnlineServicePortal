<?php  include('Customer-creation.php') ;?>

<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <title>Customer Registration</title>
</head>

<body>
     <?php include('errors.php') ;?>
        <div class="RegisterBox">
          <h1>Register Here</h1>
            <form action="RegisterCustomer.php"  method="post">
               
            <p>Name</p>
            <input type="text" placeholder="Enter Your Name " name="fname" required>   
            <p>Email</p>
            <input type="email" placeholder="Enter Email ID" name="email" required>
            
            
             <p>Address</p>
            <input type="text" placeholder="Enter your Address " name="address" required>  
                <p>Phone Number</p>
            <input type="number" placeholder="Enter your Phone number" name="phno" required > 
                
            <p>Password</p>
            <input type="Password" placeholder="Enter Password" name="password" required>
            <p>Confirm Password</p>
            <input type="Password" name="password2" placeholder="Re-Enter Password" required>
                
            <input type="submit" name="submit" value="Register">
            <p> Already a member? 
    <a href="LoginPage.php"><label>Log in</label></a>
  	</p>
                
            </form>
       </div>
    
</body>
</html>

<style>
    * {
  margin: 0px;
  padding: 0px;
}
body
{ 
    background: url(img/r2bg.jpg);
    background-size: cover;
}

.RegisterBox
{
    margin-top: 80px ;
    margin-bottom: 100px ;
    position:absolute ;
    top:50% ;
    left: 50% ;
    transform: translate(-50%,-50%) ;
    width:480px ;
    height: 750px ;
    padding:80px 40px ;
    box-sizing:border-box ;
    background: rgba(0,0,0,0.5);
    border-radius:30px ;
}
h1
{
    margin-bottom: 0px ;
   margin-top: 0px ;
    color:orange;
    font-weight: 100;
    font-family: 'Pacifico', cursive;
    text-align: center ;  
}
.RegisterBox p
{
    margin:0px ;
    padding:0px ;
    font-weight:bold ;
    color:white;
    
}
.RegisterBox input 
{
    width:100% ;
    margin-bottom: 25px ;
}
.RegisterBox input[type="email"],
.RegisterBox input[type="Password"],
 .RegisterBox input[type="number"],
.RegisterBox input[type="text"]
    
{
    border:none ;
    border-bottom:1px solid white ;
    background:transparent ;
    height:40px ;
    color:white;
    font-size:16px;
}
::placeholder{
    color:rgba(255,255,255,0.5);
}
.RegisterBox input[type="submit"]
{
    margin-top: 10px ;
    margin-bottom: 10px ;
    border:none ;
    height:40px;
    color:white;
    font-size: 20px ;
    background-color: orange;
    cursor:pointer;
    border-radius:20px ;
    padding-bottom: 20px ;
}
.RegisterBox input[type="submit"]:hover
{
   background-color: darkorange ;
   
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
      a{
            color: white ;
            
        }
    a:hover{
        color:darkorange ; 
    }

</style>
