
<h4 class="section-heading">What's Now? &mdash; Subscribe here</h4>

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
    <button type="submit" class="btn btn-custom btn-full">Subscribe Here</button>
  </div>
</form>

<h4 class="section-heading">Latest Posts</h4>

<div class="sidebar">
  <?php
  $sidebar_query = array (
      "post_type" => "post",
      "post__not_in" => array($main_post_id),
      "category__not_in" => $block_cat_ids
  );
  $custom_query = new WP_Query($sidebar_query);
  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="article">
        <h4 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
        <div class="date"><?php the_time('F jS, Y'); ?></div>
        <p class="excerpt">
          <?php the_excerpt() ?>
        </p>
        <p style="text-align:right">
          <a href="<?php the_permalink(); ?>" class="btn btn-custom" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Read More</a>
        </p>
      </div>
    </div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</div>

<h4 class="section-heading">Upcoming Events &mdash; Classes, Workshops &amp; More</h4>

<div class="sidebar-rows">
  <div class="row">
    <div class="col-xs-12">
      <?php
      $custom_query = new WP_Query($event_query);
      if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
      <div class="event small">
        <h4 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
        <div class="address"><?php echo get_post_meta($post->ID, 'address', true); ?></div>
        <div class="addthis_native_toolbox"></div>
        <a href="<?php echo get_post_meta($post->ID, 'event_url', true); ?>" class="btn btn-custom btn-full">RSVP</a>
      </div>
      <?php endwhile; ?>
      <?php endif; ?>
      <?php wp_reset_query(); ?>
    </div>
  </div>
</div>
