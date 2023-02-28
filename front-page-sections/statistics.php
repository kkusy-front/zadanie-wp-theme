<?php 
 $cta_text = get_sub_field('przycisk_tekst');
 $cta_link = get_sub_field('przycisk_adres');
 $elements = get_sub_field('statystyki');
?>

<div class="statistics">
    <div class="container">
        <div class="statistics__container">
            <ul class="statistics__numbers">
                <?php
                    foreach ($elements as $element) {
                ?>
                <li class="statistics__element"><span class="h3"><?php echo $element['liczba']; ?> </span>
                    <p class="statistics__element-description"><?php echo $element['opis']; ?></p>
                </li>
                <?php
                }?>
            </ul>
            <div class="statistics__action">
                <a href="<?php echo $cta_link; ?>"
                    class="btn btn--primary"><?php echo $cta_text; ?></a>
            </div>
        </div>
    </div>
</div>