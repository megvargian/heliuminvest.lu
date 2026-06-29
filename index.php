<?php
/**
 * Template Name: Homepage
 */
get_header();
?>
<?php
	// while ( have_posts() ) : the_post();
    //     the_content();
	// endwhile;
?>

<!-- ============ HERO ============ -->
<section class="hi-hero" id="top">
    <div class="hi-container hi-hero__inner">
        <div class="hi-hero__copy">
            <span class="hi-eyebrow"><span class="line"></span> Plateforme d'investissement indépendante</span>
            <h1 class="hi-hero__title">
                Investir avec <br> exigence. <br>
                Construire avec <br>
                <span class="hi-accent">impact.</span>
            </h1>
            <p class="hi-hero__text">
                Une plateforme d'investissement indépendante alliant rigueur financière et
                ambition philanthropique, au service d'une croissance durable et responsable.
            </p>
            <a href="#approche" class="hi-btn hi-btn--dark">Découvrez notre approche</a>
        </div>
        <div class="hi-hero__visual" aria-hidden="true">
            <img class="hi-hero__circle"
                src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/hero-circle.png' ); ?>"
                alt="" loading="eager" decoding="async">
        </div>
    </div>
</section>

<!-- ============ INTRO ============ -->
<section class="hi-section hi-section--about" id="approche">
    <div class="hi-container hi-intro">
        <div class="hi-intro__left">
            <span class="hi-eyebrow hi-eyebrow--about"><span class="hi-eyebrow__num">01</span> À PROPOS</span>
            <h2 class="hi-h2 hi-intro__title">
                <span class="hi-intro__title-line">Une plateforme</span><br>
                <span class="hi-intro__title-line">d'investissement</span><br>
                <span class="hi-intro__title-line">indépendante</span>
            </h2>
        </div>
        <div class="hi-intro__right">
            <p class="hi-intro__lead">
                Helium Invest s'est construite autour d'une conviction forte : investir
                avec rigueur, accompagner dans la durée et créer de la valeur de manière
                responsable.
            </p>
            <p>
                En tant qu'actionnaire historique de Murex, Helium Invest a participé au
                développement d'une plateforme technologique complexe, devenue une
                référence internationale pour de nombreuses institutions financières,
                fruit de plus de 40 ans de croissance continue.
            </p>
            <p>
                Aujourd'hui, nous nous appuyons sur cette expérience pour développer un
                portefeuille robuste, performant et porteur de sens.
            </p>
        </div>
    </div>
</section>

<!-- ============ APPROCHE EN DEUX TEMPS ============ -->
<section class="hi-section hi-section--tint" id="strategie">
    <div class="hi-container">
        <span class="hi-eyebrow hi-eyebrow--strategy"><span class="hi-eyebrow__num">02</span> Notre stratégie</span>
        <h2 class="hi-h2 hi-h2--spaced hi-strategy__title">Une approche en deux temps</h2>

        <div class="hi-grid-2 hi-grid-2--strategy">
            <article class="hi-step-card">
                <span class="hi-step-card__num">1</span>
                <h3>Développer nos actifs avec rigueur et expertise</h3>
                <p>
                    En portant une attention particulière aux secteurs de la
                    <strong>technologie</strong>, de l'<strong>industrie</strong> et des <strong>services aux
                        entreprises</strong>.
                </p>
                <ul class="hi-strategy-list">
                    <li>Nous investissons de manière ciblée à travers des <strong>fonds</strong>, en travaillant en
                        partenariat étroit avec des équipes de confiance.</li>
                    <li>Nous investissons <strong>en direct</strong> dans des entreprises, toujours dans une logique
                        d'accompagnement long terme.</li>
                </ul>
            </article>

            <article class="hi-step-card">
                <span class="hi-step-card__num">2</span>
                <h3>Déployer une stratégie philanthropique</h3>
                <p>
                    En agissant dans l'éducation, la santé, le journalisme de qualité,
                    l'environnement et le progrès social.
                </p>
                <ul class="hi-tags">
                    <li>Éducation</li>
                    <li>Santé</li>
                    <li>Journalisme</li>
                    <li>Environnement</li>
                    <li>Progrès social</li>
                </ul>
            </article>
        </div>
    </div>
</section>

