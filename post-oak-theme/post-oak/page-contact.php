<?php
/**
 * Template Name: Contact
 *
 * Contact page for Post Oak Financial Services.
 *
 * @package PostOak
 */

get_header(); ?>

<!-- =========================================================
     CONTACT HERO
     ========================================================= -->
<section class="division-hero division-hero--contact">
    <div class="division-hero__overlay"></div>
    <div class="container division-hero__inner">
        <div class="division-hero__eyebrow reveal-on-scroll">
            <span class="section-label">Post Oak &mdash; Global Offices</span>
        </div>
        <h1 class="division-hero__title reveal-on-scroll">Contact Post Oak</h1>
        <p class="division-hero__tagline reveal-on-scroll">
            Reach our teams across the globe. We respond to every serious inquiry.
        </p>
    </div>
    <div class="division-hero__scroll-cue">
        <span></span>
    </div>
</section>

<!-- =========================================================
     GENERAL INQUIRY INTRO
     ========================================================= -->
<section class="section-pad contact-intro">
    <div class="container">
        <div class="contact-intro__inner">
            <div class="contact-intro__text reveal-on-scroll">
                <span class="section-label">Get in Touch</span>
                <h2 class="section-title">We Are Ready to Assist</h2>
                <p class="contact-intro__body">
                    Whether you are an institutional investor, corporate client, high-net-worth
                    individual, or prospective partner, the right team at Post Oak is ready to respond.
                    Please use the form below or contact us directly at
                    <a href="mailto:info@postoakfinancial.com" class="contact-intro__email">
                        info@postoakfinancial.com
                    </a>.
                </p>
                <p class="contact-intro__body">
                    For division-specific inquiries, please indicate your area of interest in the
                    message field and your submission will be directed to the appropriate team.
                    All inquiries are handled with complete discretion.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- =========================================================
     OFFICE CARDS
     ========================================================= -->
<section class="section-pad contact-offices contact-offices--dark">
    <div class="container">
        <div class="contact-offices__header">
            <span class="section-label reveal-on-scroll">Our Locations</span>
            <h2 class="section-title reveal-on-scroll">Global Offices</h2>
        </div>

        <div class="contact-offices__grid reveal-stagger">

            <div class="office-card office-card--featured">
                <div class="office-card__badge">Global Headquarters</div>
                <div class="office-card__city">Houston</div>
                <address class="office-card__address">
                    Post Oak Financial Tower<br>
                    1800 Post Oak Boulevard, Suite 4000<br>
                    Houston, Texas 77056<br>
                    United States
                </address>
                <div class="office-card__contact">
                    <a href="tel:+17135550100" class="office-card__phone">+1 (713) 555-0100</a>
                    <a href="mailto:info@postoakfinancial.com" class="office-card__email">
                        info@postoakfinancial.com
                    </a>
                </div>
                <a href="<?php echo esc_url( home_url( '/offices' ) ); ?>" class="office-card__link">
                    View Office Details <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="office-card">
                <div class="office-card__city">New York</div>
                <address class="office-card__address">
                    Post Oak Financial Center<br>
                    745 Fifth Avenue, 32nd Floor<br>
                    New York, New York 10151<br>
                    United States
                </address>
                <div class="office-card__contact">
                    <a href="tel:+12125550200" class="office-card__phone">+1 (212) 555-0200</a>
                    <a href="mailto:newyork@postoakfinancial.com" class="office-card__email">
                        newyork@postoakfinancial.com
                    </a>
                </div>
                <a href="<?php echo esc_url( home_url( '/offices' ) ); ?>" class="office-card__link">
                    View Office Details <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="office-card">
                <div class="office-card__city">London</div>
                <address class="office-card__address">
                    Post Oak House<br>
                    1 Bishopsgate, 24th Floor<br>
                    London EC2N 3AQ<br>
                    United Kingdom
                </address>
                <div class="office-card__contact">
                    <a href="tel:+442075550300" class="office-card__phone">+44 (20) 7555-0300</a>
                    <a href="mailto:london@postoakfinancial.com" class="office-card__email">
                        london@postoakfinancial.com
                    </a>
                </div>
                <a href="<?php echo esc_url( home_url( '/offices' ) ); ?>" class="office-card__link">
                    View Office Details <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

            <div class="office-card">
                <div class="office-card__city">Singapore</div>
                <address class="office-card__address">
                    Post Oak Asia Pacific Centre<br>
                    One Raffles Quay, North Tower, Level 35<br>
                    Singapore 048583<br>
                    Republic of Singapore
                </address>
                <div class="office-card__contact">
                    <a href="tel:+6565550400" class="office-card__phone">+65 6555-0400</a>
                    <a href="mailto:singapore@postoakfinancial.com" class="office-card__email">
                        singapore@postoakfinancial.com
                    </a>
                </div>
                <a href="<?php echo esc_url( home_url( '/offices' ) ); ?>" class="office-card__link">
                    View Office Details <span aria-hidden="true">&rarr;</span>
                </a>
            </div>

        </div>
    </div>
