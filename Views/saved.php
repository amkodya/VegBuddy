<?php session_start(); 
/* VEG BUDDY 
*************
saved.html
*************
 6/2/16
   modified on 7/14/16 for PHP transform
 */
?><?php 
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
      <a href="myfriends.php">My Friends</a><br>
    </div>

  <!-- RECIPES -->
  <div id="dashboard" class="container">
  <h3>Messages</h3>
    <div id="dashboardlinks">           
      <a href="inbox.php">Inbox (3)</a><br>
      <a href="saved.php"><b>Saved</b></a><br>
      <a href="deleted.php">Deleted</a><br>
    </div>

     <a name="dash">
    <div id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Mike Russo | 6/22/16 | 1:27pm | Roomate
          </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      Hey there! My roommate and I are looking for another housemate. We live in a large apartment in Upper Darby. There are two bedrooms and a spacious living area. The rent is $250 a month, which includes cable, internet, electric, and water. 

My roommate and I are both vegans and will only live with another vegan. IF YOU AREN'T A VEGAN, YOU NEED NOT APPLY. We are looking for someone who will help with the cooking, in addition to the rent. 

If you are a vegan and want to live with two vegans who respect your personal space, please e-mail us. Include some information about yourself, including your source of income.
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Mary Stevens | 6/21/16 | 12:03pm
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            dogs can eat a vegetarian diet and thrive. While this topic is certainly interesting to vegetarians, owners who don't have issues feeding their dogs meat should also pay attention. Here's why: It is true that dogs belong to the order Carnivora, but they are actually omnivores
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Philip Wilson | 6/21/16 | 9:31am | Fwd: You Know You're Vegan when...
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      1. You have grown weary of the constant vegan jokes.
wifflegif.com
2. “What if you get trapped on a desert island.”
"What if you get trapped on a desert island."
imgur.com
3. “Plants have feelings too but you still eat those.”
giphy.com
4. “Do you mind if I eat meat in front of you?”
gif-central.blogspot.com
5. Everyone around you is an expert on nutrition.
blogger.com
6. “Where do you get your protein fr…”
"Where do you get your protein fr..."
imgur.com
7. People are constantly asking why you went vegan.
 27 Things You Know When You&#39;re The Only Vegan In The Village
adorable-gifs.tumblr.com
8. And when you explain they get mad at your for “preaching”.
goodreads.com
9. You have your own pans, plates, and cutlery to avoid any possible meat residue left by your parents/roommate.
You have your own pans, plates, and cutlery to avoid any possible meat residue left by your parents/roommate.
testkitchentuesday.com
10. Strangers tell you about the time they went vegetarian for a couple of weeks.
imgfave.com
11. But that they gave it up because they “could NEVER stop eating bacon.”
gifrific.com
12. Everyone assumes you eat this.
Everyone assumes you eat this.
Nikolay Trubnikov / Thinkstock
13. But your diet mostly consists of these…
But your diet mostly consists of these...
Stacey Newman / Thinkstock
14. And definitely a lot of these…
And definitely a lot of these...
15. Your relationship with hummus is next-level.
anarmyoflepers.tumblr.com
16. You automatically refuse all hors d’oeuvres, buffet items, and birthday cakes.
google.co.uk
17. And you don’t even bother trying to attend BBQs.
benedictcumberbatchruinedme.tumblr.com
“You can use the grill once we’re done.”
18. Your friends always want to meet at restaurants where you can only eat the side salad.
    </div>
  </div>
</div>
    </div>  

  </div>


<?php include("../models/footer.php"); ?>


</body>

</html>