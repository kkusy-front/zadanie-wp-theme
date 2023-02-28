<?php 
 $heading = get_sub_field('tytul');
 $elements = get_sub_field('elements');
?>

<section class="helper">
    <div class="container">
        <div class="helper__container">
            <div class="helper__heading">
                <?php
                    echo $heading;
                ?>
            </div>
            <ul class="helper__elements">
                <?php
                    foreach ($elements as $element) {
                ?>
                <li class="helper__element">
                    <?php echo wp_get_attachment_image($element['obrazek'], "full", "", array("class" => "helper__element-image")); ?>
                    <p class="helper__element-title"><?php echo $element['tytul'] ?></p>
                    <p class="helper__element-description"><?php echo $element['opis'] ?></p>
                </li>
                <?php
                }?>
            </ul>
            </ul>
        </div>
    </div>
</section>