</section>

<!-- =========================================================
     CONTACT FORM
     ========================================================= -->
<section class="section-pad contact-form-section">
    <div class="container">
        <div class="contact-form-wrap">

            <div class="contact-form-wrap__intro reveal-on-scroll">
                <span class="section-label">Send a Message</span>
                <h2 class="section-title">Write to Us Directly</h2>
                <p class="contact-form-wrap__sub">
                    Complete the form below and a member of the appropriate Post Oak team will respond
                    within two business days. For time-sensitive matters, please call your nearest
                    office directly.
                </p>
            </div>

            <form
                class="contact-form reveal-on-scroll"
                action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>"
                method="post"
                novalidate
                aria-label="Post Oak contact form"
            >
                <?php wp_nonce_field( 'postoakfinancial_contact_form', 'postoakfinancial_contact_nonce' ); ?>
                <input type="hidden" name="action" value="postoakfinancial_contact_submit">

                <div class="contact-form__row contact-form__row--2col">
                    <div class="contact-form__field">
                        <label class="contact-form__label" for="contact-name">
                            Full Name <span class="contact-form__required" aria-label="required">*</span>
                        </label>
                        <input
                            class="contact-form__input"
                            type="text"
                            id="contact-name"
                            name="contact_name"
                            placeholder="Your full name"
                            required
                            autocomplete="name"
                        >
                    </div>
                    <div class="contact-form__field">
                        <label class="contact-form__label" for="contact-email">
                            Email Address <span class="contact-form__required" aria-label="required">*</span>
                        </label>
                        <input
                            class="contact-form__input"
                            type="email"
                            id="contact-email"
                            name="contact_email"
                            placeholder="your@email.com"
                            required
                            autocomplete="email"
                        >
                    </div>
                </div>

                <div class="contact-form__row contact-form__row--2col">
                    <div class="contact-form__field">
                        <label class="contact-form__label" for="contact-company">
                            Company / Organization
                        </label>
                        <input
                            class="contact-form__input"
                            type="text"
                            id="contact-company"
                            name="contact_company"
                            placeholder="Your company or institution"
                            autocomplete="organization"
                        >
                    </div>
                    <div class="contact-form__field">
                        <label class="contact-form__label" for="contact-division">
                            Area of Interest
                        </label>
                        <select class="contact-form__input contact-form__select" id="contact-division" name="contact_division">
                            <option value="" disabled selected>Select a division&hellip;</option>
                            <option value="asset-management">Asset Management</option>
                            <option value="commercial-banking">Commercial Banking</option>
                            <option value="investment-banking">Investment Banking</option>
                            <option value="investment-research">Global Investment Research</option>
                            <option value="private-banking">Private Banking</option>
                            <option value="wealth-management">Wealth Management</option>
                            <option value="general">General Inquiry</option>
                        </select>
                    </div>
                </div>

                <div class="contact-form__row">
                    <div class="contact-form__field">
                        <label class="contact-form__label" for="contact-message">
                            Message <span class="contact-form__required" aria-label="required">*</span>
                        </label>
                        <textarea
                            class="contact-form__input contact-form__textarea"
                            id="contact-message"
                            name="contact_message"
                            rows="7"
                            placeholder="Please describe how we can assist you&hellip;"
                            required
                        ></textarea>
                    </div>
                </div>

                <div class="contact-form__row contact-form__row--footer">
                    <p class="contact-form__disclaimer">
                        By submitting this form you acknowledge that Post Oak Financial Services may
                        contact you regarding your inquiry. Your information will be treated in
                        accordance with our
                        <a href="<?php echo esc_url( home_url( '/privacy-policy' ) ); ?>">Privacy Policy</a>.
                    </p>
                    <button type="submit" class="btn-primary contact-form__submit">
                        Send Message
                        <svg class="contact-form__submit-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M5 12H19M13 6L19 12L13 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </button>
                </div>

            </form>

        </div>
    </div>
</section>

<!-- =========================================================
     CTA BAND
     ========================================================= -->
<section class="cta-band">
    <div class="container cta-band__inner">
        <div class="cta-band__content reveal-on-scroll">
            <span class="section-label cta-band__label">Our Capabilities</span>
            <h2 class="cta-band__title">Explore What Post Oak Can Do for You</h2>
            <p class="cta-band__body">
                From institutional investment management to private banking, discover the full breadth
                of Post Oak's global financial capabilities.
            </p>
        </div>
        <div class="cta-band__actions reveal-on-scroll">
            <a href="<?php echo esc_url( home_url( '/capabilities' ) ); ?>" class="btn-primary">View All Capabilities</a>
            <a href="<?php echo esc_url( home_url( '/offices' ) ); ?>" class="btn-ghost">Our Global Offices</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
