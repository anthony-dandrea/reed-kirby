<?php $articles = page('posts')->children()->visible()->paginate(5) ?>

<?php foreach($articles as $article): ?>

<article class="article">
  <h3><?php echo html($article->title()) ?></h3>
  <p><?php echo $article->text()->kirbytext() ?></p>
</article>

<?php endforeach ?>

<?php if($articles->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($articles->pagination()->hasNextPage()): ?>
    <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>" data-ga-event="olderposts" data-ga-action="btnclick" data-ga-category="paginate">
      <i class="fa fa-chevron-left"></i> older posts
    </a>
  <?php endif ?>

  <?php if($articles->pagination()->hasPrevPage()): ?>
    <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>" data-ga-event="newerposts" data-ga-action="btnclick" data-ga-category="paginate">
      newer posts <i class="fa fa-chevron-right"></i>
    </a>
  <?php endif ?>

</nav>
<?php endif ?>
