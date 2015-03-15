<?php get_header(); ?>

<?php include "navigation.php"; ?>

<?php include "searchform.php"; ?>

<div class="container-full padding-top-30px" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php $main_post_id = get_the_ID(); ?>
          <?php include "article-general.php"; ?>
        <?php endwhile; else : ?>
          <div class="article">
            <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-md-4">
        <?php include "sidebar.php"; ?>
      </div>
    </div>
  </div>
</div>

<?php include "workshops.php"; ?>

<?php get_footer(); ?>
