<?php include_once('./common/headwithout.php');
include_once('./models/owners.php');
include_once('./models/projects.php');
include_once ('./controllers/editOwnerForm.php');
?>


<html>
<title>startups on cloud</title>
<head>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body{background-color:rgb(206,206,206,1);}   
    
 label
    {
        font-family: cursive;
        font-size: 25px;
    }
    
    
 .main
    {
        position:absolute;
         padding: 2% ; 
         margin: 2%;
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
    
</head>
    
<body class="w3-theme-l5">

<br><br>
    
<div class="main">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="data">
        
    <label> Name :  </label>
            <input class="signup-info" type="text" placeholder="Name" id="username2" name="username2"><br><hr>
            <label>Password :    </label>
            <input class="signup-info" type="password" placeholder="password" id="password2" name="password3"><br><hr>
            <label>E-mail:    </label>
            <input class="signup-info" type="email" name="email" placeholder="email" id="email"><br><hr>
            <label>Number:      </label>
            <input  class="signup-info" type="tel" name="phonenumber" placeholder="phonenumber" id="phonenumber" minlength="11" maxlength="11"><br><hr>       
            <label> National ID </label>  
            <input type="tel" id="project_name" class="signup-info" maxlength="14" placeholder="Enter National ID" name="nationalID" minlength="14" maxlength="20"><br/>
            <hr>
        
    <input type="submit" value="Update" id="submit" class="signup-info">
        <br><br><br>
    </form>    
</div>
    
</body>

</html>
