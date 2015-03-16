<?php get_header(); ?>

<div id="header">
  <div class="main-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/homepage.jpg)"></div>
  <div class="main-header-text container padding-top-30px">
    <div class="container" style="position:fixed">
      <div class="row">
        <div class="col-xs-2 col-md-1">
          <a href="/">
            <img class="bind-image" src="<?php echo get_template_directory_uri(); ?>/images/lotus-white.png">
          </a>
        </div>
        <div class="col-xs-10 col-md-11">
          <span class="logo">
            <a href="/">
              Edible Spirit
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
  </div>
</div>

<?php include "searchform.php"; ?>

<div class="container-full padding-top-30px" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h4 class="section-heading">What's Now?</h4>
        <?php
        $custom_query = new WP_Query(array (
            "post_type" => "post",
            "posts_per_page" => 1
        ));
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php $main_post_id = get_the_ID(); ?>
          <?php include "article-general.php"; ?>
          <?php posts_nav_link(); ?>
        <?php endwhile; else : ?>
          <div class="article">
            <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
          </div>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
        <?php include "article-next-prev.php"; ?>
      </div>
      <div class="col-xs-12 col-md-4 sidebar">
        <?php include "sidebar.php"; ?>
      </div>
    </div>
  </div>
</div>

<?php include "workshops.php"; ?>

<?php get_footer(); ?>
