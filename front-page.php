<?php
  get_header(); 
  happypay_mainbody_before();
?>

<?php 
  // Check to see if notifications exist and set height
  $notices = get_field( 'notices', 'option' ); 
  if($notices){ 
    $spacing_class = 'notification_spacing';
  } else {
    $spacing_class = 'no_notification_spacing';
  }
?>
<main id="site-main" class="<?php echo $spacing_class; ?>" >
  <?php happypay_mainbody_start(); ?>
    
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <article role="article" id="post_<?php the_ID()?>">
        <section class="container entry-content">
          <?php the_content()?>
          <?php wp_link_pages(); ?>
        </section>
      </article>
    <?php
      endwhile;
      else :
        get_template_part('loops/404');
      endif;
    ?>  

  <?php //happypay_mainbody_end(); ?>
</main>

<?php 
  happypay_mainbody_after();
  get_footer(); 
?>