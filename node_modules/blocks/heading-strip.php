<?php 

// 
$background_colour = get_field('background_colour'); 
$text_colour = get_field('text_colour'); 
$button_colour = get_field('button_colour');

//
$heading_content = get_field('heading_content');
?>

<?php if( !empty( $heading_content ) ) : ?>

  <div class="section-row heading-strip <?php echo $background_colour; ?>">
    <div class="container">
      <div class="row">
        <?php echo $heading_content; ?>
      </div>
    </div>
  </div>

<?php endif; ?>
