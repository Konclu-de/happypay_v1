<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- Preloader -->
  <div id="preloader-wrap">
    <div id="preloader">
      <img src="<?php echo get_template_directory_uri(); ?>/theme/images/happypay_loader_v1.svg" alt="Happy Pay Loader">
      <div class="snippet" data-title=".dot-pulse">
        <div class="stage">
          <div class="dot-pulse"></div>
        </div>
      </div>
      <!--
      <span></span>
      <span></span>
      -->
    </div>
  </div>

  <div class="page-wrap" style="display:none">
    <div class="pagecontent">

      <?php happypay_navbar_before();?>

      <div class="fixed-top">

        <?php $notices = get_field( 'notices', 'option' ); ?>
        <?php if($notices){ ?>
          <div id="notices" class="container-fluid">
            <div class="container">
              <div class="row">
                <?php 
                  foreach($notices as $notice) {
                    echo $notice['notice'];
                  }
                ?>
              </div>
            </div>
          </div>
        <?php } ?>

        <nav id="site-navbar" class="container-fluid navbar navbar-expand-xl navbar-light">
          <div class="container">

            <?php happypay_navbar_brand();?>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <div class="animated-hamburger">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <?php
                wp_nav_menu( array(
                  'theme_location'  => 'navbar',
                  'container'       => false,
                  'menu_class'      => '',
                  'fallback_cb'     => '__return_false',
                  'items_wrap'      => '<ul id="%1$s" class="navbar-nav ms-auto %2$s">%3$s</ul>',
                  'depth'           => 2,
                  'walker'          => new happypay_walker_nav_menu()
                ) );
              ?>  
            </div>

          </div>
        </nav>

      </div>

      <?php happypay_navbar_after();?>