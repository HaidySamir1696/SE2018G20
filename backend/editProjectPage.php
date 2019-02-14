<?php include_once('./common/headwithout.php');
include_once('./models/owners.php');
include_once('./models/projects.php');
include_once ('./controllers/editProjectForm.php');
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
        
    <label> Project Name </label>  
    <input type="text" id="project_name" class="signup-info" placeholder="Enter Project Name" name="projectName"><br/>
    <hr>
    
    <label> Category </label>
    <select class="signup-info" name="cate" form="data">
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
    <input type="submit" value="Update" id="submit" class="signup-info">
        <br><br><br>
    </form>    
</div>
    
</body>

</html>
