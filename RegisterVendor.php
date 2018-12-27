<?php
include('Vendor-creation.php') ;

?>



<!DOCTYPE html>
<html>
<head>
  <title>Vendor Registration</title>
  
     <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <style>
        
 * {
  margin: 0px;
  padding: 0px;
}
body {
  font-size: 120%;
  background-image: url(IMAGE/bac12.jpg);
   background-size: 100%;
    background-attachment: fixed ;
  
}

.header {
  width: 30%;
  margin: 50px auto 0px;
  color: 	#F0A92A;
  background:rgba(0,0,0,0.9);
  text-align: center;
  border-radius: 20px 20px 0px 0px;
  padding: 20px;

}
form, .content {
  width: 30%;
  margin: 0px auto;
  padding: 20px;
  background: rgba(0,0,0,0.9);
 border-radius: 0px 0px 20px 20px;
  margin-bottom: 30px;
    

}
.input-group {
  margin: 10px 0px 10px 0px;
    color: white;
}
.input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  color: white;
}
.input-group input {
  height: 30px;
  width: 93%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  background: rgba(0,0,0,0.5);
  border: 1px solid gray;
  color: white ;
}
.btn {
  padding: 15px;
  font-size: 15px;
  color: white;
  background:#F0A92A;
  border: none;
  border-radius: 5px;
}

        
        .btn:hover{
            
            background:#e59300;
            
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

form, .p
{
    
    font-weight:bold ;
    color:white;
    
}
 .input-group input[type="text"],
 .input-group input[type="Password"],
.input-group input[type="email"]

{
    border:none ;
    border-bottom:1px solid white ;
    background:transparent ;
    height:40px ;
    color:white;
    font-size:16px;
    
}

        a{
            color: white ;
            
        }
        a:hover{
            color:#e59300 ;
        }
        
        
        h2{
             margin-bottom: 0px ;
             margin-top: 0px ;
             font-size: 35px ;
             font-weight: 100;
             font-family: 'Pacifico', cursive;
             text-align: center ; 
         }
        #cat
         {
                border:1px solid white ;
               
                 font-size:16px;
                padding-right: 210px ;
                padding-bottom: 20px ;
             padding-top: 15px ;
                
             background:rgba(0,0,0,0.5);
              color: white ;
         
        }
      
      
        
        ::placeholder{
    color:rgba(255,255,255,0.5);
            
}
    </style>
</head>
    
<body>
     <?php  include('errors.php') ; ?> 
  <div class="header">
  	<h2>Register Here</h2>
  </div>
	
	
  <form method="post" action="RegisterVendor.php">
   
  	<div class="input-group">
  	  <label>Name</label>
  	  <input type="text" name="username" placeholder="Enter Name" required>
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" placeholder="Enter Email" required>
  	</div>
      
      
      <div class="input-group">
  	 <label>Category</label>
  	 <select id ="cat" name="Category">
     <option value="">Select your Category</option>    
    <option  value="Doctor">Doctor</option>
    <option  value="Teacher">Teacher</option>
    <option  value="Internet Service Provider">Internet Service Provider</option>
    <option  value="Beautician">Beautician</option>
    <option  value="Plumber">Plumber</option>
    </select>
          
  	</div>
      
      
      
      <div class="input-group">
  	  <label>Specialization</label>
  	  <input type="text" name="Type" placeholder="Enter Specialization, ex: Cardiologist or Maths" >
  	</div>
      
      
      
  	
  	<div class="input-group">
  	  <label>Phone</label>
  	  <input type="text" name="phone" placeholder="Enter Phone Number" required>
  	</div>
  	
  	
  	  
  	
  	
  	<div class="input-group">
  	  <label>Address</label>
  	  <input type="text" name="state" placeholder="Enter state"  required>
  	</div>

  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password" required>
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password2" required>
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="register">Register</button>
  	</div>
  	<p> Already a member? 
    <a href="LoginPage.php"><label>Log in</label></a>
  	</p>
  </form>
  
</body>
</html>