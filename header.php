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

 	<header>
 		<div class="container">
	    <p class="site-logo">Front-end Dev Weekly</p>
	   </div>
  </header>

  <div class="banner">
  	<div class="container">
  		<div class="banner-inner">
  			<h1 class="title">Hand picked news, trends, and inspiration each week.</h1>
  			<p class="subtitle">Coming soon, a curated, front-end web developer newsletter will begin. It will include hand picked content from around the web including news, trends, tips, and inspiration. No spam. Just meaningful content for the world's web developers that will help you stay current. This isn't an RSS feed. It's an emailed delivered to you once per week. Free.</p>
  		</div>
  	</div>
  </div>

	<div class="container">

	  <div class="stream">

	  	<div class="row">
	    	<p class="issue-title"><span class="issue-num-date col-sm-2 col-sm-pull-1">Issue 1 <br/> April 1, 2014</span> <span class="issue-title col-sm-8 col-sm-pull-1">Latest and greatest title for the newsletter. This will be the subject of the emails too.</span></p>
	    </div>

	    <div class="row issue-commentary">
				<span class="issue-commentary-meta col-sm-1"><span class="headshot"></span><br/>Wrap-up</span>
				<p class="col-sm-8">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
	    </div>

	    <div class="row">
	    
		    <section class="col-lg-10 news">

		    	<h3>News</h3>

		    	<article class="row">
		      	<span class="col-sm-1 hidden-xs">News</span>
		      	<h4 class="col-sm-8">This is going to be the title of the content being shown below.</h4>
		      	<p class="col-sm-8 col-sm-push-1">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
		      	<a href="#" class="col-sm-8 col-sm-push-1">http://galenvinter.com</a>
		      </article>

					<article class="row">
		      	<span class="col-sm-1 hidden-xs">News</span>
		      	<h4 class="col-sm-8">This is going to be the title of the content being shown below.</h4>
		      	<p class="col-sm-8 col-sm-push-1">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
		      	<a href="#" class="col-sm-8 col-sm-push-1">http://galenvinter.com</a>
		      </article>

		    </section>

		    <section class="col-lg-10 frameworks">

		    	<h3>Frameworks</h3>

					<article class="row">
		      	<span class="col-sm-1 hidden-xs">News</span>
		      	<h4 class="col-sm-8">This is going to be the title of the content being shown below.</h4>
		      	<p class="col-sm-8 col-sm-push-1">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
		      	<a href="#" class="col-sm-8 col-sm-push-1">http://galenvinter.com</a>
		      </article>

					<article class="row">
		      	<span class="col-sm-1 hidden-xs">News</span>
		      	<h4 class="col-sm-8">This is going to be the title of the content being shown below.</h4>
		      	<p class="col-sm-8 col-sm-push-1">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
		      	<a href="#" class="col-sm-8 col-sm-push-1">http://galenvinter.com</a>
		      </article>

		    </section>

		  </div>

	  </div><!-- /stream -->
	  
	</div> <!-- /container -->