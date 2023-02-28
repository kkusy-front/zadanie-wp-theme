<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zadanie
 */

?>
<!doctype html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="icon" href="<?php bloginfo('template_url');?>/assets/image/favicon.jpg" sizes="32x32">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#possibilities"><?php esc_html_e('Skip to content', 'zadanie');?></a>

        <header id="masthead" class="header">
            <div class="header__container">
                <div>
                    <img class="header__logo" alt="Mobilizacja biznesu logo"
                        src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>">
                </div><!-- .site-branding -->

                <nav id="site-navigation" class="header__nav">
                    <button class="header__toggle" aria-controls="primary-menu" aria-expanded="false">
                        <span class="header__toggle-label">Uwórz/zamknij menu</span>
                        <span class="header__toggle-burger"></span></button>
                    <div class="header__menu">
                        <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',

                                    'menu_id' => 'primary-menu',
                                    'menu_class' => 'header__list',
                                )
                            );
                        ?>
                    </div>

                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->