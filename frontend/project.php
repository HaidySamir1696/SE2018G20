
<?php include_once('./common/headwith.php') ?>


<!DOCTYPE html>
<html>
<title>My profile</title> 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
  $(document).ready(function()
  {
   
     $("#promoCode").click(function()
     {
      var i =Math.floor(1000+Math.random()*9000);
      console.log(i)
       alert(i);
     });


    $("#cl_1").click(function(){
       $("#cl_1").css("color", "lightblue");
       $("#cl_2").css("color", "white");
       $("#cl_3").css("color", "white");
       $("#cl_4").css("color", "white");
       $("#cl_5").css("color", "white");
      });
    
    $("#cl_2").click(function(){
       $("#cl_1").css("color", "lightblue");
       $("#cl_2").css("color", "lightblue");
       $("#cl_3").css("color", "white");
       $("#cl_4").css("color", "white");
       $("#cl_5").css("color", "white");
      });

    $("#cl_3").click(function(){
       $("#cl_1").css("color", "lightblue");
       $("#cl_2").css("color", "lightblue");
       $("#cl_3").css("color", "lightblue");
       $("#cl_4").css("color", "white");
       $("#cl_5").css("color", "white");
      });

    $("#cl_4").click(function(){
       $("#cl_1").css("color", "lightblue");
       $("#cl_2").css("color", "lightblue");
       $("#cl_3").css("color", "lightblue");
       $("#cl_4").css("color", "lightblue");
       $("#cl_5").css("color", "white");
      });

    $("#cl_5").click(function(){
       $("#cl_1").css("color", "lightblue");
       $("#cl_2").css("color", "lightblue");
       $("#cl_3").css("color", "lightblue");
       $("#cl_4").css("color", "lightblue");
       $("#cl_5").css("color", "lightblue");
      });
    $("#submitCloudRating").click(function(){
      $(this).remove();
      $("#cute").hide();
      $("#cl_1").off("click");
      $("#cl_2").off("click");
      $("#cl_3").off("click");
      $("#cl_4").off("click");
      $("#cl_5").off("click");
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
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
         <br>
         <span class="heading"><strong>User CloudRating</strong></span>
         <p>4.1 average based on 254 reviews.</p>
         <hr style="border:3px solid #f1f1f1">

         <div class="row">
           <div class="side">
             <div>5CLD</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-5"></div>
             </div>
           </div>
           <div class="side right">
             <div>150</div>
           </div>
           <div class="side">
             <div>4CLD</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-4"></div>
             </div>
           </div>
           <div class="side right">
             <div>63</div>
           </div>
           <div class="side">
             <div>3CLD</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-3"></div>
             </div>
           </div>
           <div class="side right">
             <div>15</div>
           </div>
           <div class="side">
             <div>2CLD</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-2"></div>
             </div>
           </div>
           <div class="side right">
             <div>6</div>
           </div>
           <div class="side">
             <div>1CLD</div>
           </div>
           <div class="middle">
             <div class="bar-container">
               <div class="bar-1"></div>
             </div>
           </div>
           <div class="side right">
             <div>20</div>
           </div>
         </div> 

         <br>
        </div>
      </div>
      
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
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
        <textarea style="width:100%; height:50%;" placeholder="Place your gentle feedback"></textarea>
       <br>
        <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom" id="SubmitFeedback">Submit</button> 
      </div>
    
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <hr class="w3-clear"> 
        <p> <!-- Saved feedbacks from database--> </p>
        <a href="project.php"><button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> View</button> </a>
      </div>
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <hr class="w3-clear">
        <p> <!-- Saved feedbacks from database--> </p>
        <a href="project.php"><button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> View</button> 
      </div>  

    </div>
      
      
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
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
          <br>
          <p><strong>CloudRating</strong></p>

          <i id="cl_1" class="fas fa-cloud" style="font-size:25px;color:white;text-shadow:2px 2px 4px #000000;"></i>
          <i id="cl_2" class="fas fa-cloud" style="font-size:25px;color:white;text-shadow:2px 2px 4px #000000;"></i>
          <i id="cl_3" class="fas fa-cloud" style="font-size:25px;color:white;text-shadow:2px 2px 4px #000000;"></i>
          <i id="cl_4" class="fas fa-cloud" style="font-size:25px;color:white;text-shadow:2px 2px 4px #000000;"></i>
          <i id="cl_5" class="fas fa-cloud" style="font-size:25px;color:white;text-shadow:2px 2px 4px #000000;"></i>
          <p id="cute"><I>Rating makes us evolve</I></p>
          <p ><button id="submitCloudRating" class="w3-button w3-block w3-theme-l4">Submit</button></p>
          <!-- Rating should be saved in database and loaded each time user opens this page -->

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

    

    </div>
      
 

      
      
    <!-- End Right Column -->
    </div>
    
    
  <!-- End Grid -->
  </div>
  
<!-- End Page Container -->
</div>

 
<script>
// Accordion
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme-d1";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme-d1", "");
    }
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}




</script>

</body>
</html> 