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
            <span class="hi-eyebrow hi-eyebrow--phil"><span class="hi-eyebrow__num">04</span> Philanthropie</span>
            <h2 class="hi-h2 hi-phil__title">Un engagement durable pour le progrès social</h2>
            <p class="hi-section__lede hi-section__lede--phil">
                L'engagement social d'Helium Invest s'inscrit dans la durée, avec un
                attachement particulier pour le Liban.
            </p>
        </div>

        <div class="hi-tabs" id="hiPhilTabs">
            <button class="hi-tab is-active" type="button" data-tab="education">Éducation</button>
            <button class="hi-tab" type="button" data-tab="sante">Santé</button>
            <button class="hi-tab" type="button" data-tab="liberte">Liberté d'expression</button>
            <button class="hi-tab" type="button" data-tab="environnement">Environnement</button>
        </div>

        <div class="hi-phil__panel-wrap">
            <div class="hi-phil__panel is-active" data-panel="education">
                <div class="hi-phil__text">
                    <span class="hi-phil__num">01</span>
                    <h3>Éducation</h3>
                    <p>
                        Helium Invest accompagne plusieurs universités de référence, des
                        programmes de bourses étudiantes ainsi que des bourses scolaires.
                    </p>
                    <span class="hi-phil__tag">— Universités · Bourses</span>
                </div>
                <div class="hi-phil__media" aria-hidden="true">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/education.jpg' ); ?>"
                        alt="Éducation" loading="lazy" decoding="async">
                </div>
            </div>

            <div class="hi-phil__panel" data-panel="sante">
                <div class="hi-phil__text">
                    <span class="hi-phil__num">02</span>
                    <h3>Santé</h3>
                    <p>
                        Nous soutenons des hôpitaux universitaires afin de les aider à moderniser
                        leurs équipements, investir dans la recherche et renforcer l'innovation
                        médicale.
                    </p>
                    <span class="hi-phil__tag">— Hôpitaux · Recherche</span>
                </div>
                <div class="hi-phil__media" aria-hidden="true">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/sante.jpg' ); ?>"
                        alt="Santé" loading="eager" decoding="async">
                </div>
            </div>

            <div class="hi-phil__panel" data-panel="liberte">
                <div class="hi-phil__text">
                    <span class="hi-phil__num">03</span>
                    <h3>Liberté d'expression &amp; citoyenneté</h3>
                    <p>
                        Helium Invest soutient le journalisme de qualité, notamment à travers
                        L'Orient-Le Jour, titre francophone basé à Beyrouth, dont nous sommes
                        parmi les principaux actionnaires depuis plus de trente ans.
                    </p>
                    <span class="hi-phil__tag">— Journalisme · L'Orient-Le Jour</span>
                </div>
                <div class="hi-phil__media" aria-hidden="true">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/liberte.jpg' ); ?>"
                        alt="Liberté d'expression" loading="eager" decoding="async">
                </div>
            </div>

            <div class="hi-phil__panel" data-panel="environnement">
                <div class="hi-phil__text">
                    <span class="hi-phil__num">04</span>
                    <h3>Environnement</h3>
                    <p>
                        Nous accompagnons des ONG spécialisées dans le traitement des déchets,
                        l'écotourisme et la protection de la biodiversité.
                    </p>
                    <span class="hi-phil__tag">— ONG · Biodiversité</span>
                </div>
                <div class="hi-phil__media" aria-hidden="true">
                    <img src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/environnement.jpg' ); ?>"
                        alt="Environnement" loading="eager" decoding="async">
                </div>
            </div>
        </div>

        <p class="hi-phil__footnote">
            Notre ambition est de structurer et d'amplifier cette dynamique, en soutenant
            davantage d'initiatives au service du développement humain, du progrès social
            et de la vitalité du débat public.
        </p>
    </div>
</section>