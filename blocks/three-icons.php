<?php 
// get section settings
$background_colour = get_field('background_colour'); 
$text_colour = get_field('text_colour'); 
$button_colour = get_field('button_colour');

// vars 
$header_content = get_field('header_content');
?>

<!-- Three icons block -->
<?php if( have_rows('icons') ): ?>
  <div class="section-row icons-columns <?php echo $background_colour ?>">
    <div class="container">
      <?php if($header_content) : ?>
        <div class="row icons-headings">
          <?php echo $header_content; ?>
        </div>
      <?php endif; ?>
      <div class="row icons-content">
        <?php while ( have_rows('icons') ) : the_row(); ?>
          <?php 
            // get repeater fields 
            $icon = get_sub_field('icon');
            $icon_heading = get_sub_field('icon_heading');
            $icon_content = get_sub_field('icon_content');
          ?>
          <div class="col-md-4">
            <figure class="aligncenter size-full is-resized">
              <?php if( !empty( $icon ) ): ?>
                <img loading="lazy" src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
              <?php endif; ?>
            </figure>
            <?php if($icon_heading) : ?>
              <h4 class="text-align-center icon-header"><?php echo $icon_heading; ?></h4>
            <?php endif; ?>
            <?php if($icon_content) : ?>
              <p class="text-align-center icon-text"><?php echo $icon_content; ?></p>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
