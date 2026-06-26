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
    <span class="hi-eyebrow">— Plateforme d'investissement indépendante</span>
    <h1 class="hi-hero__title">
        Investir avec exigence.<br>
        Construire avec <span class="hi-accent">impact</span>.
    </h1>
    <p class="hi-hero__text">
        Une plateforme d'investissement indépendante alliant rigueur financière et
        ambition philanthropique, au service d'une croissance durable et responsable.
    </p>
    <a href="#approche" class="hi-btn hi-btn--dark">Découvrez notre approche</a>
    </div>
    <div class="hi-hero__visual" aria-hidden="true">
    <img class="hi-hero__circle" src="<?php echo esc_url( get_template_directory_uri() . '/inc/assets/images/hero-circle.png' ); ?>" alt="" loading="eager" decoding="async">
    </div>
</div>
</section>

<!-- ============ INTRO ============ -->
<section class="hi-section" id="approche">
<div class="hi-container hi-intro">
    <div class="hi-intro__left">
    <span class="hi-eyebrow">— À propos</span>
    <h2 class="hi-h2">Une plateforme d'investissement<br>indépendante</h2>
    </div>
    <div class="hi-intro__right">
    <p>
        Helium Invest est une société d'investissement indépendante qui combine
        discipline financière et vision de long terme, au service de partenaires
        exigeants et engagés.
    </p>
    <p>
        Notre équipe pluridisciplinaire intervient à chaque étape, de l'analyse
        stratégique au déploiement opérationnel, en passant par le pilotage de la
        performance et de l'impact social.
    </p>
    </div>
</div>
</section>

<!-- ============ APPROCHE EN DEUX TEMPS ============ -->
<section class="hi-section hi-section--tint" id="strategie">
<div class="hi-container">
    <span class="hi-eyebrow">— Notre méthode</span>
    <h2 class="hi-h2 hi-h2--spaced">Une approche en deux temps</h2>

    <div class="hi-grid-2">
    <article class="hi-step-card">
        <span class="hi-step-card__num">1</span>
        <h3>Développer nos actifs avec rigueur et expertise</h3>
        <p>
        Nous identifions et structurons des opportunités d'investissement à forte
        valeur ajoutée, en nous appuyant sur une analyse rigoureuse des fondamentaux.
        </p>
        <ul class="hi-tags">
        <li>Technologie</li>
        <li>Industrie</li>
        <li>Services financiers</li>
        </ul>
    </article>

    <article class="hi-step-card">
        <span class="hi-step-card__num">2</span>
        <h3>Déployer une stratégie philanthropique</h3>
        <p>
        En parallèle, nous engageons une part de notre capital au service de causes
        qui nous tiennent à cœur, avec la même rigueur que nos investissements.
        </p>
        <ul class="hi-tags">
        <li>Éducation</li>
        <li>Santé</li>
        <li>Journalisme</li>
        <li>Environnement</li>
        </ul>
    </article>
    </div>
</div>
</section>

<!-- ============ VALEURS ============ -->
<section class="hi-section" id="valeurs">
<div class="hi-container">
    <span class="hi-eyebrow">— Nos valeurs</span>
    <h2 class="hi-h2 hi-h2--spaced">Des valeurs ancrées dans notre histoire</h2>
    <p class="hi-section__lede">
    Helium Invest est une entreprise familiale indépendante portée par des valeurs
    fortes : transparence, rigueur et engagement durable sur le long terme.
    </p>

    <div class="hi-accordion" id="hiValeurs">
    <div class="hi-accordion__item is-open">
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
</section>

<!-- ============ PHILANTHROPIE (onglets) ============ -->
<section class="hi-section hi-section--dark" id="philanthropie">
<div class="hi-container">
    <div class="hi-phil__head">
    <span class="hi-eyebrow hi-eyebrow--light">— Philanthropie</span>
    <h2 class="hi-h2 hi-h2--light">Un engagement durable pour le progrès social</h2>
    <p class="hi-section__lede hi-section__lede--light">
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
        <div class="hi-phil__media" aria-hidden="true"><!-- image à insérer --></div>
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
        <div class="hi-phil__media" aria-hidden="true"><!-- image à insérer --></div>
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
        <div class="hi-phil__media" aria-hidden="true"><!-- image à insérer --></div>
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
        <div class="hi-phil__media" aria-hidden="true"><!-- image à insérer --></div>
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
    <span class="hi-eyebrow">— Contact</span>
    <h2 class="hi-h2">Échangeons</h2>
    <p>
        Pour toute demande d'information, proposition de partenariat ou prise de
        contact, vous pouvez nous écrire.
    </p>
    <dl class="hi-contact__meta">
        <div>
        <dt>Email</dt>
        <dd><a href="mailto:info@example.com">info@example.com</a></dd>
        </div>
        <div>
        <dt>Bureaux</dt>
        <dd>Beyrouth&nbsp;/&nbsp;Paris</dd>
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
        <label for="hiMessage">Message</label>
        <textarea id="hiMessage" name="message" rows="4" placeholder="Votre message" required></textarea>
    </div>
    <button type="submit" class="hi-btn hi-btn--dark hi-contact__submit">Envoyer</button>
    <p class="hi-form__success" id="hiFormSuccess">Merci, votre message a bien été envoyé.</p>
    </form>
</div>
</section>

<script>
jQuery(function ($) {

  /* ----- Mobile burger menu ----- */
  $('.hi-burger').on('click', function () {
    var open = $(this).attr('aria-expanded') === 'true';
    $(this).attr('aria-expanded', !open);
    $('.hi-nav').slideToggle(200);
  });

  /* ----- Accordion (Valeurs) ----- */
  function setAccordionHeight($item, animate) {
    var $body = $item.find('.hi-accordion__body');
    if ($item.hasClass('is-open')) {
      $body.css('max-height', $body.prop('scrollHeight') + 'px');
    } else {
      $body.css('max-height', 0);
    }
  }

  $('#hiValeurs .hi-accordion__item').each(function () {
    setAccordionHeight($(this));
  });

  $('#hiValeurs .hi-accordion__head').on('click', function () {
    var $item = $(this).closest('.hi-accordion__item');
    $item.toggleClass('is-open');
    setAccordionHeight($item);
  });

  $(window).on('resize', function () {
    $('#hiValeurs .hi-accordion__item.is-open').each(function () {
      setAccordionHeight($(this));
    });
  });

  /* ----- Philanthropie tabs (switch content, smooth fade) ----- */
  $('#hiPhilTabs .hi-tab').on('click', function () {
    var target = $(this).data('tab');
    var $panels = $('.hi-phil__panel-wrap .hi-phil__panel');
    var $current = $panels.filter('.is-active');
    var $next = $panels.filter('[data-panel="' + target + '"]');

    if ($current.is($next)) { return; }

    $('#hiPhilTabs .hi-tab').removeClass('is-active');
    $(this).addClass('is-active');

    $current.fadeOut(180, function () {
      $current.removeClass('is-active');
      $next.addClass('is-active').css('display', 'none').fadeIn(220);
    });
  });

  /* ----- Contact form (front-end only — hook up your WP handler) ----- */
  $('#hiContactForm').on('submit', function (e) {
    e.preventDefault();
    var $form = $(this);
    var $success = $('#hiFormSuccess');

    // TODO: replace with your real submission (AJAX to WP / Contact Form 7 / etc.)
    $success.addClass('is-visible');
    $form.find('input, textarea').val('');

    setTimeout(function () {
      $success.removeClass('is-visible');
    }, 4000);
  });

});
</script>
<script>
    jQuery(document).ready(function($) {
    })
</script>
<?
get_footer();
