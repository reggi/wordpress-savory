<?php get_header(); ?>

<div class="container-full padding-top-30px" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <h4 class="section-heading">What's Now?</h4>
        <?php if ( $main_query->have_posts() ) : while ( $main_query->have_posts() ) : $main_query->the_post(); ?>
          <?php $main_post_id = get_the_ID(); ?>
          <?php include "article-general.php"; ?>
          <?php posts_nav_link(); ?>
          <div class="padding">
            <a href="#" class="btn btn-custom btn-full ">Next article &rarr; </a>
          </div>
        <?php endwhile; else : ?>
          <div class="article">
            <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
          </div>
        <?php endif; ?>
      </div>
      <div class="col-xs-12 col-md-4 sidebar">
        <?php include "sidebar.php"; ?>
      </div>
    </div>
  </div>
</div>

<?php include "workshops.php"; ?>

<?php get_footer(); ?>
