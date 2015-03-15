<?php get_header(); ?>

<div id="header">
  <div class="main-image-single" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/homepage.jpg)">
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
</div>

<div class="container-full padding" id="search">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form class="form-inline pull-right">
          <div class="form-group">
            <label class="sr-only" for="search">Search</label>
            <input type="text" class="form-control flat-input" id="search" placeholder="search">
          </div>
          <button type="submit" class="btn btn-lg btn-link"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container-full padding-top-30px" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h4 class="section-heading">What's Now?</h4>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php $main_post_id = get_the_ID(); ?>
          <?php include "article-general.php"; ?>
        <?php endwhile; else : ?>
          <div class="article">
            <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
          </div>
        <?php endif; ?>
        <?php include "article-next-prev.php"; ?>
      </div>
      <div class="col-xs-12 col-md-4">
        <?php include "sidebar.php"; ?>
      </div>
    </div>
  </div>
</div>

<?php include "workshops.php"; ?>

<?php get_footer(); ?>
