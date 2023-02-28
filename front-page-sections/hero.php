<?php 
 $heading = get_sub_field('naglowek');
 $description = get_sub_field('opis');
 $cta_link = get_sub_field('przycisk_link');
 $cta_text = get_sub_field('przycisk_tekst');
 $phone = get_sub_field('telefon');
 $image = get_sub_field('obrazek');
 $is_top = get_sub_field('is_top');

 $is_top_class = "hero--absolute";

if($is_top == 1):
    $is_top_class = "hero--absolute";
else: 
    $is_top_class = "";
endif;
?>

<section class="hero <?php echo $is_top_class ?>">
    <div class="container">
        <div class="hero__container">
            <div class="hero__text">
                <h1 class="hero__text-header"><?php echo $heading; ?></h1>
                <p class="hero__text-description"><?php echo $description; ?></p>

                <div class="hero__text--contact">
                    <?php if ($cta_link && $cta_text): ?>
                    <a href="<?php echo $cta_link; ?>" class="btn btn--primary"><?php echo $cta_text; ?></a>
                    <?php endif;?>
                    <?php if ($phone): ?>
                    <a href="tel:<?php echo str_replace(' ', '', $phone); ?>"
                        class="hero__phone-number"><?php echo $phone; ?></a>
                    <?php endif;?>
                </div>
            </div>
            <div>
                <?php echo wp_get_attachment_image($image, "full", "", array("class" => "hero__image")); ?>
            </div>
        </div>
    </div>
</section>