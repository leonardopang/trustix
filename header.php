<!doctype html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
              <img src="<?= site_url() ?>/wp-content/uploads/logo.svg" alt="<?= bloginfo('title') ?>">
            </a>
          </div>
          <nav class="menu-desk">
          </nav>
        </div>
      </div>
    </div>
  </header>