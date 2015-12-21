<?php snippet('head') ?>
<nav class="medium-4 large-3 columns">
    <?php snippet('menu') ?>
</nav>
<main class="main small-12 medium-8 large-9 columns">
    <h1><?php echo $page->text()->kirbytext() ?></h1>
    <?php snippet('posts') ?>
</main>
<?php snippet('footer') ?>
