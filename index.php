<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TITLE</title>
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
  <link href='//fonts.googleapis.com/css?family=Lora:400,700' rel='stylesheet' type='text/css'>
  <link href='//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container-full" id="header">
    <div class="stretch-image" style="background-image:url(<?php echo get_template_directory_uri(); ?>/homepage.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <span class="logo">
            Edible Spirits
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

<div class="container-full padding" id="search">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <form class="form-inline pull-right">
          <div class="form-group">
            <label class="sr-only" for="search">Search</label>
            <input type="text" class="form-control flat-input" id="search" placeholder="search">
          </div>
          <button type="submit" class="btn btn-lg btn-link"><i class="fa fa-search"></i></button>
        </form>
      </div>
    </div>
  </div>
</div>






<div class="container-full padding-top-15px" id="main">
  <div class="container">
    <div class="row">

      <div class="col-xs-12 col-md-8">
        <h4 class="section-heading">What's Now?</h4>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="article">
            <h3><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
            <div class="date"><?php the_time('F jS, Y'); ?></div>
            <div class="content">
              <?php the_content(); ?>
            </div>
          </div>
        <?php endwhile; else : ?>
          <div class="article">
            <h3><?php _e( 'Sorry, no posts matched your criteria.' ); ?></h3>
          </div>
        <?php endif; ?>
      </div>

      <div class="col-xs-12 col-md-4">

        <h4 class="section-heading">What's Now? &mdash; Subscribe here</h4>

        <form class="subscription">
          <div class="form-group">
            <label class="flat-label" for="your-name">Your Name</label>
            <input type="text" class="form-control flat-input" id="your-name" placeholder="name">
          </div>
          <div class="form-group">
            <label class="flat-label" for="your-name">Your Email</label>
            <input type="email" class="form-control flat-input" id="your-name" placeholder="email@email.com">
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-custom btn-full">Subscribe Here</button>
          </div>
        </form>

        <h4 class="section-heading">Latest Posts</h4>

        <div class="sidebar-rows">

          <div class="row">
            <div class="col-xs-12">
              <div class="article small">
                <h4 class="title">ABCs for Divine Spirit Communication</h4>
                <div class="date">Febuary 28, 2015</div>
                <p class="excerpt">&mdash; How others might enjoy a spiritual dialog with loved ones who have passed away.</p>
                <a href="#" class="btn btn-custom pull-right">Read More</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="article small">
                <h4 class="title">ABCs for Divine Spirit Communication</h4>
                <div class="date">Febuary 28, 2015</div>
                <p class="excerpt">&mdash; How others might enjoy a spiritual dialog with loved ones who have passed away.</p>
                <a href="#" class="btn btn-custom pull-right">Read More</a>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              <div class="article small">
                <h4 class="title">ABCs for Divine Spirit Communication</h4>
                <div class="date">Febuary 28, 2015</div>
                <p class="excerpt">&mdash; How others might enjoy a spiritual dialog with loved ones who have passed away.</p>
                <a href="#" class="btn btn-custom pull-right">Read More</a>
              </div>
            </div>
          </div>

        </div>

        <h4 class="section-heading">Upcoming Events &mdash; Classes, Workshops &amp; More</h4>

        <div class="sidebar-rows">

          <div class="row">
            <div class="col-xs-12">
              <div class="event small">
                <h4 class="title">Channeling</h4>
                <div class="address">
                  March 10, 2015 8:00pm<br>
                  The Wooly<br>
                  11 Barclay Street<br>
                  New York, NY<br>
                </div>

                <div class="share-buttons">Share event</div>

                <a href="#" class="btn btn-custom btn-full">RSVP</a>
              </div>
            </div>
          </div>

        </div>

      </div>

    </div>
  </div>
</div>

</body>
</html>
