<?php get_header(); ?>

<?php include "navigation.php"; ?>

<?php include "searchform.php"; ?>

<div class="container-full padding-top-30px" id="main">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php $main_post_id = get_the_ID(); ?>
          <div class="article">
            <h3 class="title padding-bottom-15px"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <div class="content">
              <?php the_content(); ?>
            </div>
          </div>
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
