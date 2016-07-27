<?php session_start();
/* VEG BUDDY 
*************
upload.php
*************
 7/26/16 */?>
<?php
$user="root";  //sets the username of the server to  variables
$pass="root";   //sets the password of the username to the variables
$dbh = new PDO('mysql:host=localhost;dbname=vegbuddy;port=8888', $user, $pass); //PDO set into var $dbh - query string links to server and we're given username and pw

include("../models/header.php");

    $uploaddir = '../images/upload/'; //physical path on Apache
    $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

    if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
        echo "File is valid, and was successfully uploaded.\n";

        $link_address = 'inbox.php';
        echo '<br><a href=' . $link_address . '>Back to my profle!</a>';
        $dbh = new PDO('mysql:host=localhost;dbname=vegbuddy;port=8888', $user, $pass); 

        $uploaddir = '../images/upload/'; //physical path on Apache
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

        $userfile = $uploadfile; //get POST values from form - userfile
        $stmt = $dbh->prepare("INSERT INTO photo (userfile) VALUES (:userfile);");  //prepare statement calling clients table and setting var for the different columns
        $stmt->bindParam(':userfile', $userfile); //sets binding paramater that binds sql data to php data - firstname
        $stmt->execute();  //executes the code to transform sql to php
        die(); 
    } else {
        echo "Possible file upload attack!\n";
    }
    echo "<br /><br /><br />";

    include("../models/footer.php");
?>