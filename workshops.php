<div class="container-full padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h4 class="section-heading">Psychic Development Workshops</h4>
      </div>
    </div>
    <div class="row" id="workshops">
      <div class="col-xs-12">
        <?php query_posts('category_name=psychic-development'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php include "article-workshop.php"; ?>
        <?php endwhile; else : ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h4 class="section-heading">Journey Workshops</h4>
      </div>
    </div>
    <div class="row" id="workshops">
      <div class="col-xs-12">
        <?php query_posts('category_name=journeys'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php include "article-workshop.php"; ?>
        <?php endwhile; else : ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
