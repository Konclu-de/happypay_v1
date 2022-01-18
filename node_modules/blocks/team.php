<?php
/**
 * Team block 
 * 
 */

// get section settings
$background_colour = get_field('background_colour'); 
$text_colour = get_field('text_colour'); 
$button_colour = get_field('button_colour');

// fields 
$section_heading = get_field('section_heading');
?>

<!-- Team block -->
<div class="section-row team <?php echo $background_colour ?>">
  <div class="container">
    <?php if( !empty($section_heading) ): ?>
      <div class="row">
        <div class="col-md-12">
          <h2><?php echo $section_heading; ?></h2>
        </div>
      </div>
    <?php endif; ?>
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
              <h5 class="team-member-name"><?php echo $team_member_name; ?></h5>
              <p class="team-member-position"><?php echo $team_member_position; ?></p>
            </div>
          <?php endif; ?>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>
  </div>
</div>