<!-- ============ VALEURS ============ -->
<section class="hi-section" id="valeurs">
    <div class="hi-container">
        <span class="hi-eyebrow hi-eyebrow--values"><span class="hi-eyebrow__num">03</span> Valeurs</span>
        <h2 class="hi-h2 hi-h2--spaced">Des valeurs ancrées dans notre histoire</h2>
        <p class="hi-section__lede">
            Helium Invest est une entreprise familiale indépendante portée par des valeurs
            fortes : transparence, rigueur et engagement durable sur le long terme.
        </p>

        <div class="hi-values-layout">

            <div class="hi-accordion" id="hiValeurs">
                <div class="hi-accordion__item">
                    <button class="hi-accordion__head" type="button">
                        <span>Intégrité</span>
                        <span class="hi-accordion__icon" aria-hidden="true"></span>
                    </button>
                    <div class="hi-accordion__body">
                        <p>
                            Nous agissons avec honnêteté et transparence, dans le respect de nos
                            partenaires, de nos équipes et des communautés que nous accompagnons.
                        </p>
                    </div>
                </div>

                <div class="hi-accordion__item">
                    <button class="hi-accordion__head" type="button">
                        <span>Excellence</span>
                        <span class="hi-accordion__icon" aria-hidden="true"></span>
                    </button>
                    <div class="hi-accordion__body">
                        <p>
                            Nous visons l'excellence opérationnelle dans chacun de nos projets, en
                            nous fixant des standards élevés à chaque étape de notre démarche.
                        </p>
                    </div>
                </div>

                <div class="hi-accordion__item">
                    <button class="hi-accordion__head" type="button">
                        <span>Responsabilité sociale</span>
                        <span class="hi-accordion__icon" aria-hidden="true"></span>
                    </button>
                    <div class="hi-accordion__body">
                        <p>
                            Convaincus que la réussite économique va de pair avec l'impact social,
                            nous plaçons la responsabilité au cœur de toutes nos décisions.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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
                        alt="Santé" loading="lazy" decoding="async">
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
                        alt="Liberté d'expression" loading="lazy" decoding="async">
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
                        alt="Environnement" loading="lazy" decoding="async">
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

<!-- ============ CONTACT ============ -->
<section class="hi-section" id="contact">
    <div class="hi-container hi-contact">
        <div class="hi-contact__left">
            <span class="hi-eyebrow hi-eyebrow--contact">Contact</span>
            <p class="hi-contact__intro">
                Pour toute demande d'information, proposition de partenariat ou prise de
                contact, vous pouvez nous écrire.
            </p>
            <dl class="hi-contact__meta">
                <div>
                    <dt>Email</dt>
                    <dd><a href="mailto:contact@heliuminvest.lu" target="_blank">contact@heliuminvest.lu</a></dd>
                </div>
                <div>
                    <dt>Adresse</dt>
                    <dd>Beyrouth / Paris</dd>
                </div>
            </dl>
        </div>

        <form class="hi-contact__form" id="hiContactForm">
            <div class="hi-field">
                <label for="hiEmail">Email</label>
                <input type="email" id="hiEmail" name="email" placeholder="vous@exemple.com" required>
            </div>
            <div class="hi-field">
                <label for="hiSubject">Sujet</label>
                <input type="text" id="hiSubject" name="subject" placeholder="Objet de votre demande">
            </div>
            <div class="hi-field">
                <label for="hiMessage">Description</label>
                <textarea id="hiMessage" name="message" rows="4" placeholder="Votre message" required></textarea>
            </div>
            <div class="hi-contact__actions">
                <button type="submit" class="hi-contact__submit">ENVOYER</button>
                <p class="hi-form__success" id="hiFormSuccess">Merci, votre message a bien été envoyé.</p>
            </div>
        </form>
    </div>
</section>

