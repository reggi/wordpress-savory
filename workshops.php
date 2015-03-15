<div class="container-full padding">
  <div class="container">
    <div class="row" id="private-sessions">
      <div class="col-xs-12">
        <h4 class="section-heading">Private Sessions</h4>
      </div>
    </div>
    <div class="row masonry">
      <?php
      $custom_query = new WP_Query(array (
          "post_type" => "event",
          "category__in" => get_cat_id("Private Sessions"),
      ));
      if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <?php include "article-session.php"; ?>
      <?php endwhile; else : ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
    <div class="row" id="psychic-development">
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

    <div class="row" id="workshops">
      <div class="col-xs-12">
        <h4 class="section-heading">Workshops</h4>
      </div>
    </div>
    <div class="row" id="workshops">
      <div class="col-xs-12">
        <?php
        $custom_query = new WP_Query(array (
            "post_type" => "event",
            "category__in" => get_cat_id("Workshops"),
        ));
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
          <?php include "article-workshop.php"; ?>
        <?php endwhile; else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
    </div>

    <div class="row" id="journey-workshops">
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

    <div class="row" id="events-retreats">
      <div class="col-xs-12 col-sm-8">
        <h4 class="section-heading">Events &amp; Retreats</h4>
        <img class="bind-image" src="<?php echo get_template_directory_uri(); ?>/images/tea-cup.jpg">
        <?php
        $custom_query = new WP_Query(array (
            "post_type" => "event",
            "category__in" => get_cat_id("Events and Retreats"),
        ));
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        <div class="article">
          <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
          <div class="content">
            <p><?php the_excerpt(); ?></p>
            <?php the_content(); ?>
          </div>
        </div>
        <?php endwhile; else : ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
      </div>
      <div class="col-xs-12 col-sm-4">
        <h4 class="section-heading">Have an idea?</h4>
        <form class="subscription">
          <div class="form-group padding-bottom-30px">
            <label class="flat-label" for="your-name">Your Name</label>
            <input type="text" class="form-control flat-input" id="your-name" placeholder="name">
          </div>
          <div class="form-group padding-bottom-30px">
            <label class="flat-label" for="your-name">Your Email</label>
            <input type="email" class="form-control flat-input" id="your-name" placeholder="email@email.com">
          </div>
          <div class="form-group padding-bottom-30px">
            <label class="flat-label" for="your-name">Brief Comments</label>
            <textarea class="form-control flat-input" id="your-name" placeholder="Do you have an even idea in mind? Describe it here..."></textarea>
          </div>
          <div class="form-group padding-bottom-30px">
            <button type="submit" class="btn btn-custom btn-full">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
