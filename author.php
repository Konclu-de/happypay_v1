<?php
$userInfo = get_userdata( get_query_var('author'));
$isAuthor = true;
if (
  !in_array('contributor', $userInfo -> roles) &&
  !in_array('administrator', $userInfo -> roles) &&
  !in_array('author', $userInfo -> roles) &&
  !in_array('editor', $userInfo -> roles)
) {
  $isAuthor = false;
  wp_redirect(esc_url( home_url() ) . '/404', 404);
}
?>
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
    <?php if ($isAuthor === true): ?>
      <span class="h3 mt-5 fw-light"><?php _e('Posts by:', 'happypay'); ?></span>
      <h1 class="display-4 mt-3">
      <?php echo get_the_author_meta( 'display_name' ); ?>
      </h1>
    <?php endif; ?>
  </header>

  <?php
    if(have_posts()):
      get_template_part('loops/index-loop');
    else:
      get_template_part('loops/index-none');
    endif;
  ?>

  <?php happypay_mainbody_end(); ?>
</main>

<?php 
  happypay_mainbody_after();
  get_footer(); 
?>