<?php
/*
 * Enqueues
 */

// Enqueue of the assets
if ( ! function_exists('happypay_enqueues') ) {
	function happypay_enqueues() {

		// Styles
		wp_register_style('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', false, '5.0.2', null);
		wp_enqueue_style('bootstrap5');

		wp_register_style('bootstrapIcons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css', false, '1.5.0', null);
		wp_enqueue_style('bootstrapIcons');

		wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );

		wp_register_style('theme', get_template_directory_uri() . '/theme/css/happypay.css', false, null);
		wp_enqueue_style('theme');


		// Scripts
		wp_register_script('bootstrap5', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js', false, '5.0.2', true);
		wp_enqueue_script('bootstrap5');

		if ( is_page( 'merchants' ) || is_page( 6 ) ) {
			wp_register_script('counter-js', 'https://unpkg.com/counterup2@2.0.2/dist/index.js', false, '5.0.2', true);
			wp_enqueue_script('counter-js');
		}

		wp_register_script('velocity', get_template_directory_uri() . '/theme/js/lib/velocity.min.js', array('jquery'), '1.0.0', true);
		//wp_enqueue_script('velocity');

		wp_register_script('velocity-ui', get_template_directory_uri() . '/theme/js/lib/velocity.ui.min.js', array('jquery'), '1.0.0', true);
		//wp_enqueue_script('velocity-ui');

		//wp_register_script('cursor-btnctrl', get_template_directory_uri() . '/theme/js/lib/cursor-buttonCtrl.js', array('jquery'), '1.0.0', true);
		//wp_enqueue_script('cursor-btnctrl');

		wp_register_script('theme', get_template_directory_uri() . '/theme/js/happypay.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('theme');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
		
	}
}
add_action('wp_enqueue_scripts', 'happypay_enqueues', 100);
