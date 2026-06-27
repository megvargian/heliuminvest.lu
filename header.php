<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="facebook-domain-verification" content="nbgtoe1zhbp6ndb1l0i5ctn7n1zrst"   />
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div id="page" class="site main_page_wrapper">
        <div class="hi-page">
            <header class="hi-header">
                <div class="hi-container hi-header__inner">
                <a class="hi-logo py-3" href="#top">
                    <img class="hi-logo__image" src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/logo.png' ); ?>" alt="Helium Invest" loading="eager" decoding="async">
                </a>
                <nav class="hi-nav" id="mobile-navigation">
                    <a href="#approche">A propos</a>
                    <a href="#strategie">Stratégie</a>
                    <a href="#valeurs">Valeurs</a>
                    <a href="#philanthropie">Philanthropie</a>
                    <a href="#contact">Nous Contacter</a>
                </nav>
                <button class="hi-burger" type="button" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="mobile-navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
                </div>
                <div class="hi-menu-backdrop" aria-hidden="true"></div>
            </header>
    <script>
        jQuery(document).ready(function($) {
        });
    </script>
    <div class="site-content">