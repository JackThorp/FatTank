
<footer>
  <div class="container-fluid">
    <div class="row">
      <!--.col-sm-1.col-sm-push-3- -->
      <div class="col-xs-6 col-sm-2 col-sm-push-3">
        <ul class="footer-links">
          <li><a href="#section-start">Start</a></li>
          <li><a href="#section-rehearse">Rehearse</a></li>
          <li><a href="#section-record">Record</a></li>
          <li><a href="#section-residents">Residents</a></li>
          <li><a href="#section-radio">Radio</a></li>
        </ul>
      </div>
      <!--.col-sm-1.col-sm-push-3-->
      <div class="col-xs-6 col-sm-2 col-sm-push-3">
        <ul class="footer-links">
          <li><a href="#section-about">About</a></li>
          <li><a href="#section-contact">Contact</a></li>
          <!-- Invisible links maintains layout -->
          <li class="invis-li">bla </li>
          <li class="invis-li">bla </li>
          <li class="invis-li">bla </li>
        </ul>
      </div>
      <div class="col-xs-12 col-sm-2 col-sm-push-3">
        <div class="footer-social-links">
          <h2>Follow us</h2>
          <div class="social-links">
            <a href="<?php echo get_theme_mod('facebook_address'); ?>" target="_blank">
              <i aria-hidden="true" class="fa fa-facebook fa-3x"></i>
            </a>
            <a href="<?php echo get_theme_mod('twitter_address'); ?>" target="_blank">
              <i aria-hidden="true" class="fa fa-twitter fa-3x"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-3 col-sm-push-3">
        <!--<p>Join our mailing list</p>-->
        <!-- Begin MailChimp Signup Form -->
        <form action="//fattankstudios.us1.list-manage.com/subscribe/post?u=6c93bc63573138f3b915ec7cd&amp;id=1d6a490633" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="mc-field-group">
	          <label for="mce-EMAIL">Join our mailing list</label>
          	<input type="email" value="" placeholder="email" name="EMAIL" class="form-control required email" id="mce-EMAIL">
            <input type="submit" style="display:none;" name="go" value="Submit"/>
          </div>
	        <div id="mce-responses" class="clear">
		        <div class="response" id="mce-error-response" style="display:none"></div>
	  	      <div class="response" id="mce-success-response" style="display:none"></div>
	        </div>    
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_6c93bc63573138f3b915ec7cd_1d6a490633" tabindex="-1" value=""></div>
          <!--
          <div class="clear">
            <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
          </div>
          -->
        </form>
        <!--End mc_embed_signup-->
      </div>
      <div class="col-xs-12 col-sm-3 col-sm-pull-9">
        <img src="<?= get_template_directory_uri(); ?>/dist/images/Fattank-logovit.png">
      </div>
    </div>
  </div>
</footer>

