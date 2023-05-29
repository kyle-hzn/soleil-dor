</main>

<footer class="footer flex flex-col lg:flex-row justify-between w-full gap-8 lg:gap-0 transition--fade">

<?php
$footerMenuLeft = get_field('footer-left', 'option');

if($footerMenuLeft): ?>

    <div class="footer__left flex flex-col gap-4 lg:gap-10">
        <a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
            <img class="header__logo__img" src="<?php echo $footerMenuLeft['footer-left-logo']['url']; ?>" alt="<?php echo $footerMenuLeft['footer-left-logo']['alt']; ?>"/>
        </a>
        <div class="flex flex-col gap-4">
            <div class="inline-flex items-center gap-2">
                <img src="<?php echo THEME_IMG_PATH; ?>/clock-sm.svg" alt="Horaires icone"/>
                <p class="label--m text--black">
                    <?php echo $footerMenuLeft['footer-left-time']; ?>
                </p>
            </div>
            <div class="inline-flex items-center gap-2">
                <img src="<?php echo THEME_IMG_PATH; ?>/pin-sm.svg" alt="Localisaion icone"/>
                <p class="label--m text--black">
                    40 Rue de Pologne<br>Saint-Germain-en-Laye 78100
                </p>
            </div>
            <div class="inline-flex items-center gap-2">
                <img src="<?php echo THEME_IMG_PATH; ?>/phone-sm.svg" alt="Téléphone icone"/>
                <a href="<?php echo esc_url( $footerMenuLeft['footer-left-phone']['url'] ); ?>">
                    <?php echo esc_html( $footerMenuLeft['footer-left-phone']['title'] ); ?>
                </a>
            </div>
        </div>
        <div class="flex flex-col gap-4">
            <p class="label--m text--black">
                © Soleil d’Or
            </p>
            <a class="label--m text--black text--link" href="<?php echo esc_url( $footerMenuLeft['footer-left-legal']['url'] ); ?>">
                <?php echo esc_html( $footerMenuLeft['footer-left-legal']['title'] ); ?>
            </a>
        </div>
    </div>

<?php endif; ?>
<?php
$footerMenuRight = get_field('footer-right', 'option');

if($footerMenuRight): ?>

    <div class="footer__right flex flex-col lg:flex-row lg:gap-16 gap-8">
    <?php
        $footerMenuRightItems = $footerMenuRight['footer-right-links'];
        foreach($footerMenuRightItems as $footerMenuRightItem): ?>
        
        <div class="footer__right__linkswrap flex flex-col gap-6">
            <p class="subheading--1 subheading--1--400 text--black">
                <?php echo $footerMenuRightItem['footer-right-links-heading']; ?>
            </p>
            <?php
            $footerMenuRightItemLinks = $footerMenuRightItem['footer-right-links-list'];
            foreach($footerMenuRightItemLinks as $footerMenuRightItemLink): ?>
            <a target="<?php echo esc_attr ($footerMenuRightItemLink['footer-right-links-list-item']['target'] ? $footerMenuRightItemLink['footer-right-links-list-item']['target'] : '_self'); ?>" class="label--m text--black text--link" href="<?php echo esc_url( $footerMenuRightItemLink['footer-right-links-list-item']['url'] ); ?>">
                <?php echo esc_html( $footerMenuRightItemLink['footer-right-links-list-item']['title'] ); ?>
            </a>
            <?php endforeach; ?>
        </div>

    <?php endforeach; ?>
    </div>
<?php endif; ?>
</footer>


<?php wp_footer(); ?>
</body>
</html>
