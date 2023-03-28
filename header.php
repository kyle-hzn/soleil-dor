<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<?php wp_head(); ?>
</head>

<body class="container mx-auto px-4 lg:px-0 overflow-x-hidden">
<?php wp_body_open(); ?>

<header>
	<!-- Desktop menu -->
	<div class="header header--desktop hidden lg:block">
		<div class="container mx-auto px-0">
				<div class="lg:flex justify-between items-center">
				<a class="header__logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img class="header__logo__img" src="<?php echo THEME_IMG_PATH; ?>/SD-logo.svg" alt="Logo Soleil d'Or"/>
				</a>
				<div class="header__menu inline-flex items-center justify-center">
					<a href="#" class="body--s body--500 header__menu__link text--black text--link mr-6">
						Bronzage
					</a>
					<div class="header__ddlink1 mr-6 flex">
						<div class="inline-flex align-center body--s body--500 header__menu__link text--black text--link">
							Homme
							<img class="header__menu__link__icon ml-1" src="<?php echo THEME_IMG_PATH; ?>/chevron-down.svg" alt="Flèche bas"/>
						</div>
						<!-- Dropdown menu 1 -->
						<div class="header-dropdown header-dropdown--1 header-dropdown--inactive inline-flex flex-col">
							<a href="#" class="header-dropdown__link inline-flex mb-1">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo THEME_IMG_PATH; ?>/pin.svg" alt="Localisaion icone"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										Épilation pour homme
									</p>
									<p class="body--m body--m--400 text--black-light">
										Épilation du visage et du corps
									</p>
								</div>
							</a>
							<a href="#" class="header-dropdown__link inline-flex">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo THEME_IMG_PATH; ?>/pin.svg" alt="Localisaion icone"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										Soins pour homme
									</p>
									<p class="body--m body--m--400 text--black-light">
										Soins et modelage du visage et du corps
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
							<a href="#" class="header-dropdown__link inline-flex mb-1">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo THEME_IMG_PATH; ?>/pin.svg" alt="Localisaion icone"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										Épilation pour femme
									</p>
									<p class="body--m body--m--400 text--black-light">
										Épilation du visage et du corps
									</p>
								</div>
							</a>
							<a href="#" class="header-dropdown__link inline-flex">
								<div class="header-dropdown__link__icon wrap-icon wrap-icon--48 inline-flex items-center justify-center mr-2">
									<img src="<?php echo THEME_IMG_PATH; ?>/pin.svg" alt="Localisaion icone"/>
								</div>
								<div class="header-dropdown__link__text">
									<p class="body--l body--l--500 text--black">
										Soins pour femme
									</p>
									<p class="body--m body--m--400 text--black-light">
										Soins et modelage du visage et du corps
									</p>
								</div>
							</a>
						</div>
					</div>
					<a href="#" class="body--s body--500 header__menu__link text--black text--link mr-6">
						À propos
					</a>
					<a href="#" class="body--s body--500 header__menu__link text--black text--link">
						Les avant / après
					</a>
				</div>
				<a href="#" class="btn--primary header__menu__btn">
					<img class="btn--primary__icon mr-2" src="<?php echo THEME_IMG_PATH; ?>/phone-dial.svg" alt="Téléphoner"/>
					Prendre rendez-vous
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

<main class="app-main" role="main">
