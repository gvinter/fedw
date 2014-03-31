<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->

	<?php wp_head(); ?>

</head>

<body>

 	<!--[if lt IE 7]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

  <!-- Header -->
  <header>
    <div class="container">
      <p class="site-logo"><span>Front-end Dev</span> Weekly</p>
     </div>
  </header>

  <!-- Banner -->
  <div class="banner">
    <div class="container">
      <div class="banner-inner">
        <h1 class="title"><span>Hand picked</span> <strong>front-end developer news, trends and inspiration</strong> <span class="end-of-title">each week.</span></h1>
        <p class="subtitle"><span>Vital content for front-end web developers that will keep you current.</span> Emailed to you each week, free.</p>
      </div>
    </div>
    <div class="banner-signup">
      <div class="container">

        <!-- MailChimp Signup Form -->
        <div id="mc_embed_signup">
          <form class="form-inline" action="http://listentoo.us7.list-manage2.com/subscribe/post?u=11df2122a2a2c5c3fc46242c5&amp;id=c6dafce16b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
              <label class="sr-only" for="mce-EMAIL">Email Address </label>
              <input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="Your email address" />
              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-success">
              
              <div id="mce-responses" class="clear">
                <div class="response" id="mce-error-response" class="mce-error-response" style="display:none"></div>
                <div class="response" id="mce-success-response" class="mce-success-response" style="display:none"></div>
              </div>
              
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;">
                <input type="text" name="b_11df2122a2a2c5c3fc46242c5_c6dafce16b" value="">
              </div>
          </form>
        </div>
      </div>
    </div>

    <div class="banner-menu">
      <div class="container">
        <nav>
          <ul>
            <li><a href="#">Last Week</li>
            <li><a href="#">All Issues</a></li>
            <li><a href="#">By Category</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </div>