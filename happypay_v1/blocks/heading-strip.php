<?php 
  $heading_content = get_field('heading_content');
  $background_color = get_field('background_color');

  // determine background color 
  if( $background_color == "yellow" ) {
    $bg_color = "background-color: #f7da61";
  } else if ( $background_color == "black" ) {
    $bg_color = "background-color: #171a1e";
  } else {
    $bg_color = "background-color: #fffff";
  }
?>

<?php if( !empty( $heading_content ) ) : ?>

  <section class="heading-strip <?php echo $background_color; ?>" style="<?php echo $bg_color; ?>">
    <div class="container">
      <div class="row">
        <?php echo $heading_content; ?>
      </div>
    </div>
  </section>

<?php endif; ?>
