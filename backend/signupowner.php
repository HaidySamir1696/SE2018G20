<?php
 include_once('./common/headwithout.php');
 include_once('./models/customers.php');
 include_once('./models/owners.php');
 include_once ('./controllers/signupFormControl.php');
 include_once ('./controllers/signupformcontrolowner.php');
 include_once('./models/Database.php');
 Database::connect('startups_on_the_cloud','root','');

  $msg = "";
  if (isset($_POST['submit'])) {

  	$primary_image =$_FILES['primary_image']['name'];
        $primary_target = "primary_image/".basename($primary_image);
        $secondary_image_1=$_FILES['secondary_image_1']['name'];
        $secondary_target_1 = "secondary_image/".basename($secondary_image_1);
        $secondary_image_2=$_FILES['secondary_image_2']['name'];
        $secondary_target_2 = "secondary_image/".basename($secondary_image_2);
        $secondary_image_3=$_FILES['secondary_image_3']['name'];
        $secondary_target_3 = "secondary_image/".basename($secondary_image_3);
        $secondary_image_4=$_FILES['secondary_image_4']['name'];
        $secondary_target_4 = "secondary_image/".basename($secondary_image_4);
        $secondary_image_5=$_FILES['secondary_image_5']['name'];
        $secondary_target_5 = "secondary_image/".basename($secondary_image_5);
  	$sql = "INSERT INTO project(primary_image,secondary_photo_1,secondary_photo_2,secondary_photo_3,secondary_photo_4,secondary_photo_5) VALUES ('$primary_image','$secondary_image_1','$secondary_image_2','$secondary_image_3','$secondary_image_4','$secondary_image_5')";
        $data=Database::$db->query($sql);
        $data->execute();
       	if (move_uploaded_file($_FILES['primary_image']['tmp_name'], $primary_target)) {
  		$msg = "Image uploaded successfully";
  	            }else{
  		$msg = "Failed to upload image";
  	            }
       	if (move_uploaded_file($_FILES['secondary_image_1']['tmp_name'], $secondary_target_1)) {
  		$msg = "Image uploaded successfully";
  	              }else{
  		$msg = "Failed to upload image";
  	}

       	if (move_uploaded_file($_FILES['secondary_image_2']['tmp_name'], $secondary_target_2)) {
  		$msg = "Image uploaded successfully";
  	              }else{
  		$msg = "Failed to upload image";
  	}

       	if (move_uploaded_file($_FILES['secondary_image_3']['tmp_name'], $secondary_target_3)) {
  		$msg = "Image uploaded successfully";
  	              }else{
  		$msg = "Failed to upload image";
  	}

       	if (move_uploaded_file($_FILES['secondary_image_4']['tmp_name'], $secondary_target_4)) {
  		$msg = "Image uploaded successfully";
  	              }else{
  		$msg = "Failed to upload image";
  	}

       	if (move_uploaded_file($_FILES['secondary_image_5']['tmp_name'], $secondary_target_5)) {
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
        <br/>
    <hr>

    <label>Upload secondary Photo 1</label>
    <input type="file" name="secondary_image_1"> <br/>
        <br/>

    <hr>
    <label>Upload secondary Photo 2</label>
    <input type="file" name="secondary_image_2"> <br/>
        <br/>
          <hr>
        <label>Upload secondary Photo 3</label>
    <input type="file" name="secondary_image_3"> <br/>
        <br/>
          <hr>
          <label>Upload secondary Photo 4</label>
    <input type="file" name="secondary_image_4"> <br/>
        <br/>
          <hr>
        <label>Upload secondary Photo 5</label>
    <input type="file" name="secondary_image_5"> <br/>
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

    <input type="submit" value="submit" name="submit" id="submit" class="signup-info">
        <br><br><br>
    </form>    
</div>
    
</body>

</html>

