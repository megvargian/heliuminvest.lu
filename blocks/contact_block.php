
<?php
/**
 * Template Name: Contact Block
 */
$all_fields = get_fields();
?>
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