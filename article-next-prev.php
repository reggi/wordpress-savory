<?php $prev_post = get_adjacent_post( false, '', true ); ?>
<?php $next_post = get_adjacent_post( false, '', false ); ?>

<div class="padding">
<?php if ( is_a( $prev_post, 'WP_Post' ) && is_a( $next_post, 'WP_Post' ) ){ ?>
  <div class="row">
    <div class="col-xs-12 col-sm-6">
      <a class="btn btn-custom btn-full" href="<?php echo get_permalink( $prev_post->ID ); ?>">&larr; Previous article</a>
    </div>
    <div class="col-xs-12 col-sm-6">
      <a class="btn btn-custom btn-full" href="<?php echo get_permalink( $next_post->ID ); ?>">Next article &rarr;</a>
    </div>
  </div>
<?php } else if ( is_a( $prev_post, 'WP_Post' ) ){ ?>
  <a class="btn btn-custom btn-full" href="<?php echo get_permalink( $prev_post->ID ); ?>">&larr; Previous article</a>
<?php } else if ( is_a( $next_post, 'WP_Post' ) ){ ?>
  <a class="btn btn-custom btn-full" href="<?php echo get_permalink( $next_post->ID ); ?>">Next article &rarr;</a>
<?php }; ?>
</div>
