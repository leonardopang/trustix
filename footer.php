  <footer class="footer">
    <div class="container-wrap">
      <div class="footer-top_container grid four_grids">
        <div class="footer--item">
          <div class="logo_container">
            <img src="<?= site_url() ?>/wp-content/uploads/logo-whith-description.svg" alt="Trustix">
          </div>
          <div class="redes-sociais_container">
            <a href="" target="_blank">
              <?= file_get_contents(get_template_directory_uri() . '/assets/images/svg/social-icon-grey-snap.svg'); ?>
            </a>
            <a href="" target="_blank">
              <?= file_get_contents(get_template_directory_uri() . '/assets/images/svg/social-icon-grey-instagram.svg'); ?>
            </a>
            <a href="" target="_blank">
              <?= file_get_contents(get_template_directory_uri() . '/assets/images/svg/social-icon-grey-tiktok.svg'); ?>
            </a>
            <a href="" target="_blank">
              <?= file_get_contents(get_template_directory_uri() . '/assets/images/svg/social-icon-grey-facebook.svg'); ?>
            </a>
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
    <a href="" class="widget-social--item"><?php get_svg('icon-widget-whatsapp') ?></a>
    <a href="" class="widget-social--item"><?php get_svg('icon-widget-chat') ?></a>
  </div>
  <?php wp_footer(); ?>
  <script src="<?= get_template_directory_uri() ?>/public/js/app.js"></script>

  </html>