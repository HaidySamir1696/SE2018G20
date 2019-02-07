
<?php

session_start();
if(isset($_SESSION['username']))
include_once ('Database.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $username=$_POST['username1'];
    $password=$_POST['password3'];
$stmt=$dsn - > prepare("SELECT name,password FROM customer WHERE   name=? AND password=? ");
$stmt - > excute(array($username,$password));
$count =$stmt - > rowcount();
if ($count > 0)
{
$_SESSION['username1']=$username;
header('location:restaurant.php');
exit();
}
}  
?>


<title>startups on cloud</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="jquery-3.3.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body{background-color: darkgrey}    
label{margin: 2%} 

.login-input
{
    
    width: 400px;
    height: 45px; 
    border:1px solid #999;
    padding:5px;
    border-radius: 10px;
           
}    

#submit1
{
    width: 120px;
    height: 45px;
    font-size: 20px;
    font-family: 'Acme';
    background-color: rgba(8,91,135,1);
    color: white;
    border: 0;
    border-radius: 10px;
}
#submit1:active
{
   background-color: rgba(255,255,255,0.2); 
}    
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large">
  
  <a href="about.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="About"><i class="fa fa-user"></i> About</a>
     
 <a href="contactus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="contact us"><i class="fa fa-envelope"></i> Contact us</a>
     

 

     
<img src="img/logo.png" class="w3-circle" style="height:40px;width:40px ; float:right; margin-right:15%;" alt="logo">
 

     
</div>
</div> 


   <div class="login" style="margin-left:20px; text-align: center" >
        <form method="post" action=<?php echo $_SERVER['PHP_SELF'] ?>>
           <br><br><br><br><br><br><br><br><br>
            <label> Name :</label>
            <input class="login-input" type="text" placeholder="Name" id="username1" name="username1"><br><br><br>
            
            <label>Password :</label>
            <input class="login-input" type="password" placeholder="password" id="password1" name="password3"><br><br>
            <input type="submit" name="submit1"value="Login" id="submit1" style="width:25%">
            <br><br>
            <a href="SignUp.php">create a new account ?</a>
            <br><br>
        </form>  
    </div>  
    
    
</body>
