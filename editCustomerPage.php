<?php include_once('./common/headwithout.php') ?>
<html>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
body{background-color: darkgrey}     
label{margin: 2%} 
body{background-color:rgb(206,206,206,1);}   
.signup-input
{
    
    width: 400px;
    height: 45px; 
    border:1px solid #999;
    padding:5px;
    border-radius: 10px;
           
}    

#submit2
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
#submit2:active
{
   background-color: rgba(255,255,255,0.2); 
}      
</style>
<body>
 


   <div class="signup" style="margin-left:20px; text-align: center" >  
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <br><br><br><br><br><br><br><br><br>
            <label> Name</label>
            <input class="signup-input" type="text" placeholder="Name" id="username2" name="username2">
            <span class="error"></span>
            <br>
            <label>Password</label>
            <input class="signup-input" type="password" placeholder="password" id="password2" name="password3" 
            max="15"><br>
            <label>E-mail</label>
            <input class="signup-input" type="email" name="email" placeholder="email" id="email"><br>
            <span class="error"></span>
            <label>MobileNo.</label>
            <input class="signup-input" type="tel"  name="phonenumber" placeholder="phonenumber" id="phonenumber" minlength="11" maxlength="11"><br><br>
           <br><br><br>
            <input type="submit" name="submit2" value="Update" id="submit2" style="width:25%">
            <br><br>
         </form>
    </div>  
    
    
</body>
</html>
<?php 
include_once('./models/customers.php');
include_once('./models/owners.php');
include_once ('./controllers/editCustomerForm.php');
 ?>

