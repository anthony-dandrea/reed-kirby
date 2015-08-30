<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8" />
  <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">

  <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
  <link rel="icon" href="<?php echo url('assets/images/favicon.ico') ?>" type="image/x-icon" />

  <meta content="Reed Wheels" name="author">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
  <link href='//fonts.googleapis.com/css?family=Roboto:400,300,400italic,500,700,900,100' rel='stylesheet' type='text/css'>

  <?php echo css('assets/css/site.min.css') ?>

</head>
<body>