<a class="logo" href="<?php echo url() ?>">
    <img src="<?php echo url('assets/images/reedlogo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
</a>

<a href="#" class="menu-btn" data-menu-btn>Menu</a>

<ul class="sidenav" data-menu>
  <?php foreach($pages->visible() as $p): ?>
  <li>
    <a <?php e($p->isOpen(), ' class="active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title()->html() ?></a>
  </li>
  <?php endforeach ?>
</ul>
