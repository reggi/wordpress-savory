<?php get_header(); ?>

<div id="header">
  <div class="container padding-top-30px">
    <div class="row">
      <div class="col-xs-2 col-md-1">
        <a href="/">
          <img class="bind-image" src="<?php echo get_template_directory_uri(); ?>/images/lotus-white.png">
        </a>
      </div>
      <div class="col-xs-10 col-md-11">
        <span class="logo">
          <a href="/">
            Edible Spirits
          </a>
        </span>
        <hr class="white-rule">
        <?php wp_nav_menu( array('menu' => 'Header Menu' )) ?>
        <hr class="white-rule">
        <?php wp_nav_menu( array('menu' => 'Header Sub-Menu' )) ?>
        <hr class="white-rule">
      </div>
    </div>
  </div>
</div>

<div class="container">
  <div class="row">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="col-xs-12 col-sm-6">
      <div class="article padding">
        <h3 class="white-title white-link"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <div class="content"><?php the_content(); ?></div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 bind-images padding-top-30px">

      <?php
      $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), "large" );

      if ($image) : ?>
          <img src="<?php echo $image[0]; ?>" class="padding-top-30px bind-image" />
      <?php endif; ?>
    </div>
  <?php endwhile; endif; ?>
  </div>
</div>

<?php get_footer(); ?>
