<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body class="">
<?php wp_body_open(); ?>

<?php
$headerMenu = get_field('header-menu', 'option');

if($headerMenu): ?>
<header>
	<!-- Desktop menu -->
	<div class="header header--desktop hidden lg:block">
		<div class="container mx-auto px-0">
				<div class="lg:flex justify-between items-center">
				<a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="header__logo__img" src="<?php echo $headerMenu['header-menu-logo']['url']; ?>" alt="<?php echo $headerMenu['header-menu-logo']['alt']; ?>"/>
				</a>
				<div class="header__menu inline-flex items-center justify-center">
					<a href="<?php echo esc_url( $headerMenu['header-menu-link-tan']['url'] ); ?>" class="body--s body--500 header__menu__link text--black text--link mr-6">
						<?php echo esc_html( $headerMenu['header-menu-link-tan']['title'] ); ?>
					</a>
					<div class="header__ddlink1 mr-6 flex">
						<div class="inline-flex align-center body--s body--500 header__menu__link text--black text--link">
							Homme
							<img class="header__menu__link__icon ml-1" src="<?php echo THEME_IMG_PATH; ?>/chevron-down.svg" alt="Flèche bas"/>
						</div>
						<!-- Dropdown menu 1 -->
						<div class="header-dropdown header-dropdown--1 header-dropdown--inactive inline-flex flex-col">
							<a href="<?php echo esc_url( $headerMenu['header-menu-link-men-1']['url'] ); ?>" class="header-dropdown__link inline-flex">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo $headerMenu['header-menu-icon-men-1']['url']; ?>" alt="<?php echo $headerMenu['header-menu-icon-men-1']['alt']; ?>"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										<?php echo esc_html( $headerMenu['header-menu-link-men-1']['title'] ); ?>
									</p>
									<p class="body--m body--m--400 text--black-light">
										<?php echo $headerMenu['header-menu-text-men-1']; ?>
									</p>
								</div>
							</a>
							<a href="<?php echo esc_url( $headerMenu['header-menu-link-men-2']['url'] ); ?>" class="header-dropdown__link inline-flex mb-1">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo $headerMenu['header-menu-icon-men-2']['url']; ?>" alt="<?php echo $headerMenu['header-menu-icon-men-2']['alt']; ?>"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										<?php echo esc_html( $headerMenu['header-menu-link-men-2']['title'] ); ?>
									</p>
									<p class="body--m body--m--400 text--black-light">
										<?php echo $headerMenu['header-menu-text-men-2']; ?>
									</p>
								</div>
							</a>
						</div>
					</div>
					<div class="header__ddlink2 mr-6 flex">
						<div class="inline-flex align-center body--s body--500 header__menu__link text--black text--link">
							Femme
							<img class="header__menu__link__icon ml-1" src="<?php echo THEME_IMG_PATH; ?>/chevron-down.svg" alt="Flèche bas"/>
						</div>
						<!-- Dropdown menu 2 -->
						<div class="header-dropdown header-dropdown--2 header-dropdown--inactive inline-flex flex-col">
							<a href="<?php echo esc_url( $headerMenu['header-menu-link-women-1']['url'] ); ?>" class="header-dropdown__link inline-flex">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo $headerMenu['header-menu-icon-women-1']['url']; ?>" alt="<?php echo $headerMenu['header-menu-icon-women-1']['alt']; ?>"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										<?php echo esc_html( $headerMenu['header-menu-link-women-1']['title'] ); ?>
									</p>
									<p class="body--m body--m--400 text--black-light">
										<?php echo $headerMenu['header-menu-text-women-1']; ?>
									</p>
								</div>
							</a>
							<a href="<?php echo esc_url( $headerMenu['header-menu-link-women-2']['url'] ); ?>" class="header-dropdown__link inline-flex mb-1">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo $headerMenu['header-menu-icon-women-2']['url']; ?>" alt="<?php echo $headerMenu['header-menu-icon-women-2']['alt']; ?>"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										<?php echo esc_html( $headerMenu['header-menu-link-women-2']['title'] ); ?>
									</p>
									<p class="body--m body--m--400 text--black-light">
										<?php echo $headerMenu['header-menu-text-women-2']; ?>
									</p>
								</div>
							</a>
						</div>
					</div>
					<a href="<?php echo esc_url( $headerMenu['header-menu-link-about']['url'] ); ?>" class="body--s body--500 header__menu__link text--black text--link mr-6">
						<?php echo esc_html( $headerMenu['header-menu-link-about']['title'] ); ?>
					</a>
					<a href="<?php echo esc_url( $headerMenu['header-menu-link-ba']['url'] ); ?>" class="body--s body--500 header__menu__link text--black text--link">
						<?php echo esc_html( $headerMenu['header-menu-link-ba']['title'] ); ?>
					</a>
				</div>
				<a href="<?php echo esc_url( $headerMenu['header-menu-link-contact']['url'] ); ?>" class="btn--primary header__menu__btn">
					<img class="btn--primary__icon mr-2" src="<?php echo THEME_IMG_PATH; ?>/phone-dial.svg" alt="Téléphoner"/>
					<?php echo esc_html( $headerMenu['header-menu-link-contact']['title'] ); ?>
				</a>
			</div>
		</div>
	</div>
	
	<!-- Mobile menu -->
	<div class="header header--mobile lg:hidden">
		<div class="container mx-auto px-4">
			<div class="flex justify-between items-center">
				<a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="header__logo__img" src="<?php echo THEME_IMG_PATH; ?>/SD-logo.svg" alt="Logo Soleil d'Or"/>
				</a>
				<div class="header__burgerbox inline-flex items-center justify-center">
					<div class="header__burger"></div>
				</div>
			</div>
		</div>
	</div>
</header>
<?php endif; ?>

<main class="app-main container mx-auto px-4 lg:px-0 overflow-x-hidden" role="main">
