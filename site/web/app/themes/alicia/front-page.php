<!-- SECTION REHEARSE -->
<div id="section-rehearse" class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h1>Rehearse</h1>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <h4>List equipment</h4>
        <?php echo wpautop( get_theme_mod('equipment_text')) ?> 
        <!--<p>2 Rehearsal rooms / Mackie SRM450 V3 PA Speakers /Mackie ProFX12 mixer / 4 Mics (sm58) / 4 Mic stands (K&M) / XLRs. </p>
        <p>Guitar & Bass amps and a drum kit are also available to use at no extra charge. Bands also have full use of the shower room and kitchen area.</p>-->
        <div class="heading">
          <h3> Fat Tank offers one-off slots and residency packages: </h3>
        </div>
        <h4>One-off Slots</h4>
        <?php echo wpautop( get_theme_mod('oneoff_text')) ?> 
        <!--<p>Non-residency rehearsals are £50 for a day (11am – 6pm) or evening (6pm – 11pm). Simply get in touch at contact@fattankstudios.co.uk to book a time and get playing!</p>-->

        <h4>Residencies</h4>
        <div class="row">
          <div class="col-xs-12 col-md-8">
            <?php echo wpautop( get_theme_mod('residencies_text')) ?> 
            <!--
            <p>
              Instead of booking in every week and carting your instruments and amps across town, many
              bands choose to pay monthly for set rehearsals and storage. If you opt for a residency pack-age, 
              you’ll be given your own keys to the studio as well as your own personal storage area...
              meaning there's only one drop off after a gig. Resident bands can also trade two of their ses-sions
              to book out a full day using the recording studio. This allows you to capture the sound 
              you’ve been hearing in rehearsals and record your songs on site.* *additional engineering 
              fee may be charged.
          
            </p>
            <p>
              You’ll be given access to the online calendar, allowing you to book and alter slots yourself,
              no need to phone and no cancellation fee.
          
            </p>
            <p>
              You can choose between DAY (11am - 6pm) or EVENING (6pm – 11pm) slots, bands can chop and change between
              the two.
            </p>
            -->
          </div>
          <div class="col-xs-12 col-md-4">
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
        <div class="heading">
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
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h1>Record</h1>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-xs-12 col-md-5">
        <div class="record-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/control_window.jpg" class="img-responsive"></div>
      </div>
      <div class="col-xs-12 col-md-7">
        <?php echo wpautop(get_theme_mod('record_text')); ?>
<!--
        <p>
          £200 for one full day in the studio, 11am - 11pm , includes engineering fee.
          
        </p>
        <p>
          Our resident engineers can be as hands on with production as you like or simply sit back and await for in-
          struction. We understand capturing your sound is highly personal and each band has a different approach.
          At Fat Tank we care as much for the final recording as you do, we will ask you to send as much of your
          music our way as possible. The engineers like to sit with your demos beforehand so we can tailor the session
          o suit your creative wants and aspirations. If you already have a well trusted producer you want to work
          with, they are more than welcome to join the session, our resident engineer will be there to facilitate their ideas.
          
        </p>
        <p>(Current Tech Spec)</p>
        -->
      </div>
    </div>
    <div class="row">
      <div class="col-md-5">
        <div class="record-img"><img src="<?= get_template_directory_uri(); ?>/dist/images/control_desk.jpg" class="img-responsive"></div>
      </div>
      <div class="col-md-7">
        <div class="heading">
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
  <div class="col-md-8 col-md-offset-2">
    <div class="heading">
      <h1>Residents</h1>
    </div>
  </div>
  <div class="col-md-10 col-md-offset-1">
    
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
  <div class="col-md-8 col-md-offset-2">
    <div class="heading">
      <h1>Radio</h1>
    </div>
  </div>
</div>


<!-- SECTION ABOUT -->
<div id="section-about" class="container-fluid">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h1>About</h1>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <?php echo wpautop( get_theme_mod('about_text')) ?>
<!--
        <p>
          Founded by musicians for musicians, Fat Tank is a rehearsal and recording studio situated in Manor House, North London.
          Offering residency packages and one-off slots as well as recording options at bargain prices, Fat Tank has 
          summat to suit you; whether you’re looking for regular rehearsal and storage space, a one-off intensive or the full re-
          cording works, get in touch and come for a gander. With fully-stocked tea and coffee making facilities and a shower to 
          hose off after a sweaty sesh or gig, Fat Tank’s a sort of home from home for musicians and artistes of all persuasions.
          The kettle is always on.
          
        </p>
-->
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <div class="heading">
          <h3>Gallery</h3>
        </div>
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
        <div class="heading">
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
  <div class="col-md-8 col-md-offset-2">
    <div class="heading">
      <h1>Contact</h1>
    </div>
  </div>
  <div class="col-md-6 col-md-offset-1">
    <form id="contact-form" class="form-horizontal">
      <div class="form-group">
      <label for="name" class="col-sm-2 control-label">Name <span>*</span></label>
        <div class="col-sm-10">
        <input type="text" name="message_name" value="" class="form-control" id="name">
        </div>
      </div>     
      <div class="form-group">
        <label for="email" class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" class="form-control" id="email">
        </div>
      </div>
      <div class="form-group">
        <label for="message" class="col-sm-2 control-label">Message</label>
        <div class="col-sm-10">
          <textarea id="message" class="form-control" rows="8"></textarea>
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-10 col-sm-2">
          <button type="submit" class="btn btn-default">Send</button>
        </div>
      </div>
    </form>
  </div>
  <div class="col-md-4">
    <div id="contactDivider">
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
</div>

