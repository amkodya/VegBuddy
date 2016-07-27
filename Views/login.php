<?php
/* VEG BUDDY 
*************
login.html
*************
 6/2/16
 modified 7/14/16 for PHP
*/
include("../models/header.php");
?>
	<!--LOGIN FORM -->
	<div class="container" id="login">
			<h3>&nbsp;&nbsp;&nbsp;LOGIN</h3>
		<form id="loginform" action="" method="post">
			<label>Username</label><br>
  			<input type="text" name="user" placeholder="Enter Username"><br></input>
  			<label>Password</label><br>
  			<input type="password" name="pass" placeholder="Enter Password"></input>
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