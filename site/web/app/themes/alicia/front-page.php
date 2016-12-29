<!-- SECTION REHEARSE -->
<div id="section-rehearse">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1>Rehearse</h1>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <h4>Equipment</h4>
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
          <?php 
            $page = get_page_by_title('prices_table'); 
            $post = get_post($page->ID); 
            $content = apply_filters('the_content', $post->post_content); 
            echo $content;  
          ?>           
          </div>
        </div>
        <div class="text-center">
          <h3>So to conclude, a Fat Tank Residency gets you:</h3>
        </div>
        <?php
          $page = get_page_by_title('residency_list');
          $post = get_post($page->ID);
          $content = apply_filters('the_content', $post->post_content);
          echo $content;
        ?>
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
<div id="section-record">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1>Record</h1>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0">
        <div class="record-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/control_window.jpg" class="img-responsive"></div>
      </div>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-0">
        <?php echo wpautop(get_theme_mod('record_text')); ?>
        <?php 
          $page = get_page_by_title('tech_spec'); 
          $post = get_post($page->ID); 
          $content = apply_filters('the_content', $post->post_content); 
          echo $content;  
        ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-5 col-md-offset-0">
        <div class="record-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/control_desk.jpg" class="img-responsive"></div>
      </div>
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-7 col-md-offset-0">
        <div class="text-center">
          <h3>Past Recorded Artist</h3>
        </div>
        <?php 
          $page = get_page_by_title('past_recorded_artists'); 
          $post = get_post($page->ID); 
          $content = apply_filters('the_content', $post->post_content); 
          echo $content;  
        ?>
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
<div id="section-residents" class="row section-residents">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1>Residents</h1>
  </div>
</div>
<div class="row section-residents">
  <div class="col-md-10 col-md-offset-1">
    <?php echo do_shortcode(get_theme_mod("residents_gallery_shortcode")); ?>
    <?php 
      $page = get_page_by_title('bands_in_residence'); 
      $post = get_post($page->ID); 
      $content = apply_filters('the_content', $post->post_content); 
      echo $content;  
    ?>   
  </div>
</div>


<!-- SECTION RADIO -->
<div class="row section-radio">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1>Radio</h1>

    <p> Watch this space. . . </p>
  </div>
  <!--<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
    <p> Watch this space. . . </p>
  </div>-->
</div>


<!-- SECTION ABOUT -->
<div id="section-about">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h1>About</h1>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <?php echo wpautop( get_theme_mod('about_text')) ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 text-center">
        <h3>Gallery</h3>
      </div>
      <div class="col-xs-12">
        <div class="gallery">
          <?php echo do_shortcode(get_theme_mod("studio_gallery_shortcode"));?>
        </div>
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
            <div class="team-img">
              <img src='<?php echo esc_url( get_theme_mod( 'team_one_image' ) ); ?>' class="img-circle img-responsive">
            </div>
            <div class="team-info">
            <h4><?php echo get_theme_mod('team_one_name');?></h4>
            <p class="role"><?= get_theme_mod('team_one_title');?></p>
            <p><?= get_theme_mod('team_one_email');?></p>
            <p><?= get_theme_mod('team_one_phone');?></p>
            </div>
          </div>
          <div class="col-xs-12 col-sm-6">
            <div class="team-img"> 
              <img src="<?= esc_url( get_theme_mod('team_two_image')); ?>" class="img-circle img-responsive">
            </div>
            <div class="team-info">
            <h4><?= get_theme_mod('team_two_name');?></h4>
            <p class="role"><?= get_theme_mod('team_two_title');?></p>
            <p><?= get_theme_mod('team_two_email');?></p>
            <p><?= get_theme_mod('team_two_phone');?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- SECTION CONTACT -->
<div id="section-contact" class="row section-contact">
  <div class="col-md-8 col-md-offset-2 text-center">
    <h1>Contact</h1>
  </div>
</div>
<div class="row section-contact">
  <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-1">
    <div id="contact-form-response" class="hidden">
    </div>
    <form id="contact-form" action="" method="post" class="form-horizontal">
      <div class="form-group">
      <label for="message_name" class="col-md-2 control-label">Name:</label>
        <div class="col-md-10">
        <input type="text" name="message_name" value="" class="form-control" id="message_name">
        </div>
      </div>     
      <div class="form-group">
        <label for="message_email" class="col-md-2 control-label">Email:</label>
        <div class="col-md-10">
          <input required type="email" name="message_email" class="form-control" id="message_email">
        </div>
      </div>
      <div class="form-group">
        <label for="message_text" class="col-md-2 control-label">Message:</label>
        <div class="col-md-10">
          <textarea required id="message_text" name="message_text" class="form-control" rows="8"></textarea>
        </div>
      </div>
      <div class="form-group">    
        <label for="message_human" class="col-md-2 control-label">Human Check:</label>
        <div class="col-md-10">
          <input required type="text" class="form-control" name="message_human" id="message_human"> + 3 = 5</label>
        </div>
      </div>
      <input type="hidden" name="submitted" value="1">
      <div class="form-group">
        <div class="col-md-offset-9 col-md-3">
          <button id="submit" type="submit" class="btn btn-default">Send</button>
        </div>
      </div>
    </form>
  </div>
  <div id="contactDivider" class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0">
    <div class="contact-details">
      <address>
        Unit 3B <br>
        167 Hermitage Road <br>
        Manor House <br>
        N4 1LZ
      </address>
      <p> <?php echo get_theme_mod('contact_email'); ?> </p>
    </div>
      <div id="map"></div>
  </div>
</div>

