<?php
/*
* Template name: Accueil
*/
?>

<?php get_header(); ?>
<?php include get_theme_file_path( 'mobile-nav.php' ); ?>

<?php
$hpHero = get_field('hp-hero');

if($hpHero): ?>
<section class="hp-hero lg:flex block justify-between h-screen pt-32">
    <div class="hp-hero__text">
        <h1 class="heading--1 text--white mb-8 hp-hero__title">
            <?php echo $hpHero['hp-hero-heading']; ?>
        </h1>
        <div class="hp-hero__intro pl-0 lg:pl-16">
            <div class="inline-flex items-center mb-4">
                <img class="mr-1" src="<?php echo THEME_IMG_PATH; ?>/asterix.svg" alt="Asterix icone"/>
                <h2 class="subheading--1 subheading--1--s text--white">
                    <?php echo $hpHero['hp-hero-subheading']; ?>
                </h2>
            </div>
            <div class="body--m body--m--400 text--white mb-6">
                <?php echo $hpHero['hp-hero-intro']; ?>
            </div>
            <div class="hp-hero__card w-full lg:w-fit inline-flex flex-col">
                <div class="inline-flex items-center mb-3">
                    <p class="body--m body-m-400 text--black">
                        <?php echo do_shortcode( '[mbhi_ifopen location="Soleil Dor"]
                        <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                            <div class="hp-hero__card__timestamp hp-hero__card__timestamp--open"></div>
                        </div>
                        <p class="body--m body-m-400 text--black">
                            Ouvert
                        </p>
                        [/mbhi_ifopen]' ); ?>
                        <?php echo do_shortcode( '[mbhi_ifclosed location="Soleil Dor"]
                        <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                            <div class="hp-hero__card__timestamp hp-hero__card__timestamp--closed"></div>
                        </div>
                        <p class="body--m body-m-400 text--black">
                            Fermé
                        </p>
                        [/mbhi_ifclosed]' ); ?>
                    </p>
                </div>
                <div class="inline-flex items-center mb-3">
                    <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                        <img src="<?php echo THEME_IMG_PATH; ?>/clock.svg" alt="Horaires icone"/>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        <?php echo $hpHero['hp-hero-openings']; ?>
                    </p>
                </div>
                <div class="inline-flex items-center mb-3">
                    <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                        <img src="<?php echo THEME_IMG_PATH; ?>/pin.svg" alt="Localisaion icone"/>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        40 Rue de Pologne<br>
                        Saint-Germain-en-Laye 78100
                    </p>
                </div>
                <div class="inline-flex items-center">
                    <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                        <img src="<?php echo THEME_IMG_PATH; ?>/phone-dial-2.svg" alt="Téléphone icone"/>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        <?php echo $hpHero['hp-hero-phone']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="hp-hero__img w-full lg:w-80 h-52 lg:h-full mt-8 lg:mt-0">
        <img class="object-cover h-full w-full" src="<?php echo $hpHero['hp-hero-img']['url']; ?>" alt="<?php echo $hpHero['hp-hero-img']['alt']; ?>"/>
    </div>
</section>
<?php endif; ?>
<!-- Services -->
<?php
$hpServices = get_field('hp-services');

if($hpServices): ?>
<section class="hp-services pt-20 mb-48">
    <h2 class="heading--3 text-white mb-8">
        <?php echo $hpServices['hp-services-heading']; ?>
    </h2>
    <?php
    $servicesItems = $hpServices['hp-services-list'];
    foreach($servicesItems as $servicesItem): ?>
    <div class="services-card flex flex-col lg:flex-row lg:flex mb-4 last:mb-0 gap-4">
        <div class="services-card__about flex flex-col justify-between w-full">
            <div class="services-card__about__title inline-flex items-center mb-4">
                <div class="wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-4">
                    <img src="<?php echo $servicesItem['hp-services-item-icon']['url']; ?>" alt="<?php echo $servicesItem['hp-services-item-icon']['alt']; ?>"/>
                </div>
                <h3 class="subheading--1 subheading--1--s text--white">
                    <?php echo $servicesItem["hp-services-item-title"]; ?>
                </h3>
            </div>
            <p class="services-card__about__text body--l body--l--400 text-white">
                <?php echo $servicesItem["hp-services-item-text"]; ?>
            </p>
        </div>
        <div class="services-card__links w-full gap-4">
        <?php
        $servicesItemsLinks = $servicesItem['hp-services-item-link'];
        foreach($servicesItemsLinks as $servicesItemsLink): ?>
            <a href="<?php echo esc_url( $servicesItemsLink['hp-services-item-link-url']['url'] ); ?>" class="services-card__links__item flex flex-col lg:flex-row lg:flex items-start lg:items-center justify-between w-full first:mb-4 gap-4">
                <div class="flex flex-col">
                    <p class="subheading--1 subheading--1--m text--white mb-2">
                        <?php echo $servicesItemsLink["hp-services-item-link-title"]; ?>
                    </p>
                    <p class="body--l body--l--400 text-white">
                        <?php echo $servicesItemsLink["hp-services-item-link-text"]; ?>
                    </p>
                </div>
                <div class="wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-4">
                    <img src="<?php echo THEME_IMG_PATH; ?>/arrow-up.svg" alt="Flèche icone"/>
                </div>
            </a>
        <?php endforeach; ?>
        </div>
    </div>
    <?php endforeach; ?>
</section>
<?php endif; ?>
<!-- About -->
<?php
$hpAbout = get_field('hp-about');

if($hpAbout): ?>
<section class="hp-about mb-48">
    <h3 class="heading--2 text--white text-center lg:px-32 mb-14">
        <?php echo $hpAbout['hp-about-heading']; ?>
    </h3>
    <div class="hp-about__thumbnails flex gap-4 mb-10">
        <div class="w-2/12">
            <img src="<?php echo $hpAbout['hp-about-image-top-left']['url']; ?>" alt="<?php echo $hpAbout['hp-about-image-top-left']['alt']; ?>" class="hp-about__img hp-about__img--top-left aspect-square scale-75 object-cover">
        </div>
        <div class="w-8/12">
            <img src="<?php echo $hpAbout['hp-about-image-center']['url']; ?>" alt="<?php echo $hpAbout['hp-about-image-center']['center']; ?>" class="hp-about__img hp-about__img--center w-full h-96 object-cover">
        </div>
        <div class="w-2/12 my-auto">
            <img src="<?php echo $hpAbout['hp-about-img-top-right']['url']; ?>" alt="<?php echo $hpAbout['hp-about-img-top-right']['alt']; ?>" class="hp-about__img hp-about__img--top-right w-full h-32 object-cover">
            <img src="<?php echo $hpAbout['hp-about-img-bottom-right']['url']; ?>" alt="<?php echo $hpAbout['hp-about-img-bottom-right']['alt']; ?>" class="hp-about__img hp-about__img--bottom-right w-full aspect-square scale-50 object-cover">
        </div>
    </div>
    <div class="hp-about__keystats flex gap-2 lg:gap-x-2 overflow-x-scroll lg:overflow-x-auto lg:justify-center mb-6 lg:mb-14">
        <?php
        $hpAboutKeystatsItems = $hpAbout['hp-about-keystats-items'];
        foreach($hpAboutKeystatsItems as $hpAboutKeystatsItem): ?>
        <div class="hp-about__keystats__card inline-flex flex-col">
            <p class="heading--1 text--white">
                <?php echo $hpAboutKeystatsItem['hp-about-keystats-items-number']; ?>
            </p>
            <p class="subheading--2 text--white">
                <?php echo $hpAboutKeystatsItem['hp-about-keystats-items-text']; ?>
            </p>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="hp-about__text flex flex-col items-center">
        <div class="lg:w-6/12 body--l body--l--400 text--white mb-6 lg:mb-12 flex flex-col gap-4">
            <?php echo $hpAbout['hp-about-text']; ?>
        </div>
        <p class="subheading--2 text--white text-center mb-4">
            <?php echo $hpAbout['hp-about-subheading']; ?>
        </p>
        <a href="<?php echo esc_url( $hpAbout['hp-about-link']['url'] ); ?>" class="btn--primary header__menu__btn">
            <img class="btn--primary__icon mr-2" src="<?php echo $hpAbout['hp-about-link-icon']['url']; ?>" alt="<?php echo $hpAbout['hp-about-link-icon']['alt']; ?>"/>
            <?php echo esc_html( $hpAbout['hp-about-link']['title'] ); ?>
        </a>
    </div>
</section>
<?php endif; ?>
<!-- Reviews -->
<?php
$hpReviews = get_field('hp-reviews');

if($hpReviews): ?>
<section class="hp-reviews flex flex-col lg:flex-row gap-8 mb-40">
    <div class="lg:w-6/12">
        <h3 class="heading--3 heading--3 text--white mb-3">
            <?php echo $hpReviews['hp-reviews-heading']; ?>
        </h3>
        <div class="hp-reviews__google inline-flex gap-2 mb-6">
            <img src="<?php echo THEME_IMG_PATH; ?>/google-logo.svg" alt="Logo Google"/>
            <div class="hp-reviews__google__text">
                <p class="body--l body--l--500 text--black">
                    Soleil d’Or
                </p>
                <div class="inline-flex justify-center gap-1">
                    <p class="subheading--1 text--black">
                        4.9
                    </p>
                    <img src="<?php echo THEME_IMG_PATH; ?>/5-stars.svg" alt="etoiles"/>
                </div>
            </div>
        </div>
        <a href="<?php echo esc_url( $hpReviews['hp-reviews-link']['url'] ); ?>" class="btn--primary header__menu__btn w-fit">
            <img class="btn--primary__icon mr-2" src="<?php echo $hpReviews['hp-reviews-link-icon']['url']; ?>" alt="<?php echo $hpReviews['hp-reviews-link-icon']['alt']; ?>"/>
            <?php echo esc_html( $hpReviews['hp-reviews-link']['title'] ); ?>
        </a>
    </div>
    <div class="lg:w-6/12">
        <div class="body--l body--l--400 text--white mb-10">
            <?php echo $hpReviews['hp-reviews-text']; ?>
        </div>
        <p class="subheading--2 text--white mb-4">
        <?php echo $hpReviews['hp-reviews-subheading']; ?>
        </p>
        <div id="splide1" class="hp-reviews__list splide">
            <div class="splide__track">
                <ul class="splide__list">
                <?php
                    $hpReviewsItems = $hpReviews['hp-reviews-list'];
                    foreach($hpReviewsItems as $hpReviewsItem): ?>
                    <li class="splide__slide hp-reviews__card inline-flex flex-col items-start justify-center gap-2">
                        <p class="body--l body--l--500 text--white">
                            <?php echo $hpReviewsItem['hp-reviews-list-author']; ?>
                        </p>
                        <img class="max-h-4" src="<?php echo THEME_IMG_PATH; ?>/5-stars.svg" alt="etoiles"/>
                        <p class="body--m body--m--400 text--white">
                            <?php echo $hpReviewsItem['hp-reviews-list-text']; ?>
                        </p>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="splide__arrows inline-flex gap-2 mt-4">
                <button class="splide__arrow splide__arrow--prev">
                    <img src="<?php echo THEME_IMG_PATH; ?>/arrow-left.svg" alt="flech gauche icone"/>
                </button>
                <button class="splide__arrow splide__arrow--next">
                    <img src="<?php echo THEME_IMG_PATH; ?>/arrow-right.svg" alt="flech droite icone"/>
                </button>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- FAQ -->
<?php
$hpFaq = get_field('hp-faq');

if($hpFaq): ?>
<section class="hp-faq flex justify-center mb-48">
    <div class="w-full lg:w-10/12">
        <h3 class="heading--3 text--white text-center mb-8">
            <?php echo $hpFaq['hp-faq-heading']; ?>
        </h3>
        <div class="hp-faq__list grid gap-4 grid-cols-1 lg:grid-cols-2">
            <?php
            $hpFaqItems = $hpFaq['hp-faq-list'];
            foreach($hpFaqItems as $hpFaqItem): ?>
            <div class="hp-faq__list__item w-full basis-1/2 flex flex-col justify-between items-center relative h-fit">
                <p class="hp-faq__list__item__title subheading--2 text--black z-20 pr-8 lg:pr-16">
                    <?php echo $hpFaqItem['hp-faq-list-title']; ?>
                </p>
                <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center absolute right-6 z-10">
                    <img src="<?php echo THEME_IMG_PATH; ?>/plus.svg" alt="Plus icone"/>
                </div>
                <p class="hp-faq__list__item__panel body--l body--l--400 text--black-light">
                    <?php echo $hpFaqItem['hp-faq-list-answer']; ?>
                </p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Find us -->
<?php
$hpContact = get_field('hp-contact');

if($hpContact): ?>
<section class="hp-contact flex flex-col lg:flex-row gap-8 lg:gap-24 items-center">
    <div class="hp-contact__text lg:w-6/12">
        <h3 class="heading--3 text--white mb-8">
            <?php echo $hpContact['hp-contact-heading']; ?>
        </h3>
        <div class="inline-flex items-center mb-6 lg:mb-24">
            <div class="wrap-icon wrap-icon--40 inline-flex items-center justify-center mr-2">
                <img src="<?php echo THEME_IMG_PATH; ?>/pin.svg" alt="Localisaion icone"/>
            </div>
            <p class="subheading--2 text--white">
                40 Rue de Pologne, Saint-Germain-en-Laye 78100
            </p>
        </div>
        <div class="flex flex-col mb-6 gap-4">
            <?php
            $hpContactItems = $hpContact['hp-contact-openings'];
            foreach($hpContactItems as $hpContactItem): ?>
                <div class="list--item list--item--light flex justify-between pb-6">
                    <p class="subheading--1 subheading--1--s text--white">
                        <?php echo $hpContactItem['hp-contact-openings-days']; ?>
                    </p>
                    <p class="subheading--1 subheading--1--m text--white">
                        <?php echo $hpContactItem['hp-contact-openings-time']; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo esc_url( $hpContact['hp-contact-button']['url'] ); ?>" class="btn--primary header__menu__btn w-fit mt-6">
            <img class="btn--primary__icon mr-2" src="<?php echo $hpContact['hp-contact-button-icon']['url']; ?>" alt="<?php echo $hpContact['hp-contact-button-icon']['alt']; ?>"/>
            <?php echo esc_html( $hpContact['hp-contact-button']['title'] ); ?>
        </a>
    </div>
    <div class="hp-contact__map lg:w-6/12">
        <div class="hp-contact__map__box h-full w-full">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10491.552547588535!2d2.087615!3d48.898469!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e688325112c71d%3A0x95a6f0af6fbfec8!2sSoleil%20d&#39;Or!5e0!3m2!1sfr!2sfr!4v1679959457770!5m2!1sfr!2sfr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>
