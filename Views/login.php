<?php session_start();
/* VEG BUDDY 
*************
login.html
*************
 6/2/16
 modified 7/14/16 for PHP
*/



/* $_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
echo $_SESSION['login_user'];

include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");

*/

include("../models/header.php");

?>

	<!--LOGIN FORM -->
	<div class="container" id="login">
			<h3>&nbsp;&nbsp;&nbsp;LOGIN</h3>
		<form id="loginform" action="" method="post">
			<label>Username</label><br>
  			<input type="text" name="username"><br></input>
  			<label>Password</label><br>
  			<input type="password" name="password"></input>
  					<a href="inbox.php">
			<div class="btn-group btn-group-lg" id="regcta">
  				<button type="button" class="btn btn-primary">
  					Login
  					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</button>
 			</div>
 		</a>
    <span></span>
		</form>
		<h4>Don’t have an account?<br>
		SIGN UP TODAY!</h4><br>
		<strong>Why join Veg Buddy?</strong><br>
		- Make friends with other vegans<br>
		- Find new recipes<br>
		- Share your favorite recipes<br>
		- Learn about becoming vegan<br>
		<a href="signup.php">
			<div class="btn-group btn-group-lg" id="regcta">
  				<button type="button" class="btn btn-primary">
  					Register Now!
  					<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				</button>
 			</div>
 		</a>
	</div>


<?php include("../models/footer.php"); ?>


</body>

</html>