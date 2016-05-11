<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo wp_title(''); ?></title>
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="icon" type="image/x-icon">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
