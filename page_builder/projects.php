<?php

// $args = array(
// 'numberposts' => 8,
// 'post_type'   => 'skills'
//);
//
//$latest_skills = get_posts( $args );

$featured_posts = get_sub_field('select_projects');

?>




<?php
$featured_posts = get_sub_field('select_projects');

?>

<div class="work" id="projects">
  <div class="container">
    <div>
      <p class="work-title">Projects</p>
    </div>

    <div class="row">
      <?php if ($featured_posts): ?>
        <?php foreach ($featured_posts as $post): ?>
          <?php setup_postdata($post); ?>
          <div class="col-md-4">
            <div class="card text-center">
              <div class="card-body">
                <div class="card-img">
                  <img src="<?= get_field("projects_image") ?>" alt="HTML icon" class="img-fluid">
                  <p class="card-title h2 overlay">
                    <?= get_field("projects_name") ?>
                  </p>
                </div>
                <div class="titlebtn">
                  <div class="card-btn">
                    <a href="<?= get_field('github') ?>" target="_blank" class="btn btn-outline-dark">Code</a>
                    <a href="<?= get_field('live') ?>" target="_blank" class="btn btn-outline-dark">Live</a>
                  </div>

                </div>
              </div>
            </div>
          </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>
  </div>
</div>