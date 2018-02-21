<?php

kirbytext::$tags['rawhtml'] = array(
  'html' => function($tag) {
    return '<div style="max-width:100%;">' . $tag->attr('rawhtml') . '</div>';
  }
);
