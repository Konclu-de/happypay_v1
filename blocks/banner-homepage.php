<?php
// get vars
$background_colour = get_field('background_colour');
$background_image = get_field('background_image');
$heading_colour = get_field('heading_colour');
$text_colour = get_field('text_colour');
$banner_heading = get_field('banner_heading');
$banner_content = get_field('banner_content');
$banner_button_link = get_field('banner_button_link');
?>

<!-- Home Banner -->
<?php if( !empty($background_colour) || !empty($background_image) ) : ?>
    
    <div class="section-block banner-wrap">
        <div class="home hero-banner"
            <?php if( !empty($background_image) ) { ?> style="background-image: url('<?php echo $background_image['url']; ?>');" <?php } else { ?> style="background-color: <?php echo $background_colour; ?>;" <?php } ?> >
            <div class="container">
                <div class="row ">
                    <div class="col-12">
                        <?php
                            // define font colours 
                            if( $heading_colour == 'black' ) {
                                $colour_heading = '#161C21';
                            } else if( $heading_colour == 'white' ) {
                                $colour_heading = '#fcf9ec';
                            } else {
                                $colour_heading = '#161C21';
                            }

                            if( $text_colour == 'black' ) {
                                $colour_text = '#161C21';
                            } else if( $text_colour == 'white' ) {
                                $colour_text = '#fcf9ec';
                            } else {
                                $colour_text = '#161C21';
                            }
                        ?>
                        <div class="banner-content">
                            <?php if( !empty($banner_heading) ){ ?>
                                <h1 class="mt-3" style="color:<?php echo $colour_heading; ?>;"><?php echo $banner_heading; ?></h1>
                            <?php } ?>
                            <?php if( !empty($banner_content) ){ ?>
                                <div style="color:<?php echo $colour_text; ?>;">
                                    <?php echo $banner_content; ?>
                                </div>
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
                </div>
            </div>
        </div>
        <div class="banner-arrow">
            <div class="container">
                <div class="row">
                    <div class="bounce">
                        <a class="arrow" href="#">
                            <img src="<?php echo get_template_directory_uri(); ?>/theme/images/down_arrow_white.svg" width="40" alt="Banner arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="scrollto"></div>

<?php endif; ?>
