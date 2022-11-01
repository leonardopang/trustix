<?php
$args_desk = array(
  'menu' => 'principal',
);
?>
<!doctype html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/public/css/main.css">
  <?php wp_head(); ?>
</head>

<body <?php body_class() ?>>
  <?php wp_body_open() ?>
  <header class="header">
    <div class="header-middle">
      <div class="container-wrap">
        <div class="header-middle_container">
          <div class="logo-container">
            <a href="<?= site_url() ?>">
              <!-- <img src="<?= site_url() ?>/wp-content/uploads/logo.svg" alt="<?= bloginfo('title') ?>"> -->
              <img src="<?= the_field('desktop', 'opt-logo') ?>" alt="<?= bloginfo('title') ?>">
            </a>
          </div>
          <nav class="menu-desk">
            <?php wp_nav_menu($args_desk); ?>
          </nav>
          <div class="hamburguer-menu">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
          </div>
        </div>

      </div>
    </div>
    <nav class="menu-mobile">
      <div class="container-wrap">
        <?php wp_nav_menu($args_desk); ?>
      </div>
    </nav>
  </header>