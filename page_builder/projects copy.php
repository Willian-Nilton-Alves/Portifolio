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

          <div class="container marketing">


            <!-- START THE FEATURETTES -->

            <div class="row featurette">
              <div class="col-md-6">
                <h2 class="featurette-heading">First featurette heading. <span class="text-muted">It'll blow your
                    mind.</span></h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                  semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                  commodo.</p>
              </div>
              <div class="col-md-6">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                  style="width: 500px; height: 500px;"
                  src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18b1c82c91d%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A25pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_18b1c82c91d%22%3E%3Crect%20width%3D%22500%22%20height%3D%22500%22%20fill%3D%22%23EEEEEE%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22185.1171875%22%20y%3D%22261.1%22%3E500x500%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                  data-holder-rendered="true">
              </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
              <div class="col-md-6 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it's that good. <span class="text-muted">See for yourself.</span>
                </h2>
                <p class="lead">Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod
                  semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus
                  commodo.</p>
              </div>
              <div class="col-md-6 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                  style="width: 500px; height: 500px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22500%22%20height%3D%22500%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20500%20500%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_18b1c82c91e%20text%20%7B%20fill%3A%23AAAAAA%3Bfont-weight%3Abold%3Bfont-family%3AArial%2


            <!-- /END THE FEATURETTES -->

          </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); ?>
      <?php endif; ?>

    </div>
  </div>
</div>