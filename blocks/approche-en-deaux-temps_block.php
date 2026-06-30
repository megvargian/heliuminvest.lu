<?php
/**
 * Template Name: Approche en deux temps Block
 */
$all_fields = get_fields();
?>
<!-- ============ APPROCHE EN DEUX TEMPS ============ -->
<section class="hi-section hi-section--tint" id="strategie">
    <div class="hi-container">
        <span class="hi-eyebrow hi-eyebrow--strategy"><span class="hi-eyebrow__num">02</span><?php echo esc_html( $all_fields['eyebrow'] ); ?></span>
        <h2 class="hi-h2 hi-h2--spaced hi-strategy__title"><?php echo esc_html( $all_fields['title'] ); ?></h2>

        <div class="hi-grid-2 hi-grid-2--strategy">
            <article class="hi-step-card">
                <span class="hi-step-card__num">1</span>
                <h3><?php echo esc_html( $all_fields['cards'][0]['title'] ); ?></h3>
                <p>
                    <?php echo $all_fields['cards'][0]['description']; ?>
                </p>
                <ul class="hi-strategy-list">
                    <?php echo $all_fields['cards'][0]['list']; ?>
                </ul>
            </article>

            <article class="hi-step-card">
                <span class="hi-step-card__num">2</span>
                <h3><?php echo esc_html( $all_fields['cards'][1]['title'] ); ?></h3>
                <p>
                    <?php echo $all_fields['cards'][1]['description']; ?>
                </p>
                <ul class="hi-tags">
                    <?php echo $all_fields['cards'][1]['list']; ?>
                </ul>
            </article>
        </div>
    </div>
</section>
