<?php
/*
* Template name: Contact
*/
?>

<?php get_header(); ?>
<?php include get_theme_file_path( 'mobile-nav.php' ); ?>

<?php
$contactWrap = get_field('contact-wrap');

if($contactWrap): ?>
<section class="contact-wrap flex flex-col lg:flex-row gap-12 pt-32 lg:h-screen mb-32">
    <div class="contact-wrap__left p-8 lg:p-16 lg:w-6/12 min-h-full flex flex-col justify-between">
        <div class="flex flex-col gap-4 mb-4">
            <h1 class="heading--3 text--white">
                <?php echo $contactWrap['contact-wrap-heading']; ?>
            </h1>
            <p class="body--l body--l--400 text--white">
                <?php echo $contactWrap['contact-wrap-subheading']; ?>
            </p>
            <div class="inline-flex items-center gap-2">
                <div class="wrap-icon wrap-icon--48 inline-flex items-center justify-center">
                    <img src="<?php echo THEME_IMG_PATH; ?>/phone-dial.svg" alt="Téléphone icone"/>
                </div>
                <a href="<?php echo $contactWrap['contact-wrap-phone']['url']; ?>" class="subheading--1 subheading--1--s text--white">
                    <?php echo esc_html( $contactWrap['contact-wrap-phone']['title'] ); ?>
                </a>
            </div>
        </div>
        <section id="splide2" class="splide contact-wrap__reviews">
            <div class="splide__track">
		        <ul class="splide__list">
                    <?php
                    $contactReviews = $contactWrap['contact-wrap-reviews'];
                    foreach($contactReviews as $contactReview): ?>
                    <li class="splide__slide contact-wrap__review flex flex-col gap-2 p-8">
                        <img class="h-6 w-6" src="<?php echo THEME_IMG_PATH; ?>/quote.svg" alt="Commentaire icone"/>
                        <p class="body--m body--m--500 text--white">
                            <?php echo $contactReview["contact-wrap-reviews-author"]; ?>
                        </p>
                        <p class="body--s body--s--400 text--white">
                            <?php echo $contactReview["contact-wrap-reviews-text"]; ?>
                        </p>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </section>
    </div>
    <div class="contact-wrap__right lg:w-6/12 flex flex-col gap-4">
        <p class="subheading--1 subheading--1--m text--white">
            <?php echo $contactWrap['contact-wrap-form-heading']; ?>
        </p>
        <div class="contact-wrap__warning flex gap-3 p-3 items-center">
            <div class="wrap-icon wrap-icon--48 inline-flex items-center justify-center">
                <img src="<?php echo THEME_IMG_PATH; ?>/warning.svg" alt="Warning icone"/>
            </div>
            <p class="body--l body--l--500 text--white">
                <?php echo $contactWrap['contact-wrap-form-warning']; ?>
            </p>
        </div>
        <?php echo do_shortcode( '[fluentform id="3"]' ); ?>
    </div>
</section>
<?php endif; ?>

<?php get_footer(); ?>