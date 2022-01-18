<?php
// get section settings
$background_colour = get_field('background_colour'); 
$text_colour = get_field('text_colour'); 
//$button_colour = get_field('button_colour');

// get vars
$heading = get_field('heading');
$content = get_field('content');
$form = get_field('form');
?>

<!-- Two Columns Layout -->
<?php if( !empty($content) && !empty($form) ):?>
  <div class="section-row two-columns-form-text <?php echo $background_colour; ?>" >
    <div class="container">
      <div class="row gx-5">
        <div class="col-md-6">
          <div class="two-inner-content">
            <?php if( !empty( $heading ) ): ?>
              <h2><?php echo $heading; ?></h2>
            <?php endif; ?>
            <?php if( !empty( $content ) ): ?>
              <?php echo $content; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <?php if( !empty( $form ) ): ?>
            <?php echo $form; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
