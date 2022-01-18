<?php
// get section settings
$background_colour = get_field('background_colour'); 
$text_colour = get_field('text_colour'); 

// get vars 
$footer_content = get_field('footer_content');
?>

<?php if( $footer_content ) : ?>
  <div class="section-row footer-signup <?php echo $background_colour; ?>">
    <div class="container">
      <div class="row align-items-left">
        <div class="col-12">
          <?php echo $footer_content; ?>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>
