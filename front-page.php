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
                <h2 class="subheading subheading--s text--white">
                    <?php echo $hpHero['hp-hero-subheading']; ?>
                </h2>
            </div>
            <div class="body--m body--m--400 text--white mb-6">
                <?php echo $hpHero['hp-hero-intro']; ?>
            </div>
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
                        <img src="<?php echo THEME_IMG_PATH; ?>/Phone-dial-2.svg" alt="Téléphone icone"/>
                    </div>
                    <p class="body--m body-m-400 text--black">
                        <?php echo $hpHero['hp-hero-phone']; ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="hp-hero__img w-full lg:w-80 h-52 lg:h-full mt-8 lg:mt-0">
        <img src="https://images.unsplash.com/photo-1544717304-a2db4a7b16ee?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=776&q=80" alt="" class="object-cover h-full w-full">
    </div>
</section>
<?php endif; ?>
<?php
$hpServices = get_field('hp-services');

if($hpServices): ?>
<!-- Services -->
<section class="hp-services pt-20">
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
                    <img src="<?php echo THEME_IMG_PATH; ?>/sparkles.svg" alt="Soins icone"/>
                </div>
                <h3 class="subheading subheading--s text--white">
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
            <a href="#" class="services-card__links__item flex flex-col lg:flex-row lg:flex items-start lg:items-center justify-between w-full first:mb-4 gap-4">
                <div class="flex flex-col">
                    <p class="subheading subheading--m text--white mb-2">
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

<?php get_footer(); ?>
