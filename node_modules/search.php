<?php
  get_header(); 
  happypay_mainbody_before();
?>

<main id="site-main">
  <?php 
    happypay_mainbody_start();
    get_template_part('loops/search-results');
    happypay_mainbody_end();
  ?>
</main>

<?php 
  happypay_mainbody_after();
  get_footer(); 
?>