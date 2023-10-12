<?php

$args = array(
  'numberposts' => 8,
  'post_type' => 'skills'
);

$latest_skills = get_posts($args);

$featured_posts = get_field('featured_posts');

?>




<section>
  <div class="skills">
    <div class="max-container">
      <div>
        <p class="skills-title">Skills</p>
      </div>

      <div class="skills-grid">

        <?php
        if ($latest_skills) {
          foreach ($latest_skills as $post):
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
          endforeach;
        }
        ?>

      </div>
    </div>
  </div>
</section>


<div class="skill-item">
  <div class="shadow-box">
    <a href="<?php the_permalink(); ?>">
      <img src="<?= get_field("projects_image") ?>" alt="HTML icon">
      <p>
        <?= get_field("projects_name") ?>
      </p>
    </a>
  </div>
</div>