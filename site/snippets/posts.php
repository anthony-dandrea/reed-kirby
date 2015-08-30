<h1>POSTS</h1>

<?php $articles = page('posts')->children()->visible()->flip()->paginate(10) ?>

<?php foreach($articles as $article): ?>

<p><?php echo $articles->pagination()->pages() ?> Pages</p>

<article>
  <h1><?php echo html($article->title()) ?></h1>
  <p><?php echo $article->text()->kirbytext() ?></p>
</article>

<?php endforeach ?>

<?php if($articles->pagination()->hasPages()): ?>
<nav class="pagination">

  <?php if($articles->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
  <?php endif ?>

  <?php if($articles->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>

<hr><hr>



