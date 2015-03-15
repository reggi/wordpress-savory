<div class="container-full padding">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <h4 class="section-heading">Psychic Development Workshops</h4>
      </div>
    </div>
    <div class="row" id="workshops">
      <div class="col-xs-12">
        <?php
        $custom_query = new WP_Query(array (
            "post_type" => "event",
            "category__in" => get_cat_id("Psychic Deveolpment"),
        ));
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php include "article-workshop.php"; ?>
        <?php endwhile; else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12">
        <h4 class="section-heading">Journey Workshops</h4>
      </div>
    </div>
    <div class="row" id="workshops">
      <div class="col-xs-12">
        <?php
        $custom_query = new WP_Query(array (
            "post_type" => "event",
            "category__in" => get_cat_id("Journeys"),
        ));
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php include "article-workshop.php"; ?>
        <?php endwhile; else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>
  </div>
</div>
