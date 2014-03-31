<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

	<?php while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'content', get_post_format() ); ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php get_template_part( 'content', 'none' ); ?>
<?php endif; ?>

<!-- Main Content -->
<div class="container">

  <div class="stream">

    <div class="row">
      <h2 class="issue-title"><span class="issue-num-date col-sm-2 col-xs-10">Issue 1 <br/> April 1, 2014</span> <span class="issue-title col-sm-8 col-xs-10">Latest and greatest title for the newsletter. This will be the subject of the emails too.</span></h2>
    </div>

    <div class="row issue-commentary">
      <div class="issue-commentary-meta col-xs-2">
        <span class="headshot"><img src="wp-content/themes/fedw/img/galen.jpg"></span>
        <span class="galen">
          Galen Vinter
          <a href="http://twitter.com/gvinter">@gvinter</a>
        </span>
      </div>
      <p class="col-xs-8">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
    </div>

    <div class="row stream-sections">
    
      <section class="col-lg-10 news">

        <h3>News</h3>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

      </section>

      <section class="col-lg-10 frameworks">

        <h3>Frameworks</h3>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

      </section>

      <section class="col-lg-10 tutorials">

        <h3>Tutorials</h3>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

      </section>

      <section class="col-lg-10 dev-tools">

        <h3>Dev Tools</h3>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

        <article class="row">
          <h4 class="col-sm-10">This is going to be the title of the content being shown below.</h4>
          <p class="col-sm-10">Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum. Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
          <a href="#" class="col-sm-10">http://galenvinter.com</a>
        </article>

      </section>

    </div>

  </div><!-- /stream -->
  
</div> <!-- /container -->

<?php get_footer(); ?>