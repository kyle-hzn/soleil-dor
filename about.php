<?php
/*
* Template name: À propos
*/
?>

<?php get_header(); ?>
<?php include get_theme_file_path( 'mobile-nav.php' ); ?>

<?php
$aboutIntro = get_field('about-intro');

if($aboutIntro): ?>

<section class="about-intro flex flex-col items-center pt-32 mb-20">
    <div class="lg:w-6/12 flex flex-col items-center">
        <div class="hero-bg h-screen w-screen absolute left-2/4 -translate-x-2/4 right-0 top-0 -z-10">
            <img class="object-cover h-full w-full" src="<?php echo THEME_IMG_PATH; ?>/background-wave.jpg" alt="Background"/>
        </div>
        <h1 class="heading--1 text--white text-center mb-6 lg:w-1/2 reveal--translate">
            <?php echo $aboutIntro['about-intro-heading']; ?>
        </h1>
        <div class="flex flex-wrap items-center justify-center gap-2 mb-12 reveal--fade">
            <div class="wrap-icon wrap-icon--32 inline-flex items-center justify-center">
                <img src="<?php echo THEME_IMG_PATH; ?>/asterix.svg" alt="Asterix icone"/>
            </div>
            <h2 class="subheading--1 subheading--1--s text--white text-center">
                <?php echo $aboutIntro['about-intro-subheading']; ?>
            </h2>
        </div>
        <div class="about-intro__image h-screen w-80 mb-16 reveal--fade">
            <img class="object-cover object-center w-full h-full" src="<?php echo $aboutIntro['about-intro-image']['url']; ?>" alt="<?php echo $aboutIntro['about-intro-image']['alt']; ?>">
        </div>
        <div class="heading--4 text--white text-center reveal--fade">
            <?php echo $aboutIntro['about-intro-text']; ?>
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$aboutStory = get_field('about-story');

if($aboutStory): ?>

<section class="about-story mb-20">
    <div class="about-story__images flex flex-col lg:flex-row gap-4 p-8 mb-10 reveal--translate">
        <?php
        $aboutStoryListItems = $aboutStory['about-story-images'];
        foreach($aboutStoryListItems as $aboutStoryListItem): ?>
        <div class="about-story__images__card aspect-square w-full overflow-hidden reveal--fade">
            <img class="object-cover object-center w-full h-full" src="<?php echo $aboutStoryListItem['about-story-images-item']['url']; ?>" alt="<?php echo $aboutStoryListItem['about-story-images-item']['alt']; ?>">
        </div>
        <?php endforeach; ?>
    </div>
    <div class="flex flex-col lg:flex-row lg:gap-8 gap-4 lg:w-10/12 lg:mx-auto h-full reveal--fade">
        <div class="about-story__left lg:w-6/12 h-auto justify-between flex flex-col">
            <h3 class="heading--3 text--white mb-4 lg:mb-16">
                <?php echo $aboutStory['about-story-heading']; ?>
            </h3>
            <div class="about-story__left__image w-full aspect-video">
                <img class="object-cover object-center w-full h-full" src="<?php echo $aboutStory['about-story-image']['url']; ?>" alt="<?php echo $aboutStory['about-story-image']['alt']; ?>">
            </div>
        </div>
        <div class="about-story__right lg:w-6/12 flex flex-col gap-8">
            <div class="body--l body--l--400 text--white">
                <?php echo $aboutStory['about-story-text']; ?>
            </div>
            <img class="object-contain max-w-sm h-48" src="<?php echo $aboutStory['about-story-signature']['url']; ?>" alt="<?php echo $aboutStory['about-story-signature']['alt']; ?>">
        </div>
    </div>
</section>

<?php endif; ?>

<?php
$aboutPartners = get_field('about-partners');

if($aboutPartners): ?>

<section class="about-partners mb-48 reveal--fade">
    <div class="flex flex-col lg:flex-row gap-8 h-full justify-between lg:w-10/12 lg:mx-auto">
        <div class="about-partners__left lg:w-6/12">
            <h3 class="heading--3 text--white">
                <?php echo $aboutPartners['about-partners-heading']; ?>
            </h3>
        </div>
        <div class="about-partners__right lg:w-6/12 grid gap-4 grid-cols-1 lg:grid-cols-2">
        <?php
            $aboutPartnersItems = $aboutPartners['about-partners-list'];
            foreach($aboutPartnersItems as $aboutPartnersItem): ?>
            <div class="about-partners__right__card w-full p-8 inline-flex items-center justify-center">
                <img class="w-full object-cover object-center max-w-xs" src="<?php echo $aboutPartnersItem['about-partners-list-image']['url']; ?>" alt="<?php echo $aboutPartnersItem['about-partners-list-image']['alt']; ?>">
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php endif; ?>

<?php get_footer(); ?>