<?php

 /**
 * The template for displaying pages.
 */
?>
<?php get_header(); ?>



<?php
// check if the flexible content field has rows of data
if( have_rows( 'home' ) ):

    // loop through the rows of data
    while ( have_rows( 'home' ) ) : the_row();

        if ( get_row_layout() == 'hero' ) :

            get_template_part( 'front-page-sections/hero' );

        elseif ( get_row_layout() == 'possibilities' ) :

            get_template_part( 'front-page-sections/possibilities' );

        elseif ( get_row_layout() == 'statistics' ) :

            get_template_part( 'front-page-sections/statistics' );

        elseif ( get_row_layout() == 'helper' ) :

            get_template_part( 'front-page-sections/helper' );

        elseif ( get_row_layout() == 'blog' ) :

            get_template_part( 'front-page-sections/blog' );

        endif;

    endwhile;
endif;
?>

<?php get_footer(); ?>