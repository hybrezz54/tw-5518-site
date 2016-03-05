<?php

  get_header();

  <div id="main" class="notop">

    <div class="container-fluid">
      <div class="jumbotron page">
        <h1><?php get_the_title(); ?></h1>
      </div>
    </div>

    if (have_posts()) :
      while (have_posts()) : the_post(); ?>

        <div class="container-fluid">
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
        </div>

        <hr />

      <?php endwhile;

    else :
      echo '<p>No content found</p>';

    endif;

    ?>

  </div>

  <?php get_footer();

?>
