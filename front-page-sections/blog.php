<?php 
 $heading = get_sub_field('tytul');
 $elements = get_sub_field('elements');
 $featured_posts = get_sub_field('artykuly');
 $cta_text = get_sub_field('przycisk_tekst');
 $cta_link = get_sub_field('przycisk_link');
?>

<section class="blog">
    <div class="container">
        <div class="blog__container">
            <div class="blog__header">
                <h2 class="blog__header-h2"><?php echo $heading; ?></h2>

                <?php if($cta_link && $cta_text): ?>
                <div class="blog__header-link"> 
                    <a href="<?php echo $cta_link; ?>"
                        class="btn btn--primary"><?php echo $cta_text; ?></a>
                    </div>
                <?php endif; ?>

            </div>
            <div class="blog__posts">
                <?php
                if( $featured_posts ): ?>
                <?php foreach( $featured_posts as $post ): 

                    // Setup this post for WP functions (variable must be named $post).
                    setup_postdata($post); ?>

                <div class="blog__post">
                    <?php $id_image = get_post_thumbnail_id(); ?>
                    <?php echo wp_get_attachment_image($id_image, "full", "", array("class" => "blog__image")); ?>
                    <h3 class="blog__post-heading"><?php the_title(); ?></h3>
                    <div class="blog__post-bottom">
                        <span class="blog__post-date"><?php echo get_the_date("j F Y") ?></span>
                        <a class="blog__post-link" href="<?php the_permalink(); ?>">Czytaj <img
                            src="<?php bloginfo('template_url');?>/assets/image/arrow.svg"
                            alt=""></a>
                    </div>

                </div>
                <?php endforeach; ?>
                <?php 
                wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>