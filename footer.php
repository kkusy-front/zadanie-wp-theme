<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package zadanie
 */

?>

<footer id="colophon" class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__top-left">
                <div class="footer__logo">
                    <img class="header__logo" alt="Mobilizacja biznesu logo"
                        src="<?php echo esc_url(wp_get_attachment_url(get_theme_mod('custom_logo'))); ?>" />
                </div>
                <div class="footer__description">
                    <p>From year to year we strive to invent the most innovative technology that is used by both small
                        enterprises and space enterprises.</p>
                </div>
            </div>
            <div class="footer__top-right">
                <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-2',

                                    'menu_id' => 'footer-menu',
                                    'menu_class' => 'footer__list',
                                )
                            );
                        ?>
            </div>
        </div>
        <div class="footer__bottom">
            <div class="footer__bottom-left">
                <span>&#x40; Mobilizacja Biznesu 2023</span>
                <a href="#">Polityka prywatności</a>
            </div>
            <div class="footer__bottom-right">
                <span>Projekt strony internetowej stworzony przez Agencję Interaktywną Wzór</span>
            </div>
        </div>
    </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>