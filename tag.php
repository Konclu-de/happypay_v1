<?php
  get_header(); 
  happypay_mainbody_before();
?>

<?php 
  // Check to see if notifications exist and set height
  $notices = get_field( 'notices', 'option' ); 
  if($notices){ 
    $spacing_class = 'notification_spacing';
  } else {
    $spacing_class = 'no_notification_spacing';
  }
?>
<main id="site-main" class="<?php echo $spacing_class; ?>" >
  <?php happypay_mainbody_start(); ?>

  <header class="container py-5 text-center">
    <span class="h3 mt-5 fw-light"><?php _e('Posts tagged:', 'happypay'); ?></span>
    <h1 class="display-4 mt-3">
      <?php echo single_tag_title(); ?>
    </h1>
  </header>

  <?php
    get_template_part('loops/index-loop'); 
    happypay_mainbody_end();
  ?>
</main>

<?php 
  happypay_mainbody_after();
  get_footer(); 
?>
