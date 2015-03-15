
<h4 class="section-heading">What's Now? &mdash; Subscribe here</h4>




<div id="mc_embed_signup">
<form action="//ediblespirit.us10.list-manage.com/subscribe/post?u=50a3ccb1ba285ec877f55f452&amp;id=bb2155c8ef" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">

<div class="mc-field-group form-group">
	<label for="mce-FNAME">Your Name</label>
	<input type="text" value="" name="FNAME" class="form-control" id="mce-FNAME" placeholder="name">
</div>
<div class="mc-field-group form-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="form-control required email" id="mce-EMAIL" placeholder="email@email.com">
</div>
	<div id="mce-responses" class="clear padding-bottom-15px">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_50a3ccb1ba285ec877f55f452_bb2155c8ef" tabindex="-1" value=""></div>
    <div class="clear padding-bottom-30px">
      <input type="submit" value="Subscribe Here" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-full btn-custom"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>

<!--
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
-->

<h4 class="section-heading">Latest Posts</h4>

<div class="sidebar">
  <?php
  $custom_query = new WP_Query(array (
      "post_type" => "post",
      "posts_per_page" => 3,
      "post__not_in" => array($main_post_id)
  ));
  if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
  <div class="row">
    <div class="col-xs-12">
      <div class="article">
        <h4 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
        <div class="date"><?php the_time('F jS, Y'); ?></div>
        <p class="excerpt">
          <?php
            $excerpt = get_the_excerpt();
            echo string_limit_words($excerpt,20);
          ?>...
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
      $custom_query = new WP_Query(array (
          "post_type" => "event",
          "posts_per_page" => 1,
          "category__in" => get_cat_id("Sidebar Event"),
          "orderby" => "date",
          "order" => 'DESC',
      ));
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
