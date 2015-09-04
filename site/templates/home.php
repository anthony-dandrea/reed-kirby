<?php snippet('head') ?>
<nav class="hide-for-small-only medium-4 large-3 columns">
    <?php snippet('menu') ?>
</nav>

<main class="main small-12 medium-8 large-9 columns">

    <h1><?php echo $page->title()->html() ?></h1>

    <p><?php echo $page->text()->kirbytext() ?></p>

    <?php snippet('posts') ?>

</main>

<?php snippet('footer') ?>