<?php get_header(); ?>

<div id="search-bar">
  <div class="container">
    <form class="form-inline" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="row">
        <div class="col-xs-7 col-sm-9 col-lg-10">
          <div class="form-group">
            <label class="sr-only" for="s">Search</label>
            <input type="text" class="form-control flat-input flat-input-inverse" name="s" id="s" placeholder="search" value="<?php echo get_search_query(); ?>">
          </div>
        </div>
        <div class="col-xs-5 col-sm-3 col-lg-2">
          <button type="submit" class="btn btn-lg btn-full btn-custom">Search <i class="fa fa-search"></i></button>
        </div>
      </div>
    </form>
  </div>
</div>

<div id="search-results">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <?php if ( have_posts() ) : ?>
          <?php while ( have_posts() ) : the_post(); ?>
          <div class="article padding">
            <h3 class="white-title white-link"><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <div class="excerpt"><?php the_excerpt() ?></div>
            <div class="content">
            <?php
              $content = get_the_content();
              echo string_limit_words($content,100);
            ?>...
            </div>
          </div>
          <hr class="white-rule">
        <?php endwhile; else : ?>
          <div class="article">
            <h3><?php _e( 'Sorry, no search results!' ); ?></h3>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

</body>
</html>
