<?php

// $args = array(
// 'numberposts' => 8,
// 'post_type'   => 'skills'
//);
//
//$latest_skills = get_posts( $args );

$featured_posts = get_sub_field('select_skills');

?>




<section>

  <div class="skills" id="skills">
    <div class="max-container">
      <div>
        <p class="skills-title">Skills</p>
      </div>

      <div class="skills-grid">
        <?php
        if ($featured_posts): ?>

          <?php
          foreach ($featured_posts as $post):

            // Setup this post for WP functions (variable must be named $post).
            setup_postdata($post); ?>

            <div class="skill-item">
              <div class="shadow-box">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?= get_field("skill_image") ?>" alt="HTML icon">
                  <p>
                    <?= get_field("skill_name") ?>
                  </p>
                </a>
              </div>
            </div>

            <?php
          endforeach; ?>

          <?php
          // Reset the global post object so that the rest of the page works correctly.
          wp_reset_postdata(); ?>
        <?php endif; ?>


      </div>
    </div>
  </div>
</section>