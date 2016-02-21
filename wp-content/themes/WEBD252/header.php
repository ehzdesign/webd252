<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">


  <?php //change title of page based on content ?>

  <?php if(is_front_page()):?>

    <title><?php bloginfo(name) ?></title>

  <?php elseif(is_archive()): ?>

    <title><?php the_archive_title();  ?></title>

  <?php else: ?>

    <title><?php the_title() ?></title>

  <?php endif ?>


  <?php wp_head(); ?>

</head>
<body>

