<?php session_start();
/* VEG BUDDY 
*************
updatephoto.php
*************
 7/18/16
*/?><?php 
$user="root";  //sets the username of the server to  variables
$pass="root";   //sets the password of the username to the variables
$dbh = new PDO('mysql:host=localhost;dbname=vegbuddy;port=8888', $user, $pass); //PDO set into var $dbh - query string links to server and we're given username and pw

include ("../models/header.php");

    $stmt = $dbh->prepare('SELECT * FROM photo order by idpic DESC limit 1;');  // selects all information from clients table in sql server in order of ascending clientid's
    $stmt->execute();     //execute the previous code that has $stmt variable
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);   //the result var is set which is the eviqualent of each line item in the sql server
    //The parameter means it will return an indexed array with each index containing an associative array of each row – do a var_dump($result); to see the array results
    //var_dump($result);
?>
  <!--welcome -->
  <div class="container" id="toprow">
    <div id="dashwelc" class="container">              
      <h3>WELCOME USERNAME!</h3>

  <?php  foreach  ($result as $row) {  //foreach loop that will itirate through all the results and set them as var row
        echo '<img src="' . $row['userfile'] .'"><br>';
       } 
    ?> <!-- close php code  -->
      <a href="updatephoto.php">Update photo</a><br>
      <a href="inbox.php">Messages</a><br>
      <a href="myfriends.php">My Recipes</a><br>
    </div>
  <!-- inbox -->
  <div id="dashboard" class="container">
  <h3>upload new profile picture</h3>
<?php

if(isset($_POST['submit'])) {

    $tmp_file = $_FILES['userfile']['tmp_name'];

    $target_file = basename($_FILES['userfile']['name']);
    $upload_dir = "upload";


    if(move_uploaded_file($tmp_file, $upload_dir ."/". $target_file)) {
        $message = "file uploaded successfully.";
    } else {
        $message = "file NOT uploaded successfully.";
    }
}
?>
<body>

<?php if(!empty($message)) {
    echo "<p>($message)</p>";
    echo "<div class='image'><img src='" . $upload_dir.'/'. $target_file . "' width='300'/></div>";
}
?>

<h2>Upload a JPEG file</h2>
<form action="upload.php" enctype="multipart/form-data" method="POST">

    <input type="file" name="userfile" />
    <input type="submit" name="submit" value="Upload" />

</form>

  <!--      <pre>
 <?php print_r(get_defined_vars()); // shows what the user types into form using super global $_POST ?>
        </pre>
    -->

</body>
</html>
    

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