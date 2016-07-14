<?php
session_start();
/*--VEG BUDDY 
*************
recipes.html
*************
 6/2/16
  modified on 7/14/16 for PHP transform
*/

 ?>

<?php include("../models/header.php"); ?>


	<!--VEGAN OF THE WEEK -->
  <div class="container" id="toprow">
    <div id="vegweek" class="container">              
      <h3>VEGAN OF THE WEEK</h3>
      <img src="images/veg_week.jpg">
      <h2>ALLISON MCKENNA</h2>
      <p>She has been a vegan for several years. Allison spends her free time working in animal shelters and dog rescues. Allison
        has rescued over 50 pets in her home town from busy city streets, abusive homes, etc. She devotes her life to being
        an advocate for animals and loves every second of it. She claims her love of animals ultimately lead her to starting
        a vegan lifestyle. "It just made sense" Allison says.</p>
    </div>

  

  <!-- RECIPES -->
  <div id="recrecipe" class="container">
  <h3>RECIPES</h3>
    <div id="siderec">           
      <a href="breakfast.php">Breakfast</a><br>
      <a href="lunch.php">Lunch</a><br>
      <a href="dinner.php">Dinner</a><br>
      <a href="dessert.php">Dessert</a><br>
      <a href="appetizers.php">Appitzers</a><br>
      <a href="snacks.php">Snacks</a><br>
      <a href="drinks.php">Drinks</a>
    </div>

    <div id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          THREE BEAN CHILI
          </a>
      </h4>
    </div>
    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Collapsible Group Item #2
        </a>
      </h4>
    </div>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Collapsible Group Item #3
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
    </div>
  </div>
</div>
    

  </div>

<?php include("../models/footer.php"); ?>


</body>

</html>