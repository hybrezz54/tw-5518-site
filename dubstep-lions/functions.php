<?php

function wpt_register_css() {
    wp_register_style( 'bootstrap.min', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_register_style( 'slick', get_template_directory_uri() . '/css/slick.css' );
    wp_register_style( 'slick-theme', get_template_directory_uri() . '/css/slick-theme.css' );
    wp_enqueue_style( 'bootstrap.min', 'slick', 'slick-theme' );
}

add_action( 'wp_enqueue_scripts', 'wpt_register_css' );

function import_css() {
  wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'import_css');

require_once('wp_bootstrap_navwalker.php');

//Navigation menus
register_nav_menus(array(
  'primary' => __('Primary Menu'),
  'secondary' => __('Secondary Menu')
));

function admin_styles() {
    wp_enqueue_style( 'admin-css', get_template_directory_uri() . '/css/admin.css' );
}

add_action("admin_menu", "dl_admin_menus");
function dl_admin_menus() {
  add_menu_page('Theme settings', 'Dubstep Lions', 'manage_options',
        'theme_settings', 'dl_settings');

  /*add_submenu_page('theme_settings',
        'Front Page Elements', 'Front Page', 'manage_options',
        'theme_settings', 'front_page_settings');*/
}

add_action('admin_init', 'register_settings');
function register_settings() {
  register_setting('dl-settings', 'num-posts');
  register_setting('dl-settings', 'content-box');
  register_setting('dl-settings', 'twitter-embed');
  register_setting('dl-settings', 'about-img');
}

function dl_settings() {// Check that the user is allowed to update options
  if (!current_user_can('manage_options')) {
      wp_die('You do not have sufficient permissions to access this page.');
  }

  ?>

  <div class="wrap">
    <h2>Dubstep Lion Theme Settings</h2>

    <form method="POST" action="options.php">

      <?php if(isset( $_GET['settings-updated'] )) { ?>
        <div id="message" class="updated">
          <p><strong>Settings updated successfully</strong></p>
        </div>
      <?php } ?>

      <table class="form-table">
        <tr valign="top">
          <th scope="row">
            <label for="num-posts">
              Number of displayed posts:
            </label>
          </th>
          <td>
            <input type="text" name="num-posts" id="num-posts" value="<?php get_option('num_posts') ?>">
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">
            <label for="content-box">
              Content in Box:
            </label>
          </th>
          <td>
            <textarea name="content-box" id="content-box">
              <?php echo get_option('content-box'); ?>
            </textarea>
          </td>
        </tr>
        <tr valign="top">
          <th scope="row">
            <label for="twitter-embed">
              Twitter Embed Widget:
            </label>
          </th>
          <td>
            <textarea name="twitter-embed" id="twitter-embed">
              <?php echo get_option('twitter-embed'); ?>
            </textarea>
          </td>
        </tr>
      </table>

      <h3>Featured Image URLs</h3>

      <ul id="img-url-list">
        <li>
          <label for="about-img">
            About Us:
          </label>
          <input type="text" name="about-img" id="about-img" value="<?php get_option('about-img') ?>">
        </li>
      </ul>
      <?php
        settings_fields("dl-settings");
        do_settings_sections("dl-theme");
        submit_button();
      ?>
    </form>
  </div>

  <?php
}

?>
