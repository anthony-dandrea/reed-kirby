<?php snippet('head') ?>
<nav class="medium-4 large-3 columns">
    <?php snippet('menu') ?>
</nav>
<main class="main dealers small-12 medium-8 large-9 columns">
    <h1><?php echo $page->title()->html() ?></h1>
    <div class="row">
        <?php echo $page->text()->kirbytext() ?>
    </div>
</main>
<?php snippet('footer') ?>
