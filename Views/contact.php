<?php session_start(); 
/* --VEG BUDDY 
*************
contact.html
*************
 6/12/16
*/
?>

<?php include("../models/header.php"); ?>

  <!-- contact form -->
	 <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
          <h1>Contact Us</h1>
          <p class="lead"></p>
          <form id="contact-form" method="post" action="contact.php" role="form">
            <div class="messages"></div>
            <div class="controls">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">First Name</label>
                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *" required="required" data-error="Firstname is required.">
                    <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_lastname">Last Name</label>
                  <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *" required="required" data-error="Lastname is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_email">Email</label>
                  <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *" required="required" data-error="Valid email is required.">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="form_phone">Phone</label>
                  <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Please enter your phone">
                  <div class="help-block with-errors"></div>
                </div>
              </div>
            </div>
            <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label for="form_message">Message</label>
                  <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                <div class="help-block with-errors"></div>
              </div>
            </div>
            <div class="col-md-12">
                <input type="submit" class="btn btn-primary btn-send btn-group-lg" value="Send message" style="text-transform: uppercase;">
            </div>
            </div>
            <div class="row">
              <div class="col-md-12"><br>
                <p class="text-muted"><strong>*</strong>These fields are required.</p>
            </div>
          </div>
        </div>
      </form>
      <section id="contact">
        <iframe id="contactmap" frameborder="0" style="border:0"
          src="https://www.google.com/maps/embed/v1/place?q=place_id:Eic0MDMgRXVjbGlkIEF2ZSwgU3lyYWN1c2UsIE5ZIDEzMjEwLCBVU0E&key=AIzaSyAld9bHnu2Bust4-MTCdETeP-wi2BJHM4M" allowfullscreen>
        </iframe>
        <p>WEB EARTH COOP. | 403 EUCLID AVE. | SYRACUSE, NY 13023 | WEBEARTHCOOP.NET | 315 - 555 - 1600</p>
      </section>
      </div>
    </div>
  </div>

<?php include("../models/footer.php"); ?>


</body>

</html>