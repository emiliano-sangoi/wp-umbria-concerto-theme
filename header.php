<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
<!--  <nav class="navbar navbar-expand-md navbar-light bg-light">-->
<!--    <div class="container-fluid">-->
<!--      <a class="navbar-brand" href="#">Navbar</a>-->
<!--      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">-->
<!--        <span class="navbar-toggler-icon"></span>-->
<!--      </button>-->
<!---->
<!--      <div class="collapse navbar-collapse" id="main-menu">-->
<!--        --><?php
//        wp_nav_menu(array(
//          'theme_location'  => 'main-menu',
//          'container'       => false,
//          'menu_class'      => '',
//          'fallback_cb'     => '__return_false',
//          'items_wrap'      => '<ul id="%1$s" class="navbar-nav me-auto mb-2 mb-md-0 %2$s">%3$s</ul>',
//          'depth'           => 2,
//          'walker'          => new bootstrap_5_wp_nav_menu_walker()
//        ));
//        ?>
<!--      </div>-->
<!--    </div>-->
<!--  </nav>-->


<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
    <div class="container px-5">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo IMG_DIR; ?>/logo_tb.png" alt="..." height="72" class="d-inline-block align-middle">
            <span class="d-inline-block align-middle text-dark">
                <div class="pl-5">
                <h4 class="text-uppercase font-weight-bold mb-0">
                    <?php bloginfo('name'); ?>
                </h4>
                <small class="d-block font-italic small">
                    <i>"In comune per amore dell'arte"</i>
                </small>
                    </div>
            </span>
        </a>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                    class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo home_url(); ?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#!">Chi siamo</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<!--  <header class="masthead text-center text-white">-->
<!--      <div class="masthead-content">-->
<!--          <div class="container px-5">-->
<!--              <h1 class="masthead-heading mb-0">Umbri-a Concerto</h1>-->
<!--              <h2 class="masthead-subheading mb-0">-->
<!--                  Abbiamo tutti in comune l’amore per l’arte e l’arte, nelle sue diverse forme ed espressioni, è al centro delle attività di Umbri-A Concerto-->
<!--              </h2> -->
<!--              <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Learn More</a>-->
<!--          </div>-->
<!--      </div>-->
<!--  </header>-->
<header class="masthead text-center text-white">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active"
                 style="background-image: url(<?php echo IMG_DIR . '/Concerto-Tango-Sensations-Gubbio-2009-20_b80.png'; ?>)">
                <div class="carousel-caption">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                <div class="carousel-caption">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item"
                 style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
                <div class="carousel-caption">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>