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

        <div class="article">
          <h3 class="title">ABCs for Divine Spirit Communication</h3>
          <div class="date">Febuary 28, 2015</div>
          <div class="content">
            <img src="./article-image.jpg">
            <div class="caption">
              &mdash; image of a crystal
            </div>
            <p>As a result of the nature of my work as a medium, I am often asked how others might enjoy a spiritual dialog with loved ones who have passed away. My first response is always the same: I tell them to meditate regularly. It is the single most important element to communication whether that dialog is on this side or the other side. The more one adopts the routine of mindfulness through breathing, the clearer the level of communication will be. You are allowing yourself to be free to think in a space within you that is of access only to you.</p>

            <p>As simple as your ABC’s, these tips will help you establish a healthy connection for communication.</p>

            <p><strong>TIP A</strong></p>

            <p>Align with the Angels and meditate on communicating love. Any time we align ourselves with divine guidance we are aligning ourselves with true healing energy and therefore able to deliver and receive messages.</p>

            <p><strong>TIP B</strong></p>

            <p>Bless Your Words and express your thoughts through positive language. The words we speak can make or break our communication with spirit and it’s important to refrain from negativity so that your intention is clear.</p>

            <p><strong>TIP C</strong></p>

            <p>Create a Sacred Space to honor the divine dialog you wish to experience. Be sure to include any special object that belonged to the deceased, like a card, ornament or gift. The sense memory attached to it will expedite communication.
            Make a habit of visiting your sacred space once a day for at least twenty minutes and you will bond with it. Your energy will begin to experience what real breathing is, and it will help you to slow down so that divine communication becomes easily possible.
            We all have the ability to speak with spirit. If you are a person who prays, then you are already doing it. If not, then with time, practice, and faith you will be part of a very special club, one that uses a divine computer to communicate with.</p>
          </div>
        </div>

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
