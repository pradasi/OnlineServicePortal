
<?php include('Login.php') ; ?>   
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Page</title>
</head>

<body>
    
     <?php include('errors.php') ; ?>  
        <div class="LoginBox">
          <h1>Log In Here</h1>
            <form action="LoginPage.php" method="post">
             
            <p>Email</p>
            <input type="text" name="email" placeholder="Enter Email ID">
            <p>Password</p>
            <input type="Password" name="password" placeholder="Password">
            <input type="submit" name="login">
           
            <p> New User?</p>
              <a href="RegisterVendor.php">Vendor Register!</a>
               <a href="RegisterCustomer.php">User Register!</a>
                
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
    background: url(img/1.jpg);
    background-size: cover;
}

.LoginBox
{
    position:absolute ;
    top:50% ;
    left: 50% ;
    transform: translate(-50%,-50%) ;
    width:350px ;
    height: 420px ;
    padding:80px 40px ;
    box-sizing:border-box ;
    background: rgba(0,0,0,0.5);
    border-radius:20px ;
}
h1
{
    margin:0 ;
    padding:0 0 20px 0 ;
    color:aqua;
    text-align: center ;  
}
.LoginBox p
{
    margin:0px ;
    padding:0px ;
    font-weight:bold ;
    color:white;
    
}
.LoginBox input 
{
    width:100% ;
    margin-bottom: 20px ;
}
.LoginBox input[type="text"],
.LoginBox input[type="Password"]
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
.LoginBox input[type="submit"]
{
    border:none ;
    height:40px;
    color:white;
    font-size: 16px ;
    background-color: aqua ;
    cursor:pointer;
    border-radius:20px ;
}
.LoginBox input[type="submit"]:hover
{
   background-color:dodgerblue; 
    
}
.LoginBox a
{
    color:#fff ;
    font-size:16px ;
    font-weight:bold ;
    
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

</style>