<script>
jQuery(function($) {

    /* ----- Mobile burger menu ----- */
    var $page = $('.hi-page');
    var $burger = $('.hi-burger');
    var $menu = $('.hi-nav');
    var $backdrop = $('.hi-menu-backdrop');

    function setMobileMenu(isOpen) {
        $page.toggleClass('is-menu-open', isOpen);
        $('body').toggleClass('hi-menu-open', isOpen);
        $burger.attr('aria-expanded', isOpen ? 'true' : 'false');
    }

    $burger.on('click', function() {
        setMobileMenu(!$page.hasClass('is-menu-open'));
    });

    $backdrop.on('click', function() {
        setMobileMenu(false);
    });

    $menu.find('a').on('click', function() {
        if (window.matchMedia('(max-width: 900px)').matches) {
            setMobileMenu(false);
        }
    });

    $(document).on('keydown', function(e) {
        if (e.key === 'Escape' && $page.hasClass('is-menu-open')) {
            setMobileMenu(false);
        }
    });

    $(window).on('resize', function() {
        if (window.innerWidth > 900) {
            setMobileMenu(false);
        }
    });




    /* ----- Accordion (Valeurs) ----- */
    function setAccordionHeight($item) {
        var $body = $item.find('.hi-accordion__body');
        if ($item.hasClass('is-open')) {
            $body.css('max-height', $body.prop('scrollHeight') + 'px');
        } else {
            $body.css('max-height', 0);
        }
    }

    // function renderValuesAside() {
    //     var $aside = $('#hiValeursAside');
    //     var $items = $('#hiValeurs .hi-accordion__item');

    //     if (!$aside.length || !$items.length) {
    //         return;
    //     }

    //     var html = '';
    //     $items.not('.is-open').each(function() {
    //         var $item = $(this);
    //         var idx = $item.attr('data-value-index');
    //         var title = $.trim($item.find('.hi-accordion__head span').first().text());
    //         var text = $.trim($item.find('.hi-accordion__body p').first().text());

    //         html += '<button class="hi-value-card" type="button" data-open-value="' + idx + '">';
    //         html += '<span class="hi-value-card__title">' + title + '</span>';
    //         html += '<span class="hi-value-card__text">' + text + '</span>';
    //         html += '</button>';
    //     });

    //     $aside.html(html);
    // }

    function toggleAccordionItem($target) {
        var isOpen = $target.hasClass('is-open');

        $target.toggleClass('is-open', !isOpen);
        $target.find('.hi-accordion__head').attr('aria-expanded', !isOpen ? 'true' : 'false');
        setAccordionHeight($target);

        // renderValuesAside();
    }

    $('#hiValeurs .hi-accordion__item').each(function() {
        var $item = $(this);
        $item.removeClass('is-open');
        $item.attr('data-value-index', $(this).index());
        $item.find('.hi-accordion__head').attr('aria-expanded', 'false');
        setAccordionHeight($(this));
    });

    // if (!$('#hiValeurs .hi-accordion__item.is-open').length) {
    //     $('#hiValeurs .hi-accordion__item').first().addClass('is-open');
    // }

    // renderValuesAside();

    $('#hiValeurs .hi-accordion__head').on('click', function() {
        toggleAccordionItem($(this).closest('.hi-accordion__item'));
    });

    $('#hiValeursAside').on('click', '[data-open-value]', function() {
        var idx = $(this).attr('data-open-value');
        var $target = $('#hiValeurs .hi-accordion__item[data-value-index="' + idx + '"]');
        if ($target.length) {
            toggleAccordionItem($target);
        }
    });

    $(window).on('resize', function() {
        $('#hiValeurs .hi-accordion__item.is-open').each(function() {
            setAccordionHeight($(this));
        });
    });




    /* ----- Philanthropie tabs (switch content, smooth fade) ----- */
    $('#hiPhilTabs .hi-tab').on('click', function() {
        var target = $(this).data('tab');
        var $panels = $('.hi-phil__panel-wrap .hi-phil__panel');
        var $current = $panels.filter('.is-active');
        var $next = $panels.filter('[data-panel="' + target + '"]');

        if ($current.is($next)) {
            return;
        }

        $('#hiPhilTabs .hi-tab').removeClass('is-active');
        $(this).addClass('is-active');

        $current.fadeOut(180, function() {
            $current.removeClass('is-active');
            $next.addClass('is-active').css('display', 'none').fadeIn(220);
        });
    });

    /* ----- Contact form (front-end only — hook up your WP handler) ----- */
    $('#hiContactForm').on('submit', function(e) {
        e.preventDefault();
        var $form = $(this);
        var $success = $('#hiFormSuccess');

        // TODO: replace with your real submission (AJAX to WP / Contact Form 7 / etc.)
        $success.addClass('is-visible');
        $form.find('input, textarea').val('');

        setTimeout(function() {
            $success.removeClass('is-visible');
        }, 4000);
    });

});
</script>
<script>
jQuery(document).ready(function($) {})
</script>
<?
get_footer();