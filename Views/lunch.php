<?php
session_start();
/* VEG BUDDY 
*************
lunch.php
*************
 6/2/16
 modified on 7/14/16 for PHP transform
 */
?>

<?php include("../models/header.php"); ?>

  <!--REC OF THE WEEK -->
  <div class="container" id="toprow">
    <div id="featrec" class="container">              
      <h3>FEATURED RECIPE</h3>
      <img src="../images/cauli.jpg">
      <h2>Roasted Cauliflower Bites with Nacho Cheese</h2>
      <p><strong>Cauliflower</strong><br>
        - 1 head cauliflower<br>
        - 1 teaspoon mild chili powder<br>
        - 1/2 teaspoon salt (optional or to taste)<br>
        - 1/2 teaspoon ground cumin<br>
        - 1/2 teaspoon smoked paprika<br>
        - 1/2 teaspoon garlic powder<br>
        - 1/4 teaspoon chipotle chile powder (optional)<br><br>
        Preheat oven to 400F. Line a baking sheet with parchment paper or silicone baking mat.<br><br>
        Cut the cauliflower into individual bite-sized florets. Try to keep them about the same size. Rinse them in a colander under running water. Shake off excess water but don’t dry. Spread them out on the baking sheet.<br><br>
        Combine all seasonings in a small bowl. Sprinkle over the cauliflower, turning the florets so that all sides are seasoned. Bake in preheated oven for 15 minutes; turn florets and bake another 15 minutes or until they are beginning to brown in spots. Remove and serve warm with nacho cheese or other dipping sauce.<br>
        <br><strong>Cheese Sauce</strong><br>
        - 1 cup plain, sugar-free non-dairy milk<br>
        - 1/4 cup nutritional yeast<br>
        - 1/4 cup mashed sweet potato<br>
        - 2 tablespoons potato starch or cornstarch<br>
        - 1 tablespoon lemon juice<br>
        - 1/2 -3/4 teaspoon salt (optional or to taste)<br>
        - 1/2 teaspoon dry mustard<br>
        - 1/8 teaspoon garlic powder<br>
        - 1/8 teaspoon onion powder<br>
        - 1/8 teaspoon ground cumin<br>
        - 1 10-ounce can Rotel Diced Tomatoes and Chilies, drained and liquid reserved
        chipotle powder, to taste<br><br>
        Put all ingredients except Rotel tomatoes and chipotle into the blender. Blend at high speed until smooth. Pour into a saucepan and cook, stirring constantly, over medium-high heat until boiling. Reduce heat to low and continue cooking and stirring until mixture becomes very thick. Stir in the drained tomatoes. If sauce is too thick, add a tablespoon or so of the reserved tomato liquid. Check seasoning, and add chipotle powder to taste if you’d like it spicier.<br><br>
        Serve warm with Roasted Cauliflower Bites, tortilla chips, or crackers or atop burritos and tacos.<br>

    </p>
    </div>

  <div class="container" id="toprow">
    <div id="vidrec" class="container">              
      <h3>VIDEO RECIPE</h3>
      <iframe id="vidrecvid" src="https://www.youtube.com/embed/bUABKdpdmt4" frameborder="0" allowfullscreen></iframe>
      <h2>Make Vegan Bacon Using Rice Paper | The Edgy Veg</h2>
      <p><strong>Ingredients</strong><br>
        - 8-10 pieces rice paper<br>
        - 2 Tbsp olive oil<br>
        - 2 Tbsp nutritional yeast<br>
        - 3 Tbsptamari (or soy sauce if you don't have tamari)<br>
        - ½ Tbsp garlic powder<br>
        - ¼ tsp liquid smoke (you can also sub 1 Tbsp bbq sauce if you do not have access to liquid smoke)<br>
        - ½ Tbsp maple syrup<br>
        - ¼ tsp ground black pepper<br>
        - ¼ tsp of Hungarian paprika<br><br>
      <strong>Instructions</strong><br>
        Cut rice paper into thick strips,by laying two sheets on top of one another. Use a large, very sharp knife to cut the sheets into strips by placing the blade onto the paper and pressing firmly. The rice paper will crack a bit- but using a very sharp knife should eliminate major breakage.<br><br>
        Preheat the oven to 400F.<br><br>
        Prepare 2 baking sheets with sheets of parchment paper.<br><br>
        In a bowl, whisk together all the ingredients except the rice paper. This will become your marinade.<br><br>
        Prepare a second wide bowl filled partway with water.<br><br>
        Take two strips with similar length and shape and lay them side by side. Using a pastry brush, brush each sheet with water and stack them one on top of the other. They should start to stick together.<br><br>
        Brush water along the side facing you and, holding them together, flip the paper over and brush that side with water.<br><br>
        Lay on a piece of parchment or a cutting board and do this with as many pieces as you can until you run out of space.<br><br>
        Once you've run our of space or rice paper- whichever comes first- using dry pastry brush (do not using the one you used for water- it will dilute the marinade) and brush the marinade onto one side of the now fused rice paper strip, and lay marinade side down onto the baking pan.<br><br>
        Now brush the marinade onto the strip facing you,coat generously. Both side should now have marinade on them.<br><br>
        Repeat technique with remaining rice paper strips until the baking sheet is filled, whisking the marinade every so often to prevent separation.<br><br>
        Bake for about 7 to 8 minutes, until crisp.<br><br>
        The strips burn easily, so keep an eye on the baking sheet and remove from sheet right away.<br><br>
        You can store leftover rice paper bacon in an airtight container at room temperature for up to 3 days, or in the fridge for a few weeks.<br><br><br>
    </p>
    </div>
  

  <!-- RECIPES -->
  <a name="recipe"></a>
  <div id="recrecipe" class="container">
  <h3>RECIPES</h3>
    <div id="siderec">           
      <a href="breakfast.php#recipe">Breakfast</a><br>
      <a href="lunch.php#recipe"><b>Lunch</b></a><br>
      <a href="dinner.php#recipe">Dinner</a><br>
      <a href="dessert.php#recipe">Dessert</a><br>
      <a href="appetizers.php#recipe">Appitzers</a><br>
      <a href="snacks.php#recipe">Snacks</a><br>
      <a href="drinks.php#recipe">Drinks</a>
    </div>

    <div id="accordion" role="tablist" aria-multiselectable="true">
      <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
          <h4 class="panel-title">
            <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <img src="../images/couschickfencit.jpeg" id="smallrecipepagepics">
              Couscous With Chickpeas, Fennel, and Citrus
            </a>
          </h4>
        </div>
      <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
        <p><br>- 1 large fennel bulb with fronds<br>
          - 3 tablespoons olive oil, divided<br>
          - 1/2 teaspoon ground coriander<br>
          - 1 1/2 cups (or 1 15-ounce can) cooked and drained chickpeas<br> 
          - 10 Kalamata olives, halved and pitted<br>
          - Zest and juice of 1/2 lemon<br>
          - Zest and juice of 1 orange<br>
          - 1/2 teaspoon salt<br>
          - 1 cup instant couscous<br>
          <br>
          Trim fennel and cut into 1/4-inch thick wedges. Reserve fronds for garnish.<br>
          <br>
          Heat 2 tablespoons olive oil in a large skillet over medium heat. Add fennel and cook, stirring occasionally, until tender and caramelized, about 10-15 minutes. Add coriander, chickpeas, olives, and lemon juice to pan and stir to combine. Continue to cook over medium heat, stirring occasionally.<br>
          <br>
          Meanwhile, juice the orange into a liquid measuring cup and top off with water to make 1 1/2 cups of liquid. Add liquid to a small saucepan along with 1 tablespoon olive oil, orange zest, lemon zest, and salt. Bring to a boil and stir in couscous. Cover, remove from heat, and let stand for at least 5 minutes.<br>
          <br>
          To serve, fluff couscous grains with a fork and spread on a dish. Spoon chickpeas and fennel over couscous and garnish with fennel fronds.<br>
        </p>
      </div>
    </div>

    <div class="panel panel-default">
      <div class="panel-heading" role="tab" id="headingTwo">
        <h4 class="panel-title">
          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <img src="../images/spicylentilwrap.jpg" id="smallrecipepagepics">
            Spicy Lentil Wraps with Tahini Sauce
          </a>
        </h4>
      </div>
      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <p><br>For the Red Pepper Paste (makes about 3/4 cup):<br>
        - 6 medium red bell peppers, cored and chopped<br>
        - 1/2 teaspoon cayenne pepper<br>
        - 1 teaspoon kosher salt<br> 
        - Olive oil to cover (if refrigerating)<br>
        <br>
        For the lentil filling:<br>
        - 1/2 cup red lentils, rinsed<br>
        - 3/4 cups fine grain (#1) bulgur<br>
        - 2 tablespoons olive oil<br>
        - 1 medium onion, finely chopped<br>
        - 2 teaspoons ground cumin<br>
        - 1 teaspoon red pepper flakes<br>
        - 1 scallion, chopped<br>
        - 2 tablespoons chopped flat-leaf parsley<br>
        - 1/2 teaspoon kosher salt<br>
        <br>
        For the tahini dipping sauce (makes 3/4 cup):<br>
        - 1/4 cup tahini<br>
        - 2 teaspoons lemon juice<br>
        - 2 teaspoons finely chopped parsley<br>
        - 1/4 teaspoon crushed garlic<br>
        - 1/8 teaspoon red pepper flakes<br>
        - 1/8 teaspoon kosher salt<br>
        <br>
        To assemble the wraps:<br>
        - 6 (approximately 9x12-inch) sheets lavash, white or whole wheat<br>
        - 2 cups shredded cabbage<br>
        <br>
        To make the red pepper paste: Combine bell peppers, cayenne pepper, and salt in a food processor and puree. Pour the puree into a skillet over low heat and simmer, stirring occasionally, until reduced to a paste. This can take up to 2 hours. Let cool before using. To store, pack the paste into a jar, pour enough olive oil on top to cover, and refrigerate.<br>
        <br>
        To make the lentil filling: Combine lentils and 2 cups of water in a small saucepan over medium heat. Bring to a boil, cover, and reduce heat to low. Simmer until lentils are soft, about 20 minutes. Turn off heat and stir in bulgur. Let stand until water is absorbed and bulgur is soft, about 30 minutes.<br>
        <br>
        Meanwhile, heat olive oil in a pan over medium heat. Add onions and cook, stirring frequently, until soft and translucent. Stir in cumin and red pepper flakes and cook for another minute.<br>
        <br>
        Add onions, scallions, parsley, and salt to lentil-bulgur mixture and stir until well combined. Let cool before using to make wraps. (If you want a smoother texture closer to the Trader Joe's version, you can run the filling through a food processor, but I like it just as it is.) You can freeze the filling in an airtight container if not using all at once.<br>
        <br>
        To make the tahini dipping sauce: Place all ingredients in a small bowl with 2/3 cup of warm water, and mix with a fork until well combined. Gradually stir in small amounts of additional warm water until the desired consistency is achieved.<br>
        <br>
        To assemble the wraps: Lay out a lavash sheet with the shorter end closest to you. Spread 1 1/2 tablespoons of red pepper paste across the lower 1/3 of the sheet. Top with the lentil-bulgur mixture, and then the cabbage. Roll from the bottom up, and spread an additional 1/2 tablespoon of red pepper paste across the top end to help seal the wrap. Repeat for remaining wraps.<br>
        <br>
        To serve, cut each wrap in half and serve with tahini sauce on the side.<br>
        <br>
        Recipe Notes<br>
        You can substitute store-bought red pepper paste or mild harissa for the homemade version in this recipe.<br></p>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <img src="../images/kalequinoasalad.jpg" id="smallrecipepagepics">
          Kale & Quinoa Salad with Dates, Almonds & Citrus Dressing
        </a>
      </h4>
    </div>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <p><br>For the salad and toppings:<br>
        - 1 tablespoon olive oil<br>
        - 1 large onion, diced<br>
        - Salt<br>
        - 1/2 cup red quinoa<br>
        - 1 small clove garlic, smashed<br>
        - 1 bunch lacinato kale (3/4 to 1 pound, with stems)<br> 
        - 1/2 heaping cup whole dates<br>
        - 1/2 cup roasted salted whole almonds<br>
        <br>
        For the dressing: <br>
        - 1 clementine or mandarin orange, juiced<br>
        - 1/2 lime, juiced<br>
        - 2 teaspoons maple syrup<br>
        - 1/4 cup extra-virgin olive oil<br>
        - Salt and freshly ground black pepper<br>
        <br>
        Heat the olive oil in a wide sauté pan over medium heat. Add the onion and sprinkle lightly with salt. Cook, stirring occasionally, until the onion has darkened to a toasty brown and smells caramelized — about 20 minutes. Remove from the heat and set aside. You should have about 1/2 cup of cooked onions. (This can be done up to 3 days ahead of time, and the onions can be refrigerated.)<br>
        <br>
        Rinse the quinoa in a fine mesh strainer. Add it and the garlic to a 2-quart saucepan set over medium-high heat and sauté for about a minute both to dry the grain and toast it lightly. Add 1 cup water and 1/2 teaspoon salt and bring to a boil. Cover and turn the heat to low; cook for 15 minutes. Turn off the heat but leave the lid on for an additional 5 minutes. After 5 minutes, remove the lid and fluff with a fork.<br>
        <br>
        While the onions are caramelizing and the quinoa is cooking, slice off the muddy bottoms of the kale stems, then slice the rest of the bunch into fine ribbons. Wash thoroughly and spread on a towel to dry.<br>
        <br>
        Pit the dates and slice them into quarters. Roughly chop the almonds, by which I mean try to chop each almond into just two or three pieces, no more.<br>
        <br>
        Make the dressing: Whisk the juices together (you should have about 1/4 cup total of juice, or a little less). Whisk in the maple syrup and olive oil. The dressing will be emulsified but still thin. Stir about 2 tablespoons of the dressing into the quinoa after it finishes cooking.<br>
        <br>
        Assemble the salad: Toss the kale with all of the still-warm quinoa and the caramelized onions. Toss with about half the dressing and taste. Add the remaining dressing if desired, then toss with the dates and almonds. Taste a bite; if it needs more salt, add it now, as well as fresh pepper if desired.<br>
        <br>
        This salad keeps very well; the kale gets more tender as it sits in the dressing. Refrigerate for up to 5 days.<br></p>
      </div>
    </div>
  </div>

  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <img src="../images/curriedtofusalad.jpg" id="smallrecipepagepics">
          Curried Tofu Salad
        </a>
      </h4>
    </div>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <p><br>- 1/3 cup golden raisins<br>
        - 1 teaspoon yellow mustard seeds<br>
        - 1/4 cup apple cider vinegar<br>
        - 1 pound extra firm tofu<br>
        - 2 tablespoons roasted pumpkin seeds<br> 
        - 1 scallion, chopped<br>
        - 1 tablespoon chopped parsley<br>
        - 1/2 cup vegan mayonnaise (homemade or store-bought)<br> 
        - 2 tablespoons curry powder<br>
        - 3/4 teaspoon kosher salt<br> 
        - Freshly ground black pepper<br>
        <br>
        Place the raisins and mustard seeds in a small heatproof bowl. Bring the apple cider vinegar to a boil and pour it over the raisins and mustard seeds. Let them soak for at least 10 minutes (longer is even better).<br>
        <br>
        Rinse and drain the tofu and gently press it between towels to rid of excess water. Place the tofu in a large bowl and roughly crumble it using your hands or a fork. Add the raisins and mustard seeds (along with any excess vinegar), pumpkin seeds, scallions, and parsley.<br>
        <br>
        In a separate bowl, stir together the mayonnaise, curry powder, salt, and pepper to taste. Add this to the tofu mixture and stir until thoroughly combined. Taste and adjust seasonings if desired.<br>
        <br>
        Serve as a sandwich spread or on a bed of salad greens. To store, refrigerate in an airtight container for up to 3 days.<br></p>
      </div>
    </div>
  </div>
    

</div>

<?php include("../models/footer.php"); ?>


</body>

</html>