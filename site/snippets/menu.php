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
  <li>
    <a href="mailto:info@reedwheels.com">Contact</a>
  </li>
</ul>

<div class="row social-icons">
  <a class="columns small-3" href="//www.facebook.com/pages/REED-Wheel-Co/346632392084633" target="_blank">
    <i class="fa fa-facebook-official"></i>
  </a>
  <a class="columns small-3" href="//www.instagram.com/reedwheels/" target="_blank">
    <i class="fa fa-instagram"></i>
  </a>
  <a class="columns small-3" href="//vimeo.com/user13822894" target="_blank">
    <i class="fa fa-vimeo-square"></i>
  </a>
  <a class="columns small-3" href="//www.youtube.com/user/philthy1009" target="_blank">
    <i class="fa fa-youtube-square"></i>
  </a>
</div>

<div class="center-align">
  <div data-cart class="cart">
    <i class="fa fa-shopping-cart"></i>
    &nbsp;$<span data-cart-count></span>
  </div>
</div>
