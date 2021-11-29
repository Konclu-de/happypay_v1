<?php
/**
 * Merchant blocks 
 * 
 */
$merchants_block_heading = get_field('merchants_block_heading');
?>

<!-- Merchant slider -->
<section class="our-merchant py-5">
  <?php if( !empty($merchants_block_heading) ): ?>
    <div class="row">
      <div id="merchants-heading">
        <h2><?php echo $merchants_block_heading; ?></h2>
      </div>
      <div id="merchants-slick-arrows" class="arrows text-left">
        <div id="merchants-slide-prev" class="arrow d-inline pr-4">
          <img src="<?php echo get_template_directory_uri() ?>/theme/images/left_arrow_black.svg" alt="Slick arrow previous">
        </div>
        <div id="merchants-slide-next" class="arrow d-inline pr-4">
          <img src="<?php echo get_template_directory_uri() ?>/theme/images/right_arrow_yellow.svg" alt="Slick arrow next">
        </div>
      </div>
    </div>
  <?php endif; ?>
  <div class="row">
    <?php if( have_rows('merchants') ): ?>
      <ul class="merchants">
        <?php while( have_rows('merchants') ) : the_row(); ?>
          <?php 
            // Load sub field value.
            $merchant_logo = get_sub_field('merchant_logo');
            $merchant_name = get_sub_field('merchant_name'); 
          ?>
          <?php if( !empty($merchant_logo) && !empty($merchant_name) ):?>
            <li>
              <img src="<?php echo esc_url($merchant_logo['url']); ?>" alt="<?php echo esc_attr($merchant_logo['alt']); ?>" />
              <p class="merchant-name"><?php echo $merchant_name; ?></p>
            </li>
          <?php endif; ?>
        <?php endwhile; ?>
      </ul>
    <?php endif; ?>
  </div>
</section>

<script>
jQuery( document ).ready(function($) {
  
  $('.merchants').slick({
    arrows: true,
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 2,
    prevArrow: $("#merchants-slide-prev"),
    nextArrow: $("#merchants-slide-next"),
    responsive: [
      {
        breakpoint: 860,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2,
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
    ]
  });

});
</script>
