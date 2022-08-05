<?php //Template name: Landing Page 
?>
<!doctype html>
<html <?php language_attributes() ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <main class="landing-page">
    <div class="container-wrap">
      <?php the_content(); ?>
    </div>
  </main>
  <?php endwhile;
    wp_reset_postdata();
  endif; ?>
</body>
<?php wp_footer(); ?>

</html>