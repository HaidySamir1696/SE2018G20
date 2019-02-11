<?php include_once('./common/headwith.php') ;
       
               include_once ('./models/Database.php');

                Database::connect('startups_on_the_cloud','root',''); 
?>

<!DOCTYPE html>
<html>
<title>My profile</title>

<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
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
        <h4 class="w3-center">My Profile</h4>
         <p><i class="fa fa-pencil fa-fw w3-margin-right w3-text-theme"></i> Designer</p>
         <p><i class="fa fa-home fa-fw w3-margin-right w3-text-theme"></i> Cairo, Egypt</p>
         <p><i class="fa fa-birthday-cake fa-fw w3-margin-right w3-text-theme"></i> April 1, 1988</p>
        </div>
      </div>
      <br>
      

      <div class="w3-card w3-round w3-white">
        <div class="w3-container">
        <h4 class="w3-center">Restaurant</h4>
         <img src="img/food.jpg" alt="Restaurant" width="300" height="300">
        </div>
      </div>
      <br>        
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
       
          <button  class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Rates</button>
          
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> Locations</button>
          <div id="Demo3" class="w3-hide w3-container">
            <div class="w3-row-padding">
              <br>
                   <div >
                      <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> Madenit Nasr</button> 
                   </div>
                   <div >
                    <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> Masr El Gdeda</button> 
                   </div>
                   <div >
                     <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> Moaatam</button> 
                   </div> 
                   <div >
                     <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> Madii</button> 
                   </div>
                   <div>
                     <button type="button" class="w3-button w3-theme-d1 w3-margin-bottom"> shobra</button> 
                   </div>

            </div>
          </div>
        </div>      
      </div>
      <br>
      
      <!-- Interests --> 
      <div class="w3-card w3-round w3-white w3-hide-small">
        <div class="w3-container">
          <p>category</p>
          <p>
            <a href="restaurant.php"><span class="w3-tag w3-small w3-theme-d5">Restaurant</span></a>
            <a href="shopping.php"><span class="w3-tag w3-small w3-theme-d4">Shopping</span></a>
            <a><span class="w3-tag w3-small w3-theme-d3">Games</span></a>
            <a><span class="w3-tag w3-small w3-theme-d2">Wedding planner</span></a>
            <span class="w3-tag w3-small w3-theme-d1"></span>
            <span class="w3-tag w3-small w3-theme"></span>
            <span class="w3-tag w3-small w3-theme-l1"></span>
            <span class="w3-tag w3-small w3-theme-l2"></span>
            <span class="w3-tag w3-small w3-theme-l3"></span>
            <span class="w3-tag w3-small w3-theme-l4"></span>
            <span class="w3-tag w3-small w3-theme-l5"></span>
          </p>
        </div>
      </div>
      
    <!-- End Left Column -->
    </div>
    <?php

                          //  $sql="SELECT * FROM startup_owner WHERE id=$id";
                          //  $statement= Database::$db->prepare($sql);
                          //$statement->execute();
                           // $data=$statement->fetch(PDO::FETCH_ASSOC);
                          $query = "SELECT * FROM project WHERE category='restaurant' ";
                          $data = Database::$db->query($query);
                          $data->execute();
                          while($row=$data->fetch(PDO::FETCH_ASSOC)):
                        ?>
    <!-- Middle Column -->
    <div class="w3-col m7">
    
      
      <div class="w3-container w3-card w3-white w3-round w3-margin"><br>
        <img src="img/#" alt="photo" class="w3-left w3-circle w3-margin-right" style="width:60px">
        
        <h4><?php echo  $row['name']."<br><br>";  ?></h4><br>
        <hr class="w3-clear">
        <p><?php echo $row['description']."<br><br>";  ?></p>
           <form id="view" method="post" action="project.php">
                  <input type="hidden" id="projectid" name="projectid" value= "<?php echo $row['Project_ID'];?>" >
                                <input class="w3-button w3-theme-d1 w3-margin-bottom" type="submit" id="viewproject" name="view" value = "View">
                            </form>       
        
      </div>
      
     <?php  endwhile; ?>
      
    <!-- End Middle Column -->
    </div>
    
    <!-- Right Column -->
    <div class="w3-col m2">
      <div class="w3-card w3-round w3-white w3-center">
        <div class="w3-container">
          <p>Place of the day</p>
          <img src="/w3images/forest.jpg" alt="place of the day" style="width:100%;">
          <p><strong>restaurant name </strong></p>
          <p><button class="w3-button w3-block w3-theme-l4">Info</button></p>
        </div>
      </div>
      <br>
      
      
      
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