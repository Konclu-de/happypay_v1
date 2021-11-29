<?php
// get vars
$background_colour = get_field('background_colour');
$background_image = get_field('background_image');
$text_color = get_field('text_color');
$banner_heading = get_field('banner_heading');
$banner_content = get_field('banner_content');
$banner_button_link = get_field('banner_button_link');
?>

<!-- Home Banner -->
<?php if( !empty($background_colour) || !empty($background_image) ) : ?>
    
    <section class="banner-wrap">
        <div class="home hero-banner"
            <?php if( !empty($background_image) ) { ?> style="background-image: url('<?php echo $background_image['url']; ?>');" <?php } else { ?> style="background-color: <?php echo $background_colour; ?>;" <?php } ?> >
            <div class="container">
                <div class="row row align-items-left">
                    <!--
                    <div class="col-lg-5 offset-lg-1 order-lg-1">
                        <img src="web-development-vector.png" class="img-fluid" alt="Web Development">
                    </div>
                    -->
                    <div class="col-lg-6 <?php echo "text-color-".$text_color; ?>">
                        <?php if( !empty($banner_heading) ){ ?>
                            <h1 class="mt-3"><?php echo $banner_heading; ?></h1>
                        <?php } ?>
                        <?php if( !empty($banner_content) ){ ?>
                            <p class="lead text-secondary my-1"><?php echo $banner_content; ?></p>
                        <?php } ?>
                        <?php if( $banner_button_link ) { ?>
                            <?php
                                $link_url = $banner_button_link['url'];
                                $link_title = $banner_button_link['title'];
                                $link_target = $banner_button_link['target'] ? $banner_button_link['target'] : '_self';
                            ?>
                            <a class="btn btn-primary" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                        <?php } ?>
                    </div>
                </div>
                <div class="bounce">
                    <a class="arrow" href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/theme/images/down_arrow_white.svg" width="40" alt="Banner arrow">
                    </a>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>