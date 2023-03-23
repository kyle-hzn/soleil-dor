<?php
/*
* Template name: Accueil
*/
?>

<?php get_header(); ?>
<?php include get_theme_file_path( 'mobile-nav.php' ); ?>

<section class="hp-hero lg:flex block justify-between h-screen pt-32">
    <div class="hp-hero__text">
        <h1 class="heading--1 text--white mb-8 hp-hero__title">
            Un moment d’évasion du corps, et de l’esprit
        </h1>
        <div class="hp-hero__intro pl-0 lg:pl-16">
            <div class="inline-flex items-center mb-4">
                <img class="mr-1" src="<?php echo THEME_IMG_PATH; ?>/asterix.svg" alt="Asterix icone"/>
                <h2 class="subheading subheading--s text--white">
                    Bronzage, Esthétique & Soins du corp et du visage
                </h2>
            </div>
            <p class="body--m body--m--400 text--white mb-6">
                Soleil d’or est un institut de beauté au centre de Saint-Germain-en-Laye, où règne l’élégance, le calme et la détente.
            </p>
            <div class="hp-hero__card w-full lg:w-fit inline-flex flex-col">
                <div class="inline-flex items-center mb-3">
                    <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                        <div class="hp-hero__card__timestamp hp-hero__card__timestamp--open"></div>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        Ouvert
                    </p>
                </div>
                <div class="inline-flex items-center mb-3">
                    <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center mr-2">
                        <img src="<?php echo THEME_IMG_PATH; ?>/clock.svg" alt="Horaires icone"/>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        10:00 - 19:00 
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
                        <img src="<?php echo THEME_IMG_PATH; ?>/Phone-dial-2.svg" alt="Téléphone icone"/>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        01 39 73 05 78
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="hp-hero__img w-full lg:w-80 h-52 lg:h-full mt-8 lg:mt-0"></div>
</section>

<?php get_footer(); ?>
