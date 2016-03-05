<!DOCTYPE html>
<html lang="en">

<head>
  <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
  <?php wp_enqueue_script('jquery'); ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
