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
  <?php
    happypay_mainbody_start();
    get_template_part('loops/page-content');
    //happypay_mainbody_end();
  ?>
</main>

<?php 
  happypay_mainbody_after();
  get_footer(); 
?>