<?php
$headerMenu = get_field('header-menu', 'option');

if($headerMenu): ?>
<section class="mobile-menu mobile-menu--inactive lg:hidden w-full h-full px-4">
    <div class="mobile-menu__links flex flex-col justify-center h-full">
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-tan']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-tan']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-men-2']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-men-2']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-men-1']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-men-1']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-women-2']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-women-2']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-women-1']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-women-1']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-about']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-about']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-ba']['url'] ); ?>" class="heading--4 text--black mb-8">
            <?php echo esc_html( $headerMenu['header-menu-link-ba']['title'] ); ?>
        </a>
        <a href="<?php echo esc_url( $headerMenu['header-menu-link-contact']['url'] ); ?>" class="btn--primary header__menu__btn">
			<img class="btn--primary__icon mr-2" src="<?php echo THEME_IMG_PATH; ?>/phone-dial.svg" alt="Téléphoner"/>
			<?php echo esc_html( $headerMenu['header-menu-link-contact']['title'] ); ?>
		</a>
    </div>
</section>
<?php endif; ?>