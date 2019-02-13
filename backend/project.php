
<?php include_once('./common/headwith.php');

  include_once ('./models/Database.php');

             Database::connect('startups_on_the_cloud','root','');    
             

  $projectid=$_POST['projectid'];

  echo $projectid;


 ?>


<!DOCTYPE html>
<html>
<title>My profile</title> 
 <meta charset="UTF-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<script src="http://code.jquery.com/jquery-1.11.3.min.js" charset="utf-8"></script>    
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="rater.js" charset="utf-8"></script>
<script>
$(document).ready(function(){

    $("#promoCode").click(function()
     {
      var i =Math.floor(1000+Math.random()*9000);
      console.log(i)
       alert(i);
     });
      
                
            
 $("#rate7").rate({
                selected_symbol_type: 'image2',
                max_value: 5,
                step_size: 1,
                update_input_field_name: $("#input1"),
                only_select_one_symbol: true,
                symbols:{
                    image2: {
                        base: ['<div style="background-image: url(\'./img/emoji1.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji2.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji3.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji4.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji5.png\');" class="im2 h">&nbsp;</div>',],
                        hover: ['<div style="background-image: url(\'./img/emoji1.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji2.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji3.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji4.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji5.png\');" class="im2 h">&nbsp;</div>',],
                        selected: ['<div style="background-image: url(\'./img/emoji1.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji2.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji3.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji4.png\');" class="im2 h">&nbsp;</div>',
                               '<div style="background-image: url(\'./img/emoji5.png\');" class="im2 h">&nbsp;</div>',],
                    },
                },
            });

    

    $("#star").click(function(){
       $("#star").css("color", "gold");
       $("#heart").css("display", "block");
       $("#RecQues").css("display", "none");
       $("#RecResponse").css("display", "block");
       
      });

    $("#SubmitFeedback").click(function(){
       $("#feedback").hide();
      });

    });
  
</script>
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
</style>

<style>
 
  
      
        .im2
        {
            background-image: url('./img/emoji5.png');
            background-size: 64px 64px;
            background-repeat: no-repeat;
            width: 64px;
            height: 64px;
            display: inline-block;
        }
         #rate7 .rate-base-layer 
        {
            opacity: 0.5;
        }
   
    
* {
  box-sizing: border-box;
}

.heading {
  font-size: 25px;
  margin-right: 25px;
}

.fa {
  font-size: 25px;
}

.checked {
  color: orange;
}

/* Three column layout */
.side {
  float: left;
  width: 15%;
  margin-top:10px;
}

.middle {
  margin-top:10px;
  float: left;
  width: 70%;
}

/* Place text to the right */
.right {
  text-align: right;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* The bar container */
.bar-container {
  width: 100%;
  background-color: #f1f1f1;
  text-align: center;
  color: white;
}

/* Individual bars */
.bar-5 {width: 60%; height: 18px; background-color: #4CAF50;}
.bar-4 {width: 30%; height: 18px; background-color: #2196F3;}
.bar-3 {width: 10%; height: 18px; background-color: #00bcd4;}
.bar-2 {width: 4%; height: 18px; background-color: #ff9800;}
.bar-1 {width: 15%; height: 18px; background-color: #f44336;}

/* Responsive layout - make the columns stack on top of each other instead of next to each other */
@media (max-width: 400px) {
  .side, .middle {
    width: 100%;
  }
  .right {
    display: none;
  }
}
</style>

<body class="w3-theme-l5">





<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Profile -->
      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
        <h4 class="w3-center">Shop 1</h4> <!-- THE SHOP NAME HERE! -->
         <p><i class="fa fa-clock fa-fw w3-margin-right w3-text-theme"></i> Designer</p><!-- openning and closing time-->
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Cairo, Egypt</p> <!-- GOOGLE MAPS LOCATION -->
         <p><i class="fa fa-phone fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p><!-- mobilat ba2a -->
        </div>
      </div>
      <br>
      

      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
        <!--<h4 class="w3-center">Shopping</h4> -->
         <img src="img/shopping.jpg" alt="Shopping" width="300" height="300">
        </div>
      </div>
      <br>        
      
      
      <!-- User Rating --> 
    <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
            
          <br>
          <p><strong>CloudRating</strong></p>
                  <div id="rate7" ></div>

                <input id="input1" type="text">
            <br><br>
        </div>
      </div>
      <br>

      
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
         <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
         
      </div>
        
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
      
       
       <div id="feedback">
        <p style="font-size: 25px"><i class="fa fa-envelope fa-fw w3-margin-right w3-text-theme"></i>Your feedback</p>
        <form method="GET">
          <div>
            <label> How was the <B>service</B> provided? </label><br>
            <input type="radio" name="service" value="Excellent" checked>Excellent<br>
            <input type="radio" name="service" value="Very Good">Very Good<br>
            <input type="radio" name="service" value="Good">Good<br>
            <input type="radio" name="service" value="Poor">Poor<br>
            <br>
          </div>

          <div>
            <label> How was the <B>accuracy of location</B> provided? </label><br>
            <input type="radio" name="location" value="Excellent" checked>Excellent<br>
            <input type="radio" name="location" value="Very Good">Very Good<br>
            <input type="radio" name="location" value="Good">Good<br>
            <input type="radio" name="location" value="Poor">Poor<br>
            <br>
          </div>

          <div>
            <label> How fast was the <B>response</B> to your required service? </label><br>
            <input type="radio" name="response" value="Excellent" checked>Excellent<br>
            <input type="radio" name="response" value="Very Good">Very Good<br>
            <input type="radio" name="response" value="Good">Good<br>
            <input type="radio" name="response" value="Poor">Poor<br>
            <br>
          </div>

          <div>
            <label> How was the <B>quality</B> of the service provided? </label><br>
            <input type="radio" name="quality" value="Excellent" checked>Excellent<br>
            <input type="radio" name="quality" value="Very Good">Very Good<br>
            <input type="radio" name="quality" value="Good">Good<br>
            <input type="radio" name="quality" value="Poor">Poor<br>
            <br>
          </div>

          <div>
            <label> How was the <B>prices</B> provided? </label><br>
            <input type="radio" name="prices" value="Appropriate" checked>Appropriate<br>
            <input type="radio" name="prices" value="Inappropriate">Inappropriate<br>
          </div>
                   

        </form>
     
        <hr class="w3-clear">
        <textarea style="width:100%; height:50%;" placeholder="Place your gentle feedback" name="textArea"></textarea>
       <br>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" id="SubmitFeedback">Submit</button> 
      </div>


      
    <!-- End Middle Column -->
    </div>
</div>      
  
    
     <!-- Right Column -->
     <div class="w3-col m2" >
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <br>
          <p>Place of the day</p>
          <img src="/w3images/forest.jpg" alt="place of the day" style="width:100%;">
          <p><strong>shop name</strong></p>
          <form method="get" action=""><p><input type="Submit" value="promo code " id="promoCode"></p></form>
        </div>
      </div>
      <br>

   

      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
            
          <p id="RecQues"><I>Do you recommend this startup?</I></p>
          <br>
          <i id="star" class="fas fa-star" style="font-size:60px;color:silver;text-shadow:2px 2px 4px #000000;"></i>
          <br>
          <br>
          <p id="RecResponse" style="display: none;" ><strong>Thanks for recommending us!</strong><i id="heart" class="fas fa-heart" style="font-size:25px;color:red;text-shadow:2px 2px 4px #000000;"></i></p>
          
          <!-- Recommendation should be saved in database and loaded each time user opens this page -->

        </div>
      </div>
      <br>
    <!-- End Right Column -->
    </div>

    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>

 

</body>
</html> 