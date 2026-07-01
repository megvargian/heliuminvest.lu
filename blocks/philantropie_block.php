<?php
/**
 * Template Name: Philantropie Block
 */
$all_fields = get_fields();
?>
<!-- ============ PHILANTHROPIE (onglets) ============ -->
<section class="hi-section hi-section--philanthropy" id="philanthropie">
    <div class="hi-container">
        <div class="hi-phil__head">
            <span class="hi-eyebrow hi-eyebrow--phil"><span class="hi-eyebrow__num">04</span><?php echo esc_html( $all_fields['eyebrow'] ); ?></span>
            <h2 class="hi-h2 hi-phil__title"><?php echo esc_html( $all_fields['title'] ); ?></h2>
            <p class="hi-section__lede hi-section__lede--phil">
                <?php echo esc_html( $all_fields['description'] ); ?>
            </p>
        </div>

        <div class="hi-tabs" id="hiPhilTabs">
            <?php foreach ( $all_fields['panels'] as $key => $panel ) : ?>
                <button class="hi-tab<?php echo $key === 0 ? ' is-active' : ''; ?>" type="button" data-tab="<?php echo esc_attr( $key ); ?>"><?php echo esc_html( $panel['title'] ); ?></button>
            <?php endforeach; ?>
        </div>

        <div class="hi-phil__panel-wrap">
            <?php foreach ( $all_fields['panels'] as $key => $panel ) : ?>
                <div class="hi-phil__panel<?php echo $key === 0 ? ' is-active' : ''; ?>" data-panel="<?php echo esc_attr( $key ); ?>">
                    <div class="hi-phil__text">
                        <span class="hi-phil__num">0<?php echo $key + 1; ?></span>
                        <h3><?php echo esc_html( $panel['title'] ); ?></h3>
                        <p>
                            <?php echo esc_html( $panel['description'] ); ?>
                        </p>
                        <span class="hi-phil__tag"><?php echo esc_html( $panel['tags'] ); ?></span>
                    </div>
                    <div class="hi-phil__media" aria-hidden="true">
                        <img src="<?php echo esc_url( $panel['image'] ); ?>"
                            alt="<?php echo esc_attr( $panel['title'] ); ?>" loading="eager" decoding="async">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <p class="hi-phil__footnote">
            <?php echo esc_html( $all_fields['footnote'] ); ?>
        </p>
    </div>
</section>