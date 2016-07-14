<?php
session_start();
/*--VEG BUDDY 
*************
myfriends.html
*************
 6/2/16
  modified on 7/14/16 for PHP transform
*/

 ?>

<?php include("../models/header.php"); ?>

	<!--welcome -->
  <div class="container" id="toprow">
    <div id="dashwelc" class="container">              
      <h3>WELCOME USERNAME!</h3>
      <img src="../images/veg_week.jpg"><br>
      <a href="updatephoto.php">Update photo</a><br>
      <a href="messages.php">Messages</a><br>
      <a href="myrecipes.php">My Recipes</a><br>
    </div>

  <!-- inbox -->
  <div id="dashboard" class="container">
  <h3>Messages</h3>
    <div id="dashboardlinks">           
      <a href="inbox.php#dash"><b>Inbox (3)</b></a><br>
      <a href="saved.php#dash">Saved</a><br>
      <a href="deleted.php#dash">Deleted</a><br>
    </div>

    <a name="dash">
    <div id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
             <table class="table table-hover">
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
          <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
                  <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
                  <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
                  <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
                  <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
        <tr>
          <td><img src="userpic.jpg"></td>
          <td>THIS WILL BE DYNAMIC</td>
                  <td>NAME</td>
          <td>CITY</td>
          <td>AGE</td>
          <td>GENDER</td>
          <td>SEE PROFILE</td>
        </tr>
      </table>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">

    </div>
  </div>
 
</div>
    </div>  

  </div>
<?php include("../models/footer.php"); ?>


</body>

</html>