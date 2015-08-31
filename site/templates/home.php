<?php snippet('head') ?>
<?php snippet('header') ?>
<?php snippet('menu') ?>

<main class="main">

    <h1><?php echo $page->title()->html() ?></h1>

    <p><?php echo $page->text()->kirbytext() ?></p>

    <?php snippet('posts') ?>

</main>

<?php snippet('footer') ?>