<?php
session_start();

?>
<!--VEG BUDDY 
*************
updatephoto.php
*************
 7/18/16
*/
 -->

<?php

include ("../models/header.php");

    ?>

	<!--welcome -->
  <div class="container" id="toprow">
    <div id="dashwelc" class="container">              
      <h3>WELCOME USERNAME!</h3>
      <img src="../images/veg_week.jpg"><br>
      <a href="updatephoto.php">Update photo</a><br>
      <a href="inbox.php">Messages</a><br>
      <a href="myfriends.php">My Recipes</a><br>
    </div>

  <!-- inbox -->
  <div id="dashboard" class="container">
  <h3>upload new profile picture</h3>
    

    <a name="dash">
    <div id="accordion" role="tablist" aria-multiselectable="true">
              
      

    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">


  </div>
 
</div>
    </div>  

  </div>
<?php include("../models/footer.php"); ?>


</body>

</html>