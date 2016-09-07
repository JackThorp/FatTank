<!-- SECTION REHEARSE -->
<div id="section-rehearse" class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1>Rehearse</h1>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h4>List equipment</h4>
        <?php echo wpautop( get_theme_mod('equipment_text')) ?> 
        <div class="text-center">
          <h3> Fat Tank offers one-off slots and residency packages: </h3>
        </div>
        <h4>One-off Slots</h4>
        <?php echo wpautop( get_theme_mod('oneoff_text')) ?> 
        <h4>Residencies</h4>
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <?php echo wpautop( get_theme_mod('residencies_text')) ?> 
         </div>
          <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-4 col-md-push-0">
            <div class="prices-table one">
              <div class="table-row">
                <div class="cell">Sessions PCM</div>
                <div class="cell">Fee</div>
              </div>
              <div class="table-row">
                <div class="cell">12</div>
                <div class="cell">£450</div>
              </div>
              <div class="table-row">
                <div class="cell">10</div>
                <div class="cell">£400</div>
              </div>
              <div class="table-row">
                <div class="cell">8</div>
                <div class="cell">£340</div>
              </div>
              <div class="table-row">
                <div class="cell">6</div>
                <div class="cell">£275</div>
              </div>
              <div class="table-row">
                <div class="cell">4</div>
                <div class="cell">£200</div>
              </div>
            </div>    
          </div>
        </div>
        <div class="text-center">
          <h3>So to conclude, a Fat Tank Residency gets you:</h3>
        </div>
        <ul class="residency-list">
          <li>Personal storage area</li>
          <li>Keys to studio</li>
          <li>Parking</li>
          <li>Access to online calendar</li>
          <li>Shower room (hose down after a sweaty gig)</li>
          <li>Kitchen Area - Fully stocked tea / coffee making facilities</li>
          <li>Whole Lotta Fat Tank Lovin</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- SECTION CONTACT BANNER -->
<!--<div class="container-fluid">-->
  <div class="row">
    <div class="contact-banner">
      <div class="col-xs-12">
        <p>For viewings and bookings get in touch : <?php echo get_theme_mod('contact_email'); ?> // <?php echo get_theme_mod('contact_number'); ?></p>
      </div>
    </div>
  </div>
<!--</div> -->

<!-- SECTION RECORD -->
<div id="section-record" class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1>Record</h1>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-xs-12 col-md-5">
        <div class="record-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/control_window.jpg" class="img-responsive"></div>
      </div>
      <div class="col-xs-12 col-md-7">
        <?php echo wpautop(get_theme_mod('record_text')); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="record-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/control_desk.jpg" class="img-responsive"></div>
      </div>
      <div class="col-md-7">
        <div class="text-center">
          <h3>Past Recorded Artist</h3>
        </div>
        <ul id="RecordedArtistsList">
          <li>Dooks</li>
          <li>Francobollo</li>
          <li>Mohit</li>
          <li>L.A Salami</li>
          <li>Lovepark</li>
          <li>Acrobat</li>
          <li>Elizabeth</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-md-10 col-md-offset-1">
        <div id="sc-player">
        <?php echo get_theme_mod("soundcloud_track"); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION RESIDENTS -->
<div class="row" id="section-residents">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1>Residents</h1>
  </div>
  <div class="col-md-10 col-md-offset-1">
    
    <?php echo do_shortcode("[metaslider id=36]"); ?>
<!--
  <?php query_posts('cat=4&showposts=3');
    if (have_posts()) : ?>
    <div id="myCarousel" data-ride="carousel" class="carousel slide">
      <div role="listbox" class="carousel-inner"> 
        <?php $count = 0; while (have_posts()): the_post(); ?>
        <div class="item <? if ($count==0): echo 'active'; endif; $count++;?>">
          <img src=<?php $image_id = get_post_thumbnail_id(); 
                        $image_url = wp_get_attachment_image_src($image_id,'full'); 
                        echo $image_url[0];?> alt="Chania" class="img-circle">
        </div>
        <?php endwhile; ?>
      </div>
      <a href="#myCarousel" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="fa fa-chevron-left fa-2x"></span><span class="sr-only">Previous</span></a>
      <a href="#myCarousel" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="fa fa-chevron-right fa-2x"><span class="sr-only">Next</span></span></a>
      <h2><?php echo the_title(); ?></h2>
    </div>
    <?php endif; wp_reset_postdata(); ?>
-->
    <table class="residents">
      <tr>
        <td>band1</td>
        <td>band4</td>
        <td>band7</td>
      </tr>
      <tr>
        <td>band2</td>
        <td>band5</td>
        <td>band8</td>
      </tr>
      <tr>
        <td>band3</td>
        <td>band6</td>
        <td>band9</td>
      </tr>
    </table>
  </div>
</div>


<!-- SECTION RADIO -->
<div class="row" id="section-radio">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1>Radio</h1>
  </div>
</div>


<!-- SECTION ABOUT -->
<div id="section-about" class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1>About</h1>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php echo wpautop( get_theme_mod('about_text')) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 text-center">
        <h3>Gallery</h3>
      </div>
      <div class="col-xs-12">
      <?php echo do_shortcode("[metaslider id=21]"); ?>
        <!--
        <div id="galleryCarousel" data-ride="carousel" class="carousel slide">
          <div role="listbox" class="carousel-inner">
            <div class="item active"><img src="<?= get_template_directory_uri(); ?>/dist/images/FT_tamborine.jpg" alt="Chania"></div>
            <div class="item"><img src="<?= get_template_directory_uri(); ?>/dist/images/FT_main.jpg" alt="Chania"></div>
            <div class="item"><img src="<?= get_template_directory_uri(); ?>/dist/images/FT_main_2.jpg" alt="Chania"></div>
            <div class="item"><img src="<?= get_template_directory_uri(); ?>/dist/images/FT_one.jpg" alt="Chania"></div>
            <div class="item"><img src="<?= get_template_directory_uri(); ?>/dist/images/FT_cables.jpg" alt="Chania"></div>
            <div class="item"><img src="<?= get_template_directory_uri(); ?>/dist/images/FT_door.jpg" alt="Chania"></div>
          </div><a href="#galleryCarousel" role="button" data-slide="prev" class="left carousel-control"><span aria-hidden="true" class="fa fa-chevron-left fa-2x"><span class="sr-only">Previous</span></span></a><a href="#galleryCarousel" role="button" data-slide="next" class="right carousel-control"><span aria-hidden="true" class="fa fa-chevron-right fa-2x"><span class="sr-only">Next</span></span></a>
        </div>
        -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="text-center">
          <h3>The team</h3>
        </div>
        <div class="row">
          <div class="col-xs-12 col-sm-6">
            <div class="team-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/nathan_square.jpg" class="img-circle img-responsive"></div>
            <div class="team-info">
              <h4>Daisy Dooks</h4>
              <p class="role">Founder / Managing Director / Assistant Engineer</p>
              <p>dooks@fattankstudio.co.uk</p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="team-img"> <img src="<?= get_template_directory_uri(); ?>/dist/images/nathan_square.jpg" class="img-circle img-responsive"></div>
            <div class="team-info">
              <h4>Nathan Coen</h4>
              <p class="role">General Manager / G.T.G (Go To Guy) / Recording Engineer</p>
              <p>contact@fattankstudios.co.uk</p>
              <p>07845528341</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION CONTACT -->
<div class="row" id="section-contact">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1>Contact</h1>
  </div>
  <div class="col-md-6 col-md-offset-1">
    <?php
 
      //response generation function
      $response = "";
 
      //function to generate response
      function my_contact_form_generate_response($type, $message){
 
        global $response;
 
        if($type == "success") $response = "<div class='col-sm-10 col-sm-offset-2 contact-success'>{$message}</div>";
        else $response = "<div class='col-sm-10 col-sm-offset-2 contact-error'>{$message}</div>";
 
      }
      
      //response messages
      $not_human       = "Human verification incorrect.";
      $missing_content = "Please supply all information.";
      $email_invalid   = "Email Address Invalid.";
      $message_unsent  = "Message was not sent. Try Again.";
      $message_sent    = "Thanks! Your message has been sent.";
       
      //user posted variables
      $name =     (isset($_POST['message_name'])    ? $_POST['message_name']  : ''); 
      $email =    (isset($_POST['message_email'])   ? $_POST['message_email'] : '');
      $message =  (isset($_POST['message_text'])     ? $_POST['message_text']  : '');
      $human =    (isset($_POST['message_human'])   ? $_POST['message_human'] : '');
       
      //php mailer variables
      $to = get_option('admin_email');
      $subject = "Someone sent a message from ".get_bloginfo('name');
      $headers = 'From: '. $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n";

      if(!$human == 0){
        if($human != 2) my_contact_form_generate_response("error", $not_human); //not human!
        else {
          //validate email
          if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            my_contact_form_generate_response("error", $email);
          else //email is valid
          {
            //validate presence of name and message
            if(empty($name) || empty($message)){
              my_contact_form_generate_response("error", $missing_content);
            }
            else //ready to go!
            {
              $sent = wp_mail($to, $subject, strip_tags($message), $headers);
              if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
              else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
            }
          }
        }
      }
      else if (isset($_POST['submitted'])) my_contact_form_generate_response("error", $missing_content);
    ?>
    <?php
      $front_page_id = get_option( 'page_on_front' );
      $home_permalink = _get_page_link( $front_page_id );  
    ?>
      <form id="contact-form" action="" method="post" class="form-horizontal">
      <div class="form-group">
      <label for="message_name" class="col-sm-2 control-label">Name:</label>
        <div class="col-sm-10">
        <input type="text" name="message_name" value="" class="form-control" id="name">
        </div>
      </div>     
      <div class="form-group">
        <label for="message_email" class="col-sm-2 control-label">Email:</label>
        <div class="col-sm-10">
          <input type="email" name="message_email" class="form-control" id="email">
        </div>
      </div>
      <div class="form-group">
        <label for="message_text" class="col-sm-2 control-label">Message:</label>
        <div class="col-sm-10">
          <textarea id="message" name="message_text" class="form-control" rows="8"></textarea>
        </div>
      </div>
      <div class="form-group">    
        <label for="message_human" class="col-sm-2 control-label">Human Check:</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="message_human"> + 3 = 5</label>
        </div>
      </div>
      <input type="hidden" name="submitted" value="1">
      <div class="form-group">
        <div class="col-sm-offset-9 col-sm-3">
          <button type="submit" class="btn btn-default">Send</button>
        </div>
      </div>
    </form>
  </div>
  <div id="contactDivider"class="col-md-4">
    <address>
      Unit 3B <br>
      167 Hermitage Road <br>
      Manor House <br>
      N4 1LZ
    </address>
    <p> contact@fattankstudios.co.uk </p>
    <div id="map"></div>
  </div>
</div>

