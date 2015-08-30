<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('menu') ?>


    <h1><?php echo $page->title()->html() ?></h1>

    <p><?php echo $page->text()->kirbytext() ?></p>

    <hr>

    <?php snippet('posts') ?>



<?php snippet('footer') ?>