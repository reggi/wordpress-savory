<div class="row workshop">
  <div class="col-xs-12">
    <div class="row">
      <div class="col-xs-12">
        <h3 class="title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
      </div>
    </div>
    <div class="row onClickShowContent">
      <div class="col-xs-12 col-sm-6">
        <?php
          $post_thumbnail_id = get_post_thumbnail_id();
          $post_thumbnail_url = wp_get_attachment_url( $post_thumbnail_id );
          $post_thumbnail_url = str_replace("vagrantpress.dev", "093.db4.myftpupload.com", $post_thumbnail_url);
        ?>
        <div class="stretch-image" style="background-image:url(<?php echo $post_thumbnail_url?>)"></div>
        <p class="excerpt">
          <?php the_excerpt(); ?>
        </p>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="content">
          <?php the_content(); ?>
        </div>
        <div class="attend">
          <a href="<?php echo get_post_meta($post->ID, 'event_url', true); ?>" class="btn btn-custom pull-right">Attend the next workshop</a>
        </div>
      </div>
    </div>
  </div>
</div>
