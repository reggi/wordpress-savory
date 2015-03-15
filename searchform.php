<div class="container-full padding" id="search">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form class="form-inline pull-right" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
          <div class="form-group">
            <label class="sr-only" for="s">Search</label>
            <input type="text" class="form-control flat-input" name="s" id="s" placeholder="search" value="<?php echo get_search_query(); ?>">
          </div>
          <button type="submit" class="btn btn-lg btn-link"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>
