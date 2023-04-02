<?php
/*
* Template name: Avant / Après
*/
?>

<?php get_header(); ?>
<?php include get_theme_file_path( 'mobile-nav.php' ); ?>

<?php
$baHero = get_field('ba-hero');

if($baHero): ?>
<section class="ba-hero flex flex-col gap-8 items-center pt-32 mb-16">
    <h1 class="heading--1 text--white text-center lg:w-6/12 reveal--translate">
        <?php echo $baHero['ba-hero-heading']; ?>
    </h1>
    <h2 class="subheading--1 subheading--1--s text--white text-center reveal--translate">
        <?php echo $baHero['ba-hero-text']; ?>
    </h2>
</section>
<?php endif; ?>
<?php
$baList = get_field('ba-item');

if($baList): ?>
<section class="ba-cards flex flex-col items-center gap-12 mb-48">
    <?php
    $baListItems = $baList['ba-item-card'];
    foreach($baListItems as $baListItem): ?>
    <div class="ba-cards__item flex flex-col p-8 lg:p-16 gap-8 lg:w-10/12 reveal--fade">
        <div class="flex flex-col gap-4">
            <div class="inline-flex items-center gap-4">
                <div class="wrap-icon wrap-icon--48 inline-flex items-center justify-center">
                    <img src="<?php echo THEME_IMG_PATH; ?>/asterix.svg" alt="Asterix icone"/>
                </div>
                <p class="heading--3 text--white">
                    <?php echo $baListItem['ba-item-card-service']; ?>
                </p>
            </div>
            <p class="body--l body--400 text--white">
                <?php echo $baListItem['ba-item-card-text']; ?>
            </p>
        </div>
        <div class="flex gap-3 lg:gap-6 flex-row">
            <div class="flex flex-col gap-4 justify-center w-full">
                <div class="ba-cards__item__photos lg:h-80 h-56 w-full overflow-hidden">
                    <img class="object-cover object-center w-full h-full" src="<?php echo $baListItem['ba-item-image-card-before']['url']; ?>" alt="<?php echo $baListItem['ba-item-image-card-before']['alt']; ?>">
                </div>
                <p class="label-m text--white text-center">
                    Avant
                </p>
            </div>
            <div class="flex flex-col gap-4 justify-center w-full">
            <div class="ba-cards__item__photos lg:h-80 h-56 w-full overflow-hidden">
                <img class="object-cover object-center w-full h-full" src="<?php echo $baListItem['ba-item-image-card-after']['url']; ?>" alt="<?php echo $baListItem['ba-item-image-card-after']['alt']; ?>">
            </div>
            <p class="label-m text--white text-center">
                    Après
                </p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>