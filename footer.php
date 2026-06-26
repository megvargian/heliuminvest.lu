<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
</div><!-- #content -->
  <!-- ============ FOOTER ============ -->
  <footer class="hi-footer">
    <div class="hi-container hi-footer__inner">
      <a class="hi-logo hi-logo--light" href="#top">
        <img class="hi-logo__image hi-logo__image--light" src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/logo.png' ); ?>" alt="Helium Invest" loading="lazy" decoding="async">
      </a>
      <nav class="hi-footer__nav">
        <a href="#approche">Approche</a>
        <a href="#strategie">Stratégie</a>
        <a href="#valeurs">Valeurs</a>
        <a href="#philanthropie">Philanthropie</a>
        <a href="#contact">Contact</a>
      </nav>
      <p class="hi-footer__copy">© 2026 Helium Invest. Tous droits réservés.</p>
    </div>
  </footer>
</div>
</div><!-- #page -->
<script>
    jQuery(document).ready(function($) {
    });
</script>
<?php wp_footer(); ?>
</body>
</html>