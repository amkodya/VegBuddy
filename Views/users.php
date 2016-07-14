<?php session_start(); ?>
<!--VEG BUDDY 
*************
users.html.html
*************
 6/23/16
-->
<?php

if(isset($_SESSION["message"])) {
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}

$user="root";  //sets the username of the server to  variables
$pass="root";   //sets the password of the username to the variables
$dbh = new PDO('mysql:host=localhost;dbname=vegbuddy;port=8888', $user, $pass); //PDO set into var $dbh - query string links to server and we're given username and pw

include ("../models/header.php");

    $stmt = $dbh->prepare('SELECT * FROM user order by iduser ASC;');  // selects all information from clients table in sql server in order of ascending clientid's
    $stmt->execute();     //execute the previous code that has $stmt variable
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);   //the result var is set which is the eviqualent of each line item in the sql server
    //The parameter means it will return an indexed array with each index containing an associative array of each row – do a var_dump($result); to see the array results
    //var_dump($result);

    ?>

    <div id="privacy" class="container"> 
			<h3>VEG BUDDY USERS</h3>             
			<table class="table table-hover">
        <tr>
          <td>First Name</td>
          <td>Last Name</td>
          <td>Zip code</td>
          <td>E-Mail</td>
        </tr>

    <?php


    foreach  ($result as $row) {  //foreach loop that will itirate through all the results and set them as var row
        echo '<tr><td>' .$row['firstname']. '</td><td>' .$row['lastname']. '</td><td>' . $row['zip'] . '</td><td>' .$row['email']. '</td></tr>';
    } //echo out every instance of clientid and also display their name, phone#, email, website and forreach loop will not end unless there is no more data

    ?> <!-- close php code  -->

			
				
			</table>
		</div>

<?php include("../models/footer.php"); ?>


</body>

</html>
