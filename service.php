<?php
/*
* Template name: Service
*/
?>

<?php get_header(); ?>
<?php include get_theme_file_path( 'mobile-nav.php' ); ?>

<?php
$servicesHeroType = get_field('service-bool');

if($servicesHeroType): ?>

    <?php
    $servicesHero2 = get_field('service-hero-2');
    if($servicesHero2): ?>
    <section class="services-hero pt-32 lg:h-screen relative mb-24">
        <div class="flex flex-col lg:flex-row justify-between h-full">
            <div class="flex flex-col lg:w-7/12 gap-4">
                <h1 class="heading--1 text--white mb-8 reveal--translate">
                    <?php echo $servicesHero2['services-hero-2-heading']; ?>
                </h1>
                <div class="body--l body--l--400 text--white reveal--fade">
                    <?php echo $servicesHero2['services-hero-2-text']; ?>
                </div>
                <div class="flex flex-wrap gap-2 mb-6 reveal--fade">
                    <?php
                    $servicesHero2Tags = $servicesHero2['services-hero-2-tags'];
                    foreach($servicesHero2Tags as $servicesHero2Tag): ?>
                    <div class="tag-item">
                        <p class="body--l body--l--400 text--black">
                            <?php echo $servicesHero2Tag['services-hero-2-tags-name']; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
                <div class="flex flex-col lg:flex-row gap-2 mb-8 lg:mb-0">
                    <div class="services-hero__card inline-flex gap-4 items-center reveal--translate">
                        <div class="wrap-icon wrap-icon--40 inline-flex items-center justify-center">
                            <img src="<?php echo $servicesHero2['services-hero-2-card-icon-1']['url']; ?>" alt="<?php echo $servicesHero2['services-hero-2-card-icon-1']['alt']; ?>"/>
                        </div>
                        <div class="inline-flex flex-col gap-1">
                            <p class="subheading--1 text--white">
                                <?php echo $servicesHero2['services-hero-2-card-heading-1']; ?>
                            </p>
                            <p class="body--l body--l--500 text--white">
                                <?php echo $servicesHero2['services-hero-2-card-text-1']; ?>
                            </p>
                        </div>
                    </div>
                    <div class="services-hero__card inline-flex gap-4 items-center reveal--translate">
                        <div class="wrap-icon wrap-icon--40 inline-flex items-center justify-center">
                            <img src="<?php echo $servicesHero2['services-hero-2-card-icon-2']['url']; ?>" alt="<?php echo $servicesHero2['services-hero-2-card-icon-2']['alt']; ?>"/>
                        </div>
                        <div class="inline-flex flex-col gap-1">
                            <p class="subheading--1 text--white">
                                <?php echo $servicesHero2['services-hero-2-card-heading-2']; ?>
                            </p>
                            <p class="body--l body--l--500 text--white">
                                <?php echo $servicesHero2['services-hero-2-card-text-2']; ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex lg:flex-row lg:w-5/12 gap-6 lg:items-end">
                <div class="services-hero__img services-hero__img--1 h-full lg:h-3/6 lg:w-2/6 reveal--fade">
                    <img class="object-cover h-full w-full" src="<?php echo $servicesHero2['services-hero-2-card-image-1']['url']; ?>" alt="<?php echo $servicesHero2['services-hero-2-card-image-1']['alt']; ?>">
                </div>
                <div class="services-hero__img services-hero__img--2 h-full lg:w-4/6 reveal--fade">
                    <img class="object-cover h-full w-full" src="<?php echo $servicesHero2['services-hero-2-card-image-2']['url']; ?>" alt="<?php echo $servicesHero2['services-hero-2-card-image-2']['alt']; ?>">
                </div>
            </div>
        </div>
        <div class="scroll-icon hidden lg:inline-flex items-center justify-center absolute bottom-0 reveal--fade">
            <img src="<?php echo THEME_IMG_PATH; ?>/arrow-down-scroll.svg" alt="Flèche icone"/>
        </div>
    </section>
    <?php endif; ?>

    <?php else: ?>
    <?php
    $servicesHero1 = get_field('service-hero-1');

    if($servicesHero1): ?>
    <section class="services-hero pt-32 mb-24">
        <div class="flex flex-col lg:flex-row justify-between mb-24">
            <h1 class="heading--1 text--white mb-8 lg:w-4/12 reveal--translate">
                <?php echo $servicesHero1['services-hero-1-heading']; ?>
            </h1>
            <div class="flex flex-col lg:w-7/12 gap-4">
                <div class="body--l body--l--400 text--white reveal--fade">
                    <?php echo $servicesHero1['services-hero-1-text']; ?>
                </div>
                <div class="flex flex-wrap gap-2 reveal--fade">
                    <?php
                    $servicesHero1Tags = $servicesHero1['services-hero-1-tags'];
                    foreach($servicesHero1Tags as $servicesHero1Tag): ?>
                    <div class="tag-item">
                        <p class="body--l body--l--400 text--black">
                            <?php echo $servicesHero1Tag['services-hero-1-tags-name']; ?>
                        </p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <div class="scroll-icon hidden lg:inline-flex items-center justify-center">
            <img src="<?php echo THEME_IMG_PATH; ?>/arrow-down-scroll.svg" alt="Flèche icone"/>
        </div>
    </section>

    <?php endif; ?>
    
<?php endif; ?>

<?php
$servicesPrices = get_field('services-prices-group');

if($servicesPrices): ?>

<div class="flex flex-col gap-16 lg:items-center mb-48">
    <?php
        $servicesPricesItems = $servicesPrices['services-prices'];
        foreach($servicesPricesItems as $servicesPricesItem): ?>
    
        <div class="services-prices-wrap p-8 lg:p-16 flex flex-col gap-4 lg:gap-8 lg:w-10/12 reveal--fade">
            <div class="inline-flex items-center gap-4">
                <div class="wrap-icon wrap-icon--48 inline-flex items-center justify-center">
                    <img src="<?php echo THEME_IMG_PATH; ?>/asterix.svg" alt="Asterix icone"/>
                </div>
                <p class="heading--3 text--black">
                    <?php echo $servicesPricesItem['services-price-heading']; ?>
                </p>
            </div>
            <div class="w-full h-72 services-prices-wrap__img">
                <img class="object-cover object-center h-full w-full" src="<?php echo $servicesPricesItem['services-price-image']['url']; ?>" alt="<?php echo $servicesPricesItem['services-price-image']['alt']; ?>">
            </div>
            <?php
                $servicesPricesListItems = $servicesPricesItem['services-price-list'];
                foreach($servicesPricesListItems as $servicesPricesListItem): ?>
                <div class="list--item list--item--dark flex justify-between pb-6">
                    <p class="subheading--1 subheading--1--s text--black">
                        <?php echo $servicesPricesListItem['services-price-list-name']; ?>
                    </p>
                    <p class="subheading--1 subheading--1--m text--black">
                        <?php echo $servicesPricesListItem['services-price-list-price']; ?>€
                    </p>
                </div>
            <?php endforeach; ?>
        </div>
    
    <?php endforeach; ?>
</div>

<?php endif; ?>

<?php get_footer(); ?>