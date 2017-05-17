<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="<?php echo get_stylesheet_uri() ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<div class="site-branding">
                <img src="http://lorempixel.com/250/250/people" alt="Ma tête">
                <div class="infos">
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                    <?php
                    $description = get_bloginfo( 'description', 'display' );
                    if ( $description || is_customize_preview() ) : ?>
                    <h2 class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></h2>
                    <?php
                    endif; ?>
                    <ul class="personal">
                        <li><span class="label">Age :</span> 26</li>
                        <li><span class="label">Address :</span> Mende, 48K</li>
                        <li><span class="label">E-Mail :</span> remy.d@example.com</li>
                        <li><span class="label">Phone :</span> +33 4 56 78 91 11</li>
                    </ul>
                </div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->

	<div id="content" class="site-content">
