<?php

  get_header();

  if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <div id="main" class="notop">

      <div class="container-fluid">
        <div class="jumbotron page">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>

      <div class="container">
        <?php the_content(); ?>
      </div>
    </div>

    <hr />

    <?php endwhile;

  else :
    echo '<p>No content found</p>';

  endif;

  get_footer();

?>
