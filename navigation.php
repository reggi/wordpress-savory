<div id="header">
  <div class="main-image-single" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/homepage.jpg)">
  <div class="container padding-top-30px">
    <div class="row">
      <div class="col-xs-2 col-md-1">
        <a href="/">
          <img class="bind-image" src="<?php echo get_template_directory_uri(); ?>/images/lotus-white.png">
        </a>
      </div>
      <div class="col-xs-10 col-md-11">
        <span class="logo">
          <a href="/">
            Edible Spirit
          </a>
        </span>
        <hr class="white-rule">
        <?php wp_nav_menu( array('menu' => 'Header Menu' )) ?>
        <hr class="white-rule">
        <?php wp_nav_menu( array('menu' => 'Header Sub-Menu' )) ?>
        <hr class="white-rule">
        </div>
      </div>
    </div>
  </div>
</div>
