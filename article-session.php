<div class="col-xs-12 col-sm-6 col-session">
  <div class="article session">
    <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
    <div class="content">
      <?php the_content(); ?>
    </div>
    <div class="attend">
      <a href="<?php echo get_post_meta($post->ID, 'event_url', true); ?>" class="btn btn-custom">Attend the next workshop</a>
    </div>
  </div>
</div>
