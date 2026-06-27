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
    <div class="hi-footer__ring" aria-hidden="true">
      <img src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/footer-image.png' ); ?>" alt="" loading="lazy" decoding="async">
    </div>
    <div class="hi-container hi-footer__inner">
      <div class="hi-footer__left">
        <a class="hi-logo hi-logo--light" href="#top">
          <img class="hi-logo__image hi-logo__image--light" src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/logo.png' ); ?>" alt="Helium Invest" loading="lazy" decoding="async">
        </a>
        <p class="hi-footer__tagline">Investir avec exigence. Construire avec impact.</p>
        <span class="hi-footer__divider" aria-hidden="true"></span>
        <p class="hi-footer__copy">© 2026 Helium Invest. Tous droits réservés.</p>
      </div>
      <nav class="hi-footer__nav" aria-label="Navigation du pied de page">
        <a href="#approche">A propos</a>
        <a href="#strategie">Stratégie</a>
        <a href="#valeurs">Valeurs</a>
        <a href="#philanthropie">Philanthropie</a>
        <a href="#contact">Nous Contacter</a>
      </nav>
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