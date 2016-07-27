<?php session_start();
 /* VEG BUDDY 
*************
signup.php
*************
 6/2/16
 modified to php: 7/4/16
*/ ?>
<?php
$user="root";  //sets the username of the server to  variables
$pass="root";   //sets the password of the username to the variables
$dbh = new PDO('mysql:host=localhost;dbname=vegbuddy;port=8888', $user, $pass); //PDO set into var $dbh - query string links to server and we're given username and pw

if ($_SERVER['REQUEST_METHOD'] =='POST') {  // if the request method is a POST (it is)

   if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        echo "<br /><br /><div id='msg'>The E-mail address you entered is invalid!</div><br />";
    } else {

        $dbh = new PDO('mysql:host=localhost;dbname=vegbuddy;port=8888', $user, $pass);
        #client name, phone number, email, website

        $firstname = $_POST['firstname']; //get POST values from form - first name
        $lastname = $_POST['lastname']; //get post values from form - lastname
        $email = $_POST['email']; //get POST values from form - email
        $username = $_POST['username']; //get POST values from form - username
        $password = $_POST['password']; //get post values from form - password
        $zip = $_POST['zip']; //get post values from form - zip

        $stmt = $dbh->prepare("INSERT INTO user (firstname, lastname, email, username, password, zip) VALUES (:firstname, :lastname, :email, :username, :password, :zip);");  //prepare statement calling clients table and setting var for the different columns
        $stmt->bindParam(':firstname', $firstname); //sets binding paramater that binds sql data to php data - firstname
        $stmt->bindParam(':lastname', $lastname); //sets binding paramater that binds sql data to php data - lastname
        $stmt->bindParam(':email', $email); //sets binding paramater that binds sql data to php data - email
        $stmt->bindParam(':username', $username); //sets binding paramater that binds sql data to php data - username
        $stmt->bindParam(':password', $password); //sets binding paramater that binds sql data to php data - password
        $stmt->bindParam(':zip', $zip); //sets binding paramater that binds sql data to php data - zip
        $stmt->execute();  //executes the code to transform sql to php
        header("Location: inbox.php");
        die();
    }
}


 include("../models/header.php"); ?>


  <!-- signup form -->
	 <div class="container" id="signup">
  <div class="row">
  	<div class="col-md-6">


        <form enctype="multipart/form-data" action="signup.php" method="post" class="form-horizontal">  <!-- form that will post to fruits.php -->
          <fieldset>
            <div id="legend">
              <legend class=""><h1>Register</h1></legend>
            </div>

              <div class="control-group">
              <label class="control-label" for="firstname">First Name</label>
              <div class="controls">
                <input class="form-control input-lg" type="text" name="firstname" placeholder="Enter First Name" required/> <!-- client name input - it is required -->
                <p class="help-block">Please enter your first name</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="lastname">Last Name</label>
              <div class="controls">
                <input class="form-control input-lg" type="text" name="lastname" placeholder="Enter Last Name" required/> <!-- client phone input - it is required -->
              <p class="help-block">Please enter your last name</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="username">Username</label>
              <div class="controls">
                <input class="form-control input-lg" type="text" name="username" placeholder="Enter Username" required/> <!-- client email input - it is required -->
              <p class="help-block">Username can contain any letters or numbers, without spaces</p>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="email">E-mail</label>
              <div class="controls">

                <input class="form-control input-lg" type="text" name="email" placeholder="Enter Email" required/> <!-- client website input - it is required -->
               
              <p class="help-block">Please provide your E-mail</p>
              </div>
            </div>

            <div class="control-group">
              <label class="control-label" for="password">Password</label>
              <div class="controls">

                  <input class="form-control input-lg" type="password" name="password" placeholder="Enter Password" required/> <!-- client website input - it is required -->
                <p class="help-block">Password should be at least 6 characters</p>
              </div>
            </div>
         
            <div class="control-group">
              <label class="control-label" for="password_confirm">Password (Confirm)</label>
              <div class="controls">
                 <input class="form-control input-lg" type="password" name="passwordcon" placeholder="Enter Password" required/> <!-- client website input - it is required -->
                <p class="help-block">Please confirm password</p>
              </div>
            </div>

             <div class="control-group">
              <label class="control-label" for="zip">Zip Code</label>
              <div class="controls">
                <input class="form-control input-lg" type="text" name="zip" placeholder="Enter Zip Code" required/> <!-- client website input - it is required -->
              <p class="help-block">Please provide your zip Code</p>
              </div>
            </div>

              <div class="control-group">
              <!-- Button -->
              <div class="controls">
              <input class="btn btn-primary" id="submit" type="submit" name="submit" value="Submit" /> <!-- submit button  --></div>
            </div>
          </fieldset>
        </form>
    
    
    </div> 
  </div>
</div>

<?php include ("../models/footer.php"); ?>

</body>

</html>