<?php

  get_header(); ?>

  <div id="main" class="notop">

    <div class="container-fluid">
      <div class="jumbotron page" style="background-color: #444;">
        <h1>News</h1>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div id="articles" class="col-md-9">
          <?php if (have_posts()) :
            while (have_posts()) : the_post(); ?>

              <article class="post">
                <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                <?php echo apply_filters('the_content', $post->post_content); ?>
                <hr />
              </article>

            <?php endwhile;

          else :
            echo '<p>No content found</p>';

          endif;

          ?>
        </div>

        <div class="box col-md-3">
          <?php get_option('content-box'); ?>;
        </div>
      </div>
    </div>

  </div>

  <?php get_footer();

?>
