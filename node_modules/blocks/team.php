<?php
/**
 * Team block 
 * 
 */
?>

<!-- Team block -->
<section class="team py-5">
  <?php if( have_rows('team_members') ): ?>
    <div class="row team-members">
      <?php while( have_rows('team_members') ) : the_row(); ?>
        <?php 
          // Load sub field value.
          $team_member_photo = get_sub_field('team_member_photo');
          $team_member_name = get_sub_field('team_member_name'); 
          $team_member_position = get_sub_field('team_member_position'); 
        ?>
        <?php if( !empty($team_member_photo) && !empty($team_member_name) ):?>
          <div class="col-sm-6 col-md-3">
            <figure>
              <img src="<?php echo esc_url($team_member_photo['url']); ?>" alt="<?php echo esc_attr($team_member_photo['alt']); ?>" />
            </figure>
            <h4 class="team-member-name"><?php echo $team_member_name; ?></h4>
            <p class="team-member-position"><?php echo $team_member_position; ?></p>
          </div>
        <?php endif; ?>
      <?php endwhile; ?>
  </div>
  <?php endif; ?>
</section>
