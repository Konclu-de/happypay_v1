<?php
// get vars
$image = get_field('image');
$image_right_on_desktop = get_field('image_right_on_desktop');
$eyelid = get_field('eyelid');
$heading = get_field('heading');
$content = get_field('content');
$content_link = get_field('content_link');
?>

<!-- Two Columns Layout -->
<?php if( !empty($image) && !empty($content) ):?>
  <section class="two-columns-block">
    <div class="row gx-5">
      <div class="col-md-6 <?php if ( $image_right_on_desktop ): echo 'order-lg-2'; endif; ?>">
        <?php if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="col-md-6 d-flex align-items-center <?php if ( $image_right_on_desktop ): echo 'order-lg-1'; endif; ?>">
        <div class="two-inner-content">
          <?php if( !empty( $eyelid ) ): ?>
            <p class="eyelid"><?php echo $eyelid; ?></p>
          <?php endif; ?>
          <?php if( !empty( $heading ) ): ?>
            <h2><?php echo $heading; ?></h2>
          <?php endif; ?>
          <?php if( !empty( $content ) ): ?>
            <?php echo $content; ?>
          <?php endif; ?>
          <?php if( $content_link ): ?>
            <?php
              $link_url = $content_link['url'];
              $link_title = $content_link['title'];
              $link_target = $content_link['target'] ? $content_link['target'] : '_self';
            ?>
            <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>