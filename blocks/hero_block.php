<?php
/**
 * Template Name: Hero Block
 */
$all_fields = get_fields();
?>
<!-- ============ HERO ============ -->
<section class="hi-hero" id="top">
    <div class="hi-container hi-hero__inner">
        <div class="hi-hero__copy">
            <span class="hi-eyebrow"><span class="line"></span><?php echo esc_html( $all_fields['eyebrow'] ); ?></span>
            <h1 class="hi-hero__title">
                <?php echo $all_fields['title']; ?>
                <span class="hi-accent"><?php echo esc_html( $all_fields['title_highlighted'] ); ?></span>
            </h1>
            <p class="hi-hero__text">
                <?php echo esc_html( $all_fields['description'] ); ?>
            </p>
            <a href="#approche" class="hi-btn hi-btn--dark"><?php echo esc_html( $all_fields['button_text'] ); ?></a>
        </div>
        <div class="hi-hero__visual" aria-hidden="true">
            <img class="hi-hero__circle"
                src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/hero-circle.png' ); ?>"
                alt="" loading="eager" decoding="async">
        </div>
    </div>
</section>