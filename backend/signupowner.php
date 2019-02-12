<?php
include_once('./common/headwithout.php');
//include_once('./models/customers.php');
//include_once('./models/owners.php');
//include_once ('./controllers/signupFormControl.php');
 //include_once ('./controllers/signupformcontrolowner.php');
  include_once('./models/Database.php');
 Database::connect('startups_on_the_cloud','root','turtledove');
  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload_p'])) {
  	// Get image name

  	$primary_image =$_FILES['primary_image']['name'];


  	// image file directory
  	$primary_target = "primary_image/".basename($primary_image);
  	$sql_p = "INSERT INTO project(primary_image) VALUES ('$primary_image')";
  	// execute query
        $data_p=Database::$db->query($sql_p);
        $data_p->execute();
   if (move_uploaded_file($_FILES['primary_image']['tmp_name'], $primary_target)) {
  		$msg = "Image uploaded successfully";
  	                }else{
  		$msg = "Failed to upload image";
  	                 }
                          }

          else if (isset($_POST['upload_s'])) {
            $secondary_image=$_FILES['secondary_image']['name'];
            $secondary_target = "secondary_image/".basename($secondary_image);
              $sql_s = "INSERT INTO secondary_photos(secondary_photo_link ) VALUES ('$secondary_image')";
              $data_s=Database::$db->query($sql_s);
              $data_s->execute();



  	if (move_uploaded_file($_FILES['secondary_image']['tmp_name'], $secondary_target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}

  }

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
     <form method="POST" action="signupowner.php" enctype="multipart/form-data"" >

    <label> Name :  </label>
            <input class="signup-info" type="text" placeholder="Name" id="username2" name="username2"><br><hr>
            <label>Password :    </label>
            <input class="signup-info" type="password" placeholder="password" id="password2" name="password3"><br><hr>
            <label>E-mail:    </label>
            <input class="signup-info" type="email" name="email" placeholder="email" id="email"><br><hr>
            <label>Number:      </label>
            <input  class="signup-info" type="tel" name="phonenumber" placeholder="phonenumber" id="phonenumber"><br><hr>

    <label> Project Name </label>
    <input type="text" id="project_name" class="signup-info" placeholder="Enter Project Name" ><br/>
    <hr>

    <label> Category </label>
    <select class="signup-info">
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
    <input type="file" name="primary_image"> <br/>
    	<div>
    <button type= "submit"  name= "upload_p">upload image</button>
    	</div>
        <br/>
    <hr>

    <label>Upload secondary Photos</label>
    <input type="file" name="secondary_image"> <br/>
    	<div>
    <button type= "submit"  name= "upload_s">upload image</button>
    	</div>
        <br/>
    <hr>
        
    <label> Location URL </label>  
    <input type= "url" id="location" class="signup-info" placeholder="Enter Google Maps URL"><br/>
    <hr>
        
    <label> Startup Description</label><br/>
    <textarea style="width:100%" id="Startup_Description" placeholder="Enter Startup Description"></textarea>   
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

