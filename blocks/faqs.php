<?php
/**
 * FAQ Accordion 
 * 
 */

// get section settings
$background_colour = get_field('background_colour'); 
$text_colour = get_field('text_colour'); 
?>

<?php if( have_rows('faqs') ): ?>
  <?php 
    $digits = 3;
    $hash = rand( pow(10, $digits-1), pow(10, $digits)-1 ); // set a unique hash
    //$counter = 1;  //set up the counter 
    $counter = $hash;  //set up the counter
  ?>
  <div class="section-row faqs <?php echo $background_colour; ?>">
    <div class="container">
      <div class="accordion accordion-flush" id="accordion-<?php echo $hash;?>">
        <?php while( have_rows('faqs') ): the_row(); ?>
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-heading-<?php echo $counter;?>">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapse-<?php echo $counter; ?>" aria-expanded="false" aria-controls="flush-collapse-<?php echo $counter; ?>">
                <?php echo get_sub_field('heading'); ?> 
              </button>
            </h2>
            <div id="flush-collapse-<?php echo $counter; ?>" class="accordion-collapse collapse" aria-labelledby="flush-heading-<?php echo $counter; ?>" data-bs-parent="#accordion-<?php echo $hash;?>">
              <div class="accordion-body">
                <?php echo get_sub_field('content');  ?>
              </div>
            </div>
          </div>
          <?php $counter++; // add one per row ?> 
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
