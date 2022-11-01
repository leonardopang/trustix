  <footer class="footer">
    <div class="container-wrap">
      <div class="footer-top_container grid four_grids">
        <div class="footer--item">
          <div class="logo_container">
            <img src="<?= site_url() ?>/wp-content/uploads/logo-whith-description.svg" alt="Trustix">
          </div>
          <div class="redes-sociais_container">

            <?php if (have_rows('redes_sociais_widget', 'opt-footer')) : ?>
            <?php while (have_rows('redes_sociais_widget', 'opt-footer')) : ?>
            <?php the_row(); ?>
            <?php $selec_social = get_sub_field('select_social_media_widget'); ?>
            <?php $link_social = get_sub_field('link_rede_social_widget'); ?>
            <?php if ($selec_social === 'whatsapp') : ?>
            <a href="<?= $link_social ?>" target="_blank"></a>
            <?php elseif ($selec_social === 'facebook') : ?>
            <a href="<?= $link_social ?>" target="_blank"><?php get_svg('social-icon-grey-facebook') ?></a>
            <?php elseif ($selec_social === 'chat') : ?>
            <a href="<?= $link_social ?>" target="_blank"></a>
            <?php elseif ($selec_social === 'instagram') : ?>
            <a href="<?= $link_social ?>" target="_blank"><?php get_svg('social-icon-grey-instagram') ?></a>
            <?php elseif ($selec_social === 'linkedin') : ?>
            <a href="<?= $link_social ?>" target="_blank"></a>
            <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="footer--item">
          <div class="title-container">
            <h5>Trustix</h5>
          </div>
          <nav class="menu-container">
            <?php
            wp_nav_menu(array(
              'menu' => 'trustix',
              'menu_class' => 'footer-menu'
            ))
            ?>
          </nav>
        </div>
        <div class="footer--item">
          <div class="title-container">
            <h5>Support</h5>
          </div>
          <nav class="menu-container">
            <?php
            wp_nav_menu(array(
              'menu' => 'support',
              'menu_class' => 'footer-menu'
            ))
            ?>
          </nav>
        </div>
        <div class="footer--item">
          <div class="title-container">
            <h5>Others</h5>
          </div>
          <nav class="menu-container">
            <?php
            wp_nav_menu(array(
              'menu' => 8,
              'menu_class' => 'footer-menu'
            ))
            ?>
          </nav>
        </div>
      </div>
      <div class="footer-bottom">
        <p class="copy-right">All Rights Reserved</p>
      </div>
    </div>
  </footer>
  </body>
  <div class="widget-social">
    <?php if (have_rows('redes_sociais_widget', 'opt-social')) : ?>
    <?php while (have_rows('redes_sociais_widget', 'opt-social')) : ?>
    <?php the_row(); ?>
    <?php $selec_social = get_sub_field('select_social_media_widget'); ?>
    <?php $link_social = get_sub_field('link_rede_social_widget'); ?>
    <?php if ($selec_social === 'whatsapp') : ?>
    <a href="<?= $link_social ?>" target="_blank"
      class="widget-social--item"><?php get_svg('icon-widget-whatsapp') ?></a>
    <?php elseif ($selec_social === 'facebook') : ?>
    <a href="<?= $link_social ?>" target="_blank" class="widget-social--item"></a>
    <?php elseif ($selec_social === 'chat') : ?>
    <a href="<?= $link_social ?>" target="_blank" class="widget-social--item"><?php get_svg('icon-widget-chat') ?></a>
    <?php elseif ($selec_social === 'instagram') : ?>
    <a href="<?= $link_social ?>" target="_blank" class="widget-social--item"></a>
    <?php elseif ($selec_social === 'linkedin') : ?>
    <a href="<?= $link_social ?>" target="_blank" class="widget-social--item"></a>
    <?php endif; ?>
    <?php endwhile; ?>
    <?php endif; ?>
  </div>
  <?php wp_footer(); ?>
  <script src="<?= get_template_directory_uri() ?>/public/js/app.js"></script>

  </html>