<?php 
 $heading = get_sub_field('tytul');
 $elements = get_sub_field('cechy');
 $image = get_sub_field('obrazek');
?>
<section id="possibilities" class="possibilities">
    <div class="container">
        <div class="possibilities__container">
            <div>
                <?php echo wp_get_attachment_image($image, "full", "", array("class" => "possibilities__image")); ?>
            </div>
            <div class="possibilities__text">
                <h2 class="possibilities__text-header"><?php echo $heading; ?></h2>
                <ul class="possibilities__elements">
                    <?php
                        foreach ($elements as $element) {
                    ?>
                    <li class="possibilities__element"><img
                            src="<?php bloginfo('template_url');?>/assets/image/okey.svg" alt="">
                        <?php echo $element['tytul'] ?>
                    </li>
                    <?php
                    }?>
                </ul>
            </div>
        </div>
    </div>
</section>