<?php
/**
 * Template Name: Intro Block
 */
$all_fields = get_fields();
?>
<!-- ============ INTRO ============ -->
<section class="hi-section hi-section--about" id="approche">
    <div class="hi-container hi-intro">
        <div class="hi-intro__left">
            <span class="hi-eyebrow hi-eyebrow--about"><span class="hi-eyebrow__num">01</span><?php echo esc_html( $all_fields['eyebrow'] ); ?></span>
            <h2 class="hi-h2 hi-intro__title">
                <?php echo $all_fields['title'];?>
            </h2>
        </div>
        <div class="hi-intro__right">
            <?php echo $all_fields['description']; ?>
        </div>
    </div>
</section>