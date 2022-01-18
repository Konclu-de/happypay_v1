<?php
/*
 * The Single Post
 */
?>

<?php if(have_posts()): while(have_posts()): the_post(); ?>
  <article role="article" id="post_<?php the_ID()?>" <?php post_class("entry-content")?> >

    <section class="single-post-details">

      <div class="container">
        <div class="row ">
            <div class="col-12">
              <?php the_post_thumbnail(); ?>
            </div>
        </div>

        <div class="row">
          <div class="col-12">
            <header class="wrap-lg my-5 entry-header">
              <h1><?php the_title()?></h1>
              <div class="index-post-category mb-5 text-center text-muted">
                <i class="bi bi-bookmark"></i> 
                <span class="text-uppercase"><?php the_category(', '); ?></span>
              </div>
              <div class="header-metas d-flex justify-content-center align-items-center my-5 text-muted">
                
                <div class="pe-3 d-flex align-items-center">
                  <?php # <i class="bi bi-person-circle"></i> ?>
                  <div class="me-1 border rounded-circle overflow-hidden">
                    <?php happypay_author_avatar(); ?>
                  </div>
                  <?php _e('By', 'happypay'); echo '&nbsp;'; the_author_posts_link(); ?>
                </div>

                <div class="pe-3">
                  <i class="bi bi-calendar3"></i>
                  <?php happypay_post_date(); ?>
                </div>

                <div>
                  <i class="bi bi-chat-text"></i>
                  <a href="#post-comments"><?php
                    $comment_count = get_comments_number();
                    printf(
                      /* translators: 1: comment count number. */
                      esc_html( _nx( '%1$s comment', '%1$s comments', $comment_count, 'happypay' ) ),
                      number_format_i18n( $comment_count )
                    );
                  ?></a>
                </div>
              </div>
            </header>
          </div>
        </div>

      </div>

    </section>

    <?php //wp_link_pages(); ?>

    <section class="wrap-md my-5 long-read">
      <?php the_content(); ?>
    </section>

    <?php wp_link_pages(); ?>
  </article>

  <?php if (has_tag()) { ?>
    <div class="wrap-md footer-metas my-5 text-muted">
      <i class="bi bi-tag"></i>
      <?php the_tags('Tagged: ', ', '); ?>
    </div>
  <?php  }; ?>

  <section class="wrap-md author-bio d-flex border-top border-bottom py-5">
    <div class="border rounded-circle overflow-hidden">
      <?php happypay_author_bio_avatar(); ?>
    </div>
    <div class="ms-3">
      <p class="h4 author-name"><?php _e('Author: ', 'happypay'); the_author(); ?></p>
      <?php if (happypay_author_description()) {
        ?>
        <div class="author-description"><?php happypay_author_description(); ?></div>
        <?php
      } ?>
      <p class="author-other-posts mb-0"><?php _e('Other posts by ', 'happypay'); the_author_posts_link(); ?></p>
    </div>
  </section><!-- /.author-bio -->

  <?php
  endwhile; else :
    get_template_part('loops/404');
  endif;
?>
