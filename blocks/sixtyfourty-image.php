<?php
// get vars
$image = get_field('image');
$heading = get_field('heading');
$content = get_field('content');
$link = get_field('link');
?>

<!-- Two Coluimns Layout -->
<?php if( !empty($image) && !empty($content) ):?>
  <section class="two-columns-block">
    <div class="row gx-5">
      <div class="col-md-7">
        <?php if( !empty( $image ) ): ?>
          <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
        <?php endif; ?>
      </div>
      <div class="col-md-5 d-flex align-items-center">
        <div class="two-inner-content">
          <?php if( !empty( $heading ) ): ?>
            <h2><?php echo $heading; ?></h2>
          <?php endif; ?>
          <?php if( !empty( $content ) ): ?>
            <?php echo $content; ?>
          <?php endif; ?>
          <?php if( $link ): ?>
            <?php
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
            <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
        </div>
        <?php endif; ?>
      </div>
    </div>
  </section>
<?php endif; ?>