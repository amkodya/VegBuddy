

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="description" content="Vegan Social Network">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>VegBuddy - The New Hub for Vegans Everywhere</title>
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>

</head>
<body>

	<!-- HEADER -->
	<header>
		<div class="container" id="headercust">
        	<div class="navbar-header">
				<img id="mainlogo" src="../images/white_logo.png"><br>
				<h5>The New Hub for Vegans Everywhere</h5>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            	<span class="sr-only">Toggle navigation</span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
            	<span class="icon-bar"></span>
         		</button>
          	</div>

       		<div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><!--<img src="user_pic.png"--><a href="login.html">Login</a></li>
                <li id="divider">&nbsp;|&nbsp;</li>
                <li><a href="signup.php">Sign-Up</a></li>
            </ul>
          <!--  <ul class="nav navbar-nav">
                <li class="active"><a href="#">Hello Username!</a></li>
                <li id="divider">&nbsp;|&nbsp;</li>
                <li><a href="#about">3 Messages</a></li>
                <li id="divider">&nbsp;|&nbsp;</li>
                <li><a href="#contact">Logout</a></li>
            </ul> -->
    		</div><!--/.nav-collapse -->
    	
    		<div id="search">
				<form id="newsearch" method="get" action="http://www.google.com">
		        	<input type="text" id="searchbox" placeholder="&nbsp;&nbsp;SEARCH VEGBUDDY" style="color:#d4d4d4;"></input>
		        	<button type="submit" class="btn btn-primary" aria-label="Left Align">
  						<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
					</button>
				</form>
			</div>
		</div>
	</header>

	<nav class="navbar navbar-inverse" id="subnav">
  		<ul class="nav navbar-nav">
  			<li style="margin-left:2%;"><a href="../index.html">Home</a></li>
  			<li class="dropdown">
  				<a class="dropdown-toggle" data-toggle="dropdown" role="button" 
  				aria-haspopup="true" aria-expanded="false">Recipes<span class="caret"></span></a>
          		<ul class="dropdown-menu">
                <li><a href="breakfast.php">Breakfast</a></li>
                <li><a href="lunch.php">Lunch</a></li>
                <li><a href="dinner.php">Dinner</a></li>
                <li><a href="dessert.php">Dessert</a></li>
                <li><a href="snacks.php">Snacks</a></li>
                <li><a href="appetizers.php">Appetizers</a></li>
                <li><a href="drinks.php">Drinks</a></li>
          		</ul>
  			</li>
  			<li><a href="users.php">Users</a></li>
  		<!--	<li><a href="#">Chatrooms</a></li> -->
  		</ul>
	</nav>