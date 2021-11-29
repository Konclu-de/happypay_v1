<?php
/*
 * happypay Action Hooks
 * =================
 * Designed to be used by a child theme, but they can also be used directly 
 * in your development of happypay. Example usage:
 *    -- See “Dimox Breadcrumbs Insertion” below.
 *    -- See “Mainbody Widgets 1 Insertion” below.
 */

// Navbar (in `header.php`)

function happypay_navbar_before() {
  do_action('navbar_before');
}

function happypay_navbar_after() {
  do_action('navbar_after');
}
function happypay_navbar_brand() {
  if ( ! has_action('navbar_brand') ) {
    // get ACF options
    $header_logo = get_field( 'header_logo', 'option' );
    ?>
    <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
      <?php echo wp_get_attachment_image( $header_logo['ID'] ); ?>
    </a>
    <?php
  } else {
		do_action('navbar_brand');
	}
}
function happypay_navbar_search() {
  if ( ! has_action('navbar_search') ) {
    ?>
    <form class="d-flex" role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
      <div class="input-group">
        <input class="form-control border-secondary" type="text" value="<?php echo get_search_query(); ?>" placeholder="Search..." name="s" id="s">
        <button type="submit" id="searchsubmit" value="<?php esc_attr_x('Search', 'happypay') ?>" class="btn btn-outline-secondary">
          <i class="bi bi-search"></i>
        </button>
      </div>
    </form>
    <?php
  } else {
		do_action('navbar_search');
	}
}

// Mainbody
function happypay_mainbody_before() {
  do_action('mainbody_before');
}
function happypay_mainbody_after() {
  do_action('mainbody_after');
}

function happypay_mainbody_start() {
  do_action('mainbody_start');
}
function happypay_mainbody_end() {
  do_action('mainbody_end');
}

/*
 * Dimox Breadcrumbs Insertion
 * ===========================
 * An example for how to insert something via an action hook -- 
 * but inserting it only on single posts, using `is_single()`.
 */
function happypay_dimox_single_post() {
  if ( is_single() ) { ?>
    <?php if (function_exists('dimox_breadcrumbs')) { ?>
      <?php dimox_breadcrumbs(); ?>
    <?php } ?>
  <?php }
};
add_action( 'mainbody_before', 'happypay_dimox_single_post' );


/*
 * Mainbody Widgets 1 Insertion
 * ============================
 * An example for how to insert something via an action hook -- 
 * this will appear on every page (if you have widgets in this area).
 */
function happypay_mainbody_widgets_1() {
  if(is_active_sidebar('mainbody-widget-area-1')): ?>
    <section class="container-xxl my-5">
      <div class="row">
        <?php dynamic_sidebar('mainbody-widget-area-1'); ?>
      </div>
    </section>
  <?php endif;
};
//add_action( 'mainbody_end', 'happypay_mainbody_widgets_1' );

// Footer (in `footer.php`)
function happypay_footer_before() {
  do_action('footer_before');
}
function happypay_footer_after() {
  do_action('footer_after');
}

function happypay_bottomline() {
	if ( ! has_action('bottomline') ) {
		?>
    <div id="sub-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <p class="text-center text-sm-start">Copyright &copy; <?php echo date('Y'); ?> <a href="<?php echo home_url('/'); ?>"><?php bloginfo('name'); ?></a>.</p>
          </div>
        </div>
      </div>
    </div>
		<?php		
	} else {
		do_action('bottomline');
	}
}
