<?php
/**
 * Template Name: Approche en deux temps Block
 */
$all_fields = get_fields();
?>
<section class="hi-section" id="valeurs">
    <div class="hi-container">
        <span class="hi-eyebrow hi-eyebrow--values"><span class="hi-eyebrow__num">03</span><?php echo $all_fields['eyebrow']; ?></span>
        <h2 class="hi-h2 hi-h2--spaced"><?php echo $all_fields['title']; ?></h2>
        <p class="hi-section__lede">
            <?php echo $all_fields['description']; ?>
        </p>

        <div class="hi-values-layout">
            <div class="hi-accordion" id="hiValeurs">
                <?php foreach ( $all_fields['values'] as $value ) : ?>
                    <div class="hi-accordion__item">
                        <button class="hi-accordion__head" type="button">
                            <span><?php echo esc_html( $value['name'] ); ?></span>
                            <span class="hi-accordion__icon" aria-hidden="true"></span>
                        </button>
                        <div class="hi-accordion__body">
                            <p>
                                <?php echo esc_html( $value['description'] ); ?>
                            </p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>