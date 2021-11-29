<?php
/**
 * Yellow Stats 
 * 
 */
?>
<section class="yellow-stats">
  <?php if( have_rows('stats') ): ?>
    <?php $counter = 1;  //set up the counter ?>
    <div class="container">
      <div class="row">
        <?php while( have_rows('stats') ): the_row(); ?>
          <?php 
            //
            $icon = get_sub_field('icon');
            $heading = get_sub_field('heading');
            $content = get_sub_field('content');
          ?>
          <div class="col-sm-6 col-md-3">
            <?php if( !empty( $icon ) ): ?>
              <img src="<?php echo esc_url($icon['url']); ?>" alt="<?php echo esc_attr($icon['alt']); ?>" />
            <?php endif; ?>
            <?php if( !empty( $heading ) ): ?>
              <h4><?php echo $heading; ?></h4>
            <?php endif; ?>
            <?php if( !empty( $content ) ): ?>
              <p><?php echo $content; ?></p>
            <?php endif; ?>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>
</section>
