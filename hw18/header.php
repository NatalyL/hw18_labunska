<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- site-header -->
<header class="site-header clearfix">
    <div class="container">
        <h1><a href="<?php echo home_url(); ?>"><img
                    src="<?php bloginfo('template_url'); ?>/images/logo-header.png"></a></h1>

        <nav class="site-nav clearfix">

            <?php

            $args = array(
                'theme_location' => 'primary'
            );

            ?>
            <?php wp_nav_menu($args); ?>
        </nav>
    </div>
</header>
<!-- /site-header -->
		
