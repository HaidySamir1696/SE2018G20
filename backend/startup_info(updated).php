<?php
include_once(/*./models/*/'customers.php');
include_once(/*./models/*/'owners.php');
include_once (/*./controllers/*/'signupFormControl.php');
include_once('projects.php');
include_once('createProject.php');

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}


?>


<!DOCTYPE html>
<html>
<title>startups on cloud</title>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="home_style.css" > 
<script src="jquery-3.3.1.min.js"></script>
<script src="home.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
.main
    {
        position:absolute;
        top:18%;
        left:35%;
        text-align: center;
    }
    
    
body{
    background-color:black;
    }     


.signup-info
{
    
    width: 300px;
    height: 45px; 
    border:1px solid #999;
    padding:5px;
    border-radius: 10px;
           
}    

#submit
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
textarea{
    border:1px solid #999;
    padding:5px;
    border-radius: 10px;        
    }
#submit:hover
{
   background-color:lightblue; 
}      
    
    </style>
<body class="w3-theme-l5">

<!-- Navbar -->
<div class="w3-top" >
 <div class="w3-bar w3-theme-d5 w3-left-align w3-large">
  
 <a href="Owner_aboutus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="About"><i class="fa fa-user"></i> About</a>
     
 <a href="Owner_contactus.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" title="contact us"><i class="fa fa-envelope"></i> Contact us</a>
     
     
<img src="img/logo.png" class="w3-circle" style="height:40px;width:40px ; float:right; margin-right:15%;" alt="logo">
 
     
</div>
</div> 
    
    
<div class="main">
    <form action="/createProject.php" method="post" id="data">
        
    <label> Project Name </label>  
    <input type="text" id="project_name" class="signup-info" placeholder="Enter Project Name" name="projectName"><br/>
    <hr>
    
    <label> Category </label>
    <select class="signup-info" form="data" name="cate">
    <option value="Restaurant" selected>Restaurant</option>
    <option value="Shopping" >Shopping</option>
    <option value="Games and Entertainment" >Games and Entertainment</option>
    <option value="Wedding planner" >Wedding planner</option>
    <option value="Co-Working spaces" >Co-Working spaces</option>
    <option value="Open Days" >Open Days</option>
    </select>
    <br/>
    <hr>
    <label>Upload the main Photo</label>  
    <input type="file" id="project_name" name="projectPhoto"><br/>
        <br/>
    <hr>
         
        
    <label>Upload secondary Photos</label>  
    <input type="file" id="project_name" multiple name="secphoto"><br/>
        <br/>
    <hr>
        
    <label> Location URL </label>  
    <input type= "url" id="location" class="signup-info" placeholder="Enter Google Maps URL" name="location"><br/>
    <hr>
        
    <label> Startup Description</label><br/>
    <textarea style="width:100%" id="Startup_Description" placeholder="Enter Startup Description" name="description" form="data"></textarea>   
    <hr>
    <label> National ID </label>  
    <input type="text" id="project_name" class="signup-info" maxlength="14" placeholder="Enter National ID" name="nationalID"><br/>
    <hr>
        
    <input type="submit" value="submit" id="submit" class="signup-info">
        <br><br><br>
    </form>    
</div>
    
</body>

</html>


<?php 
include_once(/*./models/*/'customers.php');
include_once(/*./models/*/'owners.php');
include_once (/*./controllers/*/'signupFormControl.php');
include_once('projects.php');
include_once('createProject.php');

?>