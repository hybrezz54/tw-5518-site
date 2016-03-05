<?php
  get_header();
?>

<div id="main">

    <div class="container-fluid">
      <div class="slider">
        <?php
          echo do_shortcode('[URIS id=116]');
        ?>
      </div>
    </div>

    <!--About Us-->
      <div class="jumbotron img-banner" id="main-banner">
        <div class="container">
          <div class="row">

            <div class="col-md-7">
              <h1>About Us</h1>
              <p>Techno Wolves Team 5518 is a two year old FIRST Robotics Competition team based in Raleigh, North Carolina.
                Founded in 2014, Techno Wolves maintains a strong relationship with Wake STEM Early College High School although we have recently
                transitioned into a community-based team. Our team is a student run, extracurricular organization with approximately 50 student members.
                Our goal is not only to build an awesome robot, but also to build a better future by enriching our schools and communities through STEM
                (Science, Technology, Engineering, and Math) and the values of FIRST such as Coopertition® and Gracious Professionalism®.</p>
            </div>

            <div class="col-md-5">
              <img src="<?php get_option('about-img') ?>" alt="about us" class="img-responsive">
              <hr style="border-color: #fff;" />
              <p>
                <a style="text-shadow: none;" class="btn btn-primary btn-lg" href="#about" role="button">Learn more</a>
                <a style="text-shadow: none;" class="btn btn-primary btn-lg" href="#support" role="button">Donate</a>
              </p>
            </div>

          </div>
        </div>
      </div>

      <div class="container-fluid vert">
        <div class="jumbotron">
          <h2>UPDATES</h2>
        </div>
      </div>

      <div class="container-fluid">
        <div class="row">

          <div class="col-md-8">
            <div id="notif" class="jumbotron">

              <h2>
                <a href="/news" style="color: #222;">News</a>
              </h2>
              <hr />

              <?php if (have_posts()) :
                $i = 0; //counter
                while (have_posts() && $i < get_option('num-posts')) : the_post(); ?>

                  <div>
                    <h3><?php the_title(); ?></h3>
                    <?php the_content('<button class="btn btn-primary btn-sm" role="button">Read more...</button>'); ?>
                  </div>

                  <hr />

              <?php $i++; endwhile; endif; ?>

            </div>
          </div>

          <div class="col-md-4">
            <div class="jumbotron" id="notif">
              <?php echo get_option('twitter_embed'); ?>
            </div>
          </div>

        </div>
      </div>

  </div>

<?php
  get_footer();
?>
