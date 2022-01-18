      <!-- Footer -->
      <?php happypay_footer_before();?>

      <div class="circle"></div>
      <div class="cursor"></div>

      <?php 
        // Check to see if whatsapp has a number and display icon
        $whatsapp_number = get_field( 'whatsapp_contact_number', 'option' ); 
        $whatsapp_message = urlencode( get_field( 'whatsapp_contact_message', 'option' ) ); 

        if( !empty($whatsapp_number) && !empty($whatsapp_message) ) { ?>
          <div id="whatsapp-icon-wrapper" class="container-fluid">
            <a id="whatsapp-icon" class="whatsapp-icon" href="https://wa.me/<?php echo $whatsapp_number; ?>?text=<?php echo $whatsapp_message;?>" target="_blank">
              <!-- WhatsApp -->
            </a>
          </div>
        <?php
        }
      ?>

      <footer id="site-footer" class="">

        <div class="container">

          <?php if(is_active_sidebar('footer-widget-area')): ?>
            <div class="row pt-5 pb-5" id="footer" role="navigation">
              <?php dynamic_sidebar('footer-widget-area'); ?>
            </div>
          <?php endif; ?>

          <div class="scroll-to-top">
            <a href="#" class="o-scroll-up" title="back to top">
              <span class="o-scroll-up-text hidden-sm-down">Back to top</span>
            </a>
          </div>

        </div>

      </footer>

      <?php happypay_footer_after();?>

      <?php happypay_bottomline();?>

      <?php wp_footer(); ?>

    </div>
  </div>
</body>
</html>
