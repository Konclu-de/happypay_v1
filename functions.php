<?php
/**
 * All the functions are in the PHP files in the `functions/` folder.
 * 
 */
if ( ! defined('ABSPATH') ) {
  exit;
}
require get_template_directory() . '/functions/cleanup.php';
require get_template_directory() . '/functions/setup.php';
require get_template_directory() . '/functions/enqueues.php';
require get_template_directory() . '/functions/action-hooks.php';
require get_template_directory() . '/functions/navbar.php';
require get_template_directory() . '/functions/dimox-breadcrumbs.php';
require get_template_directory() . '/functions/widgets.php';
require get_template_directory() . '/functions/search-widget.php';
require get_template_directory() . '/functions/index-pagination.php';
require get_template_directory() . '/functions/split-post-pagination.php';


/**
 * HappyPay Settings Page 
 * @author Archie M
 * 
 */
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(
      array(
        'page_title' 	=> 'HappyPay General Settings',
        'menu_title'	=> 'HappyPay Settings',
        'menu_slug' 	=> 'hp-theme-general-settings',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
      )
    );

}


/**
 * Create a custom category for all of the custom 
 * Gutenberg blocks.
 * @author Archie M
 * 
 */
function happypay_block_category( $categories, $post ) {
  return array_merge(
    $categories, 
    array (
      array(
        'slug'    => 'happypay-blocks',
        'title'   => __( 'Happy Pay Blocks', 'happypay-blocks' ),
      )
    )
  );
}
add_filter( 'block_categories', 'happypay_block_category', 10, 2 );


/**
 * Create custom Happy Pay custom Gutenberg blocks.
 * @author Archie M
 * 
 */
function happyday_custom_blocks() {

  // register hompage banner block
  acf_register_block_type(array(
    'name'                  => 'banner-home', 
    'title'                 => __('Banner Homepage'),
    'description'           => __('A custom banner for the homepage'),
    'render_template'       => 'blocks/banner-homepage.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'money', 
    'keywords'              => array( 'banner, homepage, homepage banner, banner-homepage')
  ));
  // register banner block
  acf_register_block_type(array(
    'name'                  => 'banner', 
    'title'                 => __('Banner'),
    'description'           => __('A custom banner for the homepage'),
    'render_template'       => 'blocks/banner.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'money', 
    'keywords'              => array( 'banner, homepage, homepage banner, banner-homepage')
  ));
  // register banner block
  acf_register_block_type(array(
    'name'                  => 'two-col-layout', 
    'title'                 => __('Two Column Layout'),
    'description'           => __('A custom banner for the homepage'),
    'render_template'       => 'blocks/two-col-layout.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'columns', 
    'keywords'              => array( '2, 2 col, two columns, two, columns')
  ));
  // register our merchants block
  acf_register_block_type(array(
    'name'                  => 'our-merchants', 
    'title'                 => __('Our Merchants'),
    'description'           => __('A custom banner for the list the HappyPay merchants'),
    'render_template'       => 'blocks/our-merchants.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'admin-comments', 
    'keywords'              => array( 'our merchants, merchants, partners'), 
    'enqueue_assets'        => function(){
      wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/theme/css/lib/slick.css', array(), '', 'all' );
      wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/theme/js/lib/slick.min.js', array('jquery') );
    }
  ));
  // team block
  acf_register_block_type(array(
    'name'                  => 'team', 
    'title'                 => __('Team Members'),
    'description'           => __('Happy Pay team members block'),
    'render_template'       => 'blocks/team.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'admin-users', 
    'keywords'              => array( 'team, our team, team members, members, staff')
  ));
  // faq block
  acf_register_block_type(array(
    'name'                  => 'faqs', 
    'title'                 => __('FAQs'),
    'description'           => __('A frequently asked questions block'),
    'render_template'       => 'blocks/faqs.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'format-status', 
    'keywords'              => array( 'faq, frequently asked questions, questions, faqs')
  ));
  // register heading strip block
  acf_register_block_type(array(
    'name'                  => 'heading-strip', 
    'title'                 => __('Heading Strip (for headers)'),
    'description'           => __('A custom heading strip in either black of yellow'),
    'render_template'       => 'blocks/heading-strip.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'heading', 
    'keywords'              => array( 'heading strip, strip, back, yellow, full-width')
  ));
  // register three colimns icons block 
  acf_register_block_type(array(
    'name'                  => 'three-icons', 
    'title'                 => __('Three Icons Layout'),
    'description'           => __('A custom heading strip in either black of yellow'),
    'render_template'       => 'blocks/three-icons.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'ditor-insertmore', 
    'keywords'              => array( 'three, three icons, icons, services')
  ));
  // yellow stats block
  acf_register_block_type(array(
    'name'                  => 'yellow-stats', 
    'title'                 => __('Yellow Stats Block'),
    'description'           => __('A custom banner for the homepage'),
    'render_template'       => 'blocks/yellow-stats.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'chart-area', 
    'keywords'              => array( 'yellow, stats, block')
  ));
  // register 60/40 block with image first
  acf_register_block_type(array(
    'name'                  => 'sixtyfourty-image', 
    'title'                 => __('Two Column 60/40 Image First'),
    'description'           => __('A custom banner for the homepage'),
    'render_template'       => 'blocks/sixtyfourty-image.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'embed-photo', 
    'keywords'              => array( '60, 40, 60/40, two, column, image, first')
  ));
  // register 60/40 block with text first
  acf_register_block_type(array(
    'name'                  => 'sixtyfourty-text', 
    'title'                 => __('Two Column 60/40 Text First'),
    'description'           => __('A custom banner for the homepage'),
    'render_template'       => 'blocks/sixtyfourty-text.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'embed-post', 
    'keywords'              => array( '60, 40, 60/40, two, column, text, first')
  ));
  // register footer signup block
  acf_register_block_type(array(
    'name'                  => 'footer-signup', 
    'title'                 => __('Footer Signup Form'),
    'description'           => __('A custom footer sign up form for MailChimp (Contact Form 7)'),
    'render_template'       => 'blocks/footer-signup.php',
    'category'              => 'happypay-blocks', 
    'icon'                  => 'feedback', 
    'keywords'              => array( 'form, footer, sign up, newsletter')
  ));
  
}
add_action( 'acf/init', 'happyday_custom_blocks' );


/**
 * Social media links shortcode 
 * @author Archie M
 * 
 */
function shortcode_acf_tablefield() {

  ob_start();
  
  $facebook = get_field('facebook', 'options');
  $instagram = get_field('instagram', 'options');
  $linkedin = get_field('linkedin', 'options');

  if( $facebook || $instagram || $linkedin ){ ?>
    <ul class="social-links-wrap">
      <?php if( !empty($facebook) ) { ?>
        <li>
          <a class="social-icon facebook" href="<?php echo $facebook; ?>" target="_blank">Facebook</a>
        </li>
      <?php } ?> 
      <?php if( !empty($instagram) ) { ?>
        <li>
          <a class="social-icon instagram" href="<?php echo $instagram; ?>" target="_blank">Instagram</a>
        </li>
      <?php } ?> 
      <?php if( !empty($linkedin) ) { ?>
        <li>
          <a class="social-icon linkedin" href="<?php echo $linkedin; ?>" target="_blank">LinkedIn</a>
        </li> 
      <?php } ?> 
    </ul>
  <?php }

  return ob_get_clean();
}
add_shortcode( 'footer_social', 'shortcode_acf_tablefield' );



/**
 * Disable comments 
 * 
 */
add_action('admin_init', function () {
  // Redirect any user trying to access comments page
  global $pagenow;
  
  if ($pagenow === 'edit-comments.php') {
      wp_redirect(admin_url());
      exit;
  }

  // Remove comments metabox from dashboard
  remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

  // Disable support for comments and trackbacks in post types
  foreach (get_post_types() as $post_type) {
      if (post_type_supports($post_type, 'comments')) {
          remove_post_type_support($post_type, 'comments');
          remove_post_type_support($post_type, 'trackbacks');
      }
  }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
  remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
  if (is_admin_bar_showing()) {
      remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
  }
});

// Hide co,
add_action('wp_before_admin_bar_render', function() {
  global $wp_admin_bar;
  $wp_admin_bar->remove_menu('comments');
});


/**
 * Happy Pay contact details shortcode 
 * @author Archie M
 * 
 */
function shortcode_happy_pay_contacts() {

  ob_start();
  
  $physical_address = get_field('physical_address', 'options');
  $telephone_number = get_field('telephone_number', 'options');
  $email_address = get_field('email_address', 'options');
  $website_url = get_field('website_url', 'options');
  ?>

  <ul class="contact-details">
    <?php if( !empty($physical_address) ) { ?>
      <li>
        <div class="content-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/theme/images/contact_location.svg" alt="Physical Address">
        </div>
        <div class="contact-content">
          <span class="bold">Address</span>: <?php echo $physical_address; ?>
        </div>
      </li>
    <?php } ?> 
    <?php if( !empty($telephone_number) ) { ?>
      <li>
        <div class="content-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/theme/images/contact_telephone.svg" alt="Telephone Number">
        </div>
        <div class="contact-content">
          <span class="bold">Telephone</span>: <a href="tel:<?php echo $telephone_number; ?>"><?php echo $telephone_number; ?></a>
        </div>
      </li>
    <?php } ?> 
    <?php if( !empty($email_address) ) { ?>
      <li>
        <div class="content-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/theme/images/contact_email.svg" alt="Email Address">
        </div>
        <div class="contact-content">
        <span class="bold">Email</span>: <a href="mailto:<?php echo $email_address ?>"><?php echo $email_address; ?></a>
        </div>
      </li> 
    <?php } ?> 
    <?php if( !empty($website_url) ) { ?>
      <li>
        <div class="content-icon">
          <img src="<?php echo get_template_directory_uri(); ?>/theme/images/contact_website.svg" alt="Website">
        </div>
        <div class="contact-content">
        <span class="bold">Website</span>: <a href="<?php echo 'https://' . $website_url; ?>" target="_blank"><?php echo $website_url; ?></a>
        </div>
      </li> 
    <?php } ?> 
  </ul>

  <?php
  return ob_get_clean();
}
add_shortcode( 'contact-details', 'shortcode_happy_pay_contacts' );


/**
 * Disable all non-admins from accessing the dashboard
 * 
 */
function blockusers_init() {

  if ( is_admin() && ! current_user_can( 'administrator' ) && 
      ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
      wp_redirect( home_url() );
      exit;
  }

}
//add_action( 'init', 'blockusers_init' );